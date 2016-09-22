function displayHowManyNumbers() {
    var dihmn = document.getElementById('number_quantity');
    var inputChecked = document.getElementById('add_Number');
	var ne = document.getElementById('numberError');
    if (inputChecked.checked == true) {  
    	dihmn.style.display = 'inline'; 
    } else { 
/*    reset visuals */
      dihmn.style.display = 'none';
      ne.style.display = 'none';
      document.getElementById('number_Numbers').value = '';

    }
}

function displayHowManySymbols() {
    var dihms = document.getElementById('symbol_quantity');
    var inputChecked = document.getElementById('add_Symbol');
   	var se = document.getElementById('symbolError');
    if (inputChecked.checked == true) {  
      dihms.style.display = 'inline'; 
    } else { 
/*    reset visuals */
      dihms.style.display = 'none'; 
      se.style.display = 'none';
      document.getElementById('number_Symbols').value = '';
    }
}

function showWordError() {
	var swe = document.getElementById('number_Words').value;
	console.log('hello');
	if (swe != '' && isNaN(swe)) {
		wordError.style.display = 'inline';
	}
	else {
/*    reset visuals */
		wordError.style.display = 'none';
	}
}

function showNumberError() {
	var sne = document.getElementById('number_Numbers').value;
	var ne = document.getElementById('numberError');
	if (sne != '' && isNaN(sne)) {
		ne.style.display = 'inline';
	}
	else {
/*    reset visuals */
		ne.style.display = 'none';
	}
}

function showSymbolError() {
	var sse = document.getElementById('number_Symbols').value;
	var se = document.getElementById('symbolError');
	if (sse != '' && isNaN(sse)) {
		se.style.display = 'inline';
	}
	else {
/*    reset visuals */
		se.style.display = 'none';
	}
}


