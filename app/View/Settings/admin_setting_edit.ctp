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

<div class="Agents form" align="center">

 <div class="content-wrapper">

        <div class="page-title">

          <div>

            <h1><i class="fa fa-edit"></i>Service Add</h1>

            <p>Register Here</p>

          </div>

          <div>

            <ul class="breadcrumb">

              <li><i class="fa fa-home fa-lg"></i></li>

             

              <li><a href="">Add Service</a></li>

            </ul>

          </div>

        </div>

        <div class="row">

          <div class="col-md-8 col-md-offset-2">

           <center> <div class="card" style="height:480px">

		 

			   <div><?php  echo $this->Session->flash(); ?></div>

			   

			   

		

		  

		    <h3 class="card-title" style="font-family:raleway">NEW SERVICE</h3>

			<hr>

              <div class="card-body" style="height:500px;">

      <?php echo $this->Form->create('Service',array('class'=>'form-horizontal')); ?>            

    

         <div class="form-group">

                    <label class="control-label col-sm-3">Name</label>

					<div class="col-sm-9">

                     <?php echo $this->Form->input('name',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Enter service name'));

                     echo $this->Form->hidden('id',array('class'=>'form-control','label'=>false,'div'=>false));
					 ?>

                         </div>

				 </div>



   

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

