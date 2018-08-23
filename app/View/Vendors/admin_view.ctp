



<!-- app/View/Vendors/add.ctp -->







<style type="text/css">



.form-control{



	width:60%;



	



	



}



label{



font-family:roboto;	



	font-size:16px;



	



}



.error-message{



	color:red;



	font-weight:bold;



	



	



	



}



div.success {



  color: white;



  background: none repeat scroll 0 0 #66cc66;



}



#flashMessage{



	padding:10px;



	background:#b2ffb2;



	color:black;



	border-radius:10px;



	



	



}



</style>



<div class="Vendors form" align="center">



 <div class="content-wrapper">



        <div class="page-title">



          <div>



            <h1><i class="fa fa-edit"></i>Registeration Form</h1>



            <p>Register Here</p>



          </div>



          <div>



            <ul class="breadcrumb">



              <li><i class="fa fa-home fa-lg"></i></li>



             



              <li><a href="">Add Vendor</a></li>



            </ul>



          </div>



        </div>



        <div class="row">



          <div class="col-md-8 col-md-offset-2">



           <center> 

		      <div class="card">

			     <h3 class="card-title" style="font-family:raleway">VENDOR DETAIL</h3>

                      <table class="table table-striped" width='100%' style="margin:auto;">

                      	<tbody>

                      		<tr>

                      			<th width='40%'>Name</th>

								<td width='60%'><?php echo ucfirst($Vendor['Vendor']['name']); ?></td>

                      		</tr>

                      		<tr>

                      			<th width='40%'>Email</th>

								<td width='60%'><?php echo $Vendor['Vendor']['email']; ?></td>

                      		</tr>

                      		<tr>

                      			<th width='40%'>Contact Number</th>

								<td width='60%'><?php echo $Vendor['Vendor']['contact_number']; ?></td>

                      		</tr>

                      		

							<tr>

                      			<th width='40%'>Address</th>

								<td width='60%'><?php echo $Vendor['Vendor']['address']; ?></td>

                      		</tr>
							<tr>

                      			<th width='40%'>GSTIN</th>

								<td width='60%'><?php echo $Vendor['Vendor']['gstin']; ?></td>

                      		</tr>

                      		<tr>

                      			<th width='40%'>Created Date</th>

								<td width='60%'><?php echo date('M j Y',strtotime($Vendor['Vendor']['created'])); ?></td>

                      		</tr>

                      	</tbody>

                      </table>









              </div>



             </center>



            </div>



          </div>



          <div class="clearix"></div>



         



        </div>



      </div>



	



	 