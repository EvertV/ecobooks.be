<!doctype html>

<html lang="nl">
	<head>
		<meta charset="utf-8">

		<title> Validatie | Ecobooks</title>
		<meta name="description" content="<beschrijving>">
		<meta name="author" content="Hugo Vanderstadt">
		
		<link rel="shortcut icon" href="../favicon.ico" />
		
		<link rel="stylesheet" href="../css/style.css?v=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
					<li><a href="../publicaties.html">Verschenen&nbsp;publicaties</a></li>
					<li>&nbsp;|&nbsp;</li>
					<li><a href="../bestellen.html">Bestel&nbsp;publicaties</a></li>
				</ul>
			</nav>		
		</div>
	</header>

	<div id="container">
		<h1>Zijn deze gegevens correct?</h1>
		<form class="bestelformulier" action="bestelling.php" method="post" valign="top">						
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
			
			$straat = strip_tags($_POST['route']);
			$straat_nr = strip_tags($_POST['street_number']);
			$gemeente = strip_tags($_POST['locality']);
			$provincie = strip_tags($_POST['administrative_area_level_1']);
			$postcode = strip_tags($_POST['postal_code']);
			$land = strip_tags($_POST['country']);
			
			$naam = strip_tags($_POST['name']);
			$email = strip_tags($_POST['email']);
			$functie = strip_tags($_POST['functie']);
			$btw = strip_tags($_POST['btw']);
			$extra = nl2br(strip_tags($_POST['extra']));
			
			echo "Naam: <b>".$naam."</b><br>";
			echo "Email: <b>".$email."</b><br>";
			echo "Functie: <b>".$functie."</b><br>";
			echo "Adres: <b>".$straat." ".$straat_nr.", ".$postcode." ".$gemeente.", ".$provincie.", ".$land."</b><br>";
			echo "BTW nummer: <b>".$btw."</b><br>";
			echo "Extra informatie:<br><b>".$extra."</b><br>";
		?>
		<br><br>
		<table border="1" cellpadding="4" style="border:1px solid #000000;border-collapse:collapse;background-color:#EFEFEF;">
			<tr>
				<td><b>Publicatie</b></td>
				<td><b>Per stuk</b></td>
				<td><b>Aantal</b></td>
				<td><b>Kostprijs</b></td>
			</tr>
			<tr>
				<td>Gemeentelijk waterbeheer in het buitengebied</td>
				<td>10 EUR</td>
				<?php
				echo "<td>".$waterbeheer."</td>\n";
				echo "<td>".$kostprijsWater." EUR</td>\n";
				?>
			</tr>
			<tr>
				<td>USB-stick met alle powerpointpresentaties van de studiedag</td>
				<td>10 EUR</td>
				<?php
				echo "<td>".$cd."</td>\n";
				echo "<td>".$kostprijsCD." EUR</td>\n";
				?>
			</tr>
			<tr>
				<td>Duurzaam en Gezond Bouwen en Wonen</td>
				<td>10 EUR</td>
				<?php
				echo "<td>".$duurzaam."</td>\n";
				echo "<td>".$kostprijsDuurzaam." EUR</td>\n";
				?>
			</tr>
			<tr style="border-top-style: double;">
				<td>&nbsp;&nbsp;Verzendingskosten</td>
				<?php
				echo "<td>".$verzendPerStuk." EUR</td>\n";
				echo "<td>".$totaalAantal."</td>\n";
				echo "<td>".$verzendingKost." EUR</td>\n";
				?>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;Totaal</td>
				<td></td>
				<td></td>
				<?php
				echo "<td>".$totaalZonderBTW." EUR</td>\n";
				?>				
			</tr>
			<tr>
				<td>&nbsp;&nbsp;BTW 6%</td>
				<td></td>
				<td></td>
				<?php
				echo "<td>".$enkelBTW." EUR</td>\n";
				?>		
			</tr>
			<tr style="border-top-style: solid;">
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<b><big>TOTAAL</big></b></td>
				<td></td>
				<?php
				echo "<td><b>".$totaalAantal."</b></td>\n";
				echo "<td><b>".$totaal."</b></td>\n";
				?>
			</tr>
		</table>
		<br><br>
		
		<button class="submit" type="submit">Opsturen</button>
		
		<div style="display:none;">
			<?php		
			echo "<input type='text' name='waterbeheer' id='waterbeheer' value='".$waterbeheer."'>" ;
			echo "<input type='text' name='CD' id='CD' value='".$cd."'>";
			echo "<input type='text' name='duurzaam' id='duurzaam' value='".$duurzaam."'>" ;
			echo "<input type='text' name='totaal' id='totaal' value='".$totaal."'>" ;
			
			echo "<input type='text' name='kostprijsWater' id='kostprijsWater' value='".$kostprijsWater."'>";
			echo "<input type='text' name='kostprijsCD' id='kostprijsCD' value='".$kostprijsCD."'>";
			echo "<input type='text' name='kostprijsDuurzaam' id='kostprijsDuurzaam' value='".$kostprijsDuurzaam."'>";
			
			echo "<input type='text' name='totaalZonderBTW' id='totaalZonderBTW' value='".$totaalZonderBTW."'>";
			echo "<input type='text' name='verzendingKost' id='verzendingKost' value='".$verzendingKost."'>" ;
			echo "<input type='text' name='enkelBTW' id='enkelBTW' value='".$enkelBTW."'> ";
			echo "<input type='text' name='totaalAantal' id='totaalAantal' value='".$totaalAantal."'> ";
			echo "<input type='text' name='verzendPerStuk' id='verzendPerStuk' value='".$verzendPerStuk."'> ";
			
			echo "<input type='text' name='straat' id='straat' value='".$straat."'> ";
			echo "<input type='text' name='straat_nr' id='straat_nr' value='".$straat_nr."'> ";
			echo "<input type='text' name='gemeente' id='gemeente' value='".$gemeente."'> ";
			echo "<input type='text' name='provincie' id='provincie' value='".$provincie."'> ";
			echo "<input type='text' name='postcode' id='postcode' value='".$postcode."'> ";
			echo "<input type='text' name='land' id='land' value='".$land."'> ";
			
			echo "<input type='text' name='name' id='name' value='".$naam."'> ";
			echo "<input type='text' name='email' id='email' value='".$email."'> ";
			echo "<input type='text' name='functie' id='functie' value='".$functie."'> ";
			echo "<input type='text' name='btw' id='btw' value='".$btw."'> ";
			echo "<input type='text' name='extra' id='extra' value='".$extra."'> ";
			?>
		</div>
		
		</form>
		<p>Klik <a href="javascript: history.go(-1)">hier</a> om terug te gaan en uw gegevens opnieuw in te vullen.</p>
	
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