  
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">

<script type="text/javascript">
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
<style>
.total {
    padding: 10px;
    background: rgb(244, 54, 54);
    color: white;
    font-weight: 600;
}
.dt-button
{
	padding:15px;
	background-color:#f9f9f9;
}
.paginate_button
{
	padding:15px;
	background-color:#f9f9f9;
}
.current
{
	background-color:#99f9f9;
}
.btn-primary
{
	padding:4px;
	margin-top:14px;
}
table.dataTable thead .sorting:after {
    opacity: unset;
    content: unset;
}
table.dataTable thead .sorting_desc:after {
    content: unset;
}
table.dataTable thead .sorting_asc:after {
    content: unset;
}
</style>
<div class="content-wrapper">

        <div class="page-title">

          <div>

            <h1><i class="fa fa-edit"></i>Debit List</h1>

            <p>Listing Debits</p>

          </div>

          <div>

            <ul class="breadcrumb">

              <li><i class="fa fa-home fa-lg"></i></li>

             

              <li><a href="">List Debit</a></li>

            </ul>

          </div>

        </div>

        <div class="row">

          <div class="col-md-12">

           <center> <div class="card">

		 

			

			   

			   

		

		  
			
		    <h3 class="card-title" style="font-family:raleway">Debit List</h3>
			<div class="row">
			<div class="col-md-4 text-justify"><span class="total badge"> TOTAL AMOUNT -</span> <i class="fa fa-inr"></i>  <?php echo $total_amt;?></div>
			<div class="col-md-4 text-justify"><span class="total badge"> IGST -</span> <i class="fa fa-inr"></i>  <?php echo $igst;?></div>
			<div class="col-md-4 text-justify"><span class="total badge"> CGST/SGST -</span> <i class="fa fa-inr"></i>  <?php echo $cgst_sgst;?></div>
			</div>
                          <center>
	<div><?php  echo $this->Session->flash();?></div>
</center>
			<hr>
	<table id="example1" class="display table-striped" cellspacing="0" width="100%">

	<thead>

	<tr>

			<th>S. No</th>

			<th>Vendor Name</th>

			<th>Service name</th>

			

			<th>Amount</th>
			<th>Receipt</th>
			<th>Payment Date</th>

			

			<th class="actions"><?php echo __('Actions'); ?></th>

	</tr>

	</thead>

	<tbody>

	<?php

           $count=1;


 foreach ($Debits as $Debit): ?>

	<tr>

		<td><?php echo  $count++; ?>&nbsp;</td>

		<td><?php echo h($Debit['Debit']['vendor_name']); ?>&nbsp;</td>

		<td><?php echo h($Debit['Debit']['service_name']); ?>&nbsp;</td>

		

		<td><?php echo h($Debit['Debit']['amount']); ?>&nbsp;</td>
  
		<td><a href="<?php echo '/uploads/'.$Debit['Debit']['document']; ?>" target="_blank">Click for recpt</a></td>
		
		<td><?php echo date("M j ,Y",strtotime($Debit['Debit']['payment_date'])); ?></td>
        <td>

		

			<?php 
			
			echo $this->Html->link('View', array('action' => 'view_debit', $Debit['Debit']['id'],'admin'=>true),array('class'=>'btn-primary','escape' => false)); 
			
			?>

			
&nbsp;


			<?php echo $this->Html->link('Edit', array('action' => 'edit_debit', $Debit['Debit']['id'],'admin'=>true),array('class'=>'btn-primary','escape' => false)); ?>
&nbsp;


			<?php echo $this->Html->link('Delete', array('action' => 'delete_debit', $Debit['Debit']['id'],'admin'=>true),array('class'=>'btn-primary','escape' => false), __('Are you sure you want to delete # %s?', $Debit['Debit']['id'])); ?><br><br>
         
		</td>			

		

		
	</tr>

<?php endforeach; ?>

	</tbody>

	</table>



</div>