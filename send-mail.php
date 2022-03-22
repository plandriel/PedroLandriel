<?
$Name=$_POST['name'];
$Email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$body .= "Nombre: " . $Name . "\n";
$body .= "Email: " . $Email . "\n";
$body .= "Asunto: " . $subject . "\n";
$body .= "Mensaje: " . $message . "\n";
//replace with your email
mail("info@pergaminoit.com.ar","Del sitio web",$body);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Su mensaje fue enviado. Gracias!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=https://pergaminoit.com.ar/index.html">
</head>