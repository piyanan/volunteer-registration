<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ประกาศรายชื่ออาสาสมัครที่มีฝ่าย</title>
<style type="text/css">
<!--
body {
	background-color: #B271F3;
	background-image: url(image1/VBu2.jpg);
}
-->
</style>
</head>

<STYLE>
html
{  BORDER-RIGHT: #7A3DBC 12px ridge;
BORDER-TOP: #7A3DBC  12px   ridge;
BORDER-LEFT: #7A3DBC   12px ridge;
BORDER-BOTTOM: #7A3DBC  12px ridge }
a { text-decoration:none }
table.sample {
	border-width: 2px;
	border-spacing: 0px;
	border-style: outset;
	border-color: gray;
	border-collapse: collapse;
	background-color: white;
}
table.sample th {
	border-width: 1px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: #EDADEF; 
	-moz-border-radius: 0px 0px 0px 0px;
}
table.sample td {
	border-width: 1px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: #FEE9FC;
	-moz-border-radius: 0px 0px 0px 0px;
}
</STYLE>

<body>

<?
include("connect.php");
$order=$_GET['orderby'];
if($order==NULL)
	$order='p.fnameth';
?>

<p><p>
<div align="center" style="font-size:18px" ><b>ประกาศรายชื่ออาสาสมัครที่มีฝ่าย</b></div>
<p>

<?
/*
$sql="select count(id) as countid from personalinfo";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
$count['countid']-=1;
print "<p align=right><a href = summary.php> จำนวนผู้สมัครทั้งหมด ".$count['countid']." คน</a></p><br>";*/

$sql="select * from personalinfo p inner join committee c on p.id=c.id where c.pass=1 order by ".$order;
$result=mysql_query($sql,$link);
print "<table border=1 align=center class=sample><tr><th></th>
<th align=center><b><a href=\"volunteers.php?orderby=p.fnameth\">&nbsp ชื่อ &nbsp</a></b></th>
<th align=center><b><a href=\"volunteers.php?orderby=p.lnameth\">&nbsp นามสกุล &nbsp</a></b></th>
<th align=center><b><a href=\"volunteers.php?orderby=p.institution\">&nbsp มหาวิทยาลัย &nbsp</a></b></th>
<th align=center><b><a href=\"volunteers.php?orderby=c.staff\">&nbsp ตำแหน่งที่ได้ &nbsp</a></b></th>

</tr>";
$i =1;
while($row=mysql_fetch_array($result))
{
	print "<tr><td align=center>".$i."</td>
	<td align=center>".$row['fnameth']."</td>
	<td align=center>".$row['lnameth']."</td>
	<td align=center>".$row['institution']."</td>
	<td align=center>".$row['staff']."</td>
	";
	$i++;
}
print "</table>";
	?>
<p><br><br>


</body>
</html>
