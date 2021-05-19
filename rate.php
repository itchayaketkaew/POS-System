<?php

require'./condb.php';
$article=$_GET['article'];
$rating=$_GET['rating'];
if(in_array($rating,[1,2,3,4,5]))
	{$con->query("insert into tbl_rating(name,rating)values($article,$rating)");}
header("location:rat.php");