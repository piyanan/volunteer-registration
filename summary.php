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
</head>

<body>
<?
include("connect.php");
?>
<p><p><p>
<table align="center" class="sample"><tr><td>
<a href=committee.php> &nbsp กรอก ฝ่าย &nbsp </a></td>

</tr></table><p>
<p align="center"><b>สรุปจำนวนผู้สมัคร</b></p>
<table align="center">
<?
//----------------------------------ผู้สมัครทั้งหมด-------------------------------------
$sql="select count(id) as countid from personalinfo";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
$count['countid']-=1;
print "<tr><td> จำนวนผู้สมัครทั้งหมด </td><td align=center>".$count['countid']." คน</td></tr>";
print "<tr><td>----------------------------------------------</td></tr>";

$sql="select count(id) as counttech from wantstaff where first='ฝ่ายเทคนิคกีฬา'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> จำนวนผู้สมัครฝ่ายเทคนิคกีฬา </td><td align=center>".$count['counttech']." คน</td></tr>";

$sql="select count(id) as countgeneral from wantstaff where first='ประสานงานทั่วไป'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> จำนวนผู้สมัครประสานงานทั่วไป </td><td align=center>".$count['countgeneral']." คน</td></tr>";

$sql="select count(id) as countsport from wantstaff where first='ประจำกีฬา'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> จำนวนผู้สมัครประจำกีฬา </td><td align=center>".$count['countsport']." คน</td></tr>";

print "</table><br><br><table align=center>";
//----------------------------------ผู้ที่ผ่าน-------------------------------------
$sql="select count(id) as countid from committee where pass=1";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> จำนวนผู้ที่ผ่านการคัดเลือกทั้งหมด </td><td align=center>".$count['countid']." คน</td></tr>";
print "<tr><td>----------------------------------------------</td></tr>";

$sql="select count(id) as countvol from committee where staff='เทคโนโลยีสารสนเทศ'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=เทคโนโลยีสารสนเทศ\"> จำนวนอาสาสมัครฝ่ายเทคโนโลยีสารสนเทศ</a></td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='ที่พักและอาหาร'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ที่พักและอาหาร\"> จำนวนอาสาสมัครฝ่ายที่พักและอาหาร </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='จัดการแข่งขันกรีฑา'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=จัดการแข่งขันกรีฑา\"> จำนวนอาสาสมัครฝ่ายจัดการแข่งขันกรีฑา </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='วอลเลย์บอลชายหาด'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=วอลเลย์บอลชายหาด\"> จำนวนอาสาสมัครฝ่ายวอลเลย์บอลชายหาด </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='จัดการแข่งขันฟุตซอล'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=จัดการแข่งขันฟุตซอล\"> จำนวนอาสาสมัครฝ่ายจัดการแข่งขันฟุตซอล </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='จัดการแข่งขันกอล์ฟ'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=จัดการแข่งขันกอล์ฟ\"> จำนวนอาสาสมัครฝ่ายจัดการแข่งขันกอล์ฟ </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='คาราเต้โด'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=คาราเต้ โด\"> จำนวนอาสาสมัครฝ่ายคาราเต้โด </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='เซปักตะกร้อ'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=เซปักตะกร้อ\"> จำนวนอาสาสมัครฝ่ายเซปักตะกร้อ </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='ว่ายน้ำ'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ว่ายน้ำ\"> จำนวนอาสาสมัครฝ่ายว่ายน้ำ </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='เทควันโด'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=เทควันโด\"> จำนวนอาสาสมัครฝ่ายเทควันโด </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='เทเบิลเทนนิส'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=เทเบิลเทนนิส\"> จำนวนอาสาสมัครฝ่ายเทเบิลเทนนิส </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='วอลเลย์บอล'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=วอลเลย์บอล\"> จำนวนอาสาสมัครฝ่ายวอลเลย์บอล </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='เปตอง'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=เปตอง\"> จำนวนอาสาสมัครฝ่ายเปตอง </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='ฟุตซอล'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ฟุตซอล\"> จำนวนอาสาสมัครฝ่ายฟุตซอล </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='กรีฑา'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=กรีฑา\"> จำนวนอาสาสมัครฝ่ายกรีฑา </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='ประจำหัวหน้านักกีฬา'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ประจำหัวหน้านักกีฬา\"> จำนวนอาสาสมัครฝ่ายประจำหัวหน้านักกีฬา </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='อาสาสมัคร'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=อาสาสมัคร\"> จำนวนอาสาสมัครฝ่ายอาสาสมัคร </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='อาสาสมัคร(ฝึกอบรม)'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=อาสาสมัคร(ฝึกอบรม)\"> จำนวนอาสาสมัครฝ่ายอาสาสมัคร(ฝึกอบรม) </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='ขนส่ง'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ขนส่ง\"> จำนวนอาสาสมัครฝ่ายขนส่ง </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='ท่องเที่ยว'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ท่องเที่ยว\"> จำนวนอาสาสมัครฝ่ายท่องเที่ยว </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='สนามและอุปกรณ์'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=สนามและอุปกรณ์\"> จำนวนอาสาสมัครฝ่ายสนามและอุปกรณ์ </td><td align=center>".$count['countvol']." คน</td></tr>";

$sql="select count(id) as countvol from committee where staff='อาสาสมัคร(สารสนเทศ)'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=อาสาสมัคร(สารสนเทศ)\"> จำนวนอาสาสมัครฝ่ายอาสาสมัคร(สารสนเทศ) </td><td align=center>".$count['countvol']." คน</td></tr>";
?>
</table>
</body>
</html>
