<!DOCTYPE html>
<?php
require'./condb.php';
$id=$_GET["id"];
$query=$con->query("select * from article where id=$id");
$row=$query->fetch_object();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div class="article">
			This is article : <?php echo $row->name;?>
		</div>
		<div class="article_rating">
			Rate this article :
			<?php foreach (range(1,5) as $rating):?>
			<a href="rate.php?article=<?php echo $row->id?>&rating=<?php echo $rating;?>"><?php echo $rating;?> </a> 
			<?php endforeach;?>
			
		</div>
	</body>
</html>