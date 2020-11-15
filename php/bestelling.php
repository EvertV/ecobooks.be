<?php 
$waterbeheer = strip_tags($_POST['waterbeheer']);
$cd = strip_tags($_POST['CD']);
$duurzaam = strip_tags($_POST['duurzaam']);
$totaal = strip_tags($_POST['totaal']);

$kostprijsWater = strip_tags($_POST['kostprijsWater']);
$kostprijsCD = strip_tags($_POST['kostprijsCD']);
$kostprijsDuurzaam = strip_tags($_POST['kostprijsDuurzaam']);
$totaalZonderBTW = strip_tags($_POST['totaalZonderBTW']);
$verzendingKost = strip_tags($_POST['verzendingKost']);
$enkelBTW = strip_tags($_POST['enkelBTW']);
$totaalAantal = strip_tags($_POST['totaalAantal']);
$verzendPerStuk = strip_tags($_POST['verzendPerStuk']);

$straat = strip_tags($_POST['straat']);
$gemeente = strip_tags($_POST['gemeente']);
$postcode = strip_tags($_POST['postcode']);
$land = strip_tags($_POST['land']);
if (strtolower($land) == "belgië") {
	$land = "Belgie";
}
$naam = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$functie = strip_tags($_POST['functie']);
$btw = strip_tags($_POST['btw']);
$extra = nl2br(strip_tags($_POST['extra']));

$message = 
'<body style="background-color:#E7E7E7;font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;" align="center">'.
	'<div style="background-color:#FFFFFF; padding:20px;width:800px;">'.
		'<div style="background-color:#0084C1; text-align:center;color:#FFFFFF;">'.
			'<h1>Ecobooks bestelling</h1>'.
		'</div>'.
			'Naam: <b>'.$naam.'</b><br>'.
			'Email: <b>'.$email.'</b><br>'.
			'Functie: <b>'.$functie.'</b><br>'.
			'Adres: <b>'.$straat.', '.$postcode.' '.$gemeente.', '.$land.'</b><br>'.
			'BTW nummer: <b>'.$btw.'</b><br>'.
			'Extra informatie:<br><b>'.$extra.'</b><br>'.
		'<br><br>'.
		'<table border="1" cellpadding="4" style="border:1px solid #000000;border-collapse:collapse;background-color:#EFEFEF;">'.
			'<tr>'.
				'<td><b>Publicatie</b></td>'.
				'<td><b>Per stuk</b></td>'.
				'<td><b>Aantal</b></td>'.
				'<td><b>Kostprijs</b></td>'.
			'</tr>'.
			'<tr>'.
				'<td>Gemeentelijk waterbeheer in het buitengebied</td>'.
				'<td>20 EUR</td>'.
				'<td>'.$waterbeheer.'</td>'.
				'<td>'.$kostprijsWater.' EUR</td>'.
			'</tr>'.
			'<tr>'.
				'<td>USB-stick met alle powerpointpresentaties van de studiedag</td>'.
				'<td>10 EUR</td>'.
				'<td>'.$cd.'</td>'.
				'<td>'.$kostprijsCD.' EUR</td>'.
			'</tr>'.
			'<tr>'.
				'<td>Duurzaam en Gezond Bouwen en Wonen</td>'.
				'<td>20 EUR</td>'.
				'<td>'.$duurzaam.'</td>'.
				'<td>'.$kostprijsDuurzaam.' EUR</td>'.
			'</tr>'.
			'<tr style="border-top-style: double;">'.
				'<td>&nbsp;&nbsp;Verzendingskosten</td>'.
				'<td>'.$verzendPerStuk.' EUR</td>'.
				'<td>'.$totaalAantal.'</td>'.
				'<td>'.$verzendingKost.' EUR</td>'.
			'</tr>'.
			'<tr>'.
				'<td>&nbsp;&nbsp;Totaal</td>'.
				'<td></td>'.
				'<td></td>'.
				'<td>'.$totaalZonderBTW.' EUR</td>'.
			'</tr>'.
			'<tr>'.
				'<td>&nbsp;&nbsp;BTW 6%</td>'.
				'<td></td>'.
				'<td></td>'.
				'<td>'.$enkelBTW.' EUR</td>'.
			'</tr>'.
			'<tr style="border-top-style: solid;">'.
				'<td>&nbsp;&nbsp;&nbsp;&nbsp;<b><big>TOTAAL</big></b></td>'.
				'<td></td>'.
				'<td><b>'.$totaalAantal.'</b></td>'.
				'<td><b>'.$totaal.'</b></td>'.
			'</tr>'.
		'</table>'.
	'</div>'.
'</body>';

$to      = 'ecobooks@scarlet.be';       
$subject = 'Ecobooks: Bestelling van '. strip_tags($_POST['name']); 
$from    = strip_tags($_POST['email']);   

$headers  = "From: " . $from . "\r\n"; 
$headers .= "Reply-To: ". $from . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 

if(mail($to, $subject, $message, $headers)) 
{ 
echo 'SUCCESS'; 
} 
else 
{ 
echo 'OEPS'; 
} 

?>

<!-- place your own success html below -->
<!doctype html>

<html lang="nl">
	<head>
		<meta charset="utf-8">

		<title> Verzonden | Ecobooks</title>
		<meta name="description" content="<beschrijving>">
		<meta name="author" content="Hugo Vanderstadt">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="../favicon.ico" />
		
		<link rel="stylesheet" href="../css/style.css?v=1.0">

		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

<body>
	<header id="banner">
		<div class="banner-inner">
			<span class="ecobooks"><a href="../index.html"><img src="../i/logo_klein.png" alt="Ecobooks logo">Ecobooks</a></span>
			<nav id="nav">
				<ul>
					<li><a href="../bestellen.html">Bestel publicaties</a></li>
				</ul>
			</nav>
		</div>		
	</header>

	<div id="container" style="text-align:center;">
		<h3>Bedankt voor uw bestelling</h3>
		<p>Uw bestelling is verzonden en wordt zo spoedig mogelijk behandeld.</p>
	</div>

	<footer id="footer">
		<p>
			<br>
			<script>
         var dt = new Date();
         document.write(dt.getFullYear() ); </script> &copy; Ecobooks 
			<br>
			<br>
			<b>Verwante links</b>
			<br>
			<a href="http://www.eco-housing.be/" TARGET="_blank">Eco Housing</a> 
			<br>
			<a href="http://www.hetautonomehuis.be/" TARGET="_blank">Het Autonome Huis</a> 
			<br>
			<a href="https://www.hugovanderstadt.be/" TARGET="_blank">hugovanderstadt.be</a> 
		</p>
	</footer>

</body>