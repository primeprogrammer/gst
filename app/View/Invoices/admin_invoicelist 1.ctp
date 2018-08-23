<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/screen.css" />
<style type="text/css">




#myModal1 .close {
    color:blue; 
    opacity: 1;
}
table td {
	text-align:center;
	
	
}

a.disabled {
   pointer-events: none;
   cursor: default;
}












</style>

<div class="content-wrapper">

        <div class="page-title">

          <div>

            <h1>Invoice List</h1>

           

          </div>

          <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>

        </div>

        <div class="row">

          <div class="col-md-12">

            <div class="card">

              <div class="card-body">
			      <?php 

				  
                     $taxable_amt=0.0;
					 $total_amt=0.0;
					// pr($invoices);die;
					$grand_total=0.0;
					 $total_tax=0.0;
				   foreach($invoices as $invoice){
					  
                     foreach( $invoice['Invservice'] as $service){
									
									 $total_amt+=($service['total_amt']);								
									 $taxable_amt+=($service['taxable_amt']);
									// echo "total amount".$total_amt."<br>";
									// echo "total tax".$taxable_amt."<br>";
			                    }
			  
			  $grand_total= $total_amt;
			  $total_tax=$taxable_amt;
			 // echo "total amount"+ $grand_total+"<br>";
								 //echo "total tax"+$total_tax+"<br>";
			  }
				
				   ?>   
                  <center><div class="total_div" >
				      <span class="total">Grand Total -</span>&nbsp;&nbsp;&nbsp;<span class="inner"><i class="fa fa-inr"></i><span class="val1"> <?php echo number_format($grand_total,2);?></span></span>
				  
				  
				  </div>&nbsp;&nbsp;&nbsp;
				  <div class="total_div">
				      <span class="total">Total Tax -</span>&nbsp;&nbsp;&nbsp;<span class="inner"><i class="fa fa-inr"></i><span class="val2">  <?php echo number_format($total_tax,2);?></span></span>
				  
				  
				  </div></center><br><br>
				 <b>From</b>&nbsp;&nbsp; <input type="text" id="min" />
				 <b>To</b>&nbsp;&nbsp; <input type="text" id="max" />
				 <button class=" btn-default filter">Filter</button> <button class=" btn-default reset">Reset</button>
                <table class="table table-hover table-striped table-bordered" id="sampleTable">

                  <thead style="background:rgb(229, 229, 229)">

                    <tr>

					 
                       <th>id</th>
                      <th>Invoice No</th>
					 
					   <th>Created By</th>
					    <th>Company Name</th>
					   <th>Total Amount</th>
					   <th>Taxable Amount</th>

                       <th>View</th>
					    <th>Status</th>

                      <th>Created</th>
                      <th>Action</th>

                      

                      

                     

                    </tr>

                  </thead>

                  <tbody>

                    

                   <?php 

				    $count=0;
                    $grand_total=0.0;
					$total_tax=0.0;
					$c=count($invoices);
				    foreach($invoices as $invoice):
                   
				   ?>                

        

           
          <td><?php echo $count+1; ?></td>
            <td><?php echo $invoice['Invoice']['invoiceno'];?></td>
			  <?php 
			 
                  $cgst=0;
				 $igst=0;
				  $sgst=0;
				  $total_amt=0.0;
				  $taxable_amt=0.0;
			  foreach( $invoice['Invservice'] as $service){
									$cgst+=$service['cgst'];
									$sgst+= $service['sgst'];  
									$igst+= $service['igst'];
									$total_amt+=$service['total_amt'];								
									$taxable_amt+=$service['taxable_amt'];
			  }
			  
			  $grand_total+= $total_amt;
			  $total_tax+=$taxable_amt;
			  ?>
			 
				 	 <td>&nbsp;&nbsp;&nbsp;Admin&nbsp;&nbsp;&nbsp;</td>
					 <td><?php echo $invoice['Invoice']['company_name'];?></td>

			<td><i class="fa fa-inr"></i> <?php echo $total_amt;?></td>
			<td><i class="fa fa-inr"></i> <?php echo $taxable_amt;?>  </td>

            <td><a href="view_data/<?php echo $invoice['Invoice']['id'];?>" id="<?php echo $invoice['Invoice']['id'];?>" class="view btn-primary">View</a></td>
          
 <td style="text-align:center;"><?php echo $invoice['Invoice']['status']; ?></td>
            <td style="text-align:center;"><?php echo date("M j,Y",strtotime($invoice['Invoice']['created'])) ?></td>

         

           
<?php
                  if($invoice['Invoice']['status']=='Refund'){?>

              <td><a href="#" id="<?php echo $invoice['Invoice']['id'];?>" class="edit btn-primary disabled" >Status</a> <br><br>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $invoice['Invoice']['id'],'admin'=>true),array('class'=>'edit btn-primary','escape' => false)); ?></td>
				  <?php }
				  else{?>
					  
					  <td><a href="#" id="<?php echo $invoice['Invoice']['id'];?>" class="edit btn-primary" >Status</a> <br><br> <?php echo $this->Html->link('Edit', array('action' => 'edit', $invoice['Invoice']['id'],'admin'=>true),array('class'=>'edit btn-primary','escape' => false)); ?></td>
				<?php   }?>

        </tr>

        <?php
