<?php
App::uses('AuthComponent', 'Controller/Component');
 
class Company extends AppModel {
     
    //public $avatarUploadDir = 'img/avatars';
     
   public $validate = array(
        'name' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'A Company name is required',
                'allowEmpty' => false
            ),
            
             'unique' => array(
                'rule'    => array('isUniqueCompanyname'),
                'message' => 'This Companyname is already in use'
            ),
            'alphaNumericDashUnderscore' => array(
                'rule'    => array('alphaNumericDashUnderscore'),
                'message' => 'Companyname can only be letters, numbers and underscores'
            ),
        ),
        
         'contact_number'=>array(
		   'last'       => true,
        'rule'       => array('phone', '/^[0-9]( ?[0-9]){8} ?[0-9]$/'), 
        
        'message'    => 'Please enter a valid 10 digit phone number (digits only)'
		 
		 
		 
		 
		 
		 ),
        
        
      
 
         
    );
     
        /**
     * Before isUniqueCompanyname
     * @param array $options
     * @return boolean
     */
    function isUniqueCompanyname($check) {
 
        $Companyname = $this->find(
            'first',
            array(
                'fields' => array(
                    'Company.id',
                    'Company.name'
                ),
                'conditions' => array(
                    'Company.name' => $check['name']
                )
            )
        );
 
        if(!empty($Companyname)){
            if($this->data[$this->alias]['id'] == $Companyname['Company']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
 
    /**
     * Before isUniqueEmail
     * @param array $options
     * @return boolean
     */
    function isUniqueEmail($check) {
 
        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'Company.id'
                ),
                'conditions' => array(
                    'Company.email' => $check['email']
                )
            )
        );
 
        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['Company']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
     
    public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }
     
    public function equaltofield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    } 
 
    /**
     * Before Save
     * @param array $options
     * @return boolean
     */
     public function beforeSave($options = array()) {
        // hash our password
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
         
        // if we get a new password, hash it
        if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
        }
     
        // fallback to our parent
        return parent::beforeSave($options);
    }
  
}
?>