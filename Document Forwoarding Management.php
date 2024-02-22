<?php
// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Forwarding_Date = $_POST['fordate'];
	$Bank_Name = $_POST['bankname'];
    $Bank_Address = $_POST['bankadd'];
	$Lc_No = $_POST['lcno'];
	$LC_Date = $_POST['lcdate'];
	$Exchange_Of_Usd = $_POST['exchangeusd'];
	$USD_In_WARDS = $_POST['usdinwards'];
	
	$LC_Term = $_POST['lcterm'];
	$Pay_Bank = $_POST['payorderto'];
	$Applicant_Name = $_POST['applicantname'];
	$Applicant_Address = $_POST['applicantaddress'];
	$PI_No = $_POST['pino'];
	$PI_DATES = $_POST['pidate'];
	
	$Sales_Contact = $_POST['salescontact'];
	$Sales_Contact_date = $_POST['salescontactdate'];
	$HS_CODE = $_POST['hscode'];
	$Applicant_VAT_Reg = $_POST['applicantvat'];
	$IRC_NO = $_POST['ircno'];
	$Beneficiary_Vat = $_POST['beneficiaryvat'];
	$Issuing_Bank_Bin = $_POST['issuingbankbin'];
	
	
	
	
	if(isset($_POST['sl']) && is_array($_POST['sl'])) {
        foreach($_POST['sl'] as $value) {
		}
		
	}
	
	
		if(isset($_POST['particulars']) && is_array($_POST['particulars'])) {
        foreach($_POST['particulars'] as $particulars) {
		}
		
	}
	
	
	
		if(isset($_POST['quantity']) && is_array($_POST['quantity'])) {
        foreach($_POST['quantity'] as $quantity) {
		}
		
	}
	
	
	
	
	
	
	
	
	

    // Display the form data
    echo "<h2>Your Information:</h2>";
    echo $Forwarding_Date;
	echo $Bank_Name;
    echo $Bank_Address;
	echo $Lc_No;
	echo $LC_Date;
	echo $Exchange_Of_Usd;
	echo $USD_In_WARDS;
	echo $LC_Term;
	echo $Pay_Bank;
	echo $Applicant_Name;
	echo $Applicant_Address;
	echo $PI_No;
	echo $PI_DATES;
	echo $Sales_Contact;
	echo $Sales_Contact_date;
	echo $HS_CODE;
	echo $Applicant_VAT_Reg;
	echo $IRC_NO;
	echo $Beneficiary_Vat;
	echo $Issuing_Bank_Bin;
	echo $value;
	echo $particulars;
	echo $quantity;
	
	
	
	
	
	

	
} else {
    // If form data has not been submitted, redirect back to the form page
    header("Location: form.php");
    exit;
}



?>













<html>




<head>
<title>Document Forwarding Management</title>



 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="forwarding.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>

</head>




<body>

<!-----------------------------------------------------Bill OF Exchange------------------------------------------------------>
<div class="full-page">
<div class="bill-of-exchange">





			<div class="exchange-heade">
			BILL OF EXCHANGE

			</div>

			<div class="exchange-head-date">
				<table>
				<tbody>
				<tr>
				<td><?php echo $Forwarding_Date;?></td>
				</tr>
				</tbody>
				</table>
			</div>
			<br>
			<br>

			<div class="drawn-under">
			Drawn Under <?php echo $Bank_Name;?>, <?php echo $Bank_Address;?>.
			</div>


			<div class="Lc-other">
							
							<tr>
							<td>LC NO-</td>
							<td class="lc-no"><?php echo $Lc_No;?></td>
							</tr>
							<br>
							<tr>
							<td>Date:</td>
							<td><?php echo $LC_Date;?></td>
							</tr>
							<br>
							<br>
							<tr>
							<td>Exchange of USD.</td>
							<td><?php echo $Exchange_Of_Usd;?></td>
							</tr>
							
			</div>




			<br>
			<br>
			<br>







			<div class="main-content">


				<tr><td><?php echo $LC_Term;?></td></tr>&nbsp; From the date of Acceptance of the First of Exchange (Second of the same tenor and date being Unpaid) Pay to order of &nbsp; <tr><td><?php echo $Pay_Bank;?>,</td></tr> &nbsp; <tr><td>Agrabad Branch, Chittagong, Bangladesh.</td></tr> &nbsp;The Sum of USD-<tr><td><?php echo $Exchange_Of_Usd;?></td></tr> &nbsp;<tr><td>(<?php echo $USD_In_WARDS;?>)Only</td></tr> &nbsp;for value received and charge the same to account of &nbsp;<tr><td><?php echo $Applicant_Name;?>. CEPZ, Chattogram, Bangladesh.</td></tr> &nbsp;As per our Proforma Invoice No-<tr><td><?php echo $PI_No;?></td></tr>&nbsp;Date-<tr><td><?php echo $PI_DATES;?></td></tr>&nbsp; Import under back to back basis against Export Sales Contract No:<tr><td><?php echo $Sales_Contact;?></td></tr>&nbsp; Date.<tr><td><?php echo $Sales_Contact_date;?>,</td></tr>&nbsp; H.S. CODE NO-<tr><td><?php echo $HS_CODE;?></td></tr>&nbsp;, Applicants Vat Reg. No.<tr><td><?php echo $Applicant_VAT_Reg;?></td></tr>&nbsp;, IRC NO.<tr><td><?php echo $IRC_NO;?></td></tr>&nbsp;,Beneficiary's Vat No.<tr><td><?php echo $Beneficiary_Vat;?></td></tr>&nbsp;, Issuing Bank Bin No.<tr><td><?php echo $Issuing_Bank_Bin;?></td></tr>.






			</div>








			<div	class="footer-data">



							<div class="foot-to-bank">
							To
							<br>
							<tr><td><?php echo $Bank_Name;?></td></tr>
							<br>
							<tr><td><?php echo $Bank_Address;?></td></tr>
							<br>
							<tr><td>61, Jublee Road, Chattogram, Bangladesh</td></tr>
							</div>








							<div class="foot-authorization">
							For-
							<br>
							<tr><td>NAMIRAH TRIM & PACKAGING LTD.</td></tr>
							<br>
							<br>
							<br>
							<br>
							(Authorized Signature)
							</div>






			</div>














































