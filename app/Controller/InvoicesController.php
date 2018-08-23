<?php



App::uses('AppController', 'Controller');







App::uses('CakeEmail', 'Network/Email');


App::uses('CakeTime', 'Utility');








class InvoicesController extends  AppController{





    public $components= array('Paginator','RequestHandler');



  var $uses = array('Invoice', 'Invservice','Company','Increment','User','Setting');



   public $helpers =array('Tinymce','Html','Form','Time');



	



    public function beforeFilter() {



	    $this->layout='admin';



        parent::beforeFilter();

    }

    public function admin_servicelist() {

		  $this->layout="admin";
		//$this->Service->recursive = -1;

		//$this->set('products', $this->paginate());

		$this->paginate = array(

            'limit' => 10,

			'order' => array('Service.created' => 'desc' ),

			'conditions'=>array('Service.is_deleted'=>1)
        );
        $invoices = $this->paginate('Service');
		$this->set(compact('Invoices'));
    }

    public function admin_addinvoice() {
		
				if($this->Auth->user('role') == 'admin')
				{
					$company=$this->Company->find('list',array('fields'=>array('id','name')));
				}
				else if($this->Auth->user('role') == 'c_admin')
				{
					$company=$this->Company->find('list',array('fields'=>array('id','name'),'conditions'=>array('Company.user_id'=>$this->Auth->user('id'))));
				}
				else if($this->Auth->user('role') == 'accountant_invoice')
				{
					$company=$this->Company->find('list',array('fields'=>array('id','name'),'conditions'=>array('Company.user_id'=>$this->Auth->user('user_id'))));
				}
			   $increment=$this->Increment->find('first', array('order' => array('id' => 'DESC') ));

	           $increment=$increment['Increment']['number'];

			   $this->set(compact('company','increment'));

		   if($this->request->is('ajax')){

			      $this->autoRender=false;

                  $r=$this->Company->find('first',array('conditions'=>array('id'=>$this->request->data['company'])));

			       echo json_encode($r);

		   }

    }

