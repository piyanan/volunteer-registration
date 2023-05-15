<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />

<title>แก้ไขชื่อ - นามสกุล</title></head>

<body>
<p><p>แก้ไขชื่อ - นามสกุล<p>
<?
include("connect.php");
$id=$_GET['id'];
$sql="select * from personalinfo where id =".$id;
$result=mysql_query($sql,$link);
$rowperson=mysql_fetch_array($result);
?>
<form action="changename.php" method="post">
<input type="hidden" value="<? echo $id; ?>" name="id" />
ชื่อ <input type="text" value="<? echo $rowperson['fnameth']; ?>" name="fname" />
นามสกุล <input type="text" value="<? echo $rowperson['lnameth']; ?>" name="lname" />
<input type="submit" value="   OK   " />
</form>
</body>
</html>
