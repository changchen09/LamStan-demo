<!DOCTYPE html>

<html>
<head>
<meta http-equiv="content-type"content="text/html; charset=utf-8">
<title>lastan demo</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>

</head>
<body>
<h1>Hello World</h1>



</body>
</html>






 

<?php
include("database.php");

$get_cats="select * from categories";
$run_cats=mysql_query($get_cats);
while($cats_row=mysql_fetch_array($run_cats))
{
	
	$cat_id=$cats_row['cat_id'];
	$cat_title=$cats_row['cat_title'];
	
	echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
	
	}





?>