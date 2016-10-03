<?php
class CpanelsController extends AppController{
        
    public $uses = array('Admin');
    var $components = array('Messages');
    
    function index(){
        
    }
    
    
    function getDateAndIp(){
        
        $result = array();	
        $result['ip']              = $_SERVER['REMOTE_ADDR'];
        $result['datetime_in_sec'] = time();
        $result['datetime']        = date('Y-m-d h:i:s');
        return $result ;         
    } 

    function pushNotificationIOS($postData){
       
        $this->autoRender = false;
        //$postData       = $this->request->input();
        $requestJson    = json_decode($postData, true);
        
        if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('643','0'))
            );
        }
        
        $check_request_keys = array(
                            
                            '0' => 'message',
                            '1' => 'regId'
                        );
        
//Check Json is valid or not 
                            
             $resultJson =   $this->requestAction(
                                array('controller' => 'Validate','action' => 'validateJson'), 
                                array('pass' => array($requestJson,$check_request_keys))
                            );
        
        if($resultJson == '1'){            
                
            // Put your device token here (without spaces):
             $deviceToken = trim($requestJson['braingroom']['regId']);

            // Put your private key's passphrase here:
            $passphrase = 'pushchat';

            // Put your alert message here:
            $title = trim($requestJson['braingroom']['title']);
            $message = trim($requestJson['braingroom']['message']);

            ////////////////////////////////////////////////////////////////////////////////
            $cert = __DIR__ . '/ck.pem';    
          

            $ctx = stream_context_create();
            stream_context_set_option($ctx, 'ssl', 'local_cert', $cert);
            stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
            
            // Open a connection to the APNS server
            $fp = stream_socket_client(
                'ssl://gateway.sandbox.push.apple.com:2195', $err,
                $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

            if (!$fp)
                exit("Failed to connect: $err $errstr" . PHP_EOL);

            //echo 'Connected to APNS' . PHP_EOL;

            // Create the payload body
            $body['aps'] = array(
                'alert' => $message,
                'sound' => 'default'
                );

            // Encode the payload as JSON
            $payload = json_encode($body);
        
            // Build the binary notification
            $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

            // Send it to the server
            $result = fwrite($fp, $msg, strlen($msg));          
            // Close the connection to the server
            fclose($fp);
            print_r($result);die; 
            return $result;
        }
    }
    
    /**
     * @author: Deepak, @date  : 29-Oct-2015
     * Function is Send Push Notification ON Android Device
    */

     function pushNotification($postData){
    
        $this->autoRender = false;
        //$postData       = $this->request->input();
        $requestJson    = json_decode($postData, true);

        if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('643','0'))
            );
        }
        
        $check_request_keys = array(
                           
                            '0' => 'message',
                            '1' => 'regId',
                            '2' => 'apikey'
                        );
        
//Check Json is valid or not 
         $resultJson =   $this->requestAction(
                                array('controller' => 'Validate','action' => 'validateJson'), 
                                array('pass' => array($requestJson,$check_request_keys))
                            );
        
        if($resultJson == '1'){
            
            $regId = trim($requestJson['braingroom']['regId']);
            $registrationId = array(); // set variable as array
            
            // get all ids in while loop and insert it into $regIDS array
            $deviceIds = explode(",", $regId);
            
            foreach ($deviceIds as  $devid) { 
                array_push($registrationId ,$devid);
            }

            $message        = trim($requestJson['braingroom']['message']);
            
            $apikey         = trim($requestJson['braingroom']['apikey']);
            
            $url = 'https://android.googleapis.com/gcm/send';

            
            $fields = array(
                            'registration_ids'  => $registrationId,
                            'data'              => array("message" => $message),
                            );


            $headers = array( 
                                'Authorization: key=' . $apikey,
                                'Content-Type: application/json'
                            );

            // Open connection
            $ch = curl_init();

            // Set the url, number of POST vars, POST data
            curl_setopt( $ch, CURLOPT_URL, $url );

            curl_setopt( $ch, CURLOPT_POST, true );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

            curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

            // Execute post
            $result = curl_exec($ch);

            // Close connection
            curl_close($ch);
             $data=json_decode($result,true);
        
            return $data['success'];
        }
    }
   

    
    function generateMessages($msgCode, $msgType){
        
        $this->autoRender = false;
        if($msgType == '0'){
            $msgResponse = $this->Messages->ErrorMessages($msgCode);
            $this->Session->write('msg', '0');
            $this->Session->setFlash('<div class="alert alert-danger">'.$msgResponse."</div>");
            
        }else if($msgType == '1'){
            
            $msgResponse = $this->Messages->SuccessMessages($msgCode);
           
            $this->Session->write('msg', '1');
            $this->Session->setFlash('<div class="alert alert-success">'.$msgResponse."</div>");
        }
    }

