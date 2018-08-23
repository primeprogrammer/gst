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
    $('#example').DataTable( {
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/screen.css" />  
<div class="content-wrapper" style="background-color:white;">
<h2 style="text-align:center;">Invoice List</h2>
<div class="row" style="padding:20px;">
	<div class="col-md-3 text-justify">
	<span class="total badge">Taxable Total -</span> <i class="fa fa-inr"></i><?php echo number_format($total_amt,2); ?>
	</div>
	<div class="col-md-3 text-justify">
	<span class="total badge">Total Tax -</span> <i class="fa fa-inr"></i><?php echo number_format($taxable_amt,2); ?>
	</div>
	<div class="col-md-2 text-justify">
	<span class="total badge">SGST -</span> <i class="fa fa-inr"></i><?php echo number_format($sgst,2); ?>
	</div>
	<div class="col-md-2 text-justify">
	<span class="total badge">CGST -</span> <i class="fa fa-inr"></i><?php echo number_format($cgst,2); ?> 
	</div>
	<div class="col-md-2 text-justify">
	<span class="total badge">IGST -</span> <i class="fa fa-inr"></i><?php echo number_format($igst,2); ?>
	</div>
</div>
<div class="row" style="padding:20px;">
	<?php echo $this->Form->create('Invoice');?>
	<div class="col-xs-3">
	<?php echo $this->Form->input('start_date',array('id'=>'min','label'=>false,'div'=>false,'placeholder'=>'Start Date','class'=>'form-control')); ?>
	</div>
	<div class="col-xs-3">
	<?php echo $this->Form->input('end_date',array('id'=>'max','label'=>false,'div'=>false,'placeholder'=>'End Date','class'=>'form-control')); ?>
	</div>
	<div class="col-xs-1">
	<?php echo $this->Form->input('Search',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'btn btn-info')); ?>
	</div>
	<?php echo $this->Form->end();?>
	<div class="col-xs-1">
	<?php echo $this->Html->link('Reset',array('controllers'=>'Invoices','action'=>'invoicelist','admin'=>true),array('class'=>'btn btn-info')); ?>
	</div>
</div>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>               
				<th>SL. No</th>
				<th>Invoice No</th>
				<th>Created By</th>
				<th>Customer/Client Name</th>
				<th>Total Amount</th>
				<th>Gst Tax</th>
				<th>View</th>
				<th>Status</th>
				<th>Payment Date</th>
				<th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>SL. No</th>
				<th>Invoice No</th>
				<th>Created By</th>
				<th>Customer/Client Name</th>
				<th>Total Amount</th>
				<th>Taxable Amount</th>
				<th>View</th>
				<th>Status</th>
				<th>Payment Date</th>
				<th>Action</th>
            </tr>
        </tfoot>
        <tbody>
<?php $count=1; foreach($invoices as $invoices1): $Totaltaxableamt=0; ?>
            <tr>
                <td><?php echo $count;?></td>
				<td><?php echo $invoices1['Invoice']['invoiceno'];?></td>
				<td><?php echo $invoices1['User']['name'];?></td>
				<td><?php echo $invoices1['Invoice']['company_name'];?></td>
				<td><?php foreach($invoices1['Invservice'] as $invlist){
				                       $Totaltaxableamt=$Totaltaxableamt+$invlist['total_amt'];
				}
				    echo $Totaltaxableamt;?></td>
				<td><?php echo $invoices1['Invoice']['taxable_amt']; ?></td>
				<td><a href="view_data/<?php echo $invoices1['Invoice']['id'];?>" id="<?php echo $invoices1['Invoice']['id'];?>" class="view btn-primary">View</a></td>
				<td><?php echo $invoices1['Invoice']['payment_status'];?></td>
				<td><?php echo date("M j,Y",strtotime($invoices1['Invoice']['payment_date']));?></td>
				<td><?php echo ' '.$this->Html->link('Cancel', array('action' => 'cancel', $invoices1['Invoice']['id'],'admin'=>true),array('class'=>'edit btn-primary','escape' => false)); ?></td>
            </tr>
<?php $count++; endforeach; ?>
      
        </tbody>
    </table>
	</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
    $( "#min" ).datepicker();
	$( "#max" ).datepicker();
});
</script>