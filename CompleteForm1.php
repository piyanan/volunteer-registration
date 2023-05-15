<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<style type="text/css">
@media print{
#no_print{display:none;}
}
</style>
<title>15th Asean University Thailand : Summary</title>
</head>


<body>

<?php

include("connect.php");

$sql="select max(id) from personalinfo";
if (!$result=mysql_query($sql,$link))
 {
  die('Error max id: ' . mysql_error());
 }
else {
$temp = mysql_fetch_array($result);
$id=$temp[0]+1;
//echo "max id get ".$id;
}
//------------------------------------------------begin-----------------------------------------------------------------
		print "<font face=angsanaupc><font size=4>";
		print "<center><b>ใบสมัครอาสาสมัคร (สำหรับนักศึกษา)<br>
				การแข่งขันกีฬามหาวิทยาลัยอาเซียน ครั้งที่ 15
				ระหว่างวันที่ 15-23 ธันวาคม 2553 จังหวัดเชียงใหม่<br></b></center></font>";
				
				
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<font size=4><b><u>ข้อมูลทั่วไป</u></b></font>";
		
		print "<font size=4><table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td><td>ชื่อ(ภาษาไทย) :  </td><td align=center><u>&nbsp " .$_POST["tFirstname"];
		print "&nbsp </u></td>";
		print "<td>นามสกุล(ภาษาไทย) : </td><td align=center><u>&nbsp" .$_POST["tLastname"];
		print "&nbsp </u></td></tr>";
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ชื่อ(ภาษาอังกฤษ) : </td><td><u> &nbsp " .$_POST["tFirstnameEn"];
		print "&nbsp  </u> </td>";
		print "<td>นามสกุล(ภาษาอังกฤษ) : </td><td><u> &nbsp " .$_POST["tLastnameEn"];
		print " &nbsp </u> </td></tr> </table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>เพศ : </td><td><u>&nbsp " .$_POST["listSex"];
		print " &nbsp </u></td> ";
		print "<td>ศาสนา : </td><td><u> &nbsp  " .$_POST["tReligion"];
		print " &nbsp </u></td> ";
		print "<td>อายุ : </td><td><u> &nbsp " .$_POST["tAge"];
		print " &nbsp  </u></td><td> ปี</td> ";
		print "<td>วัน/เดือน/ปีเกิด : </td><td><u> &nbsp " .$_POST["listDay"]."/" .$_POST["listMonth"]."/" .$_POST["listYear"]."  &nbsp </u></td></tr></table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>กำลังศึกษาอยู่ที่คณะ : </td><td><u> &nbsp " .$_POST["tFaculty"];
		print "&nbsp </u></td>";
		print "<td>สาขาวิชา : </td><td><u> &nbsp " .$_POST["tMajor"];
		print "&nbsp </u></td></tr></table> ";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ระดับการศึกษา : </td><td><u>&nbsp " .$_POST["listEducation"];
		print "&nbsp </u></td> ";
		print "<td>ชั้นปีที่ : </td><td><u> &nbsp " .$_POST["listClass"];
		print " &nbsp </u></td>";
		print "<td>สถาบันการศึกษา : </td><td><u> &nbsp " .$_POST["tInstitution"];
		print "&nbsp </u></td></tr></table> ";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ที่อยู่ที่สามารถติดต่อได้ : </td> ";
		print "<td>เลขที่  </td><td><u>&nbsp " .$_POST["tNo"];
		print "&nbsp </u></td>";
		print "<td>หมู่ที่  </td><td><u>&nbsp " .$_POST["tVillageNo"]; 
		print "&nbsp </u></td> ";
		print "<td>ถนน  </td><td><u> &nbsp &nbsp " .$_POST["tRoad"];
		print "&nbsp &nbsp </u></td>";
		print "<td>ซอย  </td><td><u> &nbsp &nbsp " .$_POST["tBlock"];
		print "&nbsp &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>แขวง/ตำบล </td><td><u> &nbsp " .$_POST["tSubDistrict"];
		print "&nbsp </u></td>";
		print "<td>อำเภอ/เขต </td><td><u> &nbsp " .$_POST["tDistrict"]; 
		print "&nbsp </u></td> ";
		print "<td>จังหวัด </td><td><u> &nbsp " .$_POST["tProvince"];
		print "&nbsp </u></td>";
		print "<td>รหัสไปรษณีย์ </td><td><u> &nbsp " .$_POST["tZIPcode"]." &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>เบอร์โทรศัพท์มือถือ : </td><td><u> &nbsp " .$_POST["tMobile"]." &nbsp </u></td> "; 
		print "<td>เบอร์โทรศัพท์บ้าน : </td><td><u> &nbsp " .$_POST["tTel"]." &nbsp </u></td></tr></table>"; 
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>E-Mail : </td><td><u> &nbsp " .$_POST["tEmail"]." &nbsp </u></td> "; 
		print "<td>กรณีฉุกเฉินสามารถติดต่อได้ที่หมายเลขโทรศัพท์ : </td><td><u> &nbsp " .$_POST["tEmergency"]." &nbsp </u></td></tr></table> "; 

		//print "<br>";
	
