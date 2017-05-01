<!DOCTYPE html>
<html>
<head>
<style>

.container{
	
	width:1050 px;
	margin :auto;
}
.post_area
{
	width:750px;

	background:#FFF;
	float:left;
	
	
}
ul#menu li 
{
	
display : inline;
}
body {margin:0;}

.navbar {
	
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: center;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 25px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>






<body>
<!-- Main container start-->
<div class="container">
<div class="head">


<!-- Header starts-->
<a href="indexn.php">
<img src="img/logo"/></a>
</div>
<!-- Header ends-->

<!-- navigation -->

<div class="navbar">
<ul id="menu" >

<?php
include("includes/database.php");

$get_cats="select * from categories";
$run_cats=mysqli_query($con,$get_cats);
while($cats_row=mysqli_fetch_array($run_cats))
{
	
	$cat_id=$cats_row['cat_id'];
	$cat_title=$cats_row['cat_title'];
	
	echo "<li><a href='indexn.php?cat=$cat_id'>$cat_title</a></li>";
	
	}
?>

</ul>


</div>



<div style="padding-left:16px" class="post_area">

<?php
if(!isset($_GET['cat']))
{
$get_posts="select * from posts order by rand() LIMIT 0,5";
$run_posts=mysqli_query($con,$get_posts);
while($row_posts=mysqli_fetch_array($run_posts))
	

	{
	$post_id=$row_posts['post_id'];
	$post_title=$row_posts['post_title'];
	$post_date=$row_posts['post_date'];
	$post_author=$row_posts['post_author'];
	$post_image=$row_posts['post_image'];
	$post_content=$row_posts['post_content'];
echo "
	
	<p>$post_title</p>
	<span><i>Posted by </i> <b>$post_author</b> &nbsp; on <b>$post_date</b><span>
	<span style='color:brown;'></span>
	<img src='admin/news_images/$post_image' width='100' height='100'/>	
	<div>$post_content</div>
";			
		
	}
}

else
{
if(isset($_GET['cat']))
{
$cat_id=$_GET['cat'];

$get_posts="select * from posts where category_id='$cat_id'";
	$run_posts=mysqli_query($con,$get_posts);
	
	while($row_posts=mysqli_fetch_array($run_posts))
	
	{
	$post_id=$row_posts['post_id'];
	$post_title=$row_posts['post_title'];
	$post_date=$row_posts['post_date'];
	$post_author=$row_posts['post_author'];
	$post_image=$row_posts['post_image'];
	$post_content=substr($row_posts['post_content'],0,300);
		
	echo "
	
	<h2><a id='ltitle'href='details.php?post=$post_id'>$post_title</a></h2>
	<span><i>Posted by </i> <b>$post_author</b> &nbsp; &nbsp; on <b>$post_date</b><span>
	<span style='color:brown;'></span>
	
<img src='admin/news_images/$post_image' width='100' height='100'/>	
<div> $post_content<a id='rmlink' href='details.php?post=$post_id'>Read More</a></div><br/>
	
";	
	
}
}
}

?>
</div>







 
</div>

<div class="footer_area">

this is footer
</div>
</div>
</body>
</html>
