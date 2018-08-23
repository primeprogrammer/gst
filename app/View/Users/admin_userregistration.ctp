 <div class="content-wrapper">

        <div class="page-title">

          <div>

            <h1>User Registration</h1>

           

          </div>

          <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>

        </div>

        <div class="row">

          <div class="col-md-12">

            <div class="card">

              <div class="card-body">
			  <?php echo $this->Form->create('User'); ?>
			     <div class="form-group">
				<?php echo $this->Form->input('username',array('class'=>'form-control span8')); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('email',array('class'=>'form-control span8')); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('password',array('class'=>'form-control span8')); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('password_confirm', array('class'=>'form-control span8','label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password')); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('role', array('class'=>'form-control span8',
							'options' => $role )); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('Add User', array('type'=>'submit','class' => 'btn btn-info btn-block',  'title' => 'Click here to add the user') );  ?>
				</div>
				<?php echo $this->Form->end(); ?>
              </div>

            </div>

          </div>

        </div>

      </div>