<!---------------------------------------------------------Print Model begin----------------------------------------------------------------------->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
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
  .modal-header, .modal-footer, #btnPrint, #backbutton
  {
	  display:none;
	   visibility:hidden;
  }
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 3px !important;
    line-height: 1 !important;
	font-size:12px !important;
	border:1px solid #080808 !important;
	
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
  .float_right
  {
	  float:right !important;
  }
  .col-xs-4
  {
	  width:40%;
  }
  .col-xs-6
  {
	  width:50%;
	   float:left !important;
  }
  .noborder{
      border: none!important;
}

 	
}
.float_left
  {
	  float:left !important;
  }
  .float_right
  {
	  float:right !important;
  }
 .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 3px;
    line-height: 1;
	font-size:14px;
	border:1px solid #080808;
 }
 .noborder{
      border: none!important;
}
p {
    margin: 0px 0 2px;
} 
 </style>
<!---------------------------------------------------------Print Model end----------------------------------------------------------------------->

<div class="container" id="printThis">
<div class="row">
  <div class="col-md-offset-1 col-md-10">
  <div class="row">
  <div class="col-xs-6 col-sm-6"><h3 class="text-right" style="font-size:18px;">GST - INVOICE</h3></div><div class="col-xs-4 col-sm-4" style="padding-top: 20px;"><p class="text-right">(ORIGINAL FOR RECIPIENT)</p></div></div>

  <div class="row">
  <table class="table table-bordered" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td colspan="5" rowspan="3"><b><?=$data3['Setting']['company_name']; ?></b></br><?php echo ucfirst($data3['Setting']['address']); ?><br>Contact: <?php echo '+91'.$data3['Setting']['contact_number']; ?>
		<br>E-mail:<?php echo $data3['Setting']['email']; ?>
		<br>GSTIN:<?php echo $data3['Setting']['gstin']; ?>

 		</td>
        <td colspan="3">Invoice No.<br><b><?php echo $data1['Invoice']['invoiceno']; ?></b></td>
	<td colspan="4">Dated<br><b> <?php echo date('d-M-Y',strtotime($data1['Invoice']['payment_date'])); ?></b></td>
      </tr>
	  <tr>
        <td colspan="3">Delivery Note.<br><br></td>
	<td colspan="4"> Model/Terms of Payment<br><br></td>
      </tr>
	  <tr>
        <td colspan="3">Supplier's Ref.<br><b><?php //echo $data1['Invoice']['invoiceno']; ?></b></td>
	<td colspan="4">Other Reference(s)<br><br></td>
      </tr>
	  <tr>
        <td colspan="5" rowspan="3"><p>(Consignee)</p><b><?=$data1['Invoice']['company_name']; ?></b><br><?=$data1['Invoice']['address']; ?><br>Mo. No.:<?=$data1['Invoice']['consignee_mo_no']; ?> <br>GSTIN/UIN : <?=$data1['Invoice']['consignee_gstin']; ?> <br>State Name: <?=$data1['Invoice']['consignee_state']; ?><br> </td>
        <td colspan="3">Buyer's Order No.<br><br></td>
	<td colspan="4">Dated<br><br></td>
      </tr>
	  <tr>
        <td colspan="3">Despatch Document No.<br><br></td>
	<td colspan="4"> Delivery Note Date<br><br></td>
      </tr>
	  <tr>
        <td colspan="3">Despatched Through.<br><br></td>
	<td colspan="4">Destination<br><br></td>
      </tr>
	  <tr>
        <td colspan="5">
	<p>Buyer(If Other Than Consignee)</p>
	<?php if($data1['Invoice']['Consignee_if_other'] == 'same')
	{ echo '<b>'.$data1['Invoice']['company_name'].'</b><br>'.$data1['Invoice']['address'].'<br>Mo. No.:'.$data1['Invoice']['consignee_mo_no'].'<br>GSTIN/UIN : '.$data1['Invoice']['consignee_gstin'].'<br>State Name: '.$data1['Invoice']['consignee_state']; }	
	else { echo '<b>'.$data1['Invoice']['other_company_name'].'</b><br>'.$data1['Invoice']['other_company_address'].'<br>Mo. No.:'.$data1['Invoice']['other_company_mo_no'].'<br>GSTIN/UIN : '.$data1['Invoice']['other_company_gstin'].'<br>State Name: '.$data1['Invoice']['other_company_state']; }	?>
	<br> </td>
        <td colspan="7">Term of Delivery </td>
      </tr>
	  
	    <tr>
	  <td colspan="11" >
	    <table class="table table-bordered"  cellpadding="0" cellspacing="0" width="100%" height="100%" style="margin-bottom: -4px;
    margin-top: -4px;
    margin-left: -4px;">
	<tr>
	<td width="1%" align="center"><b>Sl.No.</b></td>
	<td width="65%"><b>Description Of Goods</b></td>
	<td width="5%" align="center"><b>HSN/SAC</b></td>
	<td width="1%" align="center"><b>Qty.</b>&nbsp;&nbsp;</td>
	<td width="12%" align="center"><b>Rate</b></td>
	
	<td width="2%" align="center"><b>Disc</b></td>
	<td align="center" width="10%"><b>Amount</b></td>
	
	</tr>
	<tr style="height:255px !important;">
	
	<td>
	<?php $cc=1; $sgst_avg=$cgst_avg=0; foreach($data1['Invservice'] as $data): ?>
	<p><?=$cc.'<br><br>'; ?></p>
	<?php $cgst_avg+=$data['cgst']/count($data1['Invservice']); ?>
	<?php $sgst_avg+=$data['cgst']/count($data1['Invservice']); ?>
	<?php $cc++; endforeach; ?>
	
	
	</td>
	<td >
	<?php foreach($data1['Invservice'] as $data): ?>
	<p>
	<b><?=$data['service_detail']; ?></b><br/>&nbsp;&nbsp;
	<i>SL NO <?=$data['serial_number'];?></i>	
	</p>
	
	<?php endforeach; ?>
	<td><?php foreach($data1['Invservice'] as $data): ?>
	<p><?=$data['hsn_sac']; ?></p><br>
	<?php endforeach; ?>	</td>
	<td><?php $count=0; foreach($data1['Invservice'] as $data): ?>
	<p><b><?=$data['quantity']; ?> No</b></p><br>
	<?php $count++; endforeach; ?></td>
	<td><?php foreach($data1['Invservice'] as $data): ?>
	<p><i class="fa fa-inr"></i><?=$data['price']; ?></p><br>
	<?php endforeach; ?>
	</td>
	<td><?php foreach($data1['Invservice'] as $data): ?>
	<p><?=$data['discount']; ?></p><br>
	<?php endforeach; ?></td>
	<td><?php $price=$tam_amt=$Total_amt=0; $ccc=1; 
	$Total_tax=0;
	foreach($data1['Invservice'] as $data): ?>
	<p><i class="fa fa-inr"></i><?php echo ($data['price']-$data['price']*$data['discount']/100); 
	   $price+=($data['price']-$data['price']*$data['discount']/100); ?>
	</p><br>
	<?php $tam_amt+=$data['taxable_amt']/2;
	$Total_amt+=$data['price'];
	$Total_tax+=$data['taxable_amt'];
	?>
	<?php $ccc++; endforeach ?>
	</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>
	<p class="text-right" style="vertical-align:bottom !important"><b>Sub Total</b></p>
	
	<p align="right"><b>CGST @ <?=$cgst_avg; ?>%</b></p><p align="right"><b>SGST @ <?=$sgst_avg; ?>%</b></p><p align="right"><b><i>Round Off(+/-)</i></b></p>
	</td>
	
	
	<td>
	
	</td>
	<td>
		
	</td>
	<td>
	
	
	<!--<p><?php //=$cgst_avg.' %'; ?></p>
	<p><?php //=$sgst_avg.' %'; ?></p>-->
	
	</td>
	
	<td>
	    
	</td>
	<td>
	
	<b><i class="fa fa-inr"></i><?=$price; ?></b><p><i class="fa fa-inr"></i><?=$tam_amt; ?></p>
	<p><b><i class="fa fa-inr"></i><?=$tam_amt; ?></b></p>
                <?php 
	$totl=0;
	 $totl=$price+($tam_amt*2);
	  $totl=$totl-$Total_amt;
	 //echo ;
	     if($totl<1) echo "<i>(".number_format($totl,2).")</i>";
		 else echo "<i>0.00</i>";
	//echo $Total_amt;//explode() 	?>	
	</td>
	</tr>
	
	<tr>
	<td></td>
	<td><b>Total</b></td>
	<td></td>
	<td><b><?=$count ?> No</b></td>
	<td ></td>
	<td ></td>
	
	
	<td><i class="fa fa-inr"></i> <?php echo intval($Total_amt+$Total_tax); ?></td>
	</tr>
	</table>
	</td>
	
	</tr>
	<tr>
	<td colspan="11" >Amount Chargeable (in word)&nbsp;<b>INR <?=convertNumber(intval($Total_amt)); ?> Only</b></td>
	</tr>
	<tr>
	<th rowspan="2" colspan="5" width="23%" class="text-center"><b>HSN/SAC</b></td>
	<th rowspan="2" width="10%" class="text-center"><b>Taxable Amt.</b></td>
	<th colspan="2" width="12%" class="text-center"><b>Central Tax</b></td>
	<th colspan="2" width="12%" class="text-center"><b>State Tax</b></td>
	<th rowspan="2" width="12%" class="text-center"><b>Total </br>Tax Amount</b></td>
	</tr>
	<tr>
	<th class="text-center">Rate</td>
	<th class="text-center">Amount</td>
	<th class="text-center">Rate</td>
	<th class="text-center">Amount</td>
	</tr>
	<tr>	
	<?php $total_tax_amt=$toatal_price=$toatal_taxable_amt=0; $counter=1; 
	//pr($data4);die;
	foreach($data4 as $data): 
	
	?>
	
	<?php // if($data['hsn_sac']==$tmphsn){ ?>
	<td colspan="5" class="text-center"><?php echo $data['Invservice']['hsn_sac']; ?></td>
	<td><i class="fa fa-inr"></i><?php echo number_format($data[0]['total'],2); $toatal_price+=$data[0]['total']; ?></td>
	<td><?php echo $data['Invservice']['cgst']; ?>%</td>
	<td><i class="fa fa-inr"></i><?php  $tttcgst=$data['0']['tottaxable_amt']/2; 
	  echo number_format($tttcgst,2);
	
	$toatal_taxable_amt+=$data['0']['tottaxable_amt']/2; ?></td>
	<td><?=$data['Invservice']['sgst']; ?>%</td>
	<td><i class="fa fa-inr"></i><?php $tttsgst=$data['0']['tottaxable_amt']/2;
                                        echo number_format($tttsgst,2);	?></td>
	<td><i class="fa fa-inr"></i><?php echo number_format($data['0']['tottaxable_amt'],2);
	$total_tax_amt+=$data['0']['tottaxable_amt']; ?></td>
	<?php //} ?>
	</tr>
	<?php 
	
	$counter++; endforeach; ?>
	
	<tr>
	<th colspan="5" class="text-right">Total</th>
	<th><i class="fa fa-inr"></i><?=number_format($toatal_price,2); ?></th>
	<th></th>
	<th><i class="fa fa-inr"></i><?=number_format($toatal_taxable_amt,2); ?></th>
	<th></th>
	<th><i class="fa fa-inr"></i><?=number_format($toatal_taxable_amt,2); ?></th>
	<th><i class="fa fa-inr"></i><?=number_format($total_tax_amt,2); ?></th>
	</tr>
	<tr >
	 <td colspan="12">Tax Amount (in word): &nbsp;<b> INR <?php echo convertNumber1(intval(round($total_tax_amt))); ?> Only </b><br/>
	<div style="float:right; margin-right:70px;">
	<p><b>Company's Bank Details:</b></p>
	 <p>Bank Name:<b><?=$data3['Setting']['bank_name']; ?></b></p>
	 <p>A/c No.:<b><?=$data3['Setting']['account_no']?></b></p>
	 <p><?=$data3['Setting']['branch_ifs'] ?></p>
	</div>	</td>
	</tr>	
          <tr>
	  <td colspan="6" ><p>Company's PAN :<span>&nbsp;&nbsp;&nbsp;&nbsp;</span><b><?=$data3['Setting']['pan_number']; ?></b></p> 
	  
	  <p><u>Declaration</u></p>
	  <p><?=htmlspecialchars_decode($data3['Setting']['term_condition']); ?></p>	  </td>
	<td colspan="6"> <br><p align="center">For <b><?=$data3['Setting']['company_name']; ?></b><br><br>(<b>Signature</b>)</p></td>
         </tr>	
    </tbody>
  </table>
  
  <div class="text-center" style="margin-top:-18px;" >This is Computer Generated Invoice</div>
  </div>
  
  </div>
