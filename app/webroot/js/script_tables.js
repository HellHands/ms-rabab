/*function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 5){							// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum Passenger per ticket is 5.");
			   
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) { 						// limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}*/

//FUNCTIONS FOR ADDING AND REMOVING ROWS IN TEACHERS' TABLE
function addRow(tableID) {	
	
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	//console.log(rowCount);
	total_teachers = +$('#total_teachers').val();
	if(rowCount < total_teachers+1){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[1].cells[i].innerHTML;					
			
		}
		console.log(row.innerHTML);				
	}else{
		 alert("Maximum Teachers Limit Reached!");
			   
	}	

	addmask();
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;	
	//console.log("Row Count = " + rowCount);
	for(var i=1; i<rowCount; i++) {
		
		var row = table.rows[i];
		//console.log("table.rows[i] = " + row);
		var chkbox = row.cells[0].childNodes[0+1];
		//console.log(chkbox);
		
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 2) {               // limit the user from removing all the fields
				//console.log(rowCount);
				alert("Cannot Remove all the teachers!");
				break;
			}else{
				table.deleteRow(i);
				rowCount--;
				i--;	
			}
			
		}
	}
}