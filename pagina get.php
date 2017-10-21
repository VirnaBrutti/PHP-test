<html>
<head>
<title> Pagina </title>
<link href="stile.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<header>
<center> <img src="phplogo.png" /> </center>
</header>
<br> <br> <br /> <br />
<center>
<nav>
<ul> 
<ul><link a href ="chisiamo.html" title="chisiamo"> Chi siamo </a></ul>
<ul><link a href ="argomenti.html" title="argomenti"> Argomenti </a></ul>
<ul><link a href ="attività.html" title="attività"> Attività </a></ul>
</ul>
</nav>
</center> 
<br> <br> <br /> <br />
<h2> Modulo di iscrizione al corso di TPS </h2>
<h4>Inserisci i tuoi dati personali e invia il modulo</h4><br />
<form action="rispostaget.php" method="get">
Nome <input type="text" name="nome" size ="20" /> <br />
Cognome <input type="text" name="cognome" size ="20" /><br />
Indirizzo<input type="text" name="indirizzo" size ="20" /><br />
Email <input type="text" name="email" size ="20" /><br />
Codice fiscale<input type="text" name="codicefiscale" size ="50" /><br />
<br />
<input type="submit" name="invio" value="Invia" />
<input type="submit" name="annulla" value="Annulla" />
</form>
</body>
</html>
