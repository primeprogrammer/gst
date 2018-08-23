<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Product/Services List</h1>
           
          </div>
          <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
					 <th>SL.No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created</th>
                     
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                   <?php 
				   $count=1;
				   foreach($services as $service): ?>                
        
            <td><?php echo $count; ?></td>
            <td><?php echo $service['Service']['title'];?></td>
            <td style="text-align: center;" class="limit"><span><?php echo strip_tags(html_entity_decode($service['Service']['description'])); ?></span><h6 class="more">more</h6></td>
            <td style="text-align: center;"><?php echo $service['Service']['created']; ?></td>
            
           
            <td style="text-align: center;"><?php echo $service['Service']['status']; ?></td>
            <td >
            <?php echo $this->Html->link(    "Edit",   array('action'=>'add_service', $service['Service']['id']) ); ?> | 
            
            	<?php 
         echo $this->Html->link('Delete',array('controller'=>'vendors','action'=>'service_delete',$service['Service']['id'], 'admin' => true),
          array('confirm'=>'Are you sure you want to delete the record?'));
?>

            </td>
        </tr>
        <?php
 $count++;		
		endforeach; ?>
        <?php unset($service); ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  <script type="text/javascript" src="/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();
	
	$(document).ready(function {
    var $this = $(this);
var content = $('.limit:first').text();
    var limit = content.substring(0, 10);

    $('.limit').text(limit);    

    $('.more').click(function() { 

        var $this = $(this);
        var test = $this.siblings('span').text();
        var length = test.length;

        if(length == 10){

            $this.siblings('span').text(content);

        }
        else {

            $this.siblings('span').text(limit);
        }

    });
 });
	</script>