function berekenPrijs() {
	var water = document.getElementById("waterbeheer").value;
	var CD = document.getElementById("CD").value;
	var duurzaam = document.getElementById("duurzaam").value;
	var land = document.getElementById("country").value;
	var verzendPerStuk;
	land = land.toLowerCase() 
	
	var a = parseInt(water) || 0;
	var b = parseInt(CD) || 0;
	var c = parseInt(duurzaam) || 0;
	var totaalAantal = a + b + c;
	
	if (totaalAantal <= 3) {
		if (["belgië", "belgie", "belgium"].includes(land.toLowerCase().trim())) {
			verzendPerStuk = 0;
		} else {
			verzendPerStuk = 20;
		}
		document.getElementById("verzendKostenTekst").innerHTML = "en verzendkosten*";
	} else {
		verzendPerStuk = 0;
		document.getElementById("verzendKostenTekst").innerHTML = ", excl. verzendkosten*";
	}
	
	verzendingKost = verzendPerStuk * totaalAantal;
	
	var kostprijsWater = 20 * water;
	var kostprijsCD = 10 * CD;
	var kostprijsDuurzaam = 20 * duurzaam;
	
	var uitvoer = kostprijsWater + kostprijsCD + kostprijsDuurzaam + verzendingKost;
	
	if (verzendingKost == 0) {
		verzendingKost = "XX";
		verzendPerStuk = "XX"
	}

	var totaalZonderBTW = uitvoer;
	
	
	var btw = uitvoer / 100;
	btw *= 6;
	uitvoer += btw;
	uitvoer = uitvoer.toFixed(2);
	uitvoer += " EUR";
	
	
	document.getElementById('totaal').value = uitvoer;
	document.getElementById('totaalZonderBTW').value = totaalZonderBTW.toFixed(2);
	document.getElementById('enkelBTW').value = btw.toFixed(2);
	if (verzendingKost == "XX") {
		document.getElementById('verzendingKost').value = verzendingKost;
	} else {
		document.getElementById('verzendingKost').value = verzendingKost.toFixed(2);
	}
	document.getElementById('verzendPerStuk').value = verzendPerStuk;
	document.getElementById('totaalAantal').value = totaalAantal;
	
	document.getElementById('kostprijsWater').value = kostprijsWater;
	document.getElementById('kostprijsCD').value = kostprijsCD;
	document.getElementById('kostprijsDuurzaam').value = kostprijsDuurzaam;
}

function addToField(fieldName) {
	let fieldNameValue = parseInt(document.getElementById(fieldName).value) || 0;

	fieldNameValue += 1;

	document.getElementById(fieldName).value = fieldNameValue;

	berekenPrijs();
}
function removeFromField(fieldName) {
	let fieldNameValue = parseInt(document.getElementById(fieldName).value) || 0;

	fieldNameValue -= 1;

	document.getElementById(fieldName).value = fieldNameValue < 0 ? 0 : fieldNameValue;

	berekenPrijs();
}