

<link rel="stylesheet" type="text/css" media="print" href="/css/print1.css" />

<link rel="stylesheet" type="text/css" media="screen" href="/css/screen.css" />

<?php


$data=[];
$data=$data1;
$s='<div class="container1"  style="width:800px">
	<table >
		<tr>
			<td>
				<div>
				 <img src="/img/logo1.png" style="width:164px;height:92px;" alt="" />
				</div>
			</td>
			<td class="first" align="center">
				<div><center><p class="inv">INVOICE</p></center></div>
			</td>
			<td class="gst-color" style="">
				<p class="make-small"><b>GSTIN:-</b>09ASVPM6216D1ZF</p>
				<p class="make-small"><b>PAN NO:-</b>ASVPM6216D</p>
			</td>
		</tr>
	</table>
	<table class="table1">
		<tbody>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
			<tr style="width:100%">
				<td align="left" style="width:50%;padding-right:5px;">
					<div class="new_div1">
					<p>&nbsp;</p><p><b>Customer Name:-</b>'.
					$data['Invoice']['company_name'].'</br>(<span style="font-size:12px">'.
					$data['Invoice']['address'].'</span>)</p>
					<p><b>Billing To:-</b>'.$data['Invoice']['address'].'</p>';
					$gst=$data['Invoice']['gstin'];			
if($data['Invoice']['gstin']=='')
	{
		$gst="Not Available";
	}
$s.='<p><b>GSTIN.:-</b>'.$gst.'</p>







</div>











</td>



<td>



<div>







<p><b>Invoice No:-</b>  '.$data['Invoice']['invoiceno'].'</p>



<p><b>Invoice Date:-</b>   '.date("g:i A l, F d, Y",strtotime($data['Invoice']['created'])).'</p>











</div>



</td>



</tr>







<tr class="row-space"><td colspan="2"></td></tr>	




</tbody>



</table>



<table class="table1 table2">



<thead>











<tr class="border"><th class="border">S.no.</td>



<th class="border">Product</th>



<th class="border">HSN/SAC</th>



<th class="border">Qty</th>







<th class="border">Rate</th>



<th class="border">Total</th>



<th class="border">Discount</th>



<th class="border">Gross</th>



<th>



<table class="width table2"  border="0">



<tr><th colspan="2" class="border-bottom border-right">CGST</th></tr>



<tr><th class="border-right">Rate</th><th class="border-right" >Amount</th></tr>



</table>



</th>



<th>



<table class="width table2" border="0">



<tr ><th colspan="2" class="border-bottom border-right"  >SGST</th></tr>



<tr><th class="border-right">Rate</th><th class="border-right" >Amount</th></tr>



</table>



</th>



<th >



<table class="width table2"  border="0" >



<tr><th colspan="2" class="border-bottom ">IGST</th></tr>



<tr ><th class="border-right">Price</th><th class="border-right">Amount</th></tr>



</table>



</th>



</tr>



</thead>



<tbody>';





$g_total=0.0;

$tax_value=0.0; $gross=0.0;

for($i=0;$i<count($data['Invservice']);$i++){



$price=floatval($data['Invservice'][$i]['price']);
$discount=floatval($data['Invservice'][$i]['discount']);
$quantity=intval($data['Invservice'][$i]['quantity']);
$net_price=$quantity*($price*(1-$discount/100));
$gross+=$net_price;

$g_total+=$data['Invservice'][$i]['total_amt'];

$tax_value+=$data['Invservice'][$i]['taxable_amt'];

if(!isset($data['Invservice'][$i]['cgst'])){



$data['Invservice'][$i]['cgst']=0;











}



if(!isset($data['Invservice'][$i]['sgst'])){



$data['Invservice'][$i]['sgst']=0;











}



if(!isset($data['Invservice'][$i]['igst'])){



$data['Invservice'][$i]['igst']=0;











}



$s.='<tr>



<td class="border">'.($i+1).'</td>



<td class="border">'.$data['Invservice'][$i]['service_detail'].'</td>



<td class="border">00440452</td>



<td class="border">'.intval($data['Invservice'][$i]['quantity']).'</td>







<td class="border">'.$data['Invservice'][$i]['price'].'</td>



<td class="border">'.$data['Invservice'][$i]['total_amt'].'</td>



<td class="border">'.$data['Invservice'][$i]['discount'].'</td>



<td class="border">'.number_format($net_price,2).'</td>







<td>



<table class="width table2" border="0">







<tr><td class="width1 border-bottom">'.$data['Invservice'][$i]['cgst'].'</td>';




$s.='<td class="border-left-right-bottom" >'.number_format(((($net_price)*(intval($data['Invservice'][$i]['cgst'])))/100),2).'</td></tr>



</table>



</td>



<td>



<table class="width table2" border="0">







<tr><td class="width1 border-bottom">'.$data['Invservice'][$i]['sgst'].'</td>



<td class="border-left-right-bottom" >'.number_format(((($net_price)*(intval($data['Invservice'][$i]['sgst'])))/100),2).'</td></tr>



</table>



</td>



<td>



<table class="width table2" border="0">







<tr><td class="width1 border-bottom">'.$data['Invservice'][$i]['igst'].'</td>



<td class="border-left-right-bottom" >'.number_format(((($net_price)*(intval($data['Invservice'][$i]['igst'])))/100),2).'</td></tr>



</table>



</td>







</tr>';



}

