<! doctype html>
<html>
<head>
<title> SERVER </title>
</head>
<body>
Il tuo indirizzo IP :
<?php echo ($_SERVER['REMOTE_ADDR']). "<br />" ?> <br> 
<br />
Il tuo browser Web :
<?php echo($_SERVER['HTTP_USER_AGENT']). "<br />" ?> <br>
<br />
Il tuo server Web :
<?php echo ($_SERVER['SERVER_SOFTWARE']). "<br />" ?> <br>
<br />
Il tuo server :
<?php echo ($_SERVER['SERVER_NAME']). "<br />" ?> <br>
<br />
</body>
</html>