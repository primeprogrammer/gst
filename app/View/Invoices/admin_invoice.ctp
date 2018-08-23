
<!---------------------------------------------------------Print Model begin----------------------------------------------------------------------->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
 <style>
	  @media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  .modal-header, .modal-footer, #btnPrint
  {
	  display:none;
	   visibility:hidden;
  }
  #printThis, #printThis * {
    visibility:visible;
  }
  #printThis {
  
  }
  .float_left
  {
	  float:left !important;
  }
  .col-md-4
  {
	  width:40%;
  }
  .col-md-6
  {
	  width:50%;
	   float:left !important;
  }
   .container
	{
		margin-top:4%;
	}
	.row1
	{
		padding:0% 1.5%;
	}
		
}
.container
{
	margin-top:4%;
	padding:5%;
	
}
 </style>
<!---------------------------------------------------------Print Model end----------------------------------------------------------------------->

<div class="container" id="printThis">
	<div class="row" style="">
	<div class="float_left col-md-offset-1 col-md-4">
	<?php echo $this->html->image('logo1.png',array('alt'=>'Logo')); ?>
	</div>
	<div class="float_left col-md-2">
	<h1><b>INVOICE</b></h1>
	</div>
	<div class="float_left col-md-4" style="text-align:right;">
	<h4><b>GSTIN</b>:-09ASVPM6216DIZF<h4>
	<h4><b>PAN NO</b>:-ASVPM6216D<h4>
	</div>

	</div>

	<hr>
	<div class="row" style="">
		<div class="col-md-offset-0 col-md-6">
		<h4><b>Customer Name:</b><?php echo $data1['Invoice']['company_name']; ?>
		</h4>
		<h6>(<?php echo $data1['Invoice']['company_name'].','.$data1['Invoice']['address']; ?>)</h6>
		</div>
		<div class="col-md-6">
		<h4><b>Invoice No</b>:-<?php echo $data1['Invoice']['invoiceno']; ?><h4>
		<h4><b>Invoice Date</b>:-<?php echo date_format(date_create($data1['Invoice']['created']),'h:i A D,M d,Y'); ?><h4>
		</div>
	</div>
	<div class="row row1" style="">
		<h4><b>GSTIN</b>:-<?php echo $data1['Invoice']['gstin']; ?><h4>
	</div>
	<div class="row row1" style="">
		 <table class="table table-bordered">
			<thead>
			   <tr>
		<th  rowspan="2">S.no.</th>
		<th  rowspan="2">Product</th>
		<th  rowspan="2">HSN/SAC</th>
		<th  rowspan="2">Qty</th>
		<th  rowspan="2">Rate</th>
		<th  rowspan="2">Total</th>
		<th  rowspan="2">Discount</th>
		<th  rowspan="2">Gross</th>
		<th colspan="2">CGST</th>
		<th colspan="2">SGST</th>
		<th colspan="2">IGST</th>
	  </tr>
	  <tr>
		<th>Rate</th>
		<th>Ammount</th>
		<th>Rate</th>
		<th>Ammount</th>
		<th>Rate</th>
		<th>Ammount</th>
	  </tr>
			</thead>
			
			<tbody>
				<?php $count=1; foreach($data1['Invservice'] as $data2):?>
				  <tr>
				  <td><?php echo $count; ?></td>
					<td><?php echo $data2['service_detail']; ?></td>
					<td>00440452</td>
					<td><?php echo $data2['quantity']; ?></td>
					<td><?php echo $data2['price']; ?></td>
					<td><?php echo $inn_val[]=$data2['total_amt']; ?></td>
					<td><?php echo $data2['discount']; ?></td>
					<td><?php echo $gross[]=$data2['total_amt']-$data2['taxable_amt']; ?></td>
					<td><?php echo $data2['cgst'].'%'; ?></td>
					<td><?php echo $tax_amt[]=$data2['cgst']*($data2['total_amt']-$data2['taxable_amt'])/100; ?></td>
					<td><?php echo $data2['sgst'].'%'; ?></td>
					<td><?php echo $tax_amt[]=$data2['sgst']*($data2['total_amt']-$data2['taxable_amt'])/100; ?></td>
					<td><?php echo $data2['igst'].'%'; ?></td>
					<td><?php echo $tax_amt[]=$data2['igst']*($data2['total_amt']-$data2['taxable_amt'])/100; ?></td>
				  </tr>
				 <?php $count++; endforeach; ?>
			</tbody>
		  </table>
	</div>
	<div class="row" style="">
		<div class="col-md-6">
		<h4>Term & Conditions</h4>
			<p><b>1.</b>  To be made payable to Prime Programmer</p>
			<p><b>2.</b>  Payment should be advance.</p>
			<p><b>3.</b>   Charges and any other fees for the use of our services are described above.</p> 
			<p><b>Note:</b><b>This is computer generated invoice, hence no signature required</b></p>
		</div>
		<div class="col-md-6">
			 <table class="table table-bordered">
				  <tr>
					<th>Gross Value</th>
					<td><?php echo array_sum($gross); ?></td>
				  </tr>
				   <tr>
					<th>Tax</th>
					<td><?php echo array_sum($tax_amt); ?></td>
				  </tr>
				  <tr>
					<th>Invoice Value</th>
					<td><?php echo array_sum($inn_val); ?></td>
				  </tr>
				 
				  <tr>
					<th>Invoice Value(In Words)</th>
					<td><?php echo convertNumber(intval(array_sum($inn_val))) ?></td>
				  </tr>
			  </table>
		</div>
	</div>
	<div class="row" style="">
		<div class="col-md-6">
			<p><b class="lightcolor">ADDRESS</b><p>
			<p class="lightcolor">UGF-6, Sai  Plaza, Kanchana Bihari Marg Kalyanpur Lucknow(Uttar Pradesh-226022)<br></p>
			<p><b class="lightcolor" >Email.</b> marketing@primeprogrammer.com<br><br>
			<b class="lightcolor">Mobile:</b><span class="mob"> +918004387168, +918795202855</span></p>
		</div>
		<div class="col-md-6">
			<h4 style="text-align:center;"><i>Prime Programmer<i></h4>
			
		</div>
	</div>
	<div class="row" style="text-align:center">
	<button id="btnPrint" type="button" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print</button>
	</div>