</div>
</div>
<br>
<!-----------------------------END------------------------Bill OF Exchange------------------------------------------------------------------------------->






<!-----------------------------------------Delivery Challan-------------------------------------------------------------------------------------------->

<div class="full-page">
<div class="Delivery-Challan">



							<div class="letterhead-name">
							<h3>NAMIRAH TRIM & PACKAGING LTD.</h3>
							</div>
							<div class="letterhead-address">
							South Kattali<br>
							Chittagong, Bangladesh<br>
							Phone:01715107094
							</div>
<br>

							<div class="challananddate-maindiv">

										<div class="challanno">
											Challan No:26/2024
										</div>
										
										<div class="Challan-date">
										Date:<?php echo $Forwarding_Date;?>
										</div>




							</div>
							

<br>
<br>




							<div class="delivery-challan-title">
							Delivery Challan
							</div>


<br>



							<div class="letterbasic-data">
							
														<div class="send-to">
														To<br>
														Thianis Apparels Ltd.<br>
														CEPZ,Chattagram<br>
														Bangladesh.
														</div>
														
														
														<div class="notify-party">
														Notify Party:<br>
														Thianis Apparels Ltd.<br>
														CEPZ,Chattagram<br>
														Bangladesh.
														</div>
							
							
														<div class="other-basic">
														L/C No-<?php echo $Lc_No;?><br>
														Date-14/01/2024<br>
														Consignee To<br>
														<?php echo $Bank_Name;?>,<br>
														Chattagram Corporate<br>
														<?php echo $Bank_Address;?><br>
														Chattagram, Bangladesh.
														</div>
							
							
							
							
							
							
							
							</div>
							
							
							
							
							
<br>
<br>


							<div class="product-particulars-table">
							THIS IS PRODUCT TABLE DATA
							
							</div>











<div class="last-closer">
<p>Remarks :This Goods are delivered, Imported Under back to back basis against Export Sales Contract No:    Date.     ,   H.S.CODE NO.   , Applicants Vat Reg. No.     , IRC No.    , Beneficiary's Vat No.    , Issuing Bank Bin No.<br>
The Goods are of Bangladeshi origin.</p>
</div>


<br>






											<div class="receiver-declaration-main">
											
													<div class="received-goods">
													Received the goods in good condition
													</div>
													
													
													<div class="delivered-by">
													Delivered by
													</div>
													
													<div class="store-officer">
													Store Officer
													</div>
											
											
											
											
											
											</div>

<br>
<br>
<br>







										<div class="sign-auth">
														<div class="Signature-of-receiver-for-delivery-challan">
														Signature of receiver
														</div>
										
														
														
														
														
														<div class="Authorized-signature-for-delivery-challan">
														Authorized Signature
														</div>
										
										
										</div>
							







































</div>
</div>

<!----------------------END--------------------------------------Delivery Challan-------------------------------------------------------------------------------------------->



