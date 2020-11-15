function berekenPrijs() {
	var waterValue = document.getElementById("waterbeheer").value;
	var CDValue = document.getElementById("CD").value;
	var duurzaamValue = document.getElementById("duurzaam").value;
	var land = document.getElementById("country").value;
	var verzendPerStuk;
	land = land.toLowerCase() 
	
	var water = Math.abs(parseInt(waterValue)) || 0;
	var CD = Math.abs(parseInt(CDValue)) || 0;
	var duurzaam = Math.abs(parseInt(duurzaamValue)) || 0;

	var totaalAantal = water + CD + duurzaam;
	
	if (totaalAantal <= 3) {
		if (["belgië", "belgie", "belgium"].includes(land.toLowerCase().trim())) {
			verzendPerStuk = 0;
		} else {
			verzendPerStuk = 20;
		}
		document.getElementById("verzendKostenTekst").innerHTML = "en verzendkosten*";
	} else {
		verzendPerStuk = -1;
		document.getElementById("verzendKostenTekst").innerHTML = ", excl. verzendkosten*";
	}
	
	verzendingKost = verzendPerStuk * totaalAantal;
	
	var kostprijsWater = 20 * water;
	var kostprijsCD = 10 * CD;
	var kostprijsDuurzaam = 20 * duurzaam;
	
	var uitvoer = kostprijsWater + kostprijsCD + kostprijsDuurzaam + verzendingKost;
	
	if (verzendingKost == -1) {
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
	

	document.getElementById("waterbeheer").value = water;
	document.getElementById("CD").value = CD;
	document.getElementById("duurzaam").value = duurzaam;
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