<div class="col-md-1"></div>
</div>
<div class="row" style="text-align:center">
	<button onclick="window.history.back();" type="button" id="backbutton" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> Back</button>
	<button id="btnPrint" type="button" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print</button>
	
	</div>
</div>
<?php /*
<div class="container" id="printThis">
	<div class="row" style="text-align:center; padding:20px;">
	<h1><b>INVOICE</b></h1>
	<?php if(!empty($data3['Setting']['logo'])) { echo $this->html->image('logo/'.$data3['Setting']['logo'],array('alt'=>'Logo','width'=>'200px;','height'=>'100px;')); }
	else { echo '<h1><b>'.$data3['Setting']['company_name'].'</b></h1>'; }
	?>
	</br>
	<h4 class="float_right"><b>GSTIN</b>:-<?php echo $data3['Setting']['gstin']; ?></h4>
	<h4 class="float_left"><b>PAN NO</b>:-<?php echo $data3['Setting']['pan_number']; ?></h4>
	</div>

	<hr>
	<div class="row" style="">
	<div class="col-md-offset-0 col-md-6">
	<h4><b>Customer Name:</b><?php echo $data1['Invoice']['company_name']; ?>
	</h4>
	<h6>(<?php echo $data1['Invoice']['company_name'].','.$data1['Invoice']['address']; ?>)</h6>
	<h4><b>Bill To:-</b> <?php echo ucfirst($data1['Invoice']['address']); ?>
	</h4>
	</div>
	<div class="col-md-6">
	<h4><b>Invoice No</b>:-<?php echo $data1['Invoice']['invoiceno']; ?><h4>
	<h4><b>Invoice Date</b>:-<?php echo date_format(date_create($data1['Invoice']['modified']),'h:i A D,M d,Y'); ?><h4>
	<h4><b>Shipping Address:- </b><?php echo ucfirst($data1['Invoice']['address']); ?>
	</h4>
	</div>
	</div>
	<div class="row row1" style="">
	<h4><b>GSTIN</b>:-<?php echo $data1['Invoice']['gstin']; ?><h4>
	</div>
	<div class="row row1 table-responsive" style="">
	 <table class="table table-bordered table-responsive">
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
	<th>Amount</th>
	<th>Rate</th>
	<th>Amount</th>
	<th>Rate</th>
	<th>Amount</th>
	  </tr>
	</thead>
	
	<tbody>
	<?php $count=1; foreach($data1['Invservice'] as $data2):?>
	  <tr>
	  <td><?php echo $count; ?></td>
	<td><?php echo $data2['service_detail']; ?></td>
	<td><?php echo $data2['hsn_sac']; ?></td>
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
	<?php echo htmlspecialchars_decode($data3['Setting']['term_condition']); ?>
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
	<p class="lightcolor"><?php echo $data3['Setting']['address']; ?><br></p>
	<p><b class="lightcolor" >Email.</b><?php echo $data3['Setting']['email']; ?><br><br>
	<b class="lightcolor">Mobile:</b><span class="mob"><?php echo '+91'.$data3['Setting']['contact_number']; ?></span></p>
	</div>
	<div class="col-md-6" style="padding-top:40px;">
	<h4 style="text-align:center;"><i><?php echo $data3['Setting']['company_name']; ?><i></h4>
	
	</div>
	</div>
	<div class="row" style="text-align:center">
	<button id="btnPrint" type="button" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print</button>
	</div>
</div> */ ?>
<script>
	document.getElementById("btnPrint").onclick = function () {
	document.title='<?php echo 'Invoice'.$data1['Invoice']['invoiceno']; ?>'
    window.print();
}

