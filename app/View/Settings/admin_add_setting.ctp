<!-- app/View/Agents/add.ctp -->



<style type="text/css">

.form-control{

	

	

	

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

      

           <center>

		 

			   <div><?php  echo $this->Session->flash(); ?></div>

			   

			   

		

		  

		    <h3 class="card-title" style="font-family:raleway">NEW SETTING</h3>

			<hr>

              <div class="card-body">

			<?php echo $this->Form->create('Setting',array('enctype'=>'multipart/form-data','class'=>'form-horizontal')); ?>            

    

         <div class="form-group">

                    <label class="control-label col-sm-3">Company Name</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('company_name',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>
				 <div class="form-group">

                    <label class="control-label col-sm-3">Logo</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('file',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name', 'type' => 'file', 'style' => 'opacity:1;')); ?>

                         </div>

				 </div>
				 <div class="form-group">

                    <label class="control-label col-sm-3">Gstin</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('gstin',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>
				 <div class="form-group">

                    <label class="control-label col-sm-3">Pan Number</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('pan_number',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>
				 <div class="form-group">

                    <label class="control-label col-sm-3">Address</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('address',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>
				 <div class="form-group">

                    <label class="control-label col-sm-3">Term & Condition</label>

					<div class="col-sm-9">
					
                     <?php echo $this->Tinymce->input('Setting.term_condition',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name'),array('language'=>'en'),'full'); ?>

                    </div>

				 </div>
				 <div class="form-group">

                    <label class="control-label col-sm-3">Contact Number</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('contact_number',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>
				 <div class="form-group">

                    <label class="control-label col-sm-3">Email</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('email',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>	 
				  <div class="form-group">

                    <label class="control-label col-sm-3">Bank Name</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('bank_name',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>	 
				  <div class="form-group">

                    <label class="control-label col-sm-3">Account Number</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('account_no',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>	 
				  <div class="form-group">

                    <label class="control-label col-sm-3">Branch & IFS Code</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('branch_ifs',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter Company name')); ?>

                         </div>

				 </div>	 
				<br>

					<div class="form-group">  

					  <div class="col-sm-offset-2 col-sm-9">

				<?php echo $this->Form->end(array('class'=>'btn btn-primary')); ?>

				  </div></div>

				</div>



             

             </center>

          

          </div>
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

