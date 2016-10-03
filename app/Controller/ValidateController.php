<?php 

class ValidateController extends AppController{
    
    var $components = array('Messages');
    
    var $uses = array('UserMaster');
    
    
/**
 * @param type $msg_code
 * @param type $res_code
 * @param type $message
 * Thsi Function is responsible for all type of messages 
 */    
    public function generateServerResponse($msg_code, $res_code, $message=null){
        
        $this->autoRender = false;
        
        
        $res_msg = $this->Messages->ErrorMessages($msg_code);
        
        $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
        $array['braingroom'] = array();
        
        $array['braingroom']["res_code"] = $res_code;
        $array['braingroom']["res_msg"]  = $res_msg;
        $array['braingroom']["sync_time"]= $getDateTime['datetime_in_sec'];
        
        if(!empty($message)){
            foreach($message as $key=>$val){
                $array['braingroom'][$key]  = $val;
            }
        }
            
        $array = (object) array_filter((array) $array);

        $str = json_encode($array, true);
        
        echo str_replace("null", '""', $str);       
       //        echo str_replace('&quot;', '', $dataStr);
        
        exit;
        
    }
    
/**
 * @return type
 * Generate UUID and Auth TOken and validate if its unique in a database
 */    
    
    public function generateUniqueIds(){
        
        $this->autoRender = false;

        
        $uuid       = uniqid('fas_');
        $keys       = array();
        
        $keys['uuid']       = $uuid;
        
        return $keys;
       
    }
    

/**
 * @param type $email
 * Validate If email entered have valid format or not
 */ 

 
    function validateEmail($email){

        $this->autoRender = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->generateServerResponse('602','0', $languageCode);
        }
    }  
    
/**
 * @param type $email
 * Validate If eneterd email exist or not
*/    
    
    function emailExist($email){

        $result = $this->UserMaster->find('first', array('conditions' => array('email' => $email)));
        
        if(!empty($result)){
            $this->generateServerResponse('603','0');
        }
        
    }
function mobileExist($mobile_no){
       $result = $this->UserMaster->find('first', array('conditions' => array('contact_no' =>$mobile_no)));
        
        if(!empty($result)){
            $this->generateServerResponse('651','0');die;
        }  
    }
    
    

 /**
 * @param type $email
 * Validate If email exist in Database return false
*/    
    
    function emailAlreadyExist($email){
        $result = $this->UserMaster->find('first', array('conditions' => array('User.email' => $email,'User.status' => '1')));
        if(!empty($result)){
            $this->generateServerResponse('611','0');
        }
    }
                  
    
/**
 * @param type $password
 * Validate Min and Max Length of Password
 */    
    function validatePassword($password){
        $this->autoRender = false;
        $length = strlen($password);
        if($length < '4'){
            $this->generateServerResponse('613', '0');
        }else if($length > '30'){
            $this->generateServerResponse('614', '0');
        }
    }
    
    
    function validatePasswordDb($authToken, $uuid, $password, $languageCode){
        $this->autoRender = false;
        $chkPassword = $this->User->find('first', 
                            array(
                                'condititons' => array('User.auth_token' => $authToken, 'User.uuid' => $uuid),
                                'fields'      => array('User.password'),
                            )
                       );
        if($chkPassword['User']['password']  != md5($password)){
            $this->generateServerResponse('657', '0', $languageCode);
        }
    }


    /**
 * 
 * @param type $fieldName
 * @param type $msgCode
 * @param type $msgType
 * This function is used to find if the given field is numeric or not
 * 
 */
    function validateNumeric($fieldName, $msgCode, $msgType){
        if(is_numeric($fieldName) == '0'){
            $this->generateServerResponse($msgCode, $msgType);
        }
    }
    
/**
 * @param type $username
 * Validate username if it is unique or already exists
*/    
    function validateUsername($username){
        $this->autoRender = false;
        $result = $this->User->find('first', array('conditions' => array('User.username' => $username,'User.status' => '1')));
        if(!empty($result)){
            $this->generateServerResponse('619', '0');
        }
    }
    
