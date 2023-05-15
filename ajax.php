<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type='text/javascript'>

function create_box(){
    var zone=document.getElementById('zone_box')
    var div=document.createElement('div');
    div.setAttribute("id","box");
    div.innerHTML=" <form action=ajax_get.php method=get> ป้อนข้อมูล <input type='text' name='textbox' > <input type=submit value=ตกลง><input type=button value=ยกเลิก onclick='delete_box()'></form>";
    zone.appendChild(div);
}


function delete_box(){
	var zone=document.getElementById('zone_box')
	var div=document.getElementById('box')
    zone.removeChild(div);
	JavaScript:fncShow();
}
</script>
</head>

<script language="JavaScript">
        function fncShow()
        {
            document.getElementById('mydiv').style.visibility = 'visible';
        }
 
        function fncHide()
        {
            document.getElementById('mydiv').style.visibility = 'hidden';
			create_box();
        }
</script>

<body>

<div id='zone_box'>
</div>
<div id="mydiv">
<a href='javascript:vod(0)' onclick='JavaScript:fncHide()'>เพิ่มช่อง</a>
</div>
</body>
</html>
