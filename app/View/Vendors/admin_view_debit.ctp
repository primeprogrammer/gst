<!-- app/View/Services/add.ctp -->
<style type="text/css">
.form-control{
width:60%;
}
label{
font-family:roboto;	
font-size:16px;
}
.error-message{
color:red;
font-weight:bold;
}
div.success {
color: white;
background: none repeat scroll 0 0 #66cc66;
}
#flashMessage{
padding:10px;
background:#b2ffb2;
color:black;
border-radius:10px;
}
</style>
<div class="Services form" align="center">
<div class="content-wrapper">
<div class="page-title">
<div>
<h1><i class="fa fa-edit"></i>Registeration Form</h1>
<p>Register Here</p>
</div>
<div>
<ul class="breadcrumb">
<li><i class="fa fa-home fa-lg"></i></li>
<li><a href="">View Debit</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-8 col-md-offset-2">
<center> 
<div class="card">
<h3 class="card-title" style="font-family:raleway">DEBIT DETAIL</h3>
<table class="table table-striped" width='100%' style="margin:auto;">
<tbody>
	<tr>
		<th width='40%'>Vendor Name</th>
		<td width='60%'><?php echo ucfirst($debit['Debit']['vendor_name']); ?></td>
	</tr>
	<tr>
		<th width='40%'>Service Name</th>
		<td width='60%'><?php echo ucfirst($debit['Debit']['service_name']); ?></td>
	</tr>
	<tr>
		<th width='40%'>Amount</th>
		<td width='60%'><?php echo ucfirst($debit['Debit']['amount']); ?></td>
	</tr>
	<tr>
		<th width='40%'>Payment Date</th>
		<td width='60%'><?php echo $debit['Debit']['payment_date']; ?></td>
	</tr>
	<tr>
		<th width='40%'>Document/Image</th>
		<td width='60%'><?php echo ucfirst($debit['Debit']['document']); ?></td>
	</tr>
</tbody>
</table>
</div>
</center>
</div>
</div>
<div class="clearix"></div>
</div>
</div>