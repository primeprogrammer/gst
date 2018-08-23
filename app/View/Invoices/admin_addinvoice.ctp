<link rel="stylesheet" type="text/css" media="print" href="/css/print1.css" />

<link rel="stylesheet" type="text/css" media="screen" href="/css/screen.css" />

<style type="text/css">

input{
border:1px solid rgba(153, 153, 153, 0.57) !important;

}
textarea{
border:1px solid rgba(153, 153, 153, 0.57) !important;

}
.form-control{
height:43px !important;

}
</style>

<div class="content-wrapper">

<div class="row">

          <div class="col-md-12">

            <div class="card">

              <h3 class="card-title">CREATE INVOICE</h3>

              <div class="card-body">

                   <?php echo $this->Form->create('Invoice', array("method"=>"post", "enctype"=>"multipart/form-data",'id'=>'form1', 'url' => array(

    'controller' => 'Invoices', 

    'action' => 'invoice', 'admin'=>true

   

    ))); ?>

                  <div class="form-group">

                    <label class="control-label">Invoice Number</label>
                         <?php 
						 
						 $inv=++$increment;
						 ?>
                    

					 <?php echo $this->Form->input('invoiceno', array('value'=>$inv,'placeholder'=>'Enter Invoice Number','readonly'=>'readonly', 'class'=>'form-control span8','required'=>true,'label'=>false,

                                ));?>

                  </div>
				   <hr>
				  <h3>Consignee Detail</h3>
				  <hr>
                 <div class="form-group">
                    <label class="control-label"> Select Company</label>
										<?php  $company['other']='other';?>
									   <?php  echo $this->Form->input('company_name', array('class'=>'form-control company','label'=>false,'div'=>false,
													'type' => 'select', 
													'options' => $company,'empty'=>'Choose Company' 
													
												));?>
							
				 </div>
				 
				 <div class="div_hide">
				<!-- <div class="form-group">

                    <label class="control-label">GSTIN Number</label>

                    

					 <?php //echo $this->Form->input('gstin', array('type'=>'text','placeholder'=>'Enter GSTIN Number', 'class'=>'form-control gstin span8','label'=>false,

                                //));?>

                  </div>-->

				<div class="form-group">

                    <label class="control-label">Company Or Person Name</label>

                    

					 <?php echo $this->Form->input('company_name', array('type'=>'text','placeholder'=>'Enter Company Or Person Name', 'class'=>'form-control comp_name span8','label'=>false,

                                ));?>

                  </div>

				 				 

                  

                   <div class="form-group">

                    <label class="control-label">Company Or Person Address</label>

                    

					 <?php echo $this->Form->textarea('company_address', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control comp_address span8','label'=>false)); ?>

                  </div>
				   <div class="form-group">

                    <label class="control-label">Company Or Person Mobile Number</label>

                    

					 <?php echo $this->Form->textarea('consignee_mo_no', array('placeholder'=>'Enter Company Or Person Contact Number', 'class'=>'form-control  span8','label'=>false)); ?>

                  </div>
				   <div class="form-group">

                    <label class="control-label">Company Or Person GSTIN/UIN</label>

                    

					 <?php echo $this->Form->textarea('consignee_gstin', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control  span8','label'=>false)); ?>

                  </div>
				  <div class="form-group">

                    <label class="control-label">Company Or Person State</label>

                    

					 <?php echo $this->Form->textarea('consignee_state', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control  span8','label'=>false)); ?>

                  </div>
				  <div class="form-group">

                   
					 <?php echo $this->Form->input('Consignee_if_other', array('options'=>array('same'=>'same','other'=>'other'), 'class'=>'form-control consignee_if_other span8','label'=>'consignee If other Than')); ?>

                  </div>
				 
				  <div class="div_hide123">
				   <hr>
				  <h3>Buyer(If Other Than Consignee)</h3>
				  <hr>
					   <div class="form-group">

						<label class="control-label">Company Or Person Name</label>

						

						 <?php echo $this->Form->textarea('other_company_name', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control span8','label'=>false)); ?>

					  </div>
					  <div class="form-group">

						<label class="control-label">Company Or Person Address</label>

						

						 <?php echo $this->Form->textarea('other_company_address', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control span8','label'=>false)); ?>

					  </div>
					  <div class="form-group">

						<label class="control-label">Company Or Person Mobile Number</label>

						

						 <?php echo $this->Form->textarea('other_company_mo_no', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control span8','label'=>false)); ?>

					  </div>
					  <div class="form-group">

						<label class="control-label">Company Or Person GSTIN/UIN</label>

						

						 <?php echo $this->Form->textarea('other_company_gstin', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control span8','label'=>false)); ?>

					  </div>
					  <div class="form-group">

						<label class="control-label">Company Or Person State</label>

						

						 <?php echo $this->Form->textarea('other_company_state', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control span8','label'=>false)); ?>

					  </div>
					   
                  </div>
				  
				</div>
				  
				  <hr style="height: 10px;border: 0;box-shadow: 0 10px 10px -10px #8c8b8b inset;">

				  <button class="pull-right btn-danger add"> ADD MORE SERVICES</button><br>

				               <div class="round">

									<div class="form-group">
										<div class="col-xs-8">
										<label class="control-label">Product/Service Detail</label>
										<?php echo $this->Form->textarea(null, array('name'=>'data[Invoice][servicedetail][]', 'placeholder'=>'Enter Product/Service Detail', 'class'=>'form-control span8','required'=>true,'label'=>false)); ?>
										</div>
										<div class="div_hide1 col-xs-2">
											<label class="control-label">Serial Number</label>
											<?php echo $this->Form->input('serial_number.', array('type'=>'text','placeholder'=>'Serial Number', 'class'=>'form-control gstin span8','label'=>false));?>
										</div>
										<div class="col-xs-2">
										<label class="control-label">HSN/SAC</label>
										<?php echo $this->Form->textarea(null, array('name'=>'data[Invoice][hsn_sac][]', 'placeholder'=>'HSN/SAC', 'class'=>'form-control span8','required'=>true,'label'=>false)); ?>
										</div>
									</div>

								   <div class="row">

								  

									<div class="col-md-2">

									

									            <div class="form-group">

												 <label class="control-label">Quantity</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][pieces][]','id'=>'piece','placeholder'=>'Enter quantity','value'=>'1','class'=>'form-control span8','label'=>false,

												));?>

								  </div>

									  

									  

									  

									  </div>

									 

									<div class="col-md-2">

											   <div class="form-group">

												 <label class="control-label">Price</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][price][]','id'=>'price','placeholder'=>'Enter price', 'class'=>'form-control span8','required'=>true,'label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">Discount</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][discount][]','id'=>'discount','placeholder'=>'Enter discount', 'class'=>'form-control span8','label'=>false,'value'=>'0'

												));?>

								  </div>

								  

									</div>

									

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">CGST</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][CGST][]','id'=>'CGST','placeholder'=>'Enter CGST', 'class'=>'form-control span8','value'=>'0','label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">SGST</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][SGST][]','id'=>'SGST','placeholder'=>'Enter SGST', 'class'=>'form-control span8','value'=>'0','label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">IGST</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][IGST][]','id'=>'IGST','placeholder'=>'Enter IGST', 'class'=>'form-control span8','value'=>'0','label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-2">

											   <div class="form-group">

												 <label class="control-label">Total Amount</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][total_amt][]','id'=>'amt','placeholder'=>'Enter Amount', 'class'=>'form-control span8','required'=>true,'label'=>false,

												));?>

								  </div>

				  

				    </div>

					   <div class="col-md-2">

											   <div class="form-group">

												 <label class="control-label">Taxable Amount</label>

									

									 <?php echo $this->Form->input(null, array('name'=>'data[Invoice][taxable_amt][]','id'=>'tax_amt','placeholder'=>'Taxable Amount', 'class'=>'form-control span8','required'=>true,'label'=>false,

												));?>

								  </div>

				  

				    </div>

					

					

					</div>

				  

				 </div>

				 

				  <hr style="height: 10px;border: 0;box-shadow: 0 10px 10px -10px #8c8b8b inset;">

				 <div class="form-group">

                    <label class="control-label">Payment Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                    

					 <?php 
					  $options=array('Paid'=>'Paid','Unpaid'=>'Unpaid');  
								$attributes=array('legend'=>false,'separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'label'=>false, 'value'=>'Paid', 'class'=>'locRad');  
								echo $this->Form->radio('status',$options,$attributes);




                                  ?>

                  </div>

				   <div class="form-group">

                    <label class="control-label">Payment Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                    

									  
								<?php echo $this->Form->date('payment_date', array('id'=>'payment_date', 'class'=>'form-control span8 date','required'=>false,'label'=>false,

                             'style'=>'line-height:10px;'));?>




                                 
                  </div>

                
   <div class="hide1">
				  

				  <div class="form-group">

                    <label class="control-label">Payment Mode</label>

                    

					 <?php echo $this->Form->input('payment_mode', array('id'=>'payment_mode','options' => array('Cash'=>'Cash','Cheque'=>'Cheque','NEFT'=>'NEFT','RTGS'=>'RTGS','Demand Draft'=>'Demand Draft'),'empty'=>'--select--', 'class'=>'form-control span8','required'=>true,'label'=>false,

                                ));?>

                  </div>

				  

				  <div class="form-group">

                    <label class="control-label" id="label_bank">Bank</label>

                    

					 <?php echo $this->Form->input('bank', array('id'=>'bank','class'=>'form-control span8','required'=>false,'label'=>false,

                                ));?>

                  </div>



                  <div class="form-group">

                    <label class="control-label" id="label_cheque_no">Cheque Number</label>

                    

					 <?php echo $this->Form->input('cheque_number', array('id'=>'cheque_no','class'=>'form-control span8','required'=>false,'label'=>false,

                                ));?>

                  </div>

                      <div class="form-group">

                    <label class="control-label" id="label_transact_id">Transaction Id</label>

                    

					 <?php echo $this->Form->input('transactid', array('id'=>'transact_id','class'=>'form-control span8','required'=>false,'label'=>false,

                                ));?>

                  </div>

				   

				  

				   <div class="form-group">

                    <label class="control-label" id="label_cheque_date">Cheque Date</label>

                    <?php echo $this->Form->date('chequedate', array('id'=>'cheque_date', 'class'=>'form-control span8 date','required'=>false,'label'=>false,

                             'style'=>'line-height:10px;'));?>

                  </div>

				  

				  <div class="form-group">

                    <label class="control-label" id="label_cheque_clear">Cheque Clear Date</label>

                    

					 <?php echo $this->Form->date('chequecleardate', array('type'=>'date','id'=>'cheque_clear_date', 'class'=>'form-control span8  date','required'=>false,'label'=>false, 'style'=>'line-height:10px;'));?>

                  </div>

                   <div class="form-group">

                    <label class="control-label" id="label_ddnumber">Demand Draft Number</label>

                    

					 <?php echo $this->Form->input('ddnumber', array('id'=>'ddnumber', 'class'=>'form-control span8  date','required'=>false,'label'=>false, 'style'=>'line-height:10px;'  ));?>

                  </div>
				   <div class="form-group">

                    <label class="control-label" id="label_rec">Amount Receving Bank</label>

                   

					 <?php echo $this->Form->input('rec_bank', array('id'=>'rec_bank', 'class'=>'form-control span8  date','required'=>false,'label'=>false,'style'=>'line-height:10px;','type' => 'select', 
													'options' => array('Yes Bank'=>'Yes Bank','Allahabad Bank'=>'Allahabad Bank'),'empty'=>'Choose bank' 
													
												));?>

                  </div>
        </div>
                

              </div>

              <div class="card-footer">

               

				

				  <?php

          

		  echo $this->Form->button('<i class="fa fa-fw fa-lg fa-check-circle"></i>GENERATE INVOICE</i>', array(

    'type' => 'submit',

    'class' => 'btn btn-primary btn-block sub',

    'escape' => false

	

)); ?>

				

              </div>

			   <?php echo $this->Form->end(null); ?>

            </div>

          </div>

		  </div>

</div>



<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content"  style="width:800px" >

      <div class="modal-header" style="border-bottom:none !important;padding:0px;">

        <button type="button" class="btn1" data-dismiss="modal" style="border-radius:50%">&times;</button>

        

      </div>

	 

      <div class="modal-body">

	                 

						

							  </div>

							  <div class="modal-footer">

								<button type="button" class="btn btn-primary print">Print</button>

							  </div>

							</div>



						  </div>

</div>







<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!-- Latest compiled JavaScript --> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="/js/plugins/bootstrap-datepicker.min.js"></script>

   

    <script type="text/javascript" src="/js/plugins/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript" src="/js/printThis.js"></script>

     <script type="text/javascript">

            // When the document is ready
//---------------------------------------------------------------my code -------------------------------------------------------------------------------------
				$('.div_hide123').hide();
				$('.consignee_if_other').change(function(){
					if($(this).val() == 'other')
					{
						//$('.div_hide123').show();
						$('.div_hide123').slideDown();
					}
					else
					{
						$('.div_hide123').slideUp();
					}
					
					});
//----------------------------------------------------------------my code end---------------------------------------------------------------------------------
			
			function p(id){

				   id=id.substring(0,1);

					//alert($("#"+id+"price").val());

					 $cgst=0.0

					  // alert();

						  $igst=0.0;

						 $sgst=0.0;

							 if($("#"+id+"CGST").val()!=''){

												 $cgst=$("#"+id+"CGST").val();

							 

						 }

										   if($("#"+id+"IGST").val()!=''){

												 $igst=$("#"+id+"IGST").val();

							 

						 }

						  if($("#"+id+"SGST").val()!=''){

												 $sgst=$("#"+id+"SGST").val();

							 

						 }

						  $price=0.0;

					     $piece=1; $dis=0.0;

					  if($("#"+id+"piece").val()!=''){

						 $piece=$("#"+id+"piece").val();

						 

						 

					 }

					           if($("#"+id+"price").val()!=''){

												 $price=$("#"+id+"price").val();

							 

						              }

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){

						   var t=0.0;

					 if(localStorage.getItem('"'+id+'amt"')!=null){

						 t =parseFloat(localStorage.getItem('"'+id+'amt"'));

						

						

					}

					 //alert(t);

					   $amt=t;
                      
                       if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

						}
						   //$total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						     $netprice=parseFloat($amt*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						    $tax=($netprice*$total_tax)/100;
						   // $price=$price/$piece;


						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

						// $("#"+id+"amt").val($amt.toFixed(2));

						 

					 }
                   if($("#"+id+"amt").val()!='' && !$("#"+id+"amt").hasClass('backward') ){
					    if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					  $price=$price*(1-(parseFloat($dis)/100));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 //$amt=$price+$tax_amt;
					 $amt=$price;

					 $tax_amt=$piece*$tax_amt;

					 $amt=$piece*$amt;

					 $price=$piece*price;

					 

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					}

					

				}

					

				}

			function q(id){

				 id=id.substring(0,1);

					//alert($("#"+id+"price").val());

					 $cgst=0.0

					  // alert();

						  $igst=0.0;

						 $sgst=0.0;

							 if($("#"+id+"CGST").val()!=''){

												 $cgst=$("#"+id+"CGST").val();

							 

						 }

										   if($("#"+id+"IGST").val()!=''){

												 $igst=$("#"+id+"IGST").val();

							 

						 }

						  if($("#"+id+"SGST").val()!=''){

												 $sgst=$("#"+id+"SGST").val();

							 

						 }

						  $price=0.0;

					     $piece=1; $dis=0.0;

					  if($("#"+id+"piece").val()!=''){

						 $piece=$("#"+id+"piece").val();

						 

						 

					 }

					           if($("#"+id+"price").val()!=''){

												 $price=$("#"+id+"price").val();

							 

						              }

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){

						   var t=0.0;

					 if(localStorage.getItem('"'+id+'amt"')!=null){

						 t =parseFloat(localStorage.getItem('"'+id+'amt"'));

						

						

					}

					 //alert(t);

					   $amt=t;
                      
                       if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

						}
						   //$total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=parseFloat($amt*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						    $tax=($netprice*$total_tax)/100;
						    //$price=$price/$piece;


						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

						// $("#"+id+"amt").val($amt.toFixed(2));

						 

					 }
                   if($("#"+id+"amt").val()!='' && !$("#"+id+"amt").hasClass('backward') ){
					    if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					  $price=$price*(1-(parseFloat($dis)/100));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 //$amt=$price+$tax_amt;
					 $amt=$price;

					 $tax_amt=$piece*$tax_amt;

					 $amt=$piece*$amt;

					 $price=$piece*price;

					 

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					}

					

				}

					 

					

				}

				function s(id){

					//alert();

				      id=id.substring(0,1);

					//alert($("#"+id+"price").val());

					 $cgst=0.0

					  // alert();

						  $igst=0.0;

						 $sgst=0.0;

							 if($("#"+id+"CGST").val()!=''){

												 $cgst=$("#"+id+"CGST").val();

							 

						 }

										   if($("#"+id+"IGST").val()!=''){

												 $igst=$("#"+id+"IGST").val();

							 

						 }

						  if($("#"+id+"SGST").val()!=''){

												 $sgst=$("#"+id+"SGST").val();

							 

						 }

						  $price=0.0;

					     $piece=1; $dis=0.0;

					  if($("#"+id+"piece").val()!=''){

						 $piece=$("#"+id+"piece").val();

						 

						 

					 }

					           if($("#"+id+"price").val()!=''){

												 $price=$("#"+id+"price").val();

							 

						              }

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){

						   var t=0.0;

					 if(localStorage.getItem('"'+id+'amt"')!=null){

						 t =parseFloat(localStorage.getItem('"'+id+'amt"'));

						

						

					}

					 //alert(t);

					   $amt=t;
                      
                       if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

						}
						   //$total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						     $netprice=parseFloat($amt*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						    $tax=($netprice*$total_tax)/100;
						   // $price=$price/$piece;


						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

						// $("#"+id+"amt").val($amt.toFixed(2));

						 

					 }
                   if($("#"+id+"amt").val()!='' && !$("#"+id+"amt").hasClass('backward') ){
					    if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					  $price=$price*(1-(parseFloat($dis)/100));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 $amt=$price+$tax_amt;

					 $tax_amt=$piece*$tax_amt;

					 $amt=$piece*$amt;

					 $price=$piece*price;

					 

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					}

					

				}
				

					

				}
              function discount_change(id){

					  id=id.substring(0,1);

					//alert($("#"+id+"price").val());

					 $cgst=0.0

					  // alert();

						  $igst=0.0;

						 $sgst=0.0;

							 if($("#"+id+"CGST").val()!=''){

												 $cgst=$("#"+id+"CGST").val();

							 

						 }

										   if($("#"+id+"IGST").val()!=''){

												 $igst=$("#"+id+"IGST").val();

							 

						 }

						  if($("#"+id+"SGST").val()!=''){

												 $sgst=$("#"+id+"SGST").val();

							 

						 }

						  $price=0.0;

					     $piece=1; $dis=0.0;

					  if($("#"+id+"piece").val()!=''){

						 $piece=$("#"+id+"piece").val();

						 

						 

					 }

					           if($("#"+id+"price").val()!=''){

												 $price=$("#"+id+"price").val();

							 

						              }

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){

						   var t=0.0;

					 if(localStorage.getItem('"'+id+'amt"')!=null){

						 t =parseFloat(localStorage.getItem('"'+id+'amt"'));

						

						

					}

					 //alert(t);

					   $amt=t;
                      
                       if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

						}
						   //$total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						     $netprice=parseFloat($amt*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						    $tax=($netprice*$total_tax)/100;
						    //$price=$price/$piece;


						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

						// $("#"+id+"amt").val($amt.toFixed(2));

						 

					 }
                   if($("#"+id+"amt").val()!='' && !$("#"+id+"amt").hasClass('backward') ){
					    if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					  $price=$price*(1-(parseFloat($dis)/100));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 $amt=$price+$tax_amt;

					 $tax_amt=$piece*$tax_amt;

					 $amt=$piece*$amt;

					 $price=$piece*price;

					 

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					}

					

				}

					

					

				}
				function price_change(id){

					 id=id.substring(0,1);

					//alert($("#"+id+"price").val());

					

					

				//	$price=0.0;

				

				          $cgst=0.0

					   

						  $igst=0.0;

						 $sgst=0.0;

							 if($("#"+id+"CGST").val()!=''){

												 $cgst=$("#"+id+"CGST").val();

							 

						 }

										   if($("#"+id+"IGST").val()!=''){

												 $igst=$("#"+id+"IGST").val();

							 

						 }

						  if($("#"+id+"SGST").val()!=''){

												 $sgst=$("#"+id+"SGST").val();

							 

						 }

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					  $price=0.0;

					 $piece=1; $dis=0.0;

					  if($("#"+id+"piece").val()!=''){

						 $piece=$("#"+id+"piece").val();

						 

						 

					 }

					           if($("#"+id+"price").val()!=''){

												 $price=$("#"+id+"price").val();

							 

						              }
									  if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					   $price=$piece*($price*(1-(parseFloat($dis)/100)));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 $amt=$price+$tax_amt;

					

					 

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					

					

				}

				function piece_change(id){

					 id=id.substring(0,1);

					//alert($("#"+id+"price").val());

					 $cgst=0.0

					  // alert();

						  $igst=0.0;

						 $sgst=0.0;

							 if($("#"+id+"CGST").val()!=''){

												 $cgst=$("#"+id+"CGST").val();

							 

						 }

										   if($("#"+id+"IGST").val()!=''){

												 $igst=$("#"+id+"IGST").val();

							 

						 }

						  if($("#"+id+"SGST").val()!=''){

												 $sgst=$("#"+id+"SGST").val();

							 

						 }

						  $price=0.0;

					     $piece=1; $dis=0.0;

					  if($("#"+id+"piece").val()!=''){

						 $piece=$("#"+id+"piece").val();

						 

						 

					 }

					           if($("#"+id+"price").val()!=''){

												 $price=$("#"+id+"price").val();

							 

						              }

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){

						   var t=0.0;

					 if(localStorage.getItem('"'+id+'amt"')!=null){

						 t =parseFloat(localStorage.getItem('"'+id+'amt"'));

						

						

					}

					 //alert(t);

					   $amt=t;
                      
                       if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

						}
						   //$total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=parseFloat($amt*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						    $tax=($netprice*$total_tax)/100;
						   // $price=$price/$piece;


						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

						// $("#"+id+"amt").val($amt.toFixed(2));

						 

					 }
                   if($("#"+id+"amt").val()!='' && !$("#"+id+"amt").hasClass('backward') ){
					    if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					  $price=$price*(1-(parseFloat($dis)/100));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 //$amt=$price+$tax_amt;
					 $amt=$price;

					 $tax_amt=$piece*$tax_amt;

					 $amt=$piece*$amt;

					 $price=$piece*price;

					 

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					}

					

				}

			}

				

				

				function amount_change(id){

					//alert();
                      
					 id=id.substring(0,1);
                     $("#"+id+"price").attr('readonly','readonly');
                     $("#"+id+"discount").attr('readonly','readonly');
					  $("#"+id+"amt").addClass('backward');

					  $amt= $("#"+id+"amt").val();

					 // alert('"'+id+'amt"');

			   localStorage.setItem('"'+id+'amt"',$amt);

				  $igst=0.0;

				  $cgst=0.0;

						 $sgst=0.0;

									   if($("#"+id+"IGST").val()!=''){

						                     $igst=$("#"+id+"IGST").val();

						 

					 }

					    if($("#"+id+"CGST").val()!=''){

						                     $cgst=$("#"+id+"IGST").val();

						 

					 }

					 if($("#"+id+"SGST").val()!=''){

						                     $sgst=$("#"+id+"SGST").val();

						 

					 }

					

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $amt=0.0;

					          if($("#"+id+"amt").val()!=''){

										 $amt=$("#"+id+"amt").val();

							 

						       }

					 //$tax_amt=(parseFloat($price)*$total_tax)/100;

					// $amt=parseFloat($price)+$tax_amt;

					

						 $price=(parseFloat($amt)*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						//  $("#"+id+"tax_amt").attr('disabled','disabled');

						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));
						 

				}

				

				 

			

            $(document).ready(function () {
                              $("#statusUnpaid").change(function() {
					  // alert();
					        $('div.hide1').hide();
							$("div.hide1 input,div.hide1 select").each(function(){
                                                    $(this).removeAttr('required'); // This is the jquery object of the input, do what you will
                                 });
					   
					   
					   
				   });
				    $("#statusPaid").change(function() {
					  // alert();
					   $('div.hide1').show();
					   $("div.hide1 input,div.hide1 select").each(function(){
                                                    $(this).attr('required','required'); // This is the jquery object of the input, do what you will
                                 });
					   
					   
				   });
                     
				$('.div_hide').hide();
				$('.company').change(function(){
					//alert();
					if($(this).val()=='other'){
						   $('.div_hide').slideDown();
						    $('.div_hide .comp_name').val('');  
							  $('.div_hide .comp_address').val('');
							  $('.div_hide .gstin').val('');
						
						
					}
					else{
						$('.div_hide').slideUp();
											  $.ajax({
							url: "addinvoice",
							type: "post",
							dataType: "json",
							data: {company:$(this).val()} ,
							success: function (data) {
							   //console.log(data['Company']['address']);                 
                              $('.div_hide .comp_name').val(data['Company']['name']);  
							  $('.div_hide .comp_address').val(data['Company']['address']);
							  $('.div_hide .gstin').val(data['Company']['gstin']);
							}
							


						});
						
					}
					
					
					
				}
				);

				localStorage.setItem("count",0);

				$('.add').click(function(e){

				e.preventDefault();

					if(localStorage.getItem("count")!=null){

						var t =parseInt(localStorage.getItem("count"));

						localStorage.setItem("count",++t);//alert(parseInt(localStorage.getItem("count")));

						

					}

					

					else{

						localStorage.setItem("count",0);

						//alert(parseInt(localStorage.getItem("count")));

						

					}

					var id=localStorage.getItem("count");

					//alert(id);

					var s='<hr style="height: 10px;border: 0;box-shadow: 0 10px 10px -10px #8c8b8b inset;"><div class="form-group">'+
										'<div class="col-xs-8">'+
									   '<label for="service_detail">Product/Service Detail</label>'+

									   ' <input type="text" class="form-control span8"  id="'+id+'service" name="data[Invoice][servicedetail][]" placeholder="Enter product/service detail">'+
										'</div>'+
										'<div class="col-xs-2">'+
									   '<label for="service_detail">Other Service Detail</label>'+
									   ' <input type="text" class="form-control span8"  id="'+id+'serial_number" name="data[Invoice][serial_number][]" placeholder="Serial Number">'+
										'</div>'+
										'<div class="col-xs-2">'+
										'<label class="control-label">HSN/SAC</label>'+
										'<input type="text" class="form-control span8" name="data[Invoice][hsn_sac][]" placeholder="HSN/SAC" required>'+	
										'</div>'+
									  '</div>'+

									  '<div class="row">'+

									   '<div class="col-md-2"><div class="form-group">'+

									           '<label for="Pieces">Quantity</label>'+

									   ' <input type="text" class="form-control span8" value="1" placeholder="Enter quantity" name="data[Invoice][pieces][]" onkeyup="piece_change(this.id)"  id="'+id+'piece">'+

									  '</div>'+

									   

									   '</div>'+

									 '<div class="col-md-2"><div class="form-group">'+

									    '<label for="Price">Price (Per Unit)</label>'+

	 ' <input type="text" class="form-control span8"  placeholder="Enter price" onkeyup="price_change(this.id)" onkeydown="price_change(this.id)"  name="data[Invoice][price][]"'+

         	 'id="'+id+'price">'+

									  '</div></div>'+
									'<div class="col-md-1"><div class="form-group">'+

																			'<label for="Discount">Discount</label>'+

' <input type="text" class="form-control  span8"  value="0" onkeyup="discount_change(this.id)" name="data[Invoice][discount][]"'+

												 'id="'+id+'discount">'+

																		  '</div>'+
									 

									 

									 '</div>'+

									 '<div class="col-md-1"><div class="form-group">'+

									     '<label for="Tax">CGST</label>'+

									   ' <input type="text" class="form-control span8"  id="'+id+'CGST" value="0"  name="data[Invoice][CGST][]" onkeyup="q(this.id)" onkeydown="q(this.id)" placeholder="Enter CGST">'+

									  '</div></div>'+

									  '<div class="col-md-1"><div class="form-group">'+

									     '<label for="Tax">SGST</label>'+

									   ' <input type="text" class="form-control span8"  id="'+id+'SGST"  value="0" onkeyup="p(this.id)" onkeydown="p(this.id)" name="data[Invoice][SGST][]" placeholder="Enter SGST">'+

									  '</div></div>'+

									  '<div class="col-md-1"><div class="form-group">'+

									     '<label for="Tax">IGST</label>'+

									   ' <input type="text" class="form-control span8"  id="'+id+'IGST" value="0" onkeyup="s(this.id)" onkeydown="s(this.id)" name="data[Invoice][IGST][]"'+ 'placeholder="Enter CGST">'+

									  '</div></div>'+

									 '<div class="col-md-2"><div class="form-group">'+

									     '<label for="Amount">Total Amount</label>'+

	' <input type="text" class="form-control span8"  id="'+id+'amt" name="data[Invoice][total_amt][]" onkeyup="amount_change(this.id)" onkeydown="amount_change(this.id)"'+  'placeholder="Total Amount will be..">'+



									  '</div>'+

									  '</div>'+

									   '<div class="col-md-2"><div class="form-group">'+

									     '<label for="Amount">Taxable Amount</label>'+

		' <input type="text" class="form-control span8"  id="'+id+'tax_amt" name="data[Invoice][taxable_amt][]"   placeholder="Amount will be..">'+

									  '</div>'+

									  '</div>'+

									  

									  

									  

									    '</div>';

									

								 

					$('.round').append(s);

					

					

					

				});

				

				

					

				

				

				

				

				$('#cheque_no').css('display','none'); 

				$('#label_cheque_no').css('display','none'); 

				$('#bank').css('display','none'); 

				$('#label_bank').css('display','none'); 

                $('#transact_id').css('display','none'); 

				$('#label_transact_id').css('display','none'); 

                $('#cheque_date').css('display','none'); 

				$('#label_cheque_date').css('display','none'); 

                $('#cheque_clear_date').hide();		

                $('#label_cheque_clear').hide();	

                 $('#label_ddnumber').hide();
				 $('#label_rec').hide();

                 $('#ddnumber').hide();	
				  $('#rec_bank').hide();	

				

				

				

                $("input.autocompleteOff").attr("autocomplete","off");

               

								  $('#paymentdate').datepicker({

						format: "dd/mm/yyyy",

						autoclose: true,

						todayHighlight: true

					  });

            

			 $('#IGST').keyup(function(){

				

				 if($('#price').val()!=''  && $('#CGST').val()!='' && $('#amt').hasClass('backward') ){

					 $('#price').val('');

				 }

				 if($('#price').val()!='' && !$('#amt').hasClass('backward')){

					$cgst=0.0

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					    }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

					$total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					  $price=0.0;

						  $piece=1;
						   $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();

						 

								  }
								  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 $amt=$price+$tax_amt;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;

					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

				     }

				 if($('#amt').val()!='' && $('#amt').hasClass('backward') ){

					

						$cgst=0.0

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }
					 $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 }

					// alert("ig"+$igst);

						 $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						    $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						     $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							 $price=($netprice*100)/(100-$dis);

						      $tax=($netprice*$total_tax)/100;
						   //$price=$price/$piece;
                          
						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

						 

						 }

					 

					 

				 

				 

				 

				 

			 });

			  $('#IGST').keydown(function(){

				

				 if($('#price').val()!=''  && $('#CGST').val()!='' && $('#amt').hasClass('backward') ){

					 $('#price').val('');

					 

					 

					 

					 

				 }

				 if($('#price').val()!='' && !$('#amt').hasClass('backward')){

					 $cgst=0.0

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					  $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();

						 

								  }

					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
								  
                         $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 $amt=$price+$tax_amt;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;


					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

					  // $('#tax_amt').attr('disabled','disabled');

					   // $('#tax_amt').attr('disabled','disabled');

				     }

				 if($('#amt').val()!='' && $('#amt').hasClass('backward') ){

					

						$cgst=0.0

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }
                         $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 }
					// alert("ig"+$igst);
 $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						   $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						   $tax=($netprice*$total_tax)/100;
                         //$price=$price/$piece;
						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(4));

						 

						 }

					 

					 

				 

				 

				 

				 

			 });

			 $('#SGST').keyup(function(){

				 

				 if($('#price').val()!='' && !$('#amt').hasClass('backward')){

					$cgst=0.0

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					  $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();

						 

								  }

					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						 $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 //$amt=$price+$tax_amt;
					 $amt=$price;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;


					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

					  // $('#tax_amt').attr('disabled','disabled');

					    // $('#tax_amt').attr('disabled','disabled');

				     }

				 if($('#amt').val()!=''  && $('#amt').hasClass('backward') ){

					

						$cgst=0.0

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					 $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 }

						 $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						   $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						   $tax=($netprice*$total_tax)/100;
                            //$price=$price/$piece;
						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

						 

						 }

					 

					 

				 

				 

				 

				 

			 });

			  $('#SGST').keydown(function(){

				 

				 if($('#price').val()!='' && !$('#amt').hasClass('backward')){

						 $cgst=0.0

					   

						 $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					  $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();

						 

								  }

					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
								  
                         $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 $amt=$price+$tax_amt;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;

					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

					  // $('#tax_amt').attr('disabled','disabled');

					    // $('#tax_amt').attr('disabled','disabled');

				     }

				 if($('#amt').val()!='' && $('#amt').hasClass('backward') ){

					

						 $cgst=0.0

				   

				         $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					 $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 } 
					 $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						   $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						   $tax=($netprice*$total_tax)/100;
                            //$price=$price/$piece;
						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

						 

						 }

					 

					 

				 

				 

				 

				 

			 });

			  $('#CGST').change(function(){

				  //alert($('#CGST').val());

				  if($('#price').val()!='' && !$('#amt').hasClass('backward')){
					  //alert($('#CGST').val());

						 $cgst=0.0;

					   

						$igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

					$total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();

						 

								  }

					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						 $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 $amt=$price;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;

						//alert($price);
						//alert($amt);
					  $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

					   // $('#tax_amt').attr('disabled','disabled');

					    // $('#tax_amt').attr('disabled','disabled');

				     }

				 if($('#amt').val()!='' && $('#amt').hasClass('backward') ){ 

				

				   $cgst=0.0;

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					 $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 }

						 $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						   $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						   $tax=($netprice*$total_tax)/100;
						 //$price=$price/$piece;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

				 }

				  

				    });

				  $('#CGST').keyup(function(){

				  if($('#price').val()!='' && !$('#amt').hasClass('backward')){

					    $cgst=0.0;

				        $igst=0.0;

						$sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();

						 

								  }

					 
					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 $amt=$price+$tax_amt;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;


					// alert( $amt);

					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

					  // $('#tax_amt').attr('disabled','disabled');

					    // $('#tax_amt').attr('disabled','disabled');

				     }

				 if($('#amt').val()!=''&& $('#amt').hasClass('backward') ){ 

				

						   $cgst=0.0;

						   $igst=0.0;

						   $sgst=0.0;

								 if($('#CGST').val()!=''){

													 $cgst=$('#CGST').val();

								 

							      }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					 $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 }

						 $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						   $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						   $tax=($netprice*$total_tax)/100;
                         //$price=$price/$piece;
						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(4));

				 }

				  

				    });

				 

				  

		

							 

				 $('#amt').keyup(function(){

					 $(this).addClass('backward');

					 $("#price").attr('readonly','readonly');
					 $("#discount").attr('readonly','readonly');

					 

				 });

               $('#price').keyup(function(){

				  //if($('#tax_amt').val()!=''){

					 

					// if($('#IGST').val()==null){

						// $('#IGST').val()=0.0;

						 

					 //}

					     $cgst=0.0;

				   

				       $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 

					 $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();
						 

								  }

					
					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 $amt=$price+$tax_amt;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;


					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

				     //}

				 

				 

				 

				 

				 

			 });
			   $('#discount').keyup(function(){

				  //if($('#tax_amt').val()!=''){

					 

					// if($('#IGST').val()==null){

						// $('#IGST').val()=0.0;

						 

					 //}
                          if($('#amt').val()!=''&& !$('#amt').hasClass('backward') ){ 
					     $cgst=0.0;

				   

				       $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 

					 $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();
						 

								  }

					
					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					 $amt=$price+$tax_amt;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;


					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

				    }
                    if($('#amt').val()!=''&& $('#amt').hasClass('backward') ){ 

						$cgst=0.0

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					 $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 }

						 $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						   $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							$price=($netprice*100)/(100-$dis);

						   $tax=($netprice*$total_tax)/100;
                            //$price=$price/$piece;
						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						// $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));
				    

				 }
				 

				 

				 

				 

				 

			 });

			  $('#piece').keyup(function(){

				  //if($('#tax_amt').val()!=''){
                // alert();
					 

					// if($('#IGST').val()==null){

						// $('#IGST').val()=0.0;

						 

					 //}

					

						 //alert(t);

						 

					 

					   if($('#price').val()!='' && !$('#amt').hasClass('backward')){

					    $cgst=0.0;

				        $igst=0.0;

						$sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 $price=0.0;

						  $piece=1; $dis=0.0;

						  if($("#piece").val()!=''){

							 $piece=$("#piece").val();

							 

							 

						 }

						   if($("#price").val()!=''){

											 $price=$("#price").val();

						 

								  }

								  

					 
					  if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
								  
                         $price=parseFloat($price);
					    $price=$piece*($price*(1-(parseFloat($dis)/100)));
					   
					 $tax_amt=($price*$total_tax)/100;
					 
                      
					// $amt=$price+$tax_amt;
					 $amt=$price;

					 //$tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;


					// alert( $amt);

					 $('#amt').val($amt.toFixed(2));

					  $('#tax_amt').val( $tax_amt.toFixed(2));

					  // $('#tax_amt').attr('disabled','disabled');

					    // $('#tax_amt').attr('disabled','disabled');

				     }

				 if($('#amt').val()!=''&& $('#amt').hasClass('backward') ){ 

						$cgst=0.0;

				   

				    $igst=0.0;

						 $sgst=0.0;

						 if($('#CGST').val()!=''){

						                     $cgst=$('#CGST').val();

						 

					 }

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					 $piece=1;
					  if($('#piece').val()!=''){

						                     $piece=$('#piece').val();

						 

					 }
                         $dis=0.0;
                    if($("#discount").val()!=''){

											 $dis=$("#discount").val();

						 

								  }
						   $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $netprice=(parseFloat($('#amt').val())*100)/(100+$total_tax);
							$price=($netprice*100*$piece)/(100-$dis);
							//alert($price);
                            //$price=$price/$piece;
						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						// $('#tax_amt').val($tax.toFixed(2));
						$('#amt').val($('#amt').val()*$piece);
						 $('#price').val($price.toFixed(2));
				    

				 }

				 

				 

				 

				 

			 });

           $('#amt').keyup(function(){

			   $amt=$(this).val();

			   localStorage.setItem("amount",$amt);

				

			   

			   

				  $igst=0.0;

				  $cgst=0.0;

				  

						 $sgst=0.0;

									   if($('#IGST').val()!=''){

						                     $igst=$('#IGST').val();

						 

					 }

					    if($('#CGST').val()!=''){

						                     $cgst=$('#IGST').val();

						 

					 }

					 if($('#SGST').val()!=''){

						                     $sgst=$('#SGST').val();

						 

					 }

					

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						    $amt=0.0;

					          if($("#amt").val()!=''){

										 $amt=$("#amt").val();

							 

						       }

					 //$tax_amt=(parseFloat($price)*$total_tax)/100;

					// $amt=parseFloat($price)+$tax_amt;

					

						 $price=(parseFloat($amt)*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

				 

				 

				 

			 });



  			 

    $('#payment_mode').change(function(){

		

        if($('#payment_mode').val() == 'Cheque') {

		    $('#label_cheque_no').show(); 

            $('#cheque_no').show();

			$('#label_bank').show();

            $('#bank').show();

		    $('#label_cheque_date').show(); 

            $('#cheque_date').show(); 

			$('#label_cheque_clear').show();

            $('#cheque_clear_date').show(); 			

        } else if($('#payment_mode').val() == 'NEFT') {

			$('#label_transact_id').show();

             $('#transact_id').show();
			 $('#rec_bank').show();
             $('#label_rec').show();
			

			 $('#cheque_no').hide(); 

				 $('#label_cheque_no').hide(); 

				$('#bank').hide();

				$('#label_bank').hide();

               
 
                $('#cheque_date').hide(); 

				$('#label_cheque_date').hide(); 

                $('#cheque_clear_date').hide();		

                $('#label_cheque_clear').hide();	

                 $('#label_ddnumber').hide();

                 $('#ddnumber').hide();	

			

        }

		else if ($('#payment_mode').val() == 'RTGS'){

			

		    $('#transact_id').show();

			$('#label_transact_id').show();
                $('#rec_bank').show();
				$('#label_rec').show();
			 $('#cheque_no').hide(); 

				 $('#label_cheque_no').hide(); 

				$('#bank').hide();

				$('#label_bank').hide();

               

                $('#cheque_date').hide(); 

				$('#label_cheque_date').hide(); 

                $('#cheque_clear_date').hide();		

                $('#label_cheque_clear').hide();	

                 $('#label_ddnumber').hide();

                 $('#ddnumber').hide();	

			

			

		}

              else if($('#payment_mode').val()== 'Demand Draft'){

				      $('#ddnumber').show();

                     $('#label_ddnumber').show();

                     $('#cheque_no').hide(); 

					 $('#label_cheque_no').hide(); 

					$('#bank').hide();

					$('#label_bank').hide();

					$('#transact_id').hide();

					$('#label_transact_id').hide();

					$('#cheque_date').hide(); 

					$('#label_cheque_date').hide(); 

					$('#cheque_clear_date').hide();		

					$('#label_cheque_clear').hide();	

                 						 

				  

				  

			  }		

			  else{

				  

				   $('#cheque_no').hide(); 

					 $('#label_cheque_no').hide(); 

					$('#bank').hide();

					$('#label_bank').hide();

					$('#transact_id').hide();

					$('#label_transact_id').hide();

					$('#cheque_date').hide(); 

					$('#label_cheque_date').hide(); 

					$('#cheque_clear_date').hide();		

					$('#label_cheque_clear').hide();	

					 $('#label_ddnumber').hide();

					 $('#ddnumber').hide();	

				  

				  

			  }

    });

	

	

        /* $("#form1").submit(function(e){

				 

			          e.preventDefault();

					  // $("[id$='amt']").removeAttr("disabled");

					   //  $("[id$='tax_amt']").removeAttr("disabled");

			           //  $("#amt").removeAttr("disabled");

						// $("#tax_amt").removeAttr("disabled");

			 //alert($("#formOne").submit(function(){

                        $("#form1").submit();



			

			 

			

			 

			 

			 

			 });

		/*$('.print').click(function(){

		   

			

							$("#modalDiv").printThis({ 

							 

					debug: false,              

					importCSS: true,             

					importStyle: true,         

					printContainer: true,       

					loadCSS: "<?php echo $this->webroot; ?>css/print1.css", 

					            

					removeInline: false,        

					printDelay: 333,            

					header: null,             

					formValues: true          

				});

	

			

			

			

			

		});	 

				 

			*/	 

            });

        </script>		