/*javascript for index.php form functionality allows for additional form 
  reveals and error messages
  
  @author Sam Grise*/

/*function to display additional fieldset if checkboxElement is checked, otherwise
the field is hidden, any errors for that field are hidden, and the value of the
input in that field is reset*/
function displayHowMany(checkboxElement, quantityField, quantityInput, errorEm) {
    var dihm = document.getElementById(quantityField);
    var inputChecked = document.getElementById(checkboxElement);
	var e = document.getElementById(errorEm);
    if (inputChecked.checked == true) {  
    	dihm.style.display = 'inline'; 
    } else { 
/*    reset visuals */
      dihm.style.display = 'none';
      e.style.display = 'none';
      document.getElementById(quantityInput).value = '';

    }
}

/*function to display an error if the quantityInput has input and that
input is not a number or is 0*/
function showError(quantityInput, errorEm) {
	var quantity = document.getElementById(quantityInput).value;
	var errorElement = document.getElementById(errorEm);
	if (quantity != '' && (isNaN(quantity) || quantity=='0')) {
		errorElement.style.display = 'inline';
	}
	else {
/*    reset visuals */
		errorElement.style.display = 'none';
	}
}

/*function to display an error if the quantityInput has no input, 
is not a number, or is 0*/
function showErrorRequired(quantityInput, errorEm) {
	var quantity = document.getElementById(quantityInput).value;
	var errorElement = document.getElementById(errorEm);
	if (quantity == '' || isNaN(quantity) || quantity=='0') {
		errorElement.style.display = 'inline';
	}
	else {
/*    reset visuals */
		errorElement.style.display = 'none';
	}
}