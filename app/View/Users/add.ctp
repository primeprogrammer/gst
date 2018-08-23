<!-- app/View/Users/add.ctp -->
<div class="users form" align="center">
 <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Registeration Form</h1>
            <p>Register Here</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#">Sample Forms</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
  <?php echo $this->Form->create('User',array('enctype' => 'multipart/form-data')); ?>            
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array('admin'=>'admin')
        ));
         
        echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
<?php echo $this->Form->file('Document.submittedfile'); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
}
?>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              </div>
            </div>
          </div>
          <div class="clearix"></div>
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Subscribe</h3>
              <div class="card-body3">
                <form class="form-inline">
                  <div class="form-group">
                    <label class="control-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