//---------------------------------------------ความสามารถและประสบการณ์----------------------------------------------------------------------

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>ความสามารถและประสบการณ์</u></b>";
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "ภาษาที่ถนัดและระดับของภาษาที่ถนัด";

		print "<br><table>";
if ($_POST["langen"] == true){
		print "<tr><td >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td>ภาษาอังกฤษ &nbsp </td> <td> ระดับ ";
		print $_POST["radlevel1"]."</td></tr>";
}
if ($_POST["langchc"] == true){
		print "<tr><td >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td>ภาษาจีนกลาง &nbsp </td> <td> ระดับ  ";
		print $_POST["radlevel2"]."</td></tr>";
}
if ($_POST["langchk"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td>ภาษาจีนกวางตุ้ง &nbsp </td> <td> ระดับ  ";
		print $_POST["radlevel3"]." </td></tr>";
}
if ($_POST["langoth1"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print  "<td>ภาษา".$_POST["other1"]." &nbsp </td> <td>  ระดับ " ;
		print $_POST["radlevel4"]."</td></tr>";
}
if ($_POST["langoth2"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print  "<td>ภาษา".$_POST["other2"]." &nbsp </td> <td>  ระดับ " ;
		print $_POST["radlevel5"]."</td></tr>";
}
if ($_POST["langoth3"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print  "<td>ภาษา".$_POST["other3"]." &nbsp </td> <td>  ระดับ " ;
		print $_POST["radlevel6"]."</td></tr>";
}
		
print "</table>";

//----------------------------------------------ตำแหน่งซึ่งประสงค์จะทำ---------------------------------------------------------------------

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>ตำแหน่งซึ่งประสงค์จะทำ</u></b>";
		
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "อันดับที่ 1 : Volunteer ";
		print  $_POST["listPositionRank_1"];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "อันดับที่ 2 : Volunteer ";
		print $_POST["listPositionRank_2"];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "อันดับที่ 3 : Volunteer ";
                            print $_POST["listPositionRank_3"];
		print "<br>";

//----------------------------------------อันดับการเลือกประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา------------------------------------------------

if($_POST["listPositionRank_1"]=="ประจำกีฬา"||$_POST["listPositionRank_2"]=="ประจำกีฬา"||$_POST["listPositionRank_3"]=="ประจำกีฬา"){
                            print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
                            print "<b>อันดับการเลือกประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา </b><br>";
                            print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>อันดับที่ 1 : &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>ประเทศ : ".$_POST["listCountry_1"];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>ชนิดกีฬา : " .$_POST["listSport_1"]."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td> ";
		print "<td>อันดับที่ 2 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ประเทศ : " .$_POST["listCountry_2"];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>ชนิดกีฬา : " .$_POST["listSport_2"]."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>อันดับที่ 3 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ประเทศ : ".$_POST["listCountry_3"];
		print "&nbsp&nbsp&nbsp</td>";
		print "<td>ชนิดกีฬา : " .$_POST["listSport_3"]."</td></tr></table>";
}

//---------------------------------------------end page----------------------------------------------------------------------

		print "<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b>ทั้งนี้ในวันยื่นใบสมัครจะนำหลักฐานต่อไปนี้มาด้วย</b>";		
		print "<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " - รูปถ่ายขนาด 1 นิ้ว จำนวน 2 รูป (พร้อมเขียนชื่อด้านหลังรูปถ่าย)";
		print "<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " - เอกสารประกอบการพิจารณา เช่น การทดสอบด้านภาษา เป็นต้น" ;
		print "<br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "คำรับรอง “ข้าพเจ้าขอรับรองว่าผู้สมัครคนนี้มีสถานภาพเป็นนักศึกษาในช่วงเวลาการแข่งขันกีฬามหาวิทยาลัยอาเซียน ครั้งที่ 15 ระหว่างวันที่ 15-23 ธันวาคม 2553 จังหวัดเชียงใหม่”";
		print "<table><tr><td width=300></td>";
		print "<td align=center>อาจารย์ที่ปรึกษา _____________________________________</td></tr>";
		print "<tr><td></td><td align=center>( &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp)</td></tr>";
		print "<tr><td></td><td align=center>ลงชื่อผู้สมัคร _____________________________________</td></tr>";
		print "<tr><td></td><td align=center>( &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp)</td></tr>";
		print "<tr><td></td><td align=center>วันที่ ___ เดือน __________พ.ศ. 2553</td></tr></table>";
			
		print "</font></font>";
		

//---------------------------------------SQL----------------------------------------------------------------------


//ข้างล่างนี่คือติดต่อ Database ตอนนี้มีแค่สองตารางคือ personalInfo กับ contactInfo

$birthdate =  $_POST["listYear"].$_POST["listMonth"] .$_POST["listDay"];

if($_POST[tFirstname]!=NULL&&$_POST[tInstitution]!=NULL&&$_POST[tEmail]!=NULL)
{
//-----------------------------------pesonal--------------------------------------------------------------------------------

$sql="INSERT INTO personalinfo (id,fnameth,lnameth,fnameen,lnameen,gender,religion,age,birthdate,faculty,major,degree,grade,institution)
VALUES
('$id','$_POST[tFirstname]','$_POST[tLastname]','$_POST[tFirstnameEn]','$_POST[tLastnameEn]','$_POST[listSex]','$_POST[tReligion]','$_POST[tAge]','$birthdate','$_POST[tFaculty]','$_POST[tMajor]','$_POST[listEducation]','$_POST[listClass]','$_POST[tInstitution]')";

if (!mysql_query($sql,$link))
 {
  die('Error person: ' . mysql_error());
 }
//else echo "personal 1 record added";

//----------------------------------------contact---------------------------------------------------------------------------

$sql="INSERT INTO contactinfo (id,number,moo,street,soi,tumbol,aumpher,province,zipcode,mobilephone,phone,email,emerphone)
VALUES
('$id','$_POST[tNo]','$_POST[tVillageNo]','$_POST[tRoad]','$_POST[tBlock]','$_POST[tSubDistrict]','$_POST[tDistrict]','$_POST[tProvince]','$_POST[tZIPcode]','$_POST[tMobile]','$_POST[tTel]','$_POST[tEmail]','$_POST[tEmergency]')";

if (!mysql_query($sql,$link))
 {
  die('Errorcontact: ' . mysql_error());
 }
//else echo "contact 1 record added";

//----------------------------------------ภาษาที่ถนัด---------------------------------------------------------------------------
if ($_POST["langen"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','อังกฤษ','$_POST[radlevel1]')";
	if (!mysql_query($sql,$link))
 	{
 		die('Errorภาษาที่ถนัด: ' . mysql_error());
 	}
	//else echo "ภาษาที่ถนัด 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langchc"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','จีนกลาง','$_POST[radlevel2]')";
	if (!mysql_query($sql,$link))
	 {
 		 die('Errorภาษาที่ถนัด: ' . mysql_error());
 	}
	//else echo "ภาษาที่ถนัด 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langchk"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','จีนกวางตุ้ง','$_POST[radlevel3]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Errorภาษาที่ถนัด: ' . mysql_error());
	 }
	//else echo "ภาษาที่ถนัด 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langoth1"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','$_POST[other1]','$_POST[radlevel4]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Errorภาษาที่ถนัด: ' . mysql_error());
	 }
	//else echo "ภาษาที่ถนัด 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langoth2"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','$_POST[other2]','$_POST[radlevel5]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Errorภาษาที่ถนัด: ' . mysql_error());
	 }
	//else echo "ภาษาที่ถนัด 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langoth3"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','$_POST[other3]','$_POST[radlevel6]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Errorภาษาที่ถนัด: ' . mysql_error());
	 }
	//else echo "ภาษาที่ถนัด 1 record added";
}

//----------------------------------------ตำแหน่งซึ่งประสงค์จะทำ---------------------------------------------------------------------------
if($_POST["listPositionRank_1"]=="ประจำกีฬา"||$_POST["listPositionRank_2"]=="ประจำกีฬา"||$_POST["listPositionRank_3"]=="ประจำกีฬา")
	$sport=1;
else
	$sport=0;

$sql="INSERT INTO wantstaff (id,first,second,third,sport)
VALUES
('$id','$_POST[listPositionRank_1]','$_POST[listPositionRank_2]','$_POST[listPositionRank_3]','$sport')";

if (!mysql_query($sql,$link))
{
	die('Errorตำแหน่งซึ่งประสงค์จะทำ: ' . mysql_error());
 }
//else echo "ตำแหน่งซึ่งประสงค์จะทำ 1 record added";
//---------------------------อันดับการเลือกประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา ----------------------------------------------------------
if($_POST["listPositionRank_1"]=="ประจำกีฬา"||$_POST["listPositionRank_2"]=="ประจำกีฬา"||$_POST["listPositionRank_3"]=="ประจำกีฬา"){
	$sql="INSERT INTO sport (id,1stcountry,1stsport,2ndcountry,2ndsport,3rdcountry,3rdsport)
	VALUES
	('$id','$_POST[listCountry_1]','$_POST[listSport_1]','$_POST[listCountry_2]','$_POST[listSport_2]','$_POST[listCountry_3]','$_POST[listSport_3]')";

	if (!mysql_query($sql,$link))
	 {
 		 die('Errorอันดับการเลือกประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา: ' . mysql_error());
	 }
	//else echo "อันดับการเลือกประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา 1 record added";
}

//---------------------------committee ----------------------------------------------------------
$sql="INSERT INTO committee (id)
VALUES
('$id')";

if (!mysql_query($sql,$link))
{
	die('Error committee: ' . mysql_error());
 }
//else echo "committee 1 record added";
}//if sql ทั้งหมด
	?>
<p><center>


<div id="no_print">
<input type="image" src="image1/print1pp.jpg"  id=button1 name=button1 onClick="window.print();" >
</div>

        </center>






</body>
</html>
