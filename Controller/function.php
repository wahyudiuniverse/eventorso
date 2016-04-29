<?php
include "config.php";
 // creating the database connection
$conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$db = mysql_select_db(DB_DATABASE) or die(mysql_error());

function login_form_validation($email, $pass){
	$sql = "SELECT email FROM tb_user WHERE email='$email' UNION SELECT email FROM tb_vendor WHERE email='$email'";
	$result = mysql_query($sql, $conn) or die(mysql_error());
	$r = mysql_fetch_row($result);
}
?>