//Chk if Login Session is set
    function isLoginSession(){
        if($this->Session->read('admin_login') != ''){
            $this->redirect(array('controller' => 'Admins', 'action' => 'dashboard'));
        }
    }
    
//Chk if User is logged In    
    function isLoginSet(){
        if($this->Session->read('admin_login') == ''){
            $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
    }
    
//Logout User 
    
    function logout(){
        $this->Session->destroy();
        $this->redirect(array('controller' => 'admins', 'action' => 'index'));
    }
    
    function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) 
        && preg_match('/@.+\./', $email);
    }
    
    function generateCaptcha(){
        
        $this->autoRender = false;
        global $image;
        $imageName = time();
    
        $image              = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
        $background_color   = imagecolorallocate($image, 255, 255, 255);
        $text_color         = imagecolorallocate($image, 0, 255, 255);
        $line_color         = imagecolorallocate($image, 64, 64, 64);
        $pixel_color        = imagecolorallocate($image, 0, 0, 255);
 
        imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
 
        /*for ($i = 0; $i < 3; $i++) {
            imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
        }*/

       /* for ($i = 0; $i < 1000; $i++) {
            imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
        }*/
 
 
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $len = strlen($letters);
        $letter = $letters[rand(0, $len - 1)];
 
        $text_color = imagecolorallocate($image, 0, 0, 0);
        $word = "";
        for ($i = 0; $i < 6; $i++) {
            $letter = $letters[rand(0, $len - 1)];
            imagestring($image, 7, 5 + ($i * 30), 20, $letter, $text_color);
            $word .= $letter;
        }
        $this->Session->write('captcha_string', $word);
 
        $images = glob("*.png");
        foreach ($images as $image_to_delete) {
            @unlink($image_to_delete);
        }
        
        imagepng($image, "image" . $imageName . ".png");
        $captchArray   = "image" . $imageName . ".png";
        return  $captchArray;

    }
    
    
    function is_numeric(){
        $this->autoRender = false;
        
    }
    
    /*$_FILE['name']      = $_FILES['data']['name']['fileUpload']['file'];
    $_FILE['type']      = $_FILES['data']['type']['fileUpload']['file'];
    $_FILE['tmp_name']  = $_FILES['data']['tmp_name']['fileUpload']['file'];
    $_FILE['size']      = $_FILES['data']['size']['fileUpload']['file'];
    $_FILE['error']     = $_FILES['data']['error']['fileUpload']['file'];
   */
    
    function fileUpload(){
        
        $this->autoRender = false;
     
        //type 1 => Circle, 2 => Profile, 3 => Feeds

      /*  $originalImagePath = WWW_ROOT."img/uploads/Circle/normal/";                  
        $orgImg            = $originalImagePath.basename($_FILES['uploadedfile']['name']);
        $uploadFile        = move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $orgImg);
        if($uploadFile){
            echo "success";
        }else{
            echo "error";
        }

        exit;*/
        if(!empty($this->data) || !empty($_FILES)){

            $_FILE              = array();
       
             $_FILE['name']      = $_FILES['uploadedfile']['name'];
             $_FILE['type']      = $_FILES['uploadedfile']['type'];
             $_FILE['tmp_name']  = $_FILES['uploadedfile']['tmp_name'];
             $_FILE['size']      = $_FILES['uploadedfile']['size'];
             $_FILE['error']     = $_FILES['uploadedfile']['error'];
            
           /* $_FILE['name']      = $_FILES['data']['name']['fileUpload']['file'];
            $_FILE['type']      = $_FILES['data']['type']['fileUpload']['file'];
            $_FILE['tmp_name']  = $_FILES['data']['tmp_name']['fileUpload']['file'];
            $_FILE['size']      = $_FILES['data']['size']['fileUpload']['file'];
            $_FILE['error']     = $_FILES['data']['error']['fileUpload']['file'];*/

            $type           = $this->params->pass['1'];
            $media          = $this->params->pass['0'];
            $finfo          = finfo_open(FILEINFO_MIME_TYPE);
            $mime           = finfo_file($finfo, $_FILE['tmp_name']);
            $languageCode   = 'en';
            $dataArray = array();

            
               
//validate Media            
            switch($media){
                
                case 'image' :

//Check if uploaded file is image only            
                  // echo $isImage = $this->Images->is_image($_FILE['tmp_name']);   
                    if($isImage == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('690', '0', $languageCode))
                                        );
			           
                        return ;
                    }

//Validate the size of an image  cannot be greater than 2MB           
                    $resultSize = $this->Images->chkSize($_FILE['size']);
                    if($resultSize == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('689', '0', $languageCode))
                                        );
                        return ;
                    }

                    break;
                    
                case 'doc':

