<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ประกาศรายชื่อผู้มีสิทธิ์สอบสัมภาษณ์</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<style type="text/css">
<!--
body {
	background-color: #B271F3;
	background-image: url(image1/VBu2.jpg);
}
-->
</style></head>

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
<p align="center"><img src="image1/VBu3.jpg" width="479" height="259" /><br />
  <br />
  <br>
</p>


<?
include("connect.php");
$order=$_GET['orderby'];
if($order==NULL)
	$order='p.fnameth';


$sql="select * from personalinfo p inner join unconfirm u on p.id=u.id where u.id in (
select id from committee where pass is null) order by ".$order;
$result=mysql_query($sql,$link);

print  "<table border=1 align=center class=sample width=80%><tr>
<th align=center ><b><a href=\"interview.php?orderby=p.fnameth\">&nbsp ชื่อ &nbsp</a></b></th>
<th align=center><b><a href=\"interview.php?orderby=p.lnameth\">&nbsp นามสกุล &nbsp</a></b></th>
<th align=center><b><a href=\"interview.php?orderby=p.institution\">&nbsp มหาวิทยาลัย &nbsp</a></b></td>
<th align=center><b>&nbsp วันที่ &nbsp</b></th>
<th align=center><b>&nbsp เวลา &nbsp</b></th>
<th align=center><b>&nbsp สถานที่ &nbsp</b></th>

</tr>";
while($row=mysql_fetch_array($result))
{
print "<tr>
<td align=center>".$row['fnameth']."</td>
<td align=center>".$row['lnameth']."</td>
<td align=center>".$row['institution']."</td>";


print "<td align=center>".$row['date'];
print "</td>";

print "<td align=center>".$row['time'];
print "</td>";

print "<td align=center>".$row['place'];
print "</td>";


}
print "</table>";
	?>
<p><br><br>


                    

</p>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p> 
  
    <p><br>    
</p>
</body>
</html>
