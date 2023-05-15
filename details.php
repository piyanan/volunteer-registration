<?

$id=$_GET['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>15th Asean University Thailand </title>
</head>


<body>
<?
include("connect.php");

//----------------------------------------personal---------------------------------------------------
$sql="select * from personalinfo where id =".$id;
$result=mysql_query($sql,$link);
$rowperson=mysql_fetch_array($result);
		print "<font face=angsanaupc><br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<font size=4><b><u>ข้อมูลทั่วไป</u></b></font>";
		
		print "<font size=4><table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td><td>ชื่อ(ภาษาไทย) : </td><td align=center><u>&nbsp " .$rowperson['fnameth'];
		print "&nbsp </u></td>";
		print "<td>นามสกุล(ภาษาไทย) : </td><td align=center><u>&nbsp " .$rowperson['lnameth'];
		print "&nbsp </u></td></tr>";
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ชื่อ(ภาษาอังกฤษ) : </td><td><u> &nbsp " .$rowperson['fnameen'];
		print "&nbsp  </u> </td>";
		print "<td>นามสกุล(ภาษาอังกฤษ) : </td><td><u> &nbsp " .$rowperson['lnameen'];
		print " &nbsp </u> </td></tr> </table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>เพศ : </td><td><u>&nbsp " .$rowperson['gender'];
		print " &nbsp </u></td> ";
		print "<td>ศาสนา : </td><td><u> &nbsp  " .$rowperson['religion'];
		print " &nbsp </u></td> ";
		print "<td>อายุ : </td><td><u> &nbsp " .$rowperson['age'];
		print " &nbsp  </u></td><td> </td> ";
		print "<td>วัน/เดือน/ปีเกิด : </td><td><u> &nbsp " .$rowperson['birthdate']."  &nbsp </u></td></tr></table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>กำลังศึกษาอยู่ที่คณะ : </td><td><u> &nbsp " .$rowperson['faculty'];
		print "&nbsp </u></td>";
		print "<td>สาขาวิชา : </td><td><u> &nbsp " .$rowperson['major'];
		print "&nbsp </u></td></tr></table> ";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ระดับการศึกษา : </td><td><u>&nbsp " .$rowperson['degree'];
		print "&nbsp </u></td> ";
		print "<td>ชั้นปีที่ : </td><td><u> &nbsp " .$rowperson['grade'];
		print " &nbsp </u></td>";
		print "<td>สถาบันการศึกษา : </td><td><u> &nbsp " .$rowperson['institution'];
		print "&nbsp </u></td></tr></table> ";
		
//---------------------------------------------address-------------------------------------------------------------------------------------------
$sql="select * from contactinfo where id =".$id;
$result=mysql_query($sql,$link);
$rowcontact=mysql_fetch_array($result);

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ที่อยู่ที่สามารถติดต่อได้ : </td> ";
		print "<td>เลขที่ </td><td><u>&nbsp " .$rowcontact['number'];
		print "&nbsp </u></td>";
		print "<td>หมู่ที่ </td><td><u>&nbsp " .$rowcontact['moo']; 
		print "&nbsp </u></td> ";
		print "<td>ถนน </td><td><u> &nbsp &nbsp " .$rowcontact['street'];
		print "&nbsp &nbsp </u></td>";
		print "<td>ซอย </td><td><u> &nbsp &nbsp " .$rowcontact['soi'];
		print "&nbsp &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>แขวง/ตำบล </td><td><u> &nbsp " .$rowcontact['tumbol'];
		print "&nbsp </u></td>";
		print "<td>อำเภอ/เขต </td><td><u> &nbsp " .$rowcontact['aumpher']; 
		print "&nbsp </u></td> ";
		print "<td>จังหวัด </td><td><u> &nbsp " .$rowcontact['province'];
		print "&nbsp </u></td>";
		print "<td>รหัสไปรษณีย์ </td><td><u> &nbsp " .$rowcontact['zipcode']." &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>เบอร์โทรศัพท์มือถือ : </td><td><u> &nbsp " .$rowcontact['mobilephone']." &nbsp </u></td> "; 
		print "<td>เบอร์โทรศัพท์บ้าน : </td><td><u> &nbsp " .$rowcontact['phone']." &nbsp </u></td></tr></table>"; 
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>E-Mail : </td><td><u> &nbsp " .$rowcontact['email']." &nbsp </u></td> "; 
		print "<td>กรณีฉุกเฉินสามารถติดต่อได้ที่หมายเลขโทรศัพท์ : </td><td><u> &nbsp " .$rowcontact['emerphone']." &nbsp </u></td></tr></table> "; 

		print "<br>";

//---------------------------------------------ความสามารถและประสบการณ์----------------------------------------------------------------------
$sql="select * from langskill where id =".$id;
$result=mysql_query($sql,$link);


		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>ความสามารถและประสบการณ์</u></b>";
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "ภาษาที่ถนัดและระดับของภาษาที่ถนัด";

		print "<br><table>";
while($rowskill=mysql_fetch_array($result))
{

		print "<tr><td >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td> ภาษา".$rowskill['lang']." &nbsp </td> <td> ระดับ ";
		print $rowskill['level']."</td></tr>";

}
print "</table><br>";

//----------------------------------------------ตำแหน่งซึ่งประสงค์จะทำ---------------------------------------------------------------------
$sql="select * from wantstaff where id =".$id;
$result=mysql_query($sql,$link);
$rowstaff=mysql_fetch_array($result);

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>เลือกตำแหน่งงานที่ของผู้สมัคร</u></b>";
		
		print "<br><form action=pass.php method=post >";

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " อันดับที่ 1 : Volunteer ";
		print  $rowstaff['first'];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " อันดับที่ 2 : Volunteer ";
		print $rowstaff['second'];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " อันดับที่ 3 : Volunteer ";
                            print $rowstaff['third'];
		//print "<br>";
		//print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		/*print "<input  type=radio name=staff value='staffother' /> ตำแหน่งที่ได้ <select name = listPositionOther>
      <option value = ''></option>
      <option value = 'ประจำกีฬา'>Volunteer ประจำกีฬา</option>
      <option value = 'ฝ่ายเทคนิคกีฬา'>Volunteer ฝ่ายเทคนิคกีฬา</option>
      <option value = 'ประสานงานทั่วไป'>Volunteer ประสานงานทั่วไปให้กับอนุกรรมการฝ่ายต่างๆ</option>
    </select>";*/

		print "<br><br>";


//----------------------------------------อันดับการเลือกประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา------------------------------------------------

//if($rowstaff['sport']==1){
$sql="select * from sport where id =".$id;
$result=mysql_query($sql,$link);
$rowsport=mysql_fetch_array($result);
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b>ประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา <u>ถ้ามี</u></b><br>";
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td> อันดับที่ 1 : &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>ประเทศ : ".$rowsport['1stcountry'];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>ชนิดกีฬา : " .$rowsport['1stsport']."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td> ";
		print "<td> อันดับที่ 2 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ประเทศ : " .$rowsport['2ndcountry'];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>ชนิดกีฬา : " .$rowsport['2ndsport']."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td> อันดับที่ 3 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>ประเทศ : ".$rowsport['3rdcountry'];
		print "&nbsp&nbsp&nbsp</td>";
		print "<td>ชนิดกีฬา : " .$rowsport['3rdsport']."</td></tr></table>";
//}
//else if($rowstaff['sport']==0){
		//print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		//print "<b>เลือกประเทศและชนิดกีฬาของ Volunteer ประจำกีฬา <u>ถ้ามี</u></b><br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b>สำหรับจัดอาสาสมัครเข้าฝ่าย<input type=text name=staff value=ต้อนรับประจำกีฬา > เลือกเสร็จแล้วกด ผ่าน</b><br>";
		print "<table><tr><td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>ประเทศ : <select name = listCountry>
      <option value = ''></option>
      <option value = 'บรูไน'>บรูไน</option>
      <option value = 'กัมพูชา'>กัมพุชา</option>
      <option value = 'อินโดนีเซีย'>อินโดนีเซีย</option>
      <option value = 'ลาว'>ลาว</option>
      <option value = 'มาเลเซีย'>มาเลเซีย</option>
      <option value = 'พม่า'>พม่า</option>
      <option value = 'ฟิลิปินส์'>ฟิลิปินส์</option>
      <option value = 'สิงคโปร์'>สิงคโปร์</option>
      <option value = 'ไทย'>ไทย</option>
      <option value = 'เวียดนาม'>เวียดนาม</option>
    </select>";
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>ชนิดกีฬา : <select name = listSport>
      <option value = ''></option>
      <option value = 'กรีฑา'>กรีฑา</option>
      <option value = 'แบดมินตัน'>แบดมินตัน</option>
      <option value = 'บาสเก็ตบอล'>บาสเก็ตบอล</option>
      <option value = 'วอลเลย์บอลชายหาด'>วอลเลย์บอลชายหาด</option>
      <option value = 'ฟุตบอล'>ฟุตบอล</option>
      <option value = 'ฟุตซอล'>ฟุตซอล</option>
      <option value = 'กอล์ฟ'>กอล์ฟ</option>
      <option value = 'คาราเต้โด'>คาราเต้โด</option>
      <option value = 'ปันจักสีลัต'>ปันจักสีลัต</option>
      <option value = 'เปตอง'>เปตอง</option>
      <option value = 'เทควันโด'>เทควันโด</option>
      <option value = 'เทเบิลเทนนิส'>เทเบิลเทนนิส</option>
      <option value = 'เทนนิส'>เทนนิส</option>
      <option value = 'โบว์ลิ่ง'>โบว์ลิ่ง</option>
      <option value = 'เซปักตะกร้อ'>เซปักตะกร้อ</option>
      <option value = 'ว่ายน้ำ'>ว่ายน้ำ</option>
      <option value = 'วอลเลย์บอล'>วอลเลย์บอล</option>
    </select></td></tr></table>";

	
//}

		print "<input type=hidden name=id value=".$id.">";
		print "<input type=hidden name=sport value=".$rowstaff['sport'].">";
		print "<p><center><input type = submit name=submit style='width:100px; height:50px' value = ผ่าน />";
		print "&nbsp &nbsp <input type = submit name=submit style='width:100px; height:50px' value = สำรอง />";
		print "&nbsp &nbsp <input type = submit name=submit style='width:100px; height:50px' value = ยังไม่พิจารณา />";
		print "<br><br></center></p></form></font></font>";
?>
</body>
</html>