//Check if uploaded file is image only   
                    $isDoc = $this->Images->is_doc($mime); 
                    if($isDoc == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('698', '0', $languageCode))
                                        );
                        return ;
                    }

//Validate the size of doc cannot be greater than 2MB           
                    $resultSize = $this->Images->chkSize($_FILE['size']);
                    if($resultSize == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('699', '0', $languageCode))
                                        );
                        return ;
                    }
                    break;
                    
                case 'video':

                    echo "video";
//Check if uploaded file is image only            
                    $isImage = $this->Images->is_video($mime);            
                    if($isImage == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('690', '0', $languageCode))
                                        );
                        return ;
                    }

                    break;
            }

                
            switch($type){

                case 1: //upload image for circles

                    $originalImagePath = WWW_ROOT."img/uploads/Circle/normal/";                  
                 
                    $uploadFile = $this->Images->uploadFile($_FILE, $originalImagePath);
                   
                    if($uploadFile == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('691', '0', $languageCode))
                                        );
                        return ;
                    }else{
                        $dataArray['image_name'] = $uploadFile;
                    }
                    break;
                    
                case 2: //uplaod image for profile

			        $originalImagePath = WWW_ROOT."img/uploads/profile/";                  
                 
                    $uploadFile = $this->Images->uploadFile($_FILE, $originalImagePath);
                   
                    if($uploadFile == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('691', '0', $languageCode))
                                        );
                        return ;
                    }else{
                        $dataArray['image_name'] = $uploadFile;
                    }
                    break;
                    
                case 3: //Upload data for feed

                    $originalImagePath  = WWW_ROOT."img/uploads/Feeds/" ;
                    $uploadFile         = $this->Images->uploadFile($_FILE, $originalImagePath);
                    if($uploadFile == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('691', '0', $languageCode))
                                        );
                        return ;
                    }else{
                        $dataArray['image_name'] = $uploadFile;
                    }
                    break;


                    case 4: //Upload data for feed

                    $originalImagePath  = WWW_ROOT."img/uploads/institution/" ;
                    $uploadFile         = $this->Images->uploadFile($_FILE, $originalImagePath);
                    if($uploadFile == '0'){
                        $responseApi =  $this->requestAction(
                                            array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                                            array('pass' => array('691', '0', $languageCode))
                                        );
                        return ;
                    }else{
                        $dataArray['image_name'] = $uploadFile;
                    }
                    break;
            }
                
                $responseApi = $this->requestAction(
                                    array('controller' => 'Validate', 'action' => 'generateServerResponse'),
    				                array('pass' => array('724', '1', $languageCode, $dataArray))
                            );
                exit;
        }
    }
    
    
    function getContent(){
        
        $this->autoRender = false;
        $this->loadModel('LanguageDataMaster');
        $this->loadModel('WebContent');
        
        $result = $this->WebContent->find('all', array(
                                        'joins' => array(
                                            array(
                                                'table'       => 'sg_language_data_masters',
                                                'type'        => 'inner',
                                                'alias'       => 'LanguageDataMaster',
                                                'conditions'  => array(
                                                    'LanguageDataMaster.label_id' => 'WebContent.id', 
                                                    'LanguageDataMaster.table_name' => 'sg_web_contents',
                                                    )
                                            ) 
                                        ),
                                        'fields' => array('LanguageDataMaster.*', 'WebContent.*')
            
                                        )
                                );
        
        debug($result);
        
        
        
    }
    
    
    
}
    
    
?>
