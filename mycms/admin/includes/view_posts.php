<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type content="text/html; charset="utf-8">
<title>admin</title>
<style type="text/css">
th,td,tr,table {padding:0; margin:0;}

th{border-left:2px solid #333; border:3px solid #333; }
td{border-left:2px solid #999;}
h2 {padding:10px;}
</style>
</head>

<body>
<table align="center" bgcolor="#FF9999" width="780" >
<tr>
<td colspan="7 " align="center" bgcolor="#99cc33"><h2>View all posts here </h2></td>
</tr>

<tr>
<th>Post ID</th>
<th>Title</th>
<th>Author</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php
include("includes/database.php");
$get_posts="select * from posts";
$run_posts=mysqli_query($con,$get_posts);
$i=1;
while($row_posts=mysqli_fetch_array($run_posts))
{
	
$post_id=$row_posts['post_id'];
$post_title=$row_posts['post_title'];	
$post_author=$row_posts['post_author'];
$post_image=$row_posts['post_image'];
	
?>


<tr align="center">
<td><?php echo $i++; ?></td>
<td><?php echo $post_title; ?></td>
<td><?php echo $post_author; ?></td>
<td><img src="news_images/<?php echo $post_image;?>" width="40" height="40"></td>
<td><a href="index.php?edit_post=<?php echo $post_id;?>">Edit</a></td>
<td><a href="includes/delete_post.php?delete_post=<?php echo $post_id;?>">Delete</a></td>
</tr>


<?php }
?>
</table>
</body>
</html>