	public function admin_invoice(){

		//$this->autoRender=false;

	//Configure::write('debug',0);

		 if ($this->request->is('post')) {
                       			
			//pr($this->request->data); die;
			//pr($this->request->data['Invoice']['serial_number']); die;
			$this->layout=false;
			$this->request->data['Invoice']['user_id']=$this->Auth->user('id');
          $data1=$this->request->data;

		 // pr($data1);die;
		   Configure::write('Config.timezone', 'Asia/Kolkata');

		       $this->Invoice->create();

               $subject = $this->request->data['Invoice']['invoiceno'];
                 /*  may be increment problem  */
			   $trimmed =ltrim($subject);
			   //$trimmed =ltrim($subject,"PMJY0");

                  //echo $trimmed; die;

			

			   $data1=array(

			     'Increment'=>array(

				             'number'=>intval($trimmed) 

				        )

			

			                  );
//pr($this->request->data);die;

			if(!empty($this->request->data['Invoice']['rec_bank']))
			{
				$this->request->data['Invoice']['amount_rec_bank']=htmlspecialchars($this->request->data['Invoice']['rec_bank']);
			}
			

			$this->request->data['Invoice']['invoiceno']=htmlspecialchars($this->request->data['Invoice']['invoiceno']);

			$this->request->data['Invoice']['company_name']=htmlspecialchars($this->request->data['Invoice']['company_name']);

			$this->request->data['Invoice']['address']=htmlspecialchars($this->request->data['Invoice']['company_address']);

			$this->request->data['Invoice']['payment_type']=htmlspecialchars($this->request->data['payment_mode']);

            $this->request->data['Invoice']['payment_status']=$this->request->data['status'];
		    //$this->request->data['Invoice']['status']="Paid";
			$this->request->data['Invoice']['cheque_date']=htmlspecialchars($this->request->data['chequedate']);

			$this->request->data['Invoice']['cheque_clear_date']=htmlspecialchars($this->request->data['chequecleardate']);

		    $this->request->data['Invoice']['bank']=htmlspecialchars($this->request->data['bank']);

			$this->request->data['Invoice']['cheque_number']=htmlspecialchars($this->request->data['cheque_number']);

			$this->request->data['Invoice']['ddnumber']=htmlspecialchars($this->request->data['ddnumber']);

			$this->request->data['Invoice']['transactid']=htmlspecialchars($this->request->data['transactid']);

			$this->request->data['Invoice']['gstin']=htmlspecialchars($this->request->data['gstin']);
			$this->request->data['Invoice']['amount_rec_bank']=htmlspecialchars($this->request->data['rec_bank']);
			if(empty($this->request->data['payment_date'])){
				
				$this->request->data['Invoice']['payment_date']=$this->request->data['payment_date'];
			}else $this->request->data['Invoice']['payment_date']=htmlspecialchars($this->request->data['payment_date']);
          $this->request->data['Invoice']['created']=date("Y-m-d h:i:s",CakeTime::convert(time(), new DateTimeZone('Asia/Kolkata')));
			if ($sucess=$this->Invoice->save($this->request->data)) {
                    
					
					
					
					
				$this->Increment->save($data1);

				    $id=$this->Invoice->getLastInsertId();

					
                       
					$g_total=0.0;

					$tax_value=0.0;
					//pr(); die;

				for($i=0;$i<count($this->request->data['Invoice']['servicedetail']);$i++){

				   $data=array(

				               'invoice_id'=>$id,

							   'service_detail'=>$this->request->data['Invoice']['servicedetail'][$i],
							   
							   'hsn_sac'=>$this->request->data['Invoice']['hsn_sac'][$i],
							   'serial_number'=>$this->request->data['Invoice']['serial_number'][$i],

							   'unit'=>'kg',

							   'cgst'=>$this->request->data['Invoice']['CGST'][$i],

							   'sgst'=>$this->request->data['Invoice']['SGST'][$i],

							   'igst'=>$this->request->data['Invoice']['IGST'][$i],

							   'discount'=>$this->request->data['Invoice']['discount'][$i],

							   'quantity'=>$this->request->data['Invoice']['pieces'][$i],

				               'price'=>$this->request->data['Invoice']['price'][$i]*$this->request->data['Invoice']['pieces'][$i],

							   'total_amt'=>$this->request->data['Invoice']['total_amt'][$i],

							   'taxable_amt'=>$this->request->data['Invoice']['taxable_amt'][$i]

							   );

						$g_total+=$this->request->data['Invoice']['total_amt'][$i];

                        $tax_value+=$this->request->data['Invoice']['taxable_amt'][$i];					
						//pr($data); die;
				       $this->Invservice->create();

					   $this->Invservice->save($data);
                       

				

			}
			//pr($this->Invservice->findAllByInvoiceId($id)); die;
			//foreach($this->Invservice->findAllByInvoiceId($id))
			//pr($g_total); die;
			           if($this->Auth->user('username')=='roworld'){
			
			            $totalamt=intval($g_total);
						$msg="Thanks%20for%20the%20payment%20of%20Rs.".$totalamt."%0aRegards%20%0aA.K. Enterprises";
						
					    $mob=$this->request->data['Invoice']['consignee_mo_no'];
						//pr($this->Invservice->findByInvoiceId($id)); die;
					if($mob){
			
				     $companyName=$this->Setting->find('all',array('conditions'=>array('Setting.user_id'=>$this->Auth->user('id'))));
			         $mobile1=urlencode('91'.$this->request->data['Invoice']['consignee_mo_no']);
		
		
						 $msgtosm = urlencode("Thanks for shopping with ".$companyName[0]['Setting']['company_name'].".  Best Regards (+91)".$companyName[0]['Setting']['contact_number']."");
						
						//http://bsms.primeprogrammer.com/submitsms.jsp?user=akenterp&key=0c46c0e525XX&mobile=".$mobile1."&message=".$msgtosm."&sender=AKENTP&accusage=2"
						//pr($msg1."--".$mob); die;
						 // $ch=curl_init();
						 
						//curl_setopt($ch, CURLOPT_URL, "http://bsms.primeprogrammer.com/submitsms.jsp?user=akenterp&key=0c46c0e525XX&mobile=$mobile1&message=$msgtosm&senderid=AKENTP&accusage=2");
						//curl_setopt($ch, CURLOPT_HEADER, 0);
						// die;
						//$output=curl_exec($ch);
						

					//	pr($output);
						//curl_close($ch);
						//die;	
						//pr($this->Invservice->findByInvoiceId($id)); die;
						$ch=curl_init();

						curl_setopt($ch, CURLOPT_URL, "http://pdsms.primeprogrammer.com/api/send_http.php?authkey=ee08b4e2d5dbef116085bd4e05e7952f&mobiles=".$mobile1."&message=".$msgtosm."&sender=ROWRLD&route=1");

						curl_setopt($ch, CURLOPT_HEADER, 0);

						echo curl_exec($ch);  

						curl_close($ch);


					}
					
					   }
					
					
			
		
            $this->redirect(array('controller'=>'Invoices','action' => 'view_data',$sucess['Invoice']['id'], 'admin' => true));
        
		  $data1=$this->Invoice->findById($id);

		$this->set(compact('data1'));
			}

			else{

				

				echo "failed to save data";

				

				

			}

		 }

		 

	}

