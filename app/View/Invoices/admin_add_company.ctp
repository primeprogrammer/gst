<!-- app/View/Agents/add.ctp -->

<style type="text/css">
.form-control{
	width:60%;
	
	
}
label{
font-family:raleway;	
	font-size:14px;
	color:rgba(0, 0, 0, 0.69);
}
.error-message{
	color:red;
	font-weight:bold;
	
	
	
}
div.success {
  color: white;
  background: none repeat scroll 0 0 #66cc66;
}
input{
	
border:1px solid #ccc !important;	
	
}
textarea{
	
border:1px solid #ccc !important;	
	
}
</style>

 <div class="content-wrapper">
                 <div class="row">
          <div class="col-md-8 col-md-offset-2">
           <center> <div class="card" style="height:520px">
		 
			   <div><?php  echo $this->Session->flash(); ?></div>
			   
			   
		
		  
		    <h3 class="card-title" style="font-family:raleway">NEW REGISTRATION</h3>
			<hr>
              <div class="card-body" style="height:500px;">
      <?php echo $this->Form->create('Company',array('enctype' => 'multipart/form-data','class'=>'form-horizontal')); ?>            
    
         <div class="form-group">
                    <label class="control-label col-sm-3">Name</label>
					<div class="col-sm-9">
                     <?php echo $this->Form->input('name',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter company name')); ?>
                         </div>
				 </div>
	   <div class="form-group">
		<label class="control-label  col-sm-3">Email</label>
		    <div class="col-sm-9">
		 <?php echo $this->Form->input('email',array('class'=>'form-control ','label'=>false,'div'=>false,'placeholder'=>'Enter email','type'=>'email')); ?>
	  </div></div>
   <div class="form-group">
	<label class="control-label  col-sm-3">Contact Number</label>
	    <div class="col-sm-9">
	 <?php echo $this->Form->input('contact_number',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter contact number')); ?>
	 </div>
  </div>
  <div class="form-group">
	<label class="control-label  col-sm-3">Alternate  Number</label>
	    <div class="col-sm-9">
	 <?php echo $this->Form->input('alternate_number',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter alternate number')); ?>
	 </div>
  </div>
  <div class="form-group">
	<label class="control-label  col-sm-3">Address</label>
	    <div class="col-sm-9">
	 <?php echo $this->Form->textarea('address',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter address')); ?>
	 </div>
  </div>
   <div class="form-group">
	<label class="control-label  col-sm-3">GSTIN Number</label>
	<div class="col-sm-9">
	 <?php echo $this->Form->input('gstin',array('class'=>'form-control','label'=>false,'div'=>false)); ?>
  </div></div>
   
 <br>
    <div class="form-group">  
      <div class="col-sm-offset-2 col-sm-9">
<?php echo $this->Form->end(array('class'=>'btn btn-primary')); ?>
  </div></div>
</div>

              </div>
             </center>
            </div>
          </div>
          <div class="clearix"></div>
         
        </div>
     
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script type="text/javascript">
	    $(document).ready(function() {
  // fade out flash 'success' messages
					 	setTimeout(function() {
            $('#flashMessage').fadeOut('slow');
            }, 3000);
					
					});
						  
	  
	  
	  </script>
