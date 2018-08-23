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

              <h3 class="card-title">EDIT INVOICE</h3>

              <div class="card-body">

                   <?php echo $this->Form->create('Invoice'); ?>

                  <div class="form-group">

                    <label class="control-label">Invoice Number</label>
                         <?php 
						 //pr($this->data['Invoice']);die;
						 //$inv="PPJM0".$increment;
						 ?>
                    

<?php echo $this->Form->input('Invoice.invoiceno', array('placeholder'=>'Enter Invoice Number', 'class'=>'form-control span8','required'=>true,'label'=>false));

echo $this->Form->hidden('id', array('required'=>true,'label'=>false));

?>

                  </div>
                 <div class="form-group">
                    <label class="control-label">Company Name</label>
										
				<?php  echo $this->Form->input('Invoice.company_name', array('class'=>'form-control company','label'=>false,'div'=>false,));?>
							
				 </div>
				 
				 <div class="form-group">

                    <label class="control-label">GSTIN Number</label>

                    

					 <?php echo $this->Form->input('Invoice.gstin', array('type'=>'text','placeholder'=>'Enter GSTIN Number', 'class'=>'form-control gstin span8','label'=>false,

                                ));?>

                  </div>

				

				 				 

                  

                   <div class="form-group">

                    <label class="control-label">Company Or Person Address</label>

                    

					 <?php echo $this->Form->textarea('Invoice.address', array('placeholder'=>'Enter Company Or Person Address', 'class'=>'form-control comp_address span8','label'=>false,

                                ));?>

                  </div>
				  
				
				  
				  <hr style="height: 10px;border: 0;box-shadow: 0 10px 10px -10px #8c8b8b inset;">

				 

				               <div class="round">
                          <?php for($i=0;$i<count($this->data['Invservice']);$i++){ ?>
											   <div class="form-group">

												 <label class="control-label">Service Detail</label>

									
                                                                             
									 <?php
                                              echo $this->Form->hidden("Invservice.$i.id");
                                 echo $this->Form->textarea("Invservice.$i.service_detail", array('placeholder'=>'Enter Service Detail', 'class'=>'form-control span8','required'=>true,'label'=>false,

												));?>

								  </div>

								   <div class="row">

								  

									<div class="col-md-2">

									

									            <div class="form-group">

												 <label class="control-label">Quantity</label>

									

			 <?php echo $this->Form->input("Invservice.$i.quantity", array('id'=>'piece','placeholder'=>'Enter quantity','class'=>'form-control span8','label'=>false,

												));?>

								  </div>

									  

									  

									  

									  </div>

									 

									<div class="col-md-2">

											   <div class="form-group">

												 <label class="control-label">Price</label>

									

									 <?php echo $this->Form->input("Invservice.$i.price", array('id'=>'price','placeholder'=>'Enter price', 'class'=>'form-control span8','required'=>true,'label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">Discount</label>

									

									 <?php echo $this->Form->input("Invservice.$i.discount", array('id'=>'discount','placeholder'=>'Enter discount', 'class'=>'form-control span8','label'=>false,

												));?>

								  </div>

								  

									</div>

									

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">CGST</label>

									

									 <?php echo $this->Form->input("Invservice.$i.cgst", array('id'=>'CGST','placeholder'=>'Enter CGST', 'class'=>'form-control span8','label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">SGST</label>

									

<?php echo $this->Form->input("Invservice.$i.sgst", array('id'=>'SGST','placeholder'=>'Enter SGST', 'class'=>'form-control span8','label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-1">

											   <div class="form-group">

												 <label class="control-label">IGST</label>

									

									 <?php echo $this->Form->input("Invservice.$i.igst", array('id'=>'IGST','placeholder'=>'Enter IGST', 'class'=>'form-control span8','label'=>false,

												));?>

								  </div>

								  

									</div>

									<div class="col-md-2">

											   <div class="form-group">

												 <label class="control-label">Total Amount</label>

									

									 <?php echo $this->Form->input("Invservice.$i.total_amt", array('id'=>'amt','placeholder'=>'Enter Amount', 'class'=>'form-control span8','required'=>true,'label'=>false,

												));?>

								  </div>

				  

				    </div>

					   <div class="col-md-2">

											   <div class="form-group">

												 <label class="control-label">Taxable Amount</label>

									

									 <?php echo $this->Form->input("Invservice.$i.taxable_amt", array('id'=>'tax_amt','placeholder'=>'Taxable Amount', 'class'=>'form-control span8','required'=>true,'label'=>false,

												));?>

								  </div>

				  

				    </div>

					

					

					</div><br>
                                   <?php  }    ?>
				  

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

                
   <div class="hide1">
				  

				  <div class="form-group">

                    <label class="control-label">Payment Mode</label>

                    

					 <?php echo $this->Form->input('Invoice.payment_type', array('id'=>'payment_mode','class'=>'form-control span8','required'=>true,'label'=>false,
                        'type' => 'select','options' => array('Cash'=>'Cash','NEFT'=>'NEFT','RTGS'=>'RTGS','Other'=>'Other')
                                ));?>

                  </div>

				<?php  if(!empty($this->data['Invoice']['bank'])|| $this->data['Invoice']['bank']!='' ){?>

				  <div class="form-group">

                    <label class="control-label" id="label_bank">Bank</label>

                    

					 <?php echo $this->Form->input('Invoice.bank', array('id'=>'bank','class'=>'form-control span8','required'=>false,'label'=>false,

                                ));?>

                  </div>

				<?php  } ?>
                     <?php  if(!empty($this->data['Invoice']['cheque_number'])|| $this->data['Invoice']['cheque_number']!='' ){?>
                  <div class="form-group">

                    <label class="control-label" id="label_cheque_no">Cheque Number</label>

                    

					 <?php echo $this->Form->input('Invoice.cheque_number', array('id'=>'cheque_no','class'=>'form-control span8','required'=>false,'label'=>false,

                                ));?>

                  </div><?php  } ?>
 <?php  if(!empty($this->data['Invoice']['transactid'])|| $this->data['Invoice']['transactid']!='' ){?>
                      <div class="form-group">

                    <label class="control-label" id="label_transact_id">Transaction Id</label>

                    

					 <?php echo $this->Form->input('Invoice.transactid', array('id'=>'transact_id','class'=>'form-control span8','required'=>false,'label'=>false,

                                ));?>

                  </div>
 <?php }
           if(!empty($this->data['Invoice']['cheque_date'])|| $this->data['Invoice']['cheque_date']!='' ){?>
				   

				  

				   <div class="form-group">

                    <label class="control-label" id="label_cheque_date">Cheque Date</label>

                    <?php echo $this->Form->date('Invoice.chequedate', array('id'=>'cheque_date', 'class'=>'form-control span8 date','required'=>false,'label'=>false,

                             'style'=>'line-height:10px;'));?>

                  </div>
<?php }
           if(!empty($this->data['Invoice']['cheque_clear_date'])|| $this->data['Invoice']['cheque_clear_date']!='' ){?>
				  

				  <div class="form-group">

                    <label class="control-label" id="label_cheque_clear">Cheque Clear Date</label>

                    

					 <?php echo $this->Form->date('Invoice.chequecleardate', array('type'=>'date','id'=>'cheque_clear_date', 'class'=>'form-control span8  date','required'=>false,'label'=>false, 'style'=>'line-height:10px;'));?>

                  </div>
<?php }
           if(!empty($this->data['Invoice']['ddnumber'])|| $this->data['Invoice']['ddnumber']!='' ){?>
                   <div class="form-group">

                    <label class="control-label" id="label_ddnumber">Demand Draft Number</label>

                    

					 <?php echo $this->Form->input('Invoice.ddnumber', array('id'=>'ddnumber', 'class'=>'form-control span8  date','required'=>false,'label'=>false, 'style'=>'line-height:10px;'  ));?>

                  </div>
				<?php }
           if(!empty($this->data['Invoice']['rec_bank'])|| $this->data['Invoice']['rec_bank']!='' ){?>  
				  
				   <div class="form-group">

                    <label class="control-label" id="label_rec">Amount Receving Bank</label>

                   

					 <?php echo $this->Form->input('Invoice.rec_bank', array('id'=>'rec_bank', 'class'=>'form-control span8  date','required'=>false,'label'=>false,'style'=>'line-height:10px;','type' => 'select','options' => array('Yes Bank'=>'Yes Bank','Allahabad Bank'=>'Allahabad Bank') 
													
												));?>

                  </div>
		   <?php }?>
                </div>

				  <?php

          

		  echo $this->Form->submit('SAVE INVOICE', array(

    'type' => 'submit',

    'class' => 'btn btn-primary btn-block',

    'escape' =>false

	

)); ?>

				

             

			   <?php echo $this->Form->end(null); ?>
              </div>

             

               

				


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

					 $piece=1;
					 $dis=0.0;

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

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 $amt=$price+$tax_amt;

					 //$tax_amt= $piece*$tax_amt;

					// $amt=$piece*$amt;

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					  

					  //// $("#"+id+"amt").attr('disabled','disabled');

						////  $("#"+id+"tax_amt").attr('disabled','disabled');

				     }

				  if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){ 

				

				 

						// alert($total_tax);

						 $price=(parseFloat($("#"+id+"amt").val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 //// $("#"+id+"price").attr('disabled','disabled');

						////  $("#"+id+"tax_amt").attr('disabled','disabled');

						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

				 }

				     

					

				}

			function q(id){

				id=id.substring(0,1);

					//alert($("#"+id+"price").val());

					//alert($("#"+id+"CGST").val());

					//alert($("#"+id+"CGST").val());

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
                                      if($("#"+id+"discount").val()!=''){

											  $dis=$("#"+id+"discount").val();

			                             }
								  
                       $price=parseFloat($price);
					   $price=$piece*($price*(1-(parseFloat($dis)/100)));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 $amt=$price+$tax_amt;

					// $tax_amt= $piece*$tax_amt;

					// $amt=$piece*$amt;

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					  

					  // $("#"+id+"amt").attr('disabled','disabled');

						//  $("#"+id+"tax_amt").attr('disabled','disabled');

				     }

				 if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){ 

				

				  

						// alert($total_tax);

						 $price=(parseFloat($("#"+id+"amt").val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						//  $("#"+id+"tax_amt").attr('disabled','disabled');

						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

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

					if($("#"+id+"discount").val()!=''){

											 $dis=$("#"+id+"discount").val();

						 

								  }
								  
                        $price=parseFloat($price);
					  $price=$piece*($price*(1-(parseFloat($dis)/100)));

					 //$amt=$price+$tax_amt;

					// alert("ig"+$igst);

				     $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					

					 if($("#"+id+"price").val()!='' && !$("#"+id+"amt").hasClass('backward')){

					 // alert("nooo");

						

					 $tax_amt=($price*$total_tax)/100;

					 $amt=$price+$tax_amt;

					 

					// $tax_amt= $piece*$tax_amt;

					 //$amt=$piece*$amt;

					 $("#"+id+"amt").val($amt.toFixed(2));

					  $("#"+id+"tax_amt").val( $tax_amt.toFixed(2));

					  

					  // $("#"+id+"amt").attr('disabled','disabled');

						//  $("#"+id+"tax_amt").attr('disabled','disabled');

				     }

				 if($("#"+id+"amt").val()!='' && $("#"+id+"amt").hasClass('backward') ){ 

				

				   

						// alert($total_tax);

						 $price=(parseFloat($("#"+id+"amt").val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						//  $("#"+id+"tax_amt").attr('disabled','disabled');

						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

				 }

				

					

				}
              function discount_change(id){

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

					 alert(t);

					 $amt=t*parseInt($piece);

					$price=($amt*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						//  $("#"+id+"tax_amt").attr('disabled','disabled');

						 $("#"+id+"tax_amt").val($tax.toFixed(2));

						 $("#"+id+"price").val($price.toFixed(2));

						 $("#"+id+"amt").val($amt.toFixed(2));

						 

					 }

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

				

				

				

				function amount_change(id){

					//alert();

					 id=id.substring(0,1);

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
                 $("#InvoiceStatusUnpaid").change(function() {
					  // alert();
					   $('div.hide1').hide();
					   
					   
					   
				   });
				    $("#InvoiceStatusPaid").change(function() {
					  // alert();
					   $('div.hide1').show();
					   
					   
					   
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

									   '<label for="service_detail">Service Detail</label>'+

									   ' <input type="text" class="form-control span8"  id="'+id+'service" name="data[Invoice][servicedetail][]" placeholder="Enter service detail">'+

									  '</div>'+

									  '<div class="row">'+

									   '<div class="col-md-2"><div class="form-group">'+

									           '<label for="Pieces">Quantity</label>'+

									   ' <input type="text" class="form-control span8"  placeholder="Enter quantity" name="data[Invoice][pieces][]" onkeyup="piece_change(this.id)"  id="'+id+'piece">'+

									  '</div>'+

									   

									   '</div>'+

									 '<div class="col-md-2"><div class="form-group">'+

									    '<label for="Price">Price</label>'+

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

				

				

					

				

				

				

				

				//$('#cheque_no').css('display','none'); 

				//$('#label_cheque_no').css('display','none'); 

				//$('#bank').css('display','none'); 

				//$('#label_bank').css('display','none'); 

               // $('#transact_id').css('display','none'); 

				//$('#label_transact_id').css('display','none'); 

               // $('#cheque_date').css('display','none'); 

				//$('#label_cheque_date').css('display','none'); 

               // $('#cheque_clear_date').hide();		

               // $('#label_cheque_clear').hide();	

               //  $('#label_ddnumber').hide();
				// $('#label_rec').hide();

                // $('#ddnumber').hide();	
				//  $('#rec_bank').hide();	

				

				

				

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
					 

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 //alert($total_tax);

						$price=(parseFloat($('#amt').val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

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

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

					 //alert($total_tax);

						$price=(parseFloat($('#amt').val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

						 

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
					 
                      
					 $amt=$price+$tax_amt;

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

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						 $price=(parseFloat($('#amt').val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

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

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						 $price=(parseFloat($('#amt').val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

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

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						 $price=(parseFloat($('#amt').val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

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

					// alert("ig"+$igst);

						 $total_tax=parseFloat($cgst)+parseFloat($sgst)+parseFloat($igst);

						// alert($total_tax);

						 $price=(parseFloat($('#amt').val())*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

				 }

				  

				    });

				 

				  

		

							 

				 $('#amt').keyup(function(){

					 $(this).addClass('backward');

					 

					 

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

			  $('#piece').keyup(function(){

				  //if($('#tax_amt').val()!=''){

					 

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

				     var t=0.0;

					 if(localStorage.getItem("amount")!=null){

						 t =parseFloat(localStorage.getItem("amount"));

						

						

					}

						 

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

								  $amt=$piece*t;

								 // $amt=parseFloat($amt);

						 $price=($amt*100)/(100+$total_tax);

						 $tax=($price*$total_tax)/100;

						 //$amt=parseFloat($('#price').val())+$amt;

						// alert($price);

						 // $("#"+id+"price").attr('disabled','disabled');

						 // $('#tax_amt').attr('disabled','disabled');

						 $('#tax_amt').val($tax.toFixed(2));

						 $('#price').val($price.toFixed(2));

						  $('#amt').val($amt.toFixed(2));

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