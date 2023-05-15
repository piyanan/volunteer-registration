<?
$link = mysql_connect("localhost","root","qwerty");
	if (!$link)  {
  die("Can\'t connect : ". mysql_error());
  }

  $db_selected = mysql_select_db('university_sport', $link);
  mysql_query("SET NAMES 'window-874'");

if (!$db_selected) {
    die ('Can\'t select DB : ' . mysql_error());
}
?>