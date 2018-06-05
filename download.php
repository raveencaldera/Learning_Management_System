<!DOCTYPE html>
<html>
<head>
	<title>Untiled Document/title>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root","","download");
$res=mysqli_quary("select * from table1");
echo "<table>";
while($row=mysqli_fetch_Array($res))
{
echo '<tr>';
echo "<td>"; echo $row["name"]; echo "</td>";
echo "<td>"; ?> <a href="<?php echo $row["path"]; ?>">Download</a>  <?php echo "</td>";
 echo "<tr>";

}
echo"<table>";
?>
</body>
</html>