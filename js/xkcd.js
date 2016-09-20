function displayHowManyNumbers() {
    var dihmn = document.getElementById('number_quantity');
    var inputChecked = document.getElementById('numbers');
    if (inputChecked.checked == true) {  
      dihmn.style.display = 'inline'; 
    } else { 
      dihmn.style.display = 'none'; 
    }
}

function displayHowManySymbols() {
    var dihmn = document.getElementById('symbol_quantity');
    var inputChecked = document.getElementById('symbols');
    if (inputChecked.checked == true) {  
      dihmn.style.display = 'inline'; 
    } else { 
      dihmn.style.display = 'none'; 
    }
}