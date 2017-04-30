

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
	$select_post="select * from posts where post_id='$edit_id'";
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
<form action="index.php?view_post" method="post" enctype="multipart/form-data">
<table width="1000" align="center" border="0" bgcolor="#9999999">
  <tr bgcolor="#ff6600">
<td colspan="6" align="center"><h1>Update This Post :</h1> </td>

 </tr>


 <tr>
<td align="right"bgcolor="#ff6600"><strong>Post Title:</strong></td>
<td><input type="text" name="post_title" size="60"/> </td>
 </tr>

 <tr>
<td align="right" bgcolor="#ff6600"><strong>Post Category :</strong></td>
<td>
<select name="cat">



<?php

$get_cats="select * from categories where cat_id='$post_cat'";
$run_cats=mysqli_query($con,$get_cats);
while($cats_row=mysqli_fetch_array($run_cats))
{
	
	$cat_id=$cats_row['cat_id'];
	$cat_title=$cats_row['cat_title'];
	
	echo "<option value='$cat_id'>$cat_title</option>";
	
	$get_more_cats="select * from categories";
	$run_more_cats=mysqli_query($con,$get_more_cats);
	
	while($row_more_cats=mysqli_fetch_array($run_more_cats))
	{
		$cat_id=$row_more_cats['cat_id'];
	$cat_title=$row_more_cats['cat_title'];
	
	echo "<option value='$cat_id'>$cat_title</option>";
		
	}
	
	
	}

?>

</select>
 </td>
 </tr>

<tr>
<td align="right" bgcolor="#ff6600"><strong>Post Author:</strong></td>
<td><input type="text" name="post_author" size="60"/> </td>
 </tr>
 <tr>
<td align="right" bgcolor="#ff6600"><strong>Post Keywords:</strong></td>
<td><input type="text" name="post_keywords" size="60"/> </td>
 </tr>
 
 <tr>
<td  align="right" bgcolor="#ff6600"><strong>Post Image:</strong></td>
<td><input type="file" name="post_image" size="50"/> </td>
 </tr>
 <tr>
<td align="right" bgcolor="#ff6600"><strong>Post Content:</strong></td>

<td><textarea "name="post_content" rows="15" cols="40"> </textarea></td>
 </tr>
 <tr> 

<td colspan="6" align="center" bgcolor="#ff6600"><input type="submit" name="update" value="Update Now"/> </td>
 </tr>


</table>
</form>
</body>
</html>

<?php
if(isset($_POST['update']))
{
	
	$update_id=$post_id;
	$post_title=$_POST['post_title'];
	$post_date=date('m-d-y');
	$post_cat1=$_POST['cat'];
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
	$update_posts="update posts set category_id='$post_cat1',post_title='$post_title',post_date='$post_date',post_author='$post_author',post_keywords='$post_keywords',
	post_image='$post_image',post_content='$post_content' where post_id='$update_id'";
	
	$run_update=mysqli_query($con,$update_posts);
	
	echo "<script>alert('Post has been Updated !')</script>";
	echo "<script>window.open('index.php?view_posts','_self')</script>";
}
}

?>

