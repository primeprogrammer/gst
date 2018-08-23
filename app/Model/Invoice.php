<?php
App::uses('AuthComponent', 'Controller/Component');
 
class Invoice extends AppModel {
     
    public $avatarUploadDir = 'img/avatars';
     
    public $validate = array(
        
         
    );
   public $hasMany = array(
    'Invservice' => array(
        'className' => 'Invservice',
        'foreignKey' => 'invoice_id'
        )
    );
	public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    ); 
}
?>