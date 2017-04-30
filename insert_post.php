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
<form action="insert_post.php" method="post" enctype="multipart/form-data">
<table width="800" align="center" border="2" >
  <tr bgcolor="#ff6600">
<td colspan="6" align="center"><h1>Insert New Post :</h1> </td>

 </tr>


 <tr>
<td align="right"bgcolor="#ff6600"><strong>Post Title:</strong></td>
<td><input type="text" name="post_title" size="60"/> </td>
 </tr>

 <tr>
<td align="right" bgcolor="#ff6600"><strong>Post Category :</strong></td>
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

<td><textarea "name="post_ content" rows="15" cols="40"> </textarea></td>
 </tr>
 <tr> 

<td colspan="6" align="center" bgcolor="#ff6600"><input type="submit" name="submit" value="Publish Now"/> </td>
 </tr>


</table>
</form>
</body>
</html>
