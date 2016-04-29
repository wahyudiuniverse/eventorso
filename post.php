<?php session_start();
$email = "blogger_email@gmail.com";
$pass = "password";
$blogID= urlencode("blogger_id"); // like 6304924319904337556
 
// Do Not Modify Below Code
if(!isset($_SESSION['sessionToken'])) {
 
$ch = curl_init("https://www.google.com/accounts/ClientLogin?Email=$email&Passwd=$pass&service=blogger&accountType=GOOGLE");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION ,1);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER ,1);
$result = curl_exec($ch);
$resultArray = curl_getinfo($ch);
curl_close($ch);
$arr = explode("=",$result);
$token = $arr[3];
$_SESSION['sessionToken'] = $token;
}
 
$entry = "<entry xmlns='http://www.w3.org/2005/Atom'>
 
<title type='text'>Title of blog post </title>
 
<content type='xhtml'>
 
This is testing contnetto post in blog post.
 
</content>
 
</entry>";
 
$len = strlen($entry);
 
$headers = array("Content-type: application/atom+xml","Content-Length: {$len}","Authorization: GoogleLogin auth={$_SESSION['sessionToken']}","$entry");
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.blogger.com/feeds/$blogID/posts/default");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, 1);
curl_setopt($ch, CURLOPT_POST, true);
$result = curl_exec($ch);
$ERROR_CODE = curl_getinfo($ch);
curl_close($ch);
 
echo '<pre>';
print_r($headers);
var_dump($result);
print_r($ERROR_CODE);
exit;
 
?>