<?php
echo "Load Time : ".date("Y-m-d H:i:s");

$strSort = $_POST["id"];
include('connectDB.php');

//$objConnect = mysqli_connect("localhost","root","") or die("Error Connect to Database");
//$objDB = mysqli_select_db("coffee_shop");
$strSQL = "SELECT * FROM users_logs ORDER BY $strSort ASC ";
$objQuery = mysqli_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center"><a href="JavaScript:doCallAjax('username')">username</a></div></th>
    
  </tr>
<?
while($objResult = mysqli_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["username"];?></div></td>
    
  </tr>
<?
}
?>
</table>
<?
mysqli_close($objConnect);
?>


