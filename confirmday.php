<?
include("connect.php");
$date =  '2553'.'11'.$_POST["listDay"];

print $_POST['checkboxA'];
/*
$sql="select max(id) from personalinfo";
if (!$result=mysql_query($sql,$link))
 {
  die('Error max id: ' . mysql_error());
 }
else {
	$temp = mysql_fetch_array($result);
	$maxid=$temp[0];
}

for($id=1;$id<=$maxid;$id++){
	if($_POST['check'.$id]==true){
		$sql="select * from unconfirm where id=".$id;
		$result=mysql_query($sql,$link);
		$temp = mysql_fetch_array($result);
		if($temp['date']==NULL){
			//print "a";
			$sql="INSERT INTO unconfirm(id,date,time,place)
			VALUES
			('$id','$date','$_POST[listtime]','$_POST[place]')";
			
			if (!mysql_query($sql,$link))
			 {
			  die('Error query: ' . mysql_error());
			 }
		} else {
			//print "b";
			$sql="update unconfirm set date='$date',time='$_POST[listtime]',place='$_POST[place]' where id=".$id;
			mysql_query($sql,$link);
		
		}
	 }
}*/
//header("location: insertday.php");
?>
