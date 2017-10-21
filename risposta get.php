<html>
<head>
<title> Registrazione utente </title>
<link href="stile.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h2> Conferma della registrazione con la funzione GET </h2>
<hr />
<?php
/*
* dati trasmessi dal form
*/
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$indirizzo = $_GET["indirizzo"];
$email = $_GET["email"];
$codicefiscale = $_POST["codicefiscale"];
echo "La richiesta di $nome $cognome è stata registrata. <br />";
echo "con l'indirizzo di casa $indirizzo. <br />";
echo "con l'indirizzo di posta elettronica $email. <br />";
echo "con il codice fiscale $codicefiscale. <br />";
echo " La rischietsa di accesso al servizio è arrivata <br / >";
echo " alle ore, date("H:i:s"), "del giorno: ", date ("d-m-Y")";
?>
</body>
</html>
