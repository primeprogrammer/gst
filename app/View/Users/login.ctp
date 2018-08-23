<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>GST Billing Software</h1>
      </div>
      <div class="login-box">
        
		<?php  echo $this->Form->create('User',array('class'=>'login-form')); ?>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <h6><center><i style="color:red;"><?php echo $this->Session->flash(); ?></i></center></h6>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            
			<?php  echo $this->Form->input('username',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Username','autofocus'=>'autofocus', 'type' => 'text'));?>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            
			<?php  echo $this->Form->input('password',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Password','autofocus'=>'autofocus', 'type' => 'password'));?>
          </div>
          
          <div class="form-group btn-container">
            <?php
          
		  echo $this->Form->button('<i class="fa fa-sign-in fa-lg">SIGN IN</i>', array(
    'type' => 'submit',
    'class' => 'btn btn-primary btn-block',
    'escape' => false
)); ?>
          </div>
        <?php echo $this->Form->end(null); ?>
        
       
      </div>
      <section>
       <div class="form-group">
            <label class="control-label"><i>All Right Reserved By <a href="http://www.primeprogrammer.com/" target="_blank">Prime Programmer</a></i></label>
            
			
          </div>
          
          </section>
    </section>