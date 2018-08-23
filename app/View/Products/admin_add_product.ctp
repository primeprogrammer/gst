<div class="content-wrapper">
<div class="card">
<div class="row">
		<div class="col-13 col-lg-13 col-md-13">
			<div class="col-13 col-md-8">
				<div align="center"><h1>Add Product </h1></div>
				<div align="center"><?php //echo $this->Html->image('siteseen.png', array('alt' => 'LOGIN', 'style' => 'max-width:500px;')); ?></div>
				<div class="panel-body">
					
						<fieldset>
						<?php echo $this->Form->create('Product',array('enctype'=>'multipart/form-data'));?>
							
							<div class="form-group row">
								 <div class="col-xs-10">
									<?php echo $this->Form->input('name',array('id'=>'title','div'=>false,'label'=>false,'class'=>'form-control input-lg',"placeholder"=>"Title",'value'=>$data1['Product']['name']));  ?>
								</div>
								
								 <div class="col-xs-2">
								<?php echo $this->Form->end(array('label' => __('Submit', true), 'class' => 'btn btn-primary btn-lg', 'style' => 'float:left;')); ?>
									</div>
							</div>
						</fieldset>
						
					
				</div>
			</div>
	</div><!-- /.row -->	
	
	</div>
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Product list</div>
					<div class="panel-body">
						<table class="display table table-condensed" cellspacing="1px;" width="100%">
						    <thead>
						    <tr>
						        <th>ID</th>
						        <th>Product Name</th>
						        <th>Created</th>
						        <th>Modified</th>
								 <th>Action</th>
						    </tr>
						    </thead>
							<?php
							$id=1;
							foreach ($data as $post): ?>
							
						    <tr>
						        <td><?php echo $id; ?></td>
								
						        <td><?php echo $post['Product']['name']; ?></td>
								<td><?php echo $post['Product']['created']; ?></td>
								<td><?php echo $post['Product']['modified']; ?></td>
								<td><?php echo $this->Html->link('Edit',array('action' => 'add_product', $post['Product']['id'], 'admin'=>true),array('class'=>'btn btn-info'));?></td>
						    </tr>
							<?php $id++;
							endforeach; //die; ?>
						    
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
</div>
</div>