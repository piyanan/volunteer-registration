<?
include("connect.php");
$id=$_GET['id'];
$sql="delete from personalinfo where id =".$id;
if (!mysql_query($sql,$link))
{
	die('Error personalinfo: ' . mysql_error());
 }
$sql="delete from committee where id =".$id;
if (!mysql_query($sql,$link))
{
	die('Error committee: ' . mysql_error());
 }
 $sql="delete from contactinfo where id =".$id;
if (!mysql_query($sql,$link))
{
	die('Error contactinfo: ' . mysql_error());
 }
 $sql="delete from langskill where id =".$id;
if (!mysql_query($sql,$link))
{
	die('Error langskill: ' . mysql_error());
 }
 $sql="delete from sport where id =".$id;
if (!mysql_query($sql,$link))
{
	die('Error sport: ' . mysql_error());
 }
 $sql="delete from wantstaff where id =".$id;
if (!mysql_query($sql,$link))
{
	die('Error wantstaff: ' . mysql_error());
 }
 
 print " <meta http-equiv='refresh' content='0;URL=committee.php' /> ";
 ?>

