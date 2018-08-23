



<!-- app/View/Services/add.ctp -->







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



<div class="Services form" align="center">



 <div class="content-wrapper">



        <div class="page-title">



          <div>



            <h1><i class="fa fa-edit"></i>View Product/Service Detail</h1>



           



          </div>



          <div>



          

          </div>



        </div>



        <div class="row">



          <div class="col-md-8 col-md-offset-2">



           <center> 

		      <div class="card">

			     <h3 class="card-title" style="font-family:raleway">SERVICE/PRODUCT DETAIL</h3>

                      <table class="table table-striped" width='100%' style="margin:auto;">

                      	<tbody>

                      		<tr>

                      			<th width='40%'>Name</th>

								<td width='60%'><?php echo ucfirst($Service['Service']['name']); ?></td>

                      		</tr>

                      		

                      			<th width='40%'>Created Date</th>

								<td width='60%'><?php echo date('M j Y',strtotime($Service['Service']['created'])); ?></td>

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



	



	 