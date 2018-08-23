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

            <h1><i class="fa fa-edit"></i>Service List</h1>

            <p>Listing Services</p>

          </div>

          <div>

            <ul class="breadcrumb">

              <li><i class="fa fa-home fa-lg"></i></li>

             

              <li><a href="">List Service</a></li>

            </ul>

          </div>

        </div>

        <div class="row">

          <div class="col-md-12">

           <center> <div class="card">

		 

			

			   

			   

		

		  

		    <h3 class="card-title" style="font-family:raleway">Service List</h3>
                          <center>
	<div><?php  echo $this->Session->flash();?></div>
</center>
			<hr>

<div class="Services index">

	

	<table cellpadding="0" cellspacing="0" class="table table-striped" id='example'>

	<thead>

	<tr>

			<th>S. No</th>

			<th>Company Name</th>
			<th>Logo</th>
			<th>Gstin</th>
			<th>Pan Number</th>
			<th>Address</th>
			<th>Term & Condition</th>
			<th>Contact Number</th>
			<th>Email</th>
			<th>Created</th>
			<th>Modified</th>

			
		

	</tr>

	</thead>

	<tbody>

	<?php

           $count=1;


 foreach ($Settings as $Settings1): ?>

	<tr>

		<td><?php echo  $count++; ?>&nbsp;</td>

		<td><?php echo $Settings1['Setting']['company_name']; ?></td>
		<td><?php echo $Settings1['Setting']['logo']; ?></td>
		<td><?php echo $Settings1['Setting']['gstin']; ?></td>
		<td><?php echo $Settings1['Setting']['pan_number']; ?></td>
		<td><?php echo $Settings1['Setting']['address']; ?></td>
		<td><?php echo  htmlspecialchars_decode($Settings1['Setting']['term_condition']); ?></td>
		<td><?php echo $Settings1['Setting']['contact_number']; ?></td>
		<td><?php echo $Settings1['Setting']['email']; ?></td>
		<td><?php echo $Settings1['Setting']['created']; ?></td>
		<td><?php echo $Settings1['Setting']['modified']; ?></td>
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