<!------------------------------------------------------------Truck Challan-------------------------------------------------------------------------------------------->

<div class="full-page">
<div class="Delivery-Challan">

								<div class="truckchallan-heading">
										<div><p><h1>NISHI PORIBAHAN</h1></p><p>South Kattali<br>Chittagong, Bangladesh<br> Phone: 01715107094</p>
										
										<p><h2>TRUCK CHALLAN</h2></p>
										
										
										
										</div>
							
								
								
								
								</div>
								
								
								
								
								<div class="truckchallan-truckno">
								
										<div class="truckno-dhk-metro">Dhk metro- Ta-16-1032</div>
										
										<div class="truckno-drivername">Driver Name: Dider</div>
								
										<div class="truckchallan-date">Date : <?php echo $Forwarding_Date;?></div>
								
								
								
							    </div>
								
								
								
								
								
								
								
								
								<div class="beneficiary-notify-lcno">
								
								
										<div class="truck-challan-beneficiary">
										 TO,<br>
										 Thiansi Apparels Ltd.<br>
										 CEPZ, Chattagram, Bangladesh.
										</div>
										
										
										<div class="truck-challan-notifyparty">
										<b>Notify Party</b> :<br>
										Thiansi Apparels Ltd.<br>
										CEPZ, Chattagram, Bangladesh.
										</div>
										
										
										
										<div class="truck-challan-lcno">
										<b>L/C No-</b><?php echo $Lc_No;?><br>
										Date-14-01-2024<br>
										Consignee To<br>
										<b><?php echo $Bank_Name;?></b><br>
										<?php echo $Bank_Address;?>
										</div>	
								
								
								
								
								
								</div>









								<div class="truck-challan-middle-content-description">
								Please receive the following goods we are delivered against your inland Letter of Credit No-050524270003 Date-14-01-2024 <?php echo $Bank_Name;?>, Chattagram Corporate Branch, 61, Jublee Road, Chattagram, Bangladesh.The goods are delivered according to the specification of our Pro-forma Invoice No-N.T.P.L/PI/NOVE-15/2023 Date-21/1/2023
								
								
								</div>










								<div class="truck-challan-product-details" contenteditable="true">
								Shajjad
								
								
								
								
								
								</div>
								
								
								
								
								
								
								<div class="truck-challan-footer-remarks" contenteditable="true">
								<b>Remarks :</b>This goods are delivered Import under back to back basis against Export Sales Contract No-TAL/BT/2023/01 Date.04-01-2023
								
								
								
								
								
								</div>
								
								
								
								
								
								<div class="truck-challan-footer-Freight-delivery-Nishiporibahan">
										<div class="footer-freight">
										Freight : Prepaid
										</div>
										
										<div class="footer-delivery">
										Delivered by
										</div>
										
										<div class="footer-for">
										For<br>Nishi Poribahan<br><br><br><br>Authorized Signature
										</div>
								
								
								
								
								
								</div>




























</div>
</div>

<!------------------------END------------------------------------Truck Challan-------------------------------------------------------------------------------------------->
<br>








<!------------------------------------------------Packing List----------------------------------------------------------------------------------------------------------->
<div class="full-page">
<div class="Delivery-Challan">



						<div style="margin-left:220px; width:400px; height:auto; text-align:center; background-color:ffffff; box-shadow:rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
						
										<div><h2>Namirah Trim</h2>
										479/B, PRANHARIDAS ROAD, SOUTH KATTALI, CHITTAGONG, BANGLADESH.<br>Phone:031-2502349, Email:shanimapoly@gmail.com</div>
										<br>
										
										<div><h2>PACKING LIST</h2></div>
						
						
						
						
						
						
						
						
						</div>









						<div style="margin-top:5px;width:700px;height:auto;margin-left:35px;">
						<div style="float:right;">Date-15.01.2024</div>
						
						</div>

						<br>






						<div style="margin-top:20px;width:700px;height:170px;margin-left:35px;background-color:ffffff;box-shadow:rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
						
								<div style="width:300px;float:left;">
								To<br>
								Thianis Apparels Ltd. CEPZ,
								Chattagram, Bangladesh.
								
								</div>
						
						
						
						
								<div style="width:300px;float:right;margin-right:-33px;">
								L/C NO-050524270003<br>
								Date-14-01-2024<br>
								Consignee To<br>
								Bangladesh Krishi Bank,<br>Chattagram Corporate Branch, 61, Jublee Road, Chattagram, Bangladesh.
								
								</div>
						
						
						
						
						
						
						</div>







					
					
					
					
						<div style="width:700px; margin-top:5px; margin-left:35px; height:auto; background-color:ffffff;box-shadow:rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;" contenteditable="true">
						
									
	<table id="incrementable-table" class="demo" contenteditable="true">
	<caption></caption>
	<thead>
	<tr>
		<th class="small-th">SL NO.</th>
		<th class="medium-th">Particulars</th>
		<th class="large-th">Quantity</th>
		
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		
	</tr>
	</tbody>