	  public function admin_view_pdf($id = null) {

	   $this->layout='pdf';

    $this->Pdf->id = $id;

    if (!$this->Pdf->exists()) {

        throw new NotFoundException(__('Invalid PDF'));

    }

    // increase memory limit in PHP 

    ini_set('memory_limit', '512M');

    $this->set('pdf', $this->Pdf->read(null, $id));

}

  public function admin_invoicelist()
	{
		
		if($this->Auth->user('role')=='c_admin')
		{
			$authenticale_user=$this->User->find('list', array('fields' => array('User.id'),'conditions'=>array('User.user_id'=>$this->Auth->user('id'))));
			$authenticale_user[]=$this->Auth->user('id');
			foreach($authenticale_user as $key=>$value)
			$conditions['Invoice.user_id'][]=$value;
		}
		else if($this->Auth->user('role')=='admin')
		{
			$conditions=1;
		}
		
	   if($this->request->is('post'))
				{
				//pr($this->request->data); die;
				$start=date("Y-m-d",strtotime($this->request->data['Invoice']['start_date']));
				$end=date("Y-m-d",strtotime($this->request->data['Invoice']['end_date']));
				$conditions=array('Invoice.created >='=>$start,'Invoice.created <='=>$end);
				}
		//pr($conditions); die;
        $invoices= $this->Invoice->find('all',array('order'=>array('Invoice.id'=>'DESC'),'conditions'=>$conditions));
		//pr($invoices);
		$taxable_amt=$total_amt=$count=$cgst=$sgst=$igst=0; 
		foreach ($invoices as $invoices1)
		{
			$tot11=$tot22=0;
			foreach ($invoices1['Invservice'] as $tot1) 
			{ 
				$tot11+=$tot1['total_amt'];
				$tot22+=$tot1['taxable_amt'];
				if($tot1['cgst'] != 0) { $cgst+=$tot1['cgst']*$tot1['total_amt']/100; }
				if($tot1['sgst'] != 0) { $sgst+=$tot1['sgst']*$tot1['total_amt']/100; }
				if($tot1['igst'] != 0) { $igst+=$tot1['igst']*$tot1['total_amt']/100; }
			}
			$total_amt+=$invoices[$count]['Invoice']['total_amt']=$tot11;
			$taxable_amt+=$invoices[$count]['Invoice']['taxable_amt']=$tot22;
			$count++;
		}
		//pr($invoices);die;
		$this->set(compact('cgst'));
		$this->set(compact('sgst'));
		$this->set(compact('igst'));
		$this->set(compact('invoices'));
		$this->set(compact('total_amt'));
		$this->set(compact('taxable_amt'));

	}



