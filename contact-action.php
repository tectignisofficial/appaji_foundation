<?php
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
date_default_timezone_set('Asia/Kolkata');
$Date = date('y-m-d h:i:s');

$from = 'Enquiry <monikagore6@gmail.com>' . "\r\n";
$sendTo = 'Enquiry <'.$Email.'>';
$subject = 'Your New Password';
// $fields = array( 'name' => 'name' );
$from = 'Tectignis IT Solution: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$emailText = '
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="x-apple-disable-message-reformatting"> 
<title></title>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
<style>
    html,
body {
margin: 0 auto !important;
padding: 0 !important;
height: 100% !important;
width: 100% !important;
background: #f1f1f1;
}
* {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}
</style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
<div style="margin:50px auto;width:70%;padding:20px 0">
<div style="border-bottom:1px solid #eee">
<a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">CRM</a>
</div>
<p style="font-size:1.1em">Hi '.$fname.'</p>
<p>Please enter below password</p>
<h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;"></h2>
<p style="font-size:0.9em;">Regards,<br />Your Brand</p>
<hr style="border:none;border-top:1px solid #eee" />
</div>
</div>
</body>
</html>';

try{
foreach($_POST as $key => $value){
if(isset($fields[$key])){
  $emailText.="$fields[$key]: $value\n";
}
}
if( mail($sendTo,$subject,$emailText, "From:" .$from)){

echo"hey"

}else{
echo "eeee $sendTo $subject $emailText $from";
}
}
catch(\Exception $e){
echo "not done";
}


}
?>
