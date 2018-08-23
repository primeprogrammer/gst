<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/css/screen.css" />
<div class="content-wrapper">

        <div class="page-title">

          <div>

            <h1>Company List</h1>

           

          </div>

          <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>

        </div>

        <div class="row">

          <div class="col-md-12">

            <div class="card">

              <div class="card-body">
			      <table class="table table-striped" id="sampleTable">
			      	<thead>
			      		<th>S.No</th>
			      		<th>Name</th>
			      		<th>Email</th>
			      		<th>Contact Number</th>
			      		
			      		<th>Address</th>
			      		<th>GSTIN</th>
                                        <th>Action</th>
			      	</thead>
					<tbody>
					<?php 
                             $count=1;
//pr($companies);
					foreach($companies as $company){
						
						
						
						?>
					                <tr>
									    <td><?php echo $count++;?></td>
										<td><?php echo $company['Company']['name'];?></td>
										 <td><?php echo $company['Company']['email'];?></td>
										 <td><?php echo $company['Company']['contact_number'];?></td>
										 
										 <td><?php echo $company['Company']['address'];?></td>
										 <td><?php echo $company['Company']['gstin'];?></td>
 <td>
			<?php echo $this->Html->link('edit', array('action' => 'com_edit', $company['Company']['id']),array('data-toggle'=>'tooltip', 'title'=>'Edit candidate','class'=>'btn-primary','escape' => false)); ?></td>
									</tr>
									
					<?php }?>
					
					
					
					</tbody>
					
					
					
					
					
			      </table>

              </div>

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
 
	
    <script type="text/javascript">
	$('#sampleTable').DataTable();
	
		
                      
	
</script>
	
			
	
	
	
	
	
	
	

		
		
		
		
		
	
	
	
	
	