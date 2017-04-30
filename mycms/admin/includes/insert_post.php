<!DOCTYPE html>

<html>
<head>

<title>admin</title>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>


 
  
<style type="text/css">

table,td,tr{padding:0px ; margin:0px}

</style>
</head>


   <body>
     <?php

include("includes/database.php");
if(isset($_GET['edit_post']))
{
	$edit_id=$_GET['edit_post'];
	$select_post="select * from categories'";
	$run_query=mysqli_query($select_post);
	while($row_post=mysqli_fetch_array($run_query))
		
		{
			$post_id=$row_post['post_id'];
			$title=$row_post['post_title'];
			$post_cat=$row_post['category_id'];
			$author=$row_post['post_author'];
			$keywords=$row_post['post_keywords'];
			$image=$row_post['post_image'];
			$content=$row_post['post_content'];
		}
	
}
?>
<form action="index.php?insert_post" method="post" enctype="multipart/form-data">
<table width="1000" align="center" border="0" bgcolor="#9999999">
  <tr bgcolor="#ff99ff">
<td colspan="6" align="center"><h1>Insert New  Post :</h1> </td>

 </tr>


 <tr>
<td align="right"bgcolor="#ff99ff"><strong>Post Title:</strong></td>
<td><input type="text" name="post_title" size="60"/> </td>
 </tr>

 <tr>
<td align="right" bgcolor="#ff99ff"><strong>Post Category :</strong></td>
<td>
<select name="cat">
<option>Select a Category </option>



<?php
include("includes/database.php");

$get_cats="select * from categories";
$run_cats=mysqli_query($con,$get_cats);
while($cats_row=mysqli_fetch_array($run_cats))
{
	
	$cat_id=$cats_row['cat_id'];
	$cat_title=$cats_row['cat_title'];
	
	echo "<option value='$cat_id'>$cat_title </option>";
	
	}



?>
</select>
 </td>
 </tr>
 

<tr>
<td align="right" bgcolor="#ff99ff"><strong>Post Author:</strong></td>
<td><input type="text" name="post_author" size="60"/> </td>
 </tr>
 <tr>
<td align="right" bgcolor="#ff99ff"><strong>Post Keywords:</strong></td>
<td><input type="text" name="post_keywords" size="60"/> </td>
 </tr>
 
 <tr>
<td  align="right" bgcolor="#ff99ff"><strong>Post Image:</strong></td>
<td><input type="file" name="post_image" size="50"/> </td>
 </tr>
 <tr>
<td align="right" bgcolor="#ff99ff"><strong>Post Content:</strong></td>

<td><textarea name="post_content" rows="15" cols="40"> </textarea></td>
 </tr>
 <tr> 

<td colspan="6" align="center" bgcolor="#ff99ff"><input type="submit" name="submit" value="Publish Now"/> </td>
 </tr>


</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
	 $post_title=$_POST['post_title'];
	$post_date=date('m-d-y');
	$post_cat=$_POST['cat'];
	$post_author=$_POST['post_author'];
	$post_keywords=$_POST['post_keywords'];
	$post_image=$_FILES['post_image']['name'];
	$post_image_tmp=$_FILES['post_image']['tmp_name'];
    $post_content=$_POST['post_content'];
	
	if($post_title=='' OR $post_cat=='null' OR $post_author=='' OR $post_keywords=='' OR $post_image=='' OR $post_content=='')
	{
		echo "<script>alert('please fill in all the fields')</script>";
	
	exit();
	}
else
{
	move_uploaded_file($post_image_tmp,"news_images/$post_image");
	$insert_posts="insert into posts (category_id,post_title,post_date,post_author,post_keywords,post_image,post_content)value('$post_cat','$post_title','$post_date','$post_author','$post_keywords','$post_image','$post_content')";
	
	$run_posts=mysqli_query($con,$insert_posts);
	if(mysqli_query($run_posts))
	{
	echo "<script>alert('Post has been Published !')</script>";
	echo "<script>window.open('index.php?insert_post.php','_self')</script>";
}
}
}

?>