    public function admin_editInvoice($id = null) {



            $this->layout='admin';



	



		if ($this->request->is('post') || $this->request->is('put')) {

         



 	

       

			$this->request->data['Invoice']['id']=$this->request->data['Invoice']['id'];



			$this->request->data['Invoice']['description']=htmlspecialchars($this->request->data['Invoice']['description']);



			

			if ($this->Invoice->save($this->request->data)) {



				$this->Session->setFlash(__('The Invoice has been updated'));



				$this->redirect(array('controller'=>'Invoices','action' => 'Invoicelist', 'admin' => true));



			} else {



				$this->Session->setFlash(__('The Invoice could not be saved. Please, try again.'));



			}



		} else {



			$this->request->data = $this->Invoice->read(null, $id);



			



			



		}



		//pr($this->request->data);die;



    }







    public function admin_delete($id = null) {



		$this->layout='admin';



		if (!$id) {



			$this->Session->setFlash('Please provide a product id');



			$this->redirect(array('action'=>'productlist', 'admin' => true));



		}



		



        $this->Invoice->id = $id;



        if (!$this->Invoice->exists()) {



            $this->Session->setFlash('Invalid product id provided');



			$this->redirect(array('action'=>'productlist', 'admin' => true));



        }



        if ($this->Invoice->saveField('is_deleted', 1)) {



            $this->Session->setFlash(__('Invoice deleted'));



            $this->redirect(array('action' => 'productlist', 'admin' => true));



        }



        $this->Session->setFlash(__('Invoice was not deleted'));



        $this->redirect(array('action' => 'productlist', 'admin' => true));



    }



	 public function admin_view_data($id) {
 
		 if($id!=null){
		     $this->layout=false;
			//$this->Invoice->recursive = 2;
			 $id=intval($id);
			 $data1=$this->Invoice->findById($id);
			 $data4=$this->Invservice->find('all',array('fields' => array(
    'SUM(Invservice.price) AS total','SUM(Invservice.sgst) AS totsgst','SUM(Invservice.cgst) AS totcgst','SUM(Invservice.taxable_amt) AS tottaxable_amt','hsn_sac','taxable_amt','sgst','cgst','price '
  ),'conditions'=>array('Invservice.invoice_id'=>$id),'group'=>array('Invservice.hsn_sac')));
			//pr($data4); die;
			 if($data1['User']['role']=='accountant_invoice')
			 {
				 $user=$data1['User']['user_id'];
			 }
			  if($data1['User']['role']=='c_admin')
			 {
				 $user=$data1['User']['id'];
			 }
			  $data3=$this->Setting->find('first',array('conditions'=>array('Setting.user_id'=>$user)));
			// pr($data1); pr($data3); die;
			 $this->set(compact('data1'));
			 $this->set(compact('data3','data4'));
		 }

		 



	 }

	public function admin_updateStatus(){

		if($this->request->is('ajax')){

					$this->autoRender=false;

					//print_r($this->request->data);die;

				   $this->Invoice->id =$_POST['data'];

				   $this->Invoice->saveField('payment_status','Refund');

				   $data=$this->Invoice->find('first', array('conditions' => array('id' => $_POST['data'])));

				   $this->Invoice->saveField('total_amt',-$data['Invoice']['total_amt']);

					

					echo "data updated";

		

		}

		

	}
	

//public function admin_getStatus(){

		//$this->autoRender=false;

		

	  // $id=$_POST['data'];

		//$data=$this->Invoice->find('first', array('conditions' => array('id' => $id)));

		//print_r($data['Invoice']['id']);

		

		

		

		

	//}

	

    public function admin_add_company(){



                 

                    if($this->request->is('post')){

                            $this->Company->create();

                              
								$this->request->data['Company']['user_id']=$this->Auth->user('id');
                               if($this->Company->save($this->request->data)){

                                         $this->Session->setFlash("Company created!",'success');

                                         $this->redirect(array('controller'=>'Invoices','action' => 'add_company', 'admin' => true));   



                                       



                                         }

                                  else{



                                          $this->Session->setFlash("Company not created!",'error');

                                         $this->redirect(array('controller'=>'Invoices','action' => 'add_company', 'admin' => true)); 



                                         }







                 }













	



              }

	public function admin_com_list(){
		
		if($this->Auth->user('role')=='admin')
		{
		 $companies=$this->Company->find('all',array('order'=>array('id DESC')));
		}
		if($this->Auth->user('role')=='c_admin')
		{
		 $companies=$this->Company->find('all',array('order'=>array('id DESC'),'conditions'=>array('Company.user_id'=>$this->Auth->user('id'))));
		}
		if($this->Auth->user('role')=='admin')
		{
		 $companies=$this->Company->find('all',array('order'=>array('id DESC'),'conditions'=>array('Company.user_id'=>$this->Auth->user('user_id'))));
		}
		 //pr($companies);die;
		$this->set(compact('companies'));
		
		
		
		
		
		
		
	}
	
	public function admin_com_edit($id=null){
				//$this->autoRender=false;
				 if (!$id) {
        throw new NotFoundException(__('Invalid '));
    }

    $company=$this->Company->findById($id);
    if (!$company) {
        throw new NotFoundException(__('Invalid company'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Company->id = $id;
        if ($this->Company->save($this->request->data)) {
             $this->Session->setFlash("Company updated!",'success');

            $this->redirect(array('controller'=>'Invoices','action' => 'com_list', 'admin' => true));   
        }
		else{
        $this->Session->setFlash("Company not updated!",'error');
		 $this->redirect(array('controller'=>'Invoices','action' => 'add_company','admin' => true));  
		}
    }
				
				 
				 
				if (!$this->request->data) {
                   $this->request->data =$company;
                  }
				
			}
  public function admin_edit($id=null){
				//$this->autoRender=false;
				 if (!$id) {
                       throw new NotFoundException(__('Invalid '));
                       }

            $invoice=$this->Invoice->findById($id);
          // pr($invoice);die;
    if (empty($invoice)) {
        throw new NotFoundException(__('Invalid Invoice'));
    }

    if ($this->request->is(array('post', 'put'))) {
		//pr($this->request->data);die;
         $this->Invoice->id = $id;
		 $this->request->data['Invoice']['modified']=date("Y-m-d h:i:s",CakeTime::convert(time(), new DateTimeZone('Asia/Kolkata')));
        if ($this->Invoice->saveAll($this->request->data)) {
             $this->Session->setFlash("Invoice updated!",'success');

             $this->redirect(array('controller'=>'Invoices','action' => 'invoicelist', 'admin' => true));   
        }
		else{
           $this->Session->setFlash("Company not updated!",'error');
		   $this->redirect(array('controller'=>'Invoices','action' => 'edit',$id,'admin' => true));  
		}
    }
				
				  if(!$this->request->data) {
                          $this->request->data=$invoice;
                    }
				
			}
			  public function admin_cancel($id=null)
			  { 
				 if (!$id) {
					$this->Session->setFlash('Please provide a Invoice id');
					$this->redirect(array('action'=>'invoicelist'));
				}
				
				$this->Invoice->id = $id;
				if (!$this->Invoice->exists()) {
					$this->Session->setFlash('Invalid Invoice id provided');
					$this->redirect(array('action'=>'invoicelist'));
				}
				
				// var_dump($this->Invoice->saveField('payment_status', 'cancel')); die;
				if ($this->Invoice->saveField('payment_status', 'cancel')) {
					$this->Session->setFlash(__('Invoice is successfully cancel'));
					$this->redirect(array('action' => 'invoicelist'));
				}
				$this->Session->setFlash(__('Invoice in not Cancel'));
				$this->redirect(array('action' => 'invoicelist'));
			  }
			  
			  
			  public function admin_database_mysql_dump($tables = '*') {

     $return = '';

    $modelName = $this->modelClass;

    $dataSource = $this->{$modelName}->getDataSource();
    $databaseName = $dataSource->getSchemaName();


    // Do a short header
    $return .= '-- Database: `' . $databaseName . '`' . "\n";
    $return .= '-- Generation time: ' . date('D jS M Y H:i:s') . "\n\n\n";


    if ($tables == '*') {
        $tables = array();
        $result = $this->{$modelName}->query('SHOW TABLES');
        foreach($result as $resultKey => $resultValue){
            $tables[] = current($resultValue['TABLE_NAMES']);
        }
    } else {
        $tables = is_array($tables) ? $tables : explode(',', $tables);
    }

    // Run through all the tables
    foreach ($tables as $table) {
        $tableData = $this->{$modelName}->query('SELECT * FROM ' . $table);

        $return .= 'DROP TABLE IF EXISTS ' . $table . ';';
        $createTableResult = $this->{$modelName}->query('SHOW CREATE TABLE ' . $table);
        $createTableEntry = current(current($createTableResult));
        $return .= "\n\n" . $createTableEntry['Create Table'] . ";\n\n";

        // Output the table data
        foreach($tableData as $tableDataIndex => $tableDataDetails) {

            $return .= 'INSERT INTO ' . $table . ' VALUES(';

            foreach($tableDataDetails[$table] as $dataKey => $dataValue) {

                if(is_null($dataValue)){
                    $escapedDataValue = 'NULL';
                }
                else {
                    // Convert the encoding
                    $escapedDataValue = mb_convert_encoding( $dataValue, "UTF-8", "ISO-8859-1" );

                    // Escape any apostrophes using the datasource of the model.
                    $escapedDataValue = $this->{$modelName}->getDataSource()->value($escapedDataValue);
                }

                $tableDataDetails[$table][$dataKey] = $escapedDataValue;
            }
            $return .= implode(',', $tableDataDetails[$table]);

            $return .= ");\n";
        }

        $return .= "\n\n\n";
    }

    // Set the default file name
    $fileName = $databaseName . '-backup-' . date('Y-m-d_H-i-s') . '.sql';

    // Serve the file as a download
    $this->autoRender = false;
    $this->response->type('Content-Type: text/x-sql');
	$this->response->download($fileName);
	//move_uploaded_file($return, WWW_ROOT.'bkp/'.$fileName);
	$file = new File(WWW_ROOT.$fileName, true, 0644);
	$file->write($return);
	
	//pr($this->response->body($return)); die;
	//pr($return); die;
	/*$Email = new CakeEmail('smtp');

				               $Email->template('backup');

					            $Email->emailFormat('html');

					              //$this->autoRender = false;

	                                $this->layout = false;

		                           $to=$this->Auth->user('email');

		                         $subject=$databaseName ;

                                $Email->to('primeprogrammers@gmail.com');

		                   $Email->subject($databaseName);
						   $Email->attachments(array(
								$fileName => array(
									'file' => WWW_ROOT.$fileName,
									'mimetype' => 'text/x-sql',
									'contentId' => 'my-unique-id'
								)
							));
			
							//pr($this->webroot); die;
						   $Email->viewVars(array('data'=>$this->response->body($return),'data1'=> WWW_ROOT.$fileName));

					$Email->send(); */
					$this->response->body($return);
	
}

}
?>