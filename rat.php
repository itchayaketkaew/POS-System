<!DOCTYPE html>
<?php
require'./condb.php';
$articleArr=[];
$query=$con->query("SELECT article.id,article.name,AVG(tbl_rating.rating) AS rating FROM article LEFT JOIN tbl_rating ON article.id=tbl_rating.name GROUP BY article.id");
while ($row=$query->fetch_object()){
	$articleArr[]=$row;
}

?>

<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php foreach($articleArr as $article):?>
		<!--แสดงผลข้อมูลในตาราง-->
		<div class="article">
			<h3><a href="rarticle.php?id=<?php echo $article->id;?>">  <?php echo $article->name?>  
		</a> </h3>
		<div class="article_rating">Rating:<?php echo round($article->rating)?>/5</div>
	<?php endforeach;?>

</body>
</html>