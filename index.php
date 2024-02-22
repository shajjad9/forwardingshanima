<!DOCTYPE html>
<html>
<head>
    <title>Form Data Display</title>

<style>

.form-for-data{
	margin-top:30px;
	margin-left:100px;
	width:960px;
	height:auto;
	padding:30px;
	border-radius:1px;
	background-color:#f4f3f7;
	box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
	
	
}



			input[type=text] {
			width: 300px;
			padding: 12px 20px;
			margin: 1px 0px;
			display: block;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 4px;
		 
			
}














</style>	
	
	
	
	
	
	
	
	
	
	
</head>
<body style="background-color:#fff;">


<div style="width:950px;height:90px; margin-left:125px;">
		
		

		<div style="float:left;width:300px;">
		<div><img style="width:100px; height:75px;" src="ledgerbd.png"></div>
		
		Your trusted business solution provider
		
		</div>
		
		
		<div style="float:right;width:300px;">
		Address :115; Singapore market; Hazipara; Agrabad
		Chittagong; Bangladesh.<br>
		Phone :+88 0182-0279296 Email:shajjad94hossain@mail.com<br>
		www.ledgerbd.com
		</div>



</div>

<hr>
<hr>

<div style="width:950px;height:auto; margin-left:125px;">
<h1 style="color:#c2782c">SHANIMA GROUP</h1>


</div>









<div class="form-for-data">
<h2>EXPORT FORWARDING DATA ENTRY</h2>
<form id="myForm" method="post" action="Document Forwoarding Management.php">
    Forwarding Date : <input type="text" name="fordate"><br><br>
	Bank Name: <input type="text" name="bankname"><br><br>
    Bank Address: <input type="text" name="bankadd"><br><br>
	L/C NO: <input type="text" name="lcno"><br><br>
	L/C DATE: <input type="text" name="lcdate"><br><br>
	Exchange Of USD: <input type="text" name="exchangeusd"><br><br>
	USD In WARDS: <input type="text" name="usdinwards"><br><br>
	L/C Term: <input type="text" name="lcterm"><br><br>
	Pay To Order Bank Name: <input type="text" name="payorderto"><br><br>
	Applicant Name: <input type="text" name="applicantname"><br><br>
	Applicant Address: <input type="text" name="applicantaddress"><br><br>
	PI NO: <input type="text" name="pino"><br><br>
	PI DATE: <input type="text" name="pidate"><br><br>
	Sales Contact No: <input type="text" name="salescontact"><br><br>
	Sales Contact date: <input type="text" name="salescontactdate"><br><br>
	H.S CODE: <input type="text" name="hscode"><br><br>
	Applicant VAT Reg: <input type="text" name="applicantvat"><br><br>
	IRC NO: <input type="text" name="ircno"><br><br>
	Beneficiary Vat: <input type="text" name="beneficiaryvat"><br><br>
	Issuing Bank Bin: <input type="text" name="issuingbankbin"><br><br>
	
	
	
<h2>Product Details</h2>

<table id="dataTable">
    <tr>
        <th>SL NO.</th>
        <th>Particulars</th>
        <th>Quantity</th>
    </tr>
    <tr>
        <td><input type="text" name="sl[]"></td>
        <td><input type="text" name="particulars[]"></td>
		<td><input type="text" name="quantity[]"></td>
        <td><button onclick="deleteRow(this)">Delete</button></td>
		
		
    </tr>
</table>




	
	
    <input type="submit" name="submit" value="Submit">
	<input type="button" value="Clear Form" onclick="clearForm()">
</form>

<br>
<br>
<button onclick="addRow()">Add Row</button>





</div>













<script>
function addRow() {
    var table = document.getElementById("dataTable");
    var row = table.insertRow(); // Insert a new row at the end of the table

    // Insert cells into the new row
    var cell1 = row.insertCell(0); // Insert a cell at index 0
    var cell2 = row.insertCell(1); // Insert a cell at index 1
	var cell3 = row.insertCell(2); // Insert a cell at index 2
    var cell4 = row.insertCell(3); // Insert a cell at index 3
	

    // Add input fields to the cells
    cell1.innerHTML = '<input type="text" name="sl[]">';
    cell2.innerHTML = '<input type="text" name="particulars[]">';
	cell3.innerHTML = '<input type="text" name="quantity[]">';
    cell4.innerHTML = '<button onclick="deleteRow(this)">Delete</button>';
	
}

function deleteRow(button) {
    var row = button.parentNode.parentNode; // Get the parent row of the button
    row.parentNode.removeChild(row); // Remove the row from the table
}




</script>











<script>
function clearForm() {
    document.getElementById("myForm").reset();
}
</script>














<footer style="margin-left:105px; margin-top:10px; width:1030px;"><p>If You Think! Your Business Need To Be Automated Like : Business Daily Documentation, Shipping Data Automation, Garments Accessories Business Automation,Coresponding, Accounting, Reporting, Sales Targeting , Import Automation, Export Automation. <span style="color:orange; font-family:Georgia (serif);">ledgerbd</span> Will Be Best Fit. Why? - We Litsen Your Need And Create<span style="color:red; font-weight:bold; font-family:Georgia (serif);"> An Unique </span> Customized Software For Your Business, Who Make your Task 100% Easy And Reliable.</p>&copy; Copyright 2024 Designed BY <span style="color:orange; font-family:Georgia (serif);">ledgerbd</span></footer>

</body>
</html>