</table>
    

    <script src="script.js"></script>
						
						
						
						</div>
						
						
						
						
						
						
						
						
						
						<div style="margin-top:2px;width:680px; height:auto; margin-left:38px; background-color:ffffff;box-shadow:rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;" contenteditable="true">
						
						
						Packing :150pkg
						<br>
						<br>
						The Goods are of Bangladeshi origin.
						<br>
						<br>
						Remarks: This goods are delivered import under back to back basis against Export Sales Contract No:TAL/BT/2023/01 Date.04-01-2023, H.S. CODE NO.6217.10.00, Applicants Vat Reg No.002223155-0503, IRC No. C-357/217, Beneficiary's Vat No.000105136-0503, Issuing Bank Bin No.000874702-0202.<br><br>
						
						TOTAL NET WEIGHT=3921.00Kg, Gross Weight=3951.00Kg
						<br>
						<br>
						
					    Pro-forma Invoice No. N.T.P.L/PI/NOVE-15/2023 Date-21/11/2023
						
						
						
						
						
						
						
						
						
						
						</div>
					
					
					
					
					


















</div>
</div>

<!--------------END------------------------------Packing List------------------------------------------------------------------------------------------------------------>






<!-------------------------------COMMERCIAL INVOICE----------------------------------------------------------------------------------------------------------------------->
<div id="comfullpage">
<div id="commain">

					
					<div class="comm-header-main">
					<h2>NAMIRAH TRIM & PACKAGING LTD.</h2>
					479/B, PRANHARIDAS ROAD, SOUTH KATTALI, CHITTAGONG, BANGLADESH.<br>
					Phone:031-2502349, Email:shanimapoly@gmail.com
					<br>
					<br>
					<h2>COMMERCIAL INVOICE</h2>
					</div>
					
					
					
					
					
					
					
					<div class="comm-main-content">
					
													<div style="width:700px;height:auto;box-shadow: rgba(0, 0, 0, 0) 0px 1px 3px 0px, rgba(27, 31, 35, 0) 0px 0px 0px 1px;">
													
													
													
													
																			<div style="width:290px;height:auto;box-shadow: rgba(0, 0, 0, 1) 0px 1px 3px 0px, rgba(27, 31, 35, 1) 0px 0px 0px 1px; float:left; padding:15px;">
																			
																			shajjad
																			</div>
													
													
																			<div style="width:350px;height:auto;box-shadow: rgba(0, 0, 0, 1) 0px 1px 3px 0px, rgba(27, 31, 35, 1) 0px 0px 0px 1px; float:right; padding:15px;">
																			
																				
																				
																				
																				
																			
																			
																			
																			</div>
																		
																		
																		
																		
																		
																		
																		
																		
													
													
													
													

					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					</div>


























</div>
</div>

<!---------------------------------END------------------------COMMERCIAL INVOICE----------------------------------------------------------------------------------->


<div>



 































</div>


















































<!------------------------------------------------------------------JAVASCRIPT--------------------------------------------------------------------------->


<button id="saveAsPDFButton">Save as PDF</button>  <button onclick="addRow()">Add Row For PRODUCT</button>

    <script>
        document.getElementById("saveAsPDFButton").addEventListener("click", function() {
            // Hide the save button
            var saveButton = document.getElementById("saveAsPDFButton");
            saveButton.style.display = "none";
            
            // Prompt user to confirm page size
            var pageSize = prompt("Please enter the page size for the PDF (e.g., 'A4', 'Letter'):", "A4");
            if (!pageSize) {
                // If the user cancels the prompt, stop the process and show the button again
                saveButton.style.display = "block";
                return;
            }

            // Get the element containing the content you want to convert to PDF
            var element = document.body;
            
            // Options for the PDF generation
            var opt = {
                margin:       0,
                filename:     'saved_page.pdf',
                image:        { type: 'jpeg', quality: 1 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: pageSize, orientation: 'portrait' }
            };

            // Start the PDF generation process
            html2pdf().from(element).set(opt).save();

            // Restore the visibility of the save button after PDF generation
            saveButton.style.display = "block";
        });
    </script>





 

































</body>










</html>