</script>

<?php 
//-------------------------------------------------Number to Word Converter Function----------------------------------------------------
function convertNumber($num) {
  $count = 0;
  unset($ones, $tens, $triplets);
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
  {
	 unset($GLOBALS['ones']);
	 unset($GLOBALS['tens']);
	 unset($GLOBALS['triplets']);
	 unset($GLOBALS['count']);
    return $str;
  }
}
//-----------------------------------------------End Of Number to Word Converter Function-----------------------------------------
?>

<?php 
//-------------------------------------------------Number to Word Converter Function----------------------------------------------------

function convertNumber1($num) {
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
  return convertNum1($num);
}

/**
 * Function to dislay tens and ones
 */
function commonloop1($val, $str1 = '', $str2 = '') {
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
function convertNum1($num) {
  $num = (int) $num;    // make sure it's an integer

  if ($num < 0)
    return 'negative' . convertTri1(-$num, 0);

  if ($num == 0)
    return 'Zero';
  return convertTri1($num, 0);
}

/**
 * recursive fn, converts numbers to words
 */
function convertTri1($num, $tri) {
	//unset($ones, $tens, $triplets, $count); 
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
      $str .= commonloop1($y, ' and ', '');
    }
    else if ($r > 0) {
      // do ones and tens
      $str .= commonloop1($y, ' and ', '');
    }
    else {
      // do ones and tens
      $str .= commonloop1($y);
    }
  }
  // To display lakh and thousands
  else if($count == 2) {
    $r = (int) ($num / 10000);
    $x = ($num / 100) % 100;
    $y = $num % 100;
    $str .= commonloop1($x, '', ' Lakh ');
    $str .= commonloop1($y);
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
      $str .= commonloop1($y,' and ',' Crore ');
    }
    else if ($r > 0) {
      // do ones and tens
      $str .= commonloop1($y,' and ',' Crore ');
    }
    else {
      // do ones and tens
      $str .= commonloop1($y);
    }
  }
  else {
    $r = (int) ($num / 1000);
  }
  // add triplet modifier only if there
  // is some output to be modified...
  // continue recursing?
  if ($r > 0)
    return convertTri1($r, $tri+1) . $str;
  else
    return $str;
}
//-----------------------------------------------End Of Number to Word Converter Function-----------------------------------------
?>