<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>15th Asean University Thailand </title>
<style type="text/css">
a { text-decoration:none }
</style>

</head>


<body>

<?
include("connect.php");
$order=$_GET['orderby'];
if($order==NULL)
	$order='p.id';
?>

<script language="javascript">
function fncdelete(id)
{
	if(confirm('ลบผู้สมัคร')==true)
	{
		window.location="delete.php?id=" + id;
	}
}
function fncdetails(id)
{
	window.location="details.php?id=" + id;
}
</script>

<?
$sql="select count(id) as countid from personalinfo";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
$count['countid']-=1;
print "<p align=right><a href = summary.php> จำนวนผู้สมัครทั้งหมด ".$count['countid']." คน</a></p><br>";

$sql="select * from personalinfo p inner join committee c on p.id=c.id order by ".$order;
$result=mysql_query($sql,$link);
print "<table border=1 align=center><tr><td><b align=center><a href=\"committee.php?orderby=p.id\"> ID </a></b></td>
<td align=center><b><a href=\"committee.php?orderby=p.fnameth\">&nbsp ชื่อ(ภาษาไทย) &nbsp</a></b></td>
<td align=center><b><a href=\"committee.php?orderby=p.lnameth\">&nbsp นามสกุล(ภาษาไทย) &nbsp</a></b></td>
"//<td align=center><b><a href=\"committee.php?orderby=p.age\">&nbsp อายุ &nbsp</a></b></td>
."<td align=center><b><a href=\"committee.php?orderby=p.institution\">&nbsp มหาวิทยาลัย &nbsp</a></b></td>
<td align=center><b><a href=\"committee.php?orderby=c.staff\">&nbsp ตำแหน่งที่ได้ &nbsp</a></b></td>
<td></td>
<td></td>

</tr>";
while($row=mysql_fetch_array($result))
{
print "<tr><td align=center>".$row['id']."</td>
<td align=center>".$row['fnameth']."</td>
<td align=center>".$row['lnameth']."</td>
"//<td align=center>".$row['age']."</td>
."<td align=center>".$row['institution']."</td>";
print "<td align=center>";
if($row['pass']==1) print "ฝ่าย".$row['staff']; else if($row['pass']==NULL) print "ยังไม่ได้พิจารณา"; else if($row['pass']==0) print "สำรอง";
print "</td><td align=center>";
if($row['pass']==1&&$row['country']!=NULL) print "ประเทศ ".$row['country'];
print "</td><td align=center>";
if($row['pass']==1&&$row['sport']!=NULL) print "กีฬา ".$row['sport'];
print "</td><td align=center><input type=button value=รายละเอียดผู้สมัคร onClick=\"JavaScript:fncdetails(".$row['id'].")\" /></td>";
print "</td><td align=center><input type=button value=ลบผู้สมัคร onClick=\"JavaScript:fncdelete(".$row['id'].")\" /></td></tr>";
}
print "</table>";
	?>
<p><br><br>


</body>
</html>
