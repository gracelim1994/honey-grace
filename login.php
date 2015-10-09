

<?php

session_start();
require_once('db.php');
 

$errmsg_arr = array();
$errflag = false;
 
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
 
$username = clean($_POST['username']);
$password = clean($_POST['password']);
 

if($username == '') {
$errmsg_arr[] = 'Username missing';
$errflag = true;
}
if($password == '') {
$errmsg_arr[] = 'Password missing';
$errflag = true;
}
 

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: index.php");
exit();
}
 

$qry="SELECT * FROM user WHERE username='$username' AND password='".md5($_POST['password'])."'";
$result=mysql_query($qry);
 
 
if($result) {
if(mysql_num_rows($result) > 0) {
	
//Login Successful
session_regenerate_id();
$member = mysql_fetch_assoc($result);
$_SESSION['SESS_MEMBER_ID'] = $member['id'];
$_SESSION['SESS_FIRST_NAME'] = $member['username'];
$_SESSION['SESS_LAST_NAME'] = $member['password'];
session_write_close();
header("location: content.php");
exit();
}else {
	
//Login failed
$errmsg_arr[] = 'user name and password not found';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: index.php");
exit();
}
}
}else {
die("Query failed");
}
?>