//pr($invoices);die;
 $count++;		

		endforeach; ?>

       

                    

                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>

      </div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:900px">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:none !important;padding:0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
	 
      <div class="modal-body">
	  
								
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary print">Print</button>
							  </div>
							</div>

						  </div>
</div>

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:900px">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:rgba(52, 29, 92, 0.97);">
	   <center> <h4 style="padding:0px;margin:10px;font-family:roboto;color:white;font-weight:bold">Change Status</h4></center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
	 
      <div class="modal-body">
	
	             	<?php 
					
					 echo $this->Form->create('Invoice', array("method"=>"post",'id'=>'form2','class'=>'form'));
							?>
								  <div class="form-group">
                     
					
                    <?php 
					
					 $options=array(
							 'cancelled'=>'cancelled',
							 'refund'=>'refund'
							 );
							
							
							echo $this->Form->input('status', array(
                                      'type' => 'select','class'=>'form-control','div'=>false,'label'=>false,
                                      'options' => $options,'style'=>'border:1px solid #673ab7',
                                      'selected' => 1 // suppose default select Kannada
                                  )); ?>
					
                </div>
				<?php
echo $this->Form->input('invid', array(
                                      'type' => 'hidden','id'=>'invid',
									  
                                       // suppose default select Kannada
                                  )); ?>

			<center><button type="button" class="btn btn-primary save">Save</button></center>
                 
								
							  </div>
							 
								
							  
							</div>

						  </div>
</div>

<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript --> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  

	  <script type="text/javascript" src="/js/plugins/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/printThis.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
    <script type="text/javascript">
	
	 $('#sampleTable').DataTable(
	{
		
                       "bLengthChange": false,
                        
                
"columnDefs": [ {
      "targets": [ 0],
      "orderable": false
    } ],
		
				
	}
	
	);
	
	
	
	 
	
	
	</script>
	<script type="text/javascript">
	$( function() {
    $( "#min" ).datepicker();
	$( "#max" ).datepicker();
	  $('.filter').click(function(){
		    //alert();
			//alert($('#max').val());
						  $.ajax({
				  url: "invoicelist",
				  method:"POST",
				  data:{min:$('#min').val(),max:$('#max').val()},
				  dataType:'json',
				  success: function(data){
					  //alert(data);
					//console.log(data[0]);
					//t.clear()
					$('#sampleTable tbody').empty();
					//console.log(data[0]);
					$('#sampleTable tbody').append(data[0]);
					t.reDraw();
					$('.val1').html(data[1]);$('.val2').html(data[2]);
				  }
				});
		  
		  
		  
	  });
	$('.reset').click(function(){
	location.reload();
	});
	
	
	
	
  } );
	$(document).on("click", "a", function(){
              if($(this).text()=='View'){
	//alert($(this).text());
	         $.ajax({
							   type: "POST",
							   url:'getInvoice',
							   data:{data:$(this).attr("id")}, 
							   // serializes the form's elements.
								//dataType: 'json',
							   success: function(data)
							   {
									// show response from the php script.
								
							    //alert(data);
							
								$("#myModal .modal-body").html(data);
								$('#myModal').modal();
								//changeFooter(json[0],json[1],json[2],json[3]);
								   //$('.next').trigger('click');
							   }
							 });
							 
			  }
                  else if ($(this).text()=='Status'){
					// alert($(this).attr("id"));
										 if(confirm("Are you sure you want to change status to Refunded?")){
											 
												$.ajax({
											   type: "POST",
											   url:'updateStatus',
											   data:{data:$(this).attr("id")}, 
											   // serializes the form's elements.
												//dataType: 'json',
											   success: function(data)
											   {
													// show response from the php script.
				//var s='<div class="form-group"> <label for="sel1">Change Status:</label> <select class="form-control" id="status"><option value="cancelled">Cancelled</option> <option //value="Refund">Refund</option></select></div>;

											// var s="<input type='hidden' class='form-control' class='id' name='inv_id' value='"+data+"'>";
											// alert(s);
											//alert(data);
											//$('#sampleTable').DataTable().draw();
												//changeFooter(json[0],json[1],json[2],json[3]);
												   //$('.next').trigger('click');
												   location.reload(true);
											   }
											 });
											
												
											
											 	
											 
											 
											 
							
						}
						else{
							return false;
						}
					       
					  
					  
					  
					   // alert($(this).text());
					      //$('#myModal1').modal();
					  
				  }			  
					else{
						
						
					}	

         /*  $('.save').click(function(){
			  // alert('saving'+$(this).attr("id"));
			        $.ajax({
							   type: "POST",
							   url:'updateStatus',
							   data:$('#form2').serialize(), 
							   // serializes the form's elements.
								//dataType: 'json',
							   success: function(data)
							   {
									// show response from the php script.
								
							    
							
								 alert(data);
								//changeFooter(json[0],json[1],json[2],json[3]);
								   //$('.next').trigger('click');
							   }
							 });
			   
			   
			   
			   
		   });	*/				
			 	$('.print').click(function(){
		
			
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
			
	
	
	
	
	
	
	
});
		
		
		
		
		
	
	
	
	
	
	</script>