<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>15th Asean University Thailand </title>
<style type="text/css">
a { text-decoration:none }

table.sample {
	border-width: 1px;
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
	background-color: white;
	-moz-border-radius: 0px 0px 0px 0px;
}
table.sample td {
	border-width: 1px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: 0px 0px 0px 0px;
}
</style>
<script type='text/javascript'>
function create_box(id){
    var zone=document.getElementById('zone_box'+id)
    var div=document.createElement('div');
    div.setAttribute("id","box"+id);
    div.innerHTML="<form method=get action=ajax_get.php style='margin:0;'>ฝ่าย <input type=text name='textbox' ><input type=hidden name='id' value="+id+"><input type=submit value=ตกลง><input type=button value=ยกเลิก onclick='delete_box("+id+")'></form>";
    zone.appendChild(div);
}


function delete_box(id){
	var zone=document.getElementById('zone_box'+id)
	var div=document.getElementById('box'+id)
    zone.removeChild(div);
	JavaScript:fncShow(id);
}
</script>
</head>


<body>

<?
include("connect.php");
$order=$_GET['orderby'];
if($order==NULL)
	$order='p.fnameth';
?>

<script language="javascript">
function fncdetails(id)
{
	window.location="details.php?id=" + id;
}
function fncShow(id)
{
	document.getElementById('mydiv'+id).style.display = 'inline';
}

function fncHide(id)
{
	document.getElementById('mydiv'+id).style.display = 'none';
	create_box(id);
}
</script>
<p><p><p>
<table align="center" class="sample"><tr><td>
<a href=committee.php> &nbsp กรอก ฝ่าย &nbsp </a></td>

</tr></table><p>
<?
$sql="select count(id) as countid from personalinfo";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
$count['countid']-=1;
print "<p align=right><a href = summary.php> จำนวนผู้สมัครทั้งหมด ".$count['countid']." คน</a></p><br>";

$sql="select * from personalinfo p inner join committee c on p.id=c.id order by ".$order;
$result=mysql_query($sql,$link);
print "<table border=1 align=center class=sample><tr><td><b align=center><a href=\"committee.php?orderby=p.id\"> ID </a></b></td>
<td align=center><b><a href=\"committee.php?orderby=p.fnameth\">&nbsp ชื่อ(ภาษาไทย) &nbsp</a></b></td>
<td align=center><b><a href=\"committee.php?orderby=p.lnameth\">&nbsp นามสกุล(ภาษาไทย) &nbsp</a></b></td>
"//<td align=center><b><a href=\"committee.php?orderby=p.age\">&nbsp อายุ &nbsp</a></b></td>
."<td align=center><b><a href=\"committee.php?orderby=p.institution\">&nbsp มหาวิทยาลัย &nbsp</a></b></td>
<td align=center><b><a href=\"committee.php?orderby=c.staff\">&nbsp ตำแหน่งที่ได้ &nbsp</a></b></td>
<td></td><td></td><td></td>
</tr>";
while($row=mysql_fetch_array($result))
{
print "<tr><td align=center>".$row['id']."</td>
<td align=center><a href=\"editname.php?id=".$row['id']."\">".$row['fnameth']."</a></td>
<td align=center><a href=\"editname.php?id=".$row['id']."\">".$row['lnameth']."</a></td>
"//<td align=center>".$row['age']."</td>
."<td align=center>".$row['institution']."</td>";
print "<td align=center><div id='zone_box".$row['id']."'></div><div id='mydiv".$row['id']."'>
<a href='javascript:vod(0)' onclick='JavaScript:fncHide(".$row['id'].")'>";
if($row['pass']==1) print "ฝ่าย".$row['staff']; else if($row['pass']==NULL) print "ยังไม่ได้พิจารณา"; else if($row['pass']==0) print "สำรอง";
print "</a></div></td><td align=center>";
if($row['pass']==1&&$row['country']!=NULL) print "ประเทศ ".$row['country'];
print "</td><td align=center>";
if($row['pass']==1&&$row['sport']!=NULL) print "กีฬา ".$row['sport'];
print "</td><td align=center><input type=button value=รายละเอียดผู้สมัคร onClick=\"JavaScript:fncdetails(".$row['id'].")\" /></td></tr>";
}
print "</table>";
	?>
<p><br><br>


</body>
</html>
