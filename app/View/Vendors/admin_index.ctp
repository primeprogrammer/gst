<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <style>
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
background:#673AB7 !important;

}
.btn-primary{
	    padding: 5px !important;
    font-size: 12px;
background:#673AB7 !important;
border-radius: 5px;	
	
}
.btn-primary  + .tooltip > .tooltip-inner {background-color: red !important;}
</style>

 <div class="content-wrapper">

        <div class="page-title">

          <div>

            <h1><i class="fa fa-edit"></i>Vendor List</h1>

            <p>Listing Vendors</p>

          </div>

          <div>

            <ul class="breadcrumb">

              <li><i class="fa fa-home fa-lg"></i></li>

             

              <li><a href="">List Vendor</a></li>

            </ul>

          </div>

        </div>

        <div class="row">

          <div class="col-md-12">

           <center> <div class="card">

		 

			

			   

			   

		

		  

		    <h3 class="card-title" style="font-family:raleway">Vendor List</h3>
                          <center>
	<div><?php  echo $this->Session->flash();?></div>
</center>
			<hr>

<div class="Vendors index">

	

	<table cellpadding="0" cellspacing="0" class="table table-striped" id='example'>

	<thead>

	<tr>

			<th>S. No</th>

			<th>Name</th>

			<th>Email</th>

			<th>Image</th>

			<th>Contact Number</th>

			<th>Address</th>

			

			<th class="actions"><?php echo __('Actions'); ?></th>

	</tr>

	</thead>

	<tbody>

	<?php

           $count=1;


 foreach ($Vendors as $Vendor): ?>

	<tr>

		<td><?php echo  $count++; ?>&nbsp;</td>

		<td><?php echo h($Vendor['Vendor']['name']); ?>&nbsp;</td>

		<td><?php echo h($Vendor['Vendor']['email']); ?>&nbsp;</td>

		

		<td><?php echo h($Vendor['Vendor']['contact_number']); ?>&nbsp;</td>
  
		<td><?php echo h($Vendor['Vendor']['address']); ?>&nbsp;</td>
		<td><?php echo h($Vendor['Vendor']['gstin']); ?>&nbsp;</td>
           <td class="actions">

		

			<?php 
			
			echo $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $Vendor['Vendor']['id'],'admin'=>true),array('data-toggle'=>'tooltip', 'title'=>'View ','class'=>'btn-primary','escape' => false)); 
			
			?>

			
&nbsp;


			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $Vendor['Vendor']['id'],'admin'=>true),array('data-toggle'=>'tooltip', 'title'=>'Edit','class'=>'btn-primary','escape' => false)); ?>
&nbsp;


			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $Vendor['Vendor']['id'],'admin'=>true),array('class'=>'btn-primary','data-toggle'=>'tooltip', 'title'=>'Remove','escape' => false), __('Are you sure you want to delete # %s?', $Vendor['Vendor']['name'])); ?><br><br>
         
		</td>			

		

		
	</tr>

<?php endforeach; ?>

	</tbody>

	</table>

	
	</div>



</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
 
<!-- DataTables CSS -->
<script type="text/javascript">
$(document).ready(function(){
		   var t=$('#example').dataTable({

                       "ordering": false,
                       "bLengthChange": false
            

              });
setTimeout(function(){

			     $('#flashMessage').fadeOut();

			   

			   

			   

		   },3000);
 });
</script>fd