 <div class="content-wrapper">

        <div class="page-title">

          <div>

            <h1>User Update</h1>

           

          </div>

          <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>

        </div>

        <div class="row">

          <div class="col-md-12">

            <div class="card">

              <div class="card-body">
			  <?php echo $this->Form->create('User'); ?>
			   <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
			     <div class="form-group">
				<?php echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));
				echo $this->Form->input('username', array('class'=>'form-control span8','readonly' => 'readonly', 'label' => 'Usernames cannot be changed!')); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('email',array('class'=>'form-control span8')); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('password_update', array('class'=>'form-control span8','label' => 'New Password (leave empty if you do not want to change)', 'maxLength' => 255, 'type'=>'password','required' => 0)); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('password_confirm_update', array('class'=>'form-control span8','label' => 'Confirm New Password *', 'maxLength' => 255, 'title' => 'Confirm New password', 'type'=>'password','required' => 0)); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('role', array('class'=>'form-control span8','options'=>$role,'default'=>$this->data['User']['role'])); ?>
				 </div><div class="form-group">
				<?php echo $this->Form->input('Edit User', array('type'=>'submit','class' => 'btn btn-info btn-block',  'title' => 'Click here to add the user') );  ?>
				</div>
				 </fieldset>
				<?php echo $this->Form->end(); ?>
              </div>

            </div>

          </div>

        </div>

      </div>