/**
 * @author: Abhishek
 * This function is used to validate Auth Token Of a user
 */    
    function validateAuthToken($authToken){
        
        $this->autoRender = false;
        $result = $this->User->find('first', array('conditions' => array('User.auth_token' => $authToken), 'fields' => array('User.id')));
        if(empty($result)){
            $this->generateServerResponse('623', '0');
        }
    }
    
/**
 * @author: Abhishek
 * This function is used to validate UUID Of a user
 */    
    function validateUUID($uuid, $languageCode){
        
        $this->autoRender = false;
        $result = $this->User->find('first', array('conditions' => array('User.uuid' => $uuid), 'fields' => array('User.id')));
        if(empty($result)){
            $this->generateServerResponse('624', '0'); 
        }
    }
    
/**
 * @author: Abhishek
 * This function is used to validate Combination of a user
 */    
    function validateCombination($authToken, $uuid){
        
        $this->autoRender = false;
        $result = $this->User->find('first', array('conditions' => array('User.auth_token' => $authToken, 'User.uuid' => $uuid), 'fields' => array('User.id', 'User.status', 'User.email')));
        if(empty($result)){
            $this->generateServerResponse('625', '0');
        }else{
            return $result;
        }
        
    }
    
/**
 * Validate Device Type
 */    
    function validateDeviceType($deviceType){

        $this->autoRender = false;
        $result = $this->DeviceMaster->find('first', array(
                            'conditions' => array(
                                    'DeviceMaster.device_type' => $deviceType
                                ),
                                'fields' => array('DeviceMaster.id')
                            )
                    );

        if(empty($result)){
            $this->generateServerResponse('630', '0');
        }else{
            return $result['DeviceMaster']['id'];
        }
    }

/**
 * Validate Platform Type
*/    

    function validatePlatformType($platformType, $languageCode){
        $this->autoRender = false;
        $result = $this->PlatformMaster->find('first', array('conditions' => array('PlatformMaster.platform_type' => $platformType), 'fields' => array('PlatformMaster.id')));
        if(empty($result)){
            $this->generateServerResponse('631', '0', $languageCode);
        }else{
            return $result['PlatformMaster']['id'];
        }
    }
    
/**
 * @author: Abhsihek 
 * This function is used to validate if language requested exist or not 
 */    
    function validateLanguage($languageCode){
        
        $this->autoRender = false;
        $chkLanguage = $this->LanguageMaster->find('first', array('conditions' => array('LanguageMaster.language_code' => $languageCode)));
        if(empty($chkLanguage)){
            $this->generateServerResponse('646', '0', 'en');
        }
    } 
    
/**
 * @author: Abhsihek 
 * This function is used to validate if country code entered belongs to the country of our database
 */    

    function validateCountryCode($countryCode, $languageCode){
        
        $this->autoRender = false;
        $this->loadModel('Country');
        $chkCountry = $this->Country->find('first', array('Country.countryCode' => $countryCode));
        if(empty($chkCountry)){
            $this->generateServerResponse('646', '0', $languageCode);
        }
    }
    

/**
 * @author: Abhsihek 
 * This function is used to validate Question id
 */    

    function validateQuestionId($questionId, $languageCode){
        
        $this->autoRender = false;
        $this->loadModel('SecurityQuestion');
        $chkQuestion = $this->SecurityQuestion->find('first', array('SecurityQuestion.id' => $questionId));
        
        if(empty($chkQuestion)){
            $this->generateServerResponse('650', '0', $languageCode);
        }
        
    }
    
    function validateCircle($circleId, $languageCode){
        
        $this->autoRender = false;
        $circleId = $this->Circle->find('first', array('conditions' => array('Circle.id' => $circleId)));
        if(empty($circleId)){
            $this->generateServerResponse('664', '0', $languageCode);
        }
        
    }
    
    function validateCircleAdmin($circleId, $uuid, $languageCode){
        
        $this->autoRender = false;
        $circleId = $this->Circle->find('first', array('conditions' => array('Circle.user_id' => $uuid, 'Circle.id' => $circleId)));
        if(empty($circleId)){
            $this->generateServerResponse('665', '0', $languageCode);
        }
        
    }
    
  
    
    
    
}
?>
