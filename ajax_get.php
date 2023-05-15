<?
include("connect.php");

$id=$_GET["id"];
$staff=$_GET["textbox"];

$sql="update committee set pass=1,staff='$staff',country='',sport='' where id=".$id;// add ตำแหน่ง
if (!mysql_query($sql,$link))
{
	die('Error pass: ' . mysql_error());
 }
//else echo "pass 1 record added ".$staff;

print " <meta http-equiv='refresh' content='0;URL=committee.php' /> ";

//echo $staff;
?>