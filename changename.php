<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />

</head>

<body>
<?
include("connect.php");
$sql="update personalinfo set fnameth = '".$_POST['fname']."',lnameth='".$_POST['lname']."' where id=".$_POST['id'];
mysql_query($sql,$link);
print $_POST['fname']." ".$_POST['lname'];

print " <meta http-equiv='refresh' content='0;URL=committee.php' /> ";
?>
</body>
</html>