$number=round($g_total);

$no = round($number);

$point = round($number - $no, 2) * 100;

$hundred = null;

$digits_1 = strlen($no);

$i = 0;

$str = array();

$words = array('0' => '', '1' => 'one', '2' => 'two',

'3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',

'7' => 'seven', '8' => 'eight', '9' => 'nine',

'10' => 'ten', '11' => 'eleven', '12' => 'twelve',

'13' => 'thirteen', '14' => 'fourteen',

'15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',

'18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',

'30' => 'thirty', '40' => 'forty', '50' => 'fifty',

'60' => 'sixty', '70' => 'seventy',

'80' => 'eighty', '90' => 'ninety');

$digits = array('', 'hundred', 'thousand', 'lakh', 'crore');

while ($i < $digits_1) {

$divider = ($i == 2) ? 10 : 100;

$number = floor($no % $divider);

$no = floor($no / $divider);

$i += ($divider == 10) ? 1 : 2;

if ($number) {

$plural = (($counter = count($str)) && $number > 9) ? 's' : null;

$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;

$str [] = ($number < 21) ? $words[$number] .

" " . $digits[$counter] . $plural . " " . $hundred

:

$words[floor($number / 10) * 10]

. " " . $words[$number % 10] . " "

. $digits[$counter] . $plural . " " . $hundred;

} else $str[] = null;

}

$str = array_reverse($str);

$result = implode('', $str);

$points = ($point) ?$words[$point / 10] . " " .$words[$point = $point % 10] : '';



$s.='</tbody>



</table>







<table class="table1">



<tr>



<td>



<p><b>Invoice Terms</b></p>



<p><b>1.</b>  To be made payable to Prime Programmer</p>



<p><b>2.</b>  Payment should be advance.</p>



<p><b>3.</b>   Charges and any other fees for the use of <br>our services are described
above.

</p> <br>
<p><b>Note:</b><br><b>This is computer generated invoice, hence no <br>signature required</b></p>











</p>



</td>



<td  class="td-last" >



<table  class="table3">



<tr >



<td class="border-right border-bottom border" ><b>Gross Value&nbsp;&nbsp;&nbsp;<b></td>



<td class="border-bottom border">'.number_format($gross,2).'</td>



</tr>



<tr  class="border">



<td class="border-right border-bottom"><b>Tax&nbsp;&nbsp;&nbsp;</b></td>



<td class="border-bottom">'.$tax_value.'</td>



</tr>



<tr  class="border">



<td class="border-right border-bottom"><b>Invoice Value&nbsp;&nbsp;&nbsp;</b></td>



<td class="border-bottom">'.round($g_total).'</td>



</tr>



<tr  class="border">



<td class="border-right border-bottom"><b>Invoice Value(In Words)&nbsp;&nbsp;&nbsp;</b></td>



<td class="border-bottom"><p class="words-p">'. $result . '<b>Rupees Only</b> </p></td>



</tr>



<tr  class="border">



<td class="border-right border-bottom"><b>Payment Mode&nbsp;&nbsp;&nbsp;</b></td>';
$status='';
if($data['Invoice']['payment_status']=='Unpaid'){

$status="Unpaid";
}
else{
$status=$data['Invoice']['payment_type'];

}



$s.='<td class="border-bottom">'.$status.'</td>



</tr>



</table></td></tr>



<tr>



<td class="prime-add"><br><br>



<p><b class="lightcolor">ADDRESS</b><p>



<p class="lightcolor">UGF-6, Sai  Plaza, Kanchana Bihari Marg<br>Kalyanpur Lucknow



(Uttar Pradesh-226022)<br></p>



<p><b class="lightcolor" >Email.</b> marketing@primeprogrammer.com<br><br>



<b class="lightcolor">Mobile:</b><span class="mob"> +918004387168, +918795202855</span></p>



</td>



<td class="td-last"><b><i>Prime Programmer</i></b>



<br><br><br>



<b>Authorised Signatory</b>



</td>



</tr>















</table></div>';















echo $s;?>















<br><br>















<center><button class="btn btn-print">Print</button><br><br>



<button class="btn btn-back">Go Back</button>	</center>



































<br><br>		































<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>















<script type="text/javascript">















$(document).ready(function(){















$('.btn-print').click(function(){

$('head').append("<title><?php echo 'Invoice'.$data['Invoice']['invoiceno']; ?></title>");
window.print();















});











$('.btn-back').click(function(){



//window.history.back();

window.location.href="/admin/invoices/invoicelist";













});







});











</script>































































