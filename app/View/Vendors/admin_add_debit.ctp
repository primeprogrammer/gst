<!-- app/View/Agents/add.ctp -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style type="text/css">
.form-control { width:60%; }
label { 
		font-family:raleway; 
		font-size:14px;
		color:rgba(0, 0, 0, 0.69);
	  }
.error-message { 
				color:red;
				font-weight:bold;
				}
div.success {
			color: white;
			background: none repeat scroll 0 0 #66cc66;
			}
input {
		border:1px solid #ccc !important;	
	  }
textarea
	  {
		border:1px solid #ccc !important;	
	  }
</style>
<div class="Agents form" align="center">
	<div class="content-wrapper">
		<div class="page-title">
			<div>
				<h1><i class="fa fa-edit"></i>Registeration Form</h1>
				<p>Register Here</p>
			</div>
			<div>
				<ul class="breadcrumb">
					<li><i class="fa fa-home fa-lg"></i></li>
					<li><a href="">Add Vendor</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<center> 
					<div class="card" style="">
						<div><?php  echo $this->Session->flash(); ?></div>
						<h3 class="card-title" style="font-family:raleway">NEW REGISTRATION</h3>
						<hr>
						<div class="card-body" style="">
						<?php echo $this->Form->create('Debit',array('class'=>'form-horizontal','enctype'=>'multipart/form-data')); ?>            
						<div class="form-group">
						<label class="control-label col-sm-3">Select Vendor Name</label>
						<div class="col-sm-9">
						<?php $vendors['other']='other';  echo $this->Form->input('vendor_id', array('onchange'=> 'vendor_name(this.value)','class'=>'form-control','label'=>false,'div'=>false,'type' => 'select','options' => $vendors,'empty'=>'choose vendor'));?>
						</div>
						</div>
						<div id="vendor_name_other">
						</div>
						<script>
						function vendor_name(value)
						{
						//alert(value);
						if(value=='other')
						{
						document.getElementById('vendor_name_other').innerHTML = '<hr><div class="form-group"><label class="control-label col-sm-3">Name</label><div class="col-sm-9"><?php echo $this->Form->input("vendor_name",array("class"=>"form-control","label"=>false,"div"=>false,"placeholder"=>"Enter vendor name")); ?></div></div><div class="form-group"><label class="control-label  col-sm-3">Email</label><div class="col-sm-9"><?php echo $this->Form->input("vendor_email",array("type"=>"email","class"=>"form-control ","label"=>false,"div"=>false,"placeholder"=>"Enter email","type"=>"email")); ?></div></div><div class="form-group"><label class="control-label  col-sm-3">Contact Number</label><div class="col-sm-9"><?php echo $this->Form->input("vendor_contact_number",array("class"=>"form-control","label"=>false,"div"=>false,"placeholder"=>"Enter contact number")); ?></div></div><div class="form-group"><label class="control-label  col-sm-3">Address</label><div class="col-sm-9"><?php echo $this->Form->textarea("vendor_address",array("class"=>"form-control","label"=>false,"div"=>false,"placeholder"=>"Enter address")); ?></div></div><div class="form-group"><label class="control-label  col-sm-3">GSTIN Number</label><div class="col-sm-9"><?php echo $this->Form->input("vendor_gstin",array("class"=>"form-control","label"=>false,"div"=>false,"placeholder"=>"Enter GSTIN")); ?></div></div><hr>';
						}
						else
						{
						document.getElementById('vendor_name_other').innerHTML = '';
						}
						}
						</script>
						<div class="form-group">
						<label class="control-label col-sm-3">Select Service</label>
						<div class="col-sm-9">
						<?php $services['other']='other'; echo $this->Form->input('service_id', array('onchange'=> 'service_name(this.value)','class'=>'form-control','label'=>false,'div'=>false,'type' => 'select', 'options' => $services,'empty'=>'choose services')); ?>
						</div>
						</div>
						<div id="service_name_other">
						</div>
						<script>
						function service_name(value)
						{
						//alert(value);
						if(value=='other')
						{
						document.getElementById('service_name_other').innerHTML = '<hr><div class="form-group"><label class="control-label col-sm-3">Service Name</label><div class="col-sm-9"><?php echo $this->Form->input("service_name",array("class"=>"form-control","label"=>false,"div"=>false,"placeholder"=>"Enter Service name")); ?></div></div><hr>';
						}
						else
						{
						document.getElementById('service_name_other').innerHTML = '';
						}
						}
						</script>
						<div class="form-group">
						<label class="control-label  col-sm-3">Upload Invoice</label>
						<div class="col-sm-9">
						<?php echo $this->Form->input('document',array('type'=>'file','class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter contact number')); ?>
						</div>
						</div>
						<div class="form-group">
							<label class="control-label  col-sm-3">Amount</label>
							<div class="col-sm-9">
							<?php echo $this->Form->input('amount',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter amount')); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label  col-sm-3">Tax Type</label>
							<div class="col-sm-9">
							<?php echo $this->Form->input('tax_type',array('options'=>array('cgst_sgst'=>'CGST/SGST','igst'=>'IGST'),'class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter amount')); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label  col-sm-3">Tax Amount</label>
							<div class="col-sm-9">
							<?php echo $this->Form->input('tax_amount',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter amount')); ?>
							</div>
						</div>
						<div class="form-group">
						<label class="control-label  col-sm-3">Payment Date</label>
						<div class="col-sm-9">
						<?php echo $this->Form->input('payment_date',array('type'=>'text','id'=>'datepicker','class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter date')); ?>
						</div>
						</div>
						<br>
						<div class="form-group">  
						<div class="col-sm-offset-2 col-sm-9">
						<?php echo $this->Form->end(array('class'=>'btn btn-primary')); ?>
						</div></div>
						</div>
					</div>
				</center>
			</div>
		</div>
		<div class="clearix"></div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$( '#datepicker').datepicker({
dateFormat: 'yy-mm-dd'
})
setTimeout(function() {
$('#flashMessage').fadeOut('slow');
}, 3000);
});
</script>