</div>
<script>
	document.getElementById("btnPrint").onclick = function () {
    window.print();
}

</script>

<?php 
//-------------------------------------------------Number to Word Converter Function----------------------------------------------------
function convertNumber($num) {
  $count = 0;
  global $ones, $tens, $triplets;
  $ones = array(
    '',
    ' One',
    ' Two',
    ' Three',
    ' Four',
    ' Five',
    ' Six',
    ' Seven',
    ' Eight',
    ' Nine',
    ' Ten',
    ' Eleven',
    ' Twelve',
    ' Thirteen',
    ' Fourteen',
    ' Fifteen',
    ' Sixteen',
    ' Seventeen',
    ' Eighteen',
    ' Nineteen'
  );
  $tens = array(
    '',
    '',
    ' Twenty',
    ' Thirty',
    ' Forty',
    ' Fifty',
    ' Sixty',
    ' Seventy',
    ' Eighty',
    ' Ninety'
  );

  $triplets = array(
    '',
    ' Thousand',
    ' Million',
    ' Billion',
    ' Trillion',
    ' Quadrillion',
    ' Quintillion',
    ' Sextillion',
    ' Septillion',
    ' Octillion',
    ' Nonillion'
  );
  return convertNum($num);
}

/**
 * Function to dislay tens and ones
 */
function commonloop($val, $str1 = '', $str2 = '') {
  global $ones, $tens;
  $string = '';
  if ($val == 0)
    $string .= $ones[$val];
  else if ($val < 20)
    $string .= $str1.$ones[$val] . $str2;  
  else
    $string .= $str1 . $tens[(int) ($val / 10)] . $ones[$val % 10] . $str2;
  return $string;
}

/**
 * returns the number as an anglicized string
 */
function convertNum($num) {
  $num = (int) $num;    // make sure it's an integer

  if ($num < 0)
    return 'negative' . convertTri(-$num, 0);

  if ($num == 0)
    return 'Zero';
  return convertTri($num, 0);
}

/**
 * recursive fn, converts numbers to words
 */
function convertTri($num, $tri) {
  global $ones, $tens, $triplets, $count;
  $test = $num;
  $count++;
  // chunk the number, ...rxyy
  // init the output string
  $str = '';
  // to display hundred & digits
  if ($count == 1) {
    $r = (int) ($num / 1000);
    $x = ($num / 100) % 10;
    $y = $num % 100;
    // do hundreds
    if ($x > 0) {
      $str = $ones[$x] . ' Hundred';
      // do ones and tens
      $str .= commonloop($y, ' and ', '');
    }
    else if ($r > 0) {
      // do ones and tens
      $str .= commonloop($y, ' and ', '');
    }
    else {
      // do ones and tens
      $str .= commonloop($y);
    }
  }
  // To display lakh and thousands
  else if($count == 2) {
    $r = (int) ($num / 10000);
    $x = ($num / 100) % 100;
    $y = $num % 100;
    $str .= commonloop($x, '', ' Lakh ');
    $str .= commonloop($y);
    if ($str != '')
      $str .= $triplets[$tri];
  }
  // to display till hundred crore
  else if($count == 3) {
    $r = (int) ($num / 1000);
    $x = ($num / 100) % 10;
    $y = $num % 100;
    // do hundreds
    if ($x > 0) {
      $str = $ones[$x] . ' Hundred';
      // do ones and tens
      $str .= commonloop($y,' and ',' Crore ');
    }
    else if ($r > 0) {
      // do ones and tens
      $str .= commonloop($y,' and ',' Crore ');
    }
    else {
      // do ones and tens
      $str .= commonloop($y);
    }
  }
  else {
    $r = (int) ($num / 1000);
  }
  // add triplet modifier only if there
  // is some output to be modified...
  // continue recursing?
  if ($r > 0)
    return convertTri($r, $tri+1) . $str;
  else
    return $str;
}
//-----------------------------------------------End Of Number to Word Converter Function-----------------------------------------
?>