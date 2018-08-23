<?php

App::uses('AuthComponent', 'Controller/Component');

 

class Invservice extends AppModel {

     

    //public $avatarUploadDir = 'img/avatars';

     

  public $belongsTo=array('Invoice'=>array(
                            'className'=>'Invoice',
                            'foreignKey'=>'invoice_id'
                        )
)  ;   

    

}

?>