<?php



class VendorsController extends AppController {





   public $components = array('Paginator','RequestHandler');

   var $uses = array('User', 'Service','Vendor','Debit');



	public $paginate = array(

        'limit' => 25,

        'conditions' => array('status' => '1'),

    	'order' => array('User.username' => 'asc' ) 

    );

	

    public function beforeFilter() {

		 if(isset($this->request->params['admin']) && $this->request->params['admin']) {

            // check user is logged in

            if( !$this->Session->check('Auth.User') ) {

                $this->Session->setFlash('You must be logged in for that action.');

                $this->redirect('/login');

            }

		 }



	  //  $this->layout='admin';

		 

        parent::beforeFilter();

        //$this->Auth->allow('login','add'); 

		//$this->Layout='admin';

    }

	








    public function admin_index() {

		$this->layout='admin';
		$authenticale_user=$this->User->find('list', array('fields' => array('User.id'),'conditions'=>array('User.user_id'=>$this->Auth->user('id'))));
		$authenticale_user[$this->Auth->user('id')]=$this->Auth->user('id');
		//pr($authenticale_user); die;
		$Vendors=$this->Vendor->find('all',array('conditions'=>array('Vendor.is_deleted'=>'0','Vendor.user_id'=>$authenticale_user),'order'=>array('Vendor.id'=>'desc')));
		//pr($Vendors); die;
		$this->set(compact('Vendors'));

    }


public function admin_service_list() {

		$this->layout='admin';
		$authenticale_user=$this->User->find('list', array('fields' => array('User.id'),'conditions'=>array('User.user_id'=>$this->Auth->user('id'))));
		$authenticale_user[$this->Auth->user('id')]=$this->Auth->user('id');

		$Services=$this->Service->find('all',array('conditions'=>array('Service.is_deleted'=>'0','Service.user_id'=>$authenticale_user),'order'=>array('Service.id'=>'desc')));

		$this->set(compact('Services'));

    }





    public function admin_add() {

		$this->layout='admin';

        if ($this->request->is('post')) {

				

			$this->Vendor->create();
			$this->request->data['Vendor']['user_id']=$this->Auth->user('id');
			if ($this->Vendor->save($this->request->data)) {

				$this->Session->setFlash(__('The Vendor has been created'));

				$this->redirect(array('action' => 'index', 'admin' => true));

			} else {

				$this->Session->setFlash(__('The Vendor could not be created. Please, try again.'));
				$this->redirect(array('action' => 'add', 'admin' => true));

			}	

        }

    }
 public function admin_add_service() {

		$this->layout='admin';

        if ($this->request->is('post')) {

				

			$this->Service->create();
				$this->request->data['Service']['user_id']=$this->Auth->user('id');
			if ($this->Service->save($this->request->data)) {

				$this->Session->setFlash(__('The Service has been created'));

				$this->redirect(array('action' => 'service_list', 'admin' => true));

			} else {

				$this->Session->setFlash(__('The Service could not be created. Please, try again.'));
				$this->redirect(array('action' => 'add_service', 'admin' => true));

			}	

        }

    }
    

	public function admin_view($id=null)

	{

		$this->layout='admin';

		if (!$this->Vendor->exists($id)) {



            throw new NotFoundException(__('Invalid Vendor'));



        }



        $options = array('conditions' => array('Vendor.' . $this->Vendor->primaryKey => $id));



        $this->set('Vendor', $this->Vendor->find('first', $options));

	}

	public function admin_service_view($id=null)

	{

		$this->layout='admin';

		if (!$this->Service->exists($id)) {



            throw new NotFoundException(__('Invalid Service'));



        }



        $options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));



        $this->set('Service', $this->Service->find('first', $options));

	}

    public function admin_edit($id = null) {

                $this->layout='admin';

		    if (!$id) {

				$this->Session->setFlash('Please provide a user id');

				$this->redirect(array('action'=>'index', 'admin' => true));

			}



			$vendor = $this->Vendor->findById($id);

			if (!$user) {

				$this->Session->setFlash('Invalid Vendor ID Provided');

				$this->redirect(array('action'=>'index', 'admin' => true));

			}



			if ($this->request->is('post') || $this->request->is('put')) {

				$this->Vendor->id = $id;

				if ($this->Vendor->save($this->request->data)) {

					$this->Session->setFlash(__('The Vendor has been updated'));

					$this->redirect(array('action' => 'edit', $id, 'admin' => true));

				}else{

					$this->Session->setFlash(__('Unable to update your vendor.'));

				}

			}



			if (!$this->request->data) {

				$this->request->data = $vendor;

			}
    }

 public function admin_service_edit($id = null) {

                $this->layout='admin';

		    if (!$id) {

				$this->Session->setFlash('Please provide a user id');

				$this->redirect(array('action'=>'service_list', 'admin' => true));

			}



			$service = $this->Service->findById($id);

			if (!$service) {

				$this->Session->setFlash('Invalid Vendor ID Provided');

				$this->redirect(array('action'=>'service_list', 'admin' => true));

			}



			if ($this->request->is('post') || $this->request->is('put')) {

				$this->Service->id = $id;

				if ($this->Service->save($this->request->data)) {

					$this->Session->setFlash(__('The Service has been updated'));

					$this->redirect(array('action' => 'service_edit', $id, 'admin' => true));

				}else{

					$this->Session->setFlash(__('Unable to update  Service.'));

				}

			}



			if (!$this->request->data) {

				$this->request->data = $service;

			}
    }

    public function admin_delete($id = null) {

		$this->layout='admin';

		if (!$id) {

			$this->Session->setFlash('Please provide a user id');

			$this->redirect(array('action'=>'index', 'admin' => true));

		}

		

        $this->Vendor->id = $id;

        if (!$this->Vendor->exists()) {

            $this->Session->setFlash('Invalid user id provided');

			$this->redirect(array('action'=>'index', 'admin' => true));

        }

        if ($this->Vendor->saveField('is_deleted', 0)) {

            $this->Session->setFlash(__('Vendor deleted'));

            $this->redirect(array('action' => 'index', 'admin' => true));

        }

        $this->Session->setFlash(__('Vendor was not deleted'));

        $this->redirect(array('action' => 'index', 'admin' => true));

    }

	public function admin_service_delete($id = null) {

		$this->layout='admin';

		if (!$id) {

			$this->Session->setFlash('Please provide a user id');

			$this->redirect(array('controller'=>'vendors','action'=>'service_list', 'admin' => true));

		}

		

        $this->Service->id = $id;

        if (!$this->Service->exists()) {

            $this->Session->setFlash('Invalid user id provided');

			$this->redirect(array('controller'=>'vendors','action'=>'service_list', 'admin' => true));

        }

        if ($this->Service->saveField('is_deleted', 1)) {

            $this->Session->setFlash(__('Service deleted'));

            $this->redirect(array('action' => 'service_list', 'admin' => true));

        }

        $this->Session->setFlash(__('Service was not deleted'));

        $this->redirect(array('action' => 'service_list', 'admin' => true));

    }

public function admin_add_debit() 
	{
		$this->layout='admin';
		if($this->Auth->user('role')=='admin')
		{
			$userauth=array('Vendor.is_deleted'=>0);
			$userauth1=array('Service.is_deleted'=>0);
		}
		else if($this->Auth->user('role')=='c_admin')
		{
			
			//pr($authenticale_user); die;
			//foreach($authenticale_user as $key=>$value)
			//$conditions['Invoice.user_id'][]=$value;
			$userauth=array('Vendor.is_deleted'=>0);
			$userauth['Vendor.user_id']=$this->User->find('list', array('fields' => array('User.id'),'conditions'=>array('User.user_id'=>$this->Auth->user('id'))));
			$userauth['Vendor.user_id'][$this->Auth->user('id')]=$this->Auth->user('id');
			//pr($userauth);die;
			$userauth1=array('Service.is_deleted'=>0);
			$userauth1['Service.user_id']=$userauth['Vendor.user_id'];
			//pr($userauth1); die;
		}
		else if($this->Auth->user('role')=='accountant_debit')
		{
			$userauth=array('Vendor.is_deleted'=>0);
			$userauth['Vendor.user_id']=$this->User->find('list', array('fields' => array('User.id'),'conditions'=>array('User.id'=>$this->Auth->user('user_id'))));
			$userauth['Vendor.user_id'][$this->Auth->user('id')]=$this->Auth->user('id');
			$userauth1=array('Service.is_deleted'=>0);
			$userauth1['Service.user_id']=$userauth['Vendor.user_id'];
			//pr($userauth1); die;
		}
		$vendors = $this->Vendor->find('list', array('fields' => array('id','name'),'conditions'=>$userauth));
		//pr($vendors); die;
		$services = $this->Service->find('list', array('fields' => array('id','name'),'conditions'=>$userauth1));
		//pr($services); die;
		if($this->request->is('post'))
			{
				//pr($_FILES);die;
				//pr($this->request->data); die;
				if($this->request->data['Debit']['vendor_id']=='other')
				{
					$this->Vendor->create();
					$vendor['Vendor']['name']=$this->request->data['Debit']['vendor_name'];
					$vendor['Vendor']['email']=$this->request->data['Debit']['vendor_email'];
					$vendor['Vendor']['contact_number']=$this->request->data['Debit']['vendor_contact_number'];
					$vendor['Vendor']['address']=$this->request->data['Debit']['vendor_address'];
					$vendor['Vendor']['gstin']=$this->request->data['Debit']['vendor_gstin'];
					$vendor['Vendor']['user_id']=$this->Auth->user('id');
					$vendor_id=$this->Vendor->save($vendor);
					$this->request->data['Debit']['vendor_id']=$vendor_id['Vendor']['id'];
				}
				else
				{
					$this->request->data['Debit']['vendor_name']=$this->Vendor->findById($this->request->data['Debit']['vendor_id'])['Vendor']['name'];
				}
				if($this->request->data['Debit']['service_id']=='other')
				{
					$this->Service->create();
					$service['Service']['name']=$this->request->data['Debit']['service_name'];
					$service['Service']['user_id']=$this->Auth->user('id');
					$service_id=$this->Service->save($service);
					$this->request->data['Debit']['service_id']=$service_id['Service']['id'];
				}
				else
				{
					$this->request->data['Debit']['service_name']=$this->Service->findById($this->request->data['Debit']['service_id'])['Service']['name'];
				}
				
				$filename = $_FILES['data']['name']['Debit']['document'];
				$tmp = explode('.', $filename);
				$ext = end($tmp);		//echo $filename;			
				if( in_array( strtolower($ext), array( 'zip','gif','jpg','jpeg','png','pdf','docx','xlsx') ) )
					{
						$new_name = time().'.'.$ext;				
						$upload_dir = WWW_ROOT.'uploads/';					
						if( move_uploaded_file( $_FILES['data']['tmp_name']['Debit']['document'], $upload_dir.$new_name))
							{
							$this->request->data['Debit']['document']=$new_name;
							}
					}
				else
					{
					$this->Session->setFlash('Upload gif,jpg,jpeg,png,zip and pdf files only ','error');	
					$this->redirect(array('action' => 'debit','admin'=>true));
					}
				/*  multiple images */
				$this->Debit->create();
				$this->request->data['Debit']['user_id']=$this->Auth->user('id');
				//$this->request->data['Agent']['name']=htmlspecialchars($this->request->data['Agent']['Agentname']);
				if ($this->Debit->save($this->request->data)) 
					{
					$this->Session->setFlash('<b>The Debit has been created </b><b>!</b>','success');
					$this->redirect(array('action' => 'debit_list', 'admin' => true));
					}
				else {
					$this->Session->setFlash('<b>The Debit could not be created. Please, try again.</b><b>!</b>','error');
					}	
			}
		$this->set(compact('services','vendors'));
	}										 
	public function admin_debit_list() {

		$this->layout='admin';

		$Debits=$this->Debit->find('all',array('conditions'=>array('Debit.is_deleted'=>'0'),'order'=>array('Debit.id'=>'desc')));
		//pr($Debits); die;
		$total_amt=0;
		$igst=0;
		$cgst_sgst=0;
		foreach($Debits as $Debits1)
		{
			$total_amt += $Debits1['Debit']['amount'];
			($Debits1['Debit']['tax_type']=='igst') ? $igst += $Debits1['Debit']['tax_amount'] : $cgst_sgst += $Debits1['Debit']['tax_amount'];
		}
		$this->set(compact('Debits'));
		$this->set(compact('total_amt'));
		$this->set(compact('igst'));
		$this->set(compact('cgst_sgst'));

    }
	public function admin_edit_debit($id=null){
		
		    $this->layout='admin';
				  $vendors = $this->Vendor->find('list', array(
															  'fields' => array(
															'name','name'
														)
													));
			$services = $this->Service->find('list', array(
															  'fields' => array(
															'name','name'
														)
													));
							$Debit = $this->Debit->findById($id);
						if($this->request->is('post') || $this->request->is('put')){
															  //pr($_FILES);die;
											if(!empty($_FILES['data']['name']['Debit']['document']) || $_FILES['data']['name']['Debit']['document'] != ''){
				
				
																
															
															$file1=$_FILES['data']['name']['Debit']['document'];
															
															 $ext= explode('.',$file1) ;

															 $ext=$ext[1];
															
															if( in_array( strtolower($ext), array( 'gif','jpeg','jpg','png','pdf','docx') ) )

																{

																	//$new_name = $logo.'.'.$ext;				

																	$new_name = time().'.'.$ext;;				

																	$upload_dir = WWW_ROOT.'uploads/';					

																	

																	if( move_uploaded_file( $_FILES['data']['tmp_name']['Debit']['document'], $upload_dir.$new_name ) )

																	{

																	  $this->request->data['Debit']['document']=$new_name;
																		 
																	}

																}

																else

																{

																	$this->Session->setFlash('Upload image  files only','error');	

																	$this->redirect(array('action' => 'edit_debit',$id, 'admin' => true));

																}
															
															
															
															

															 }	
														else{
															
																
																$this->request->data['Debit']['document']=$Debit['Debit']['document'];
															
																
																
															
															//$this->request->data['Sponsor']['document'][]=
															
															
															
														}

								   

											$this->Debit->id=$id;

											

										//$this->request->data['Agent']['name']=htmlspecialchars($this->request->data['Agent']['Agentname']);

										

											if ($this->Debit->save($this->request->data)) {

												$this->Session->setFlash('<b>The Debit has been updated </b><b>!</b>','success');

												$this->redirect(array('action' => 'debit_list', 'admin' => true));

											} else {

												$this->Session->setFlash('<b>The Debit could not be updated. Please, try again.</b><b>!</b>','error');

											}	

										}
                     if(!$this->request->data){
						 $this->request->data=$Debit;
						 
						 
					 }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
	public function admin_view_debit($id = null) 
	{
		$this->layout='admin';
		$debit=$this->Debit->findById($id);
		$this->set(compact('debit'));
		//pr($debit); die;
	}
}
?>