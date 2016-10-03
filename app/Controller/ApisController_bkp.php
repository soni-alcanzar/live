<?php
Class ApisController extends AppController{
    
    public $components = array('RequestHandler');
    public $uses = array('UserMaster','UserVerfication','VendorGallery','Category','VendorClass','ClassSegment','ClassType','City','Community','Locality','RequestCatalog','GiftCupan','CupanDetail','Giftcard','DeviceData','Offer');
    
    function index(){ 
       print_r("rahul");die; 
    }
  
/**
 * @author: Alcanzar
 * This Function is used for Grokker/Grokee SingUp
 */  
 
      
   function RegistrationVendor(){        
        require ('sendgrid-php/vendor/autoload.php');
   require ('sendgrid-php/lib/SendGrid.php'); 
        $this->autoRender = false;

        $postData       = $this->request->input();
        
        $requestJson    = json_decode($postData, true);
       
       //print_r($requestJson);die;
        if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('623','0'))
                );
     
         }

       $userArray          = array();
       $dataArray          =array();  
        
        $check_request_keys = array(
                                   
                                      '0' => 'email',
                                      '1' => 'password',  
                                      '2' =>  'mobile_no',
                                      '3' =>  'city_id',
                                      '4' =>  'locality',                                    
                                      '5' =>  'category_id',
                                      '6' =>  'vendor_type_id',
                                      '7' =>  'first_name',
                                      '8' =>  'd_o_b',
                                      '9' =>  'profile_image',
                                      '10' => 'segment_id',
                                      '11' => 'area_of_expertise',
                                      '12' => 'address',
                                      '13' => 'description',
                                      '14' => 'institute_name',
                                      '15' => 'registration_id',
                                      '16' => 'logo_image',
                                      '17' => 'coaching_experience',
                                      '18' => 'identity_of_primary_verification1',
                                      '19' => 'primary_verfication_no1',
                                      '20' => 'primary_attached_media1',
				                              '21' => 'identity_of_primary_verification2',
                                      '22' => 'primary_verfication_no2',
                                      '23' => 'primary_attached_media2',
                                      '24' => 'identity_of_secoundry_verification1',
                                      '25' => 'secoundry_attached_media1',
                                      '26' => 'identity_of_secoundry_verification2',
                                      '27' => 'secoundry_attached_media2',
                                      '28' => 'latitude',
                                      '29' =>'longitude',
                                     
                                    
                                );

                $resultJson =  $this->validateJson($requestJson, $check_request_keys);
               
                if($resultJson=='1'){
                  
                  $userArray['email']=trim($requestJson['braingroom']['email']);
                  $userArray['password']=trim($requestJson['braingroom']['password']);
                  $userArray['contact_no']=trim($requestJson['braingroom']['mobile_no']);
                  $userArray['city_id']=trim($requestJson['braingroom']['city_id']);
                   $userArray['locality']=trim($requestJson['braingroom']['locality']);
                  $userArray['category_id']=trim($requestJson['braingroom']['category_id']);
                  $userArray['vendor_type_id']=trim($requestJson['braingroom']['vendor_type_id']);
                  $userArray['first_name']=trim($requestJson['braingroom']['first_name']);
                  $userArray['d_o_b']=trim($requestJson['braingroom']['d_o_b']);
                  $userArray['profile_image']=trim($requestJson['braingroom']['profile_image']);
                  $userArray['segment_id']=trim($requestJson['braingroom']['segment_id']);
                  $userArray['area_of_expertise/interest']=trim($requestJson['braingroom']['area_of_expertise']);
                  $userArray['address']=trim($requestJson['braingroom']['address']);
                  $userArray['description']=trim($requestJson['braingroom']['description']);
                  $userArray['institute_name']=trim($requestJson['braingroom']['institute_name']);
                  $userArray['registration_id']=trim($requestJson['braingroom']['registration_id']);
                  $userArray['logo_image']=trim($requestJson['braingroom']['logo_image']);
                  $userArray['coaching_experience']=trim($requestJson['braingroom']['coaching_experience']);
                  $user['identity_of_primary_verification1']=trim($requestJson['braingroom']['identity_of_primary_verification1']);
                  $user['primary_verfication_no1']=trim($requestJson['braingroom']['primary_verfication_no1']);
                  $user['primary_attached_media1']=trim($requestJson['braingroom']['primary_attached_media1']);
                  $user['identity_of_primary_verification2']=trim($requestJson['braingroom']['identity_of_primary_verification2']);
                  $user['primary_verfication_no2']=trim($requestJson['braingroom']['primary_verfication_no2']);
                  $user['primary_attached_media2']=trim($requestJson['braingroom']['primary_attached_media2']);
                  $user['identity_of_secoundry_verification1']=trim($requestJson['braingroom']['identity_of_secoundry_verification1']);
                  
                  $user['secoundry_attached_media1']=trim($requestJson['braingroom']['secoundry_attached_media1']);
                  $user['identity_of_secoundry_verification2']=trim($requestJson['braingroom']['identity_of_secoundry_verification2']);
                 
                  $user['secoundry_attached_media2']=trim($requestJson['braingroom']['secoundry_attached_media2']);
                  $userArray['latitude']=trim($requestJson['braingroom']['latitude']);
                  $userArray['longitude']=trim($requestJson['braingroom']['longitude']);
                  $this->isBlank($userArray['email'], '600', '0');
                  $this->isBlank($userArray['password'], '601', '0');
                  $this->isBlank($userArray['contact_no'], '625', '0');
                  
                  $this->isBlank($userArray['city_id'], '627', '0');
                  $this->isBlank($userArray['category_id'], '628', '0');
                  $this->isBlank($userArray['vendor_type_id'], '821', '0');
                  /*$this->isBlank($userArray['first_name'], '634', '0');
                  $this->isBlank($userArray['d_o_b'], '630', '0');
                  $this->isBlank($userArray['segment_id'], '635', '0');
                  $this->isBlank($userArray['address'], '636', '0');
                  $this->isBlank($userArray['description'], '637', '0');

                  
                  $this->isBlank($userArray['institute_name'], '638', '0');
                   $this->isBlank($userArray['registration_id'], '639', '0');
                   $this->isBlank($userArray['coaching_experience'], '631', '0');
                  $this->isBlank($user['identity_of_verification'], '632', '0');
                  $this->isBlank($user['verfication_no'], '633', '0');*/
                  

                  $this->requestAction(
                        array('controller' => 'validate', 'action' => 'validateEmail'),
                        array('pass' => array($userArray['email']))
                );


                $this->requestAction(
                        array('controller' => 'validate', 'action' => 'emailExist'),
                        array('pass' => array($userArray['email']))
                );
                $this->requestAction(
                        array('controller' => 'validate', 'action' => 'mobileExist'),
                        array('pass' => array($userArray['contact_no']))
                );
               
                
                
                  $uniqueIds  = $this->requestAction(array('controller' => 'Validate','action' => 'generateUniqueIds'));
                     
                  $userArray['auth_token']       = $uniqueIds['auth_token'];
                  $userArray['uuid']             = $uniqueIds['uuid'];

                  $userArray['status']           =2;
                  
                  $data['uuid']=$userArray['uuid'];  
                  $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                    
                  $userArray['add_date']     = $getDateTime['datetime_in_sec'];
                  $userArray['modify_date']  =   $getDateTime['datetime_in_sec'];
                 
                  $dataArray['sync_time']= $getDateTime['datetime_in_sec'];
                  $dataArray['uuid']=$userArray['uuid'];
                  $g_code=$this->generateCode(6); 
                  $userArray['verification_code']=$g_code;  
                  $userArray['password']=md5($userArray['password']); 
                  $userArray['user_type_id']=1;
                  $user['status']=1;
                  $user['uuid']=$userArray['uuid'];
                   
                  $this->UserMaster->save($userArray);
                  rename(HTTP_ROOT."/img/temp/".$userArray['profile_image'],HTTP_ROOT."img/Vendor/profile/".$userArray['profile_image']);
                  $user['user_id']=$this->UserMaster->getLastInsertId();

                  $this->UserVerfication->save($user);
                   $this->sendMail('signup', $userArray['email'],$g_code);
                  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('700','1',$dataArray)));
                    
                }
                else{
                   $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
                    
                }
               
              
               

    }
public function discountClassView(){
       $this->autoRender=false;
     
        $res=$this->Offer->find('all',array('conditions'=>array('status'=>1)));
         if(!empty($res)){
          $i=0;
          $dataArray['braingroom']['res_code']=1;
          foreach($res as $result){
           $dataArray['braingroom'][$i]['id']=$result['Offer']['id'];
           $dataArray['braingroom'][$i]['offer_name']=$result['Offer']['offer_name'];
           $dataArray['braingroom'][$i]['relevent_category']=$result['Offer']['relevent_category'];
           $dataArray['braingroom'][$i]['segment']=$result['Offer']['segment'];
           $dataArray['braingroom'][$i]['start_date']=$result['Offer']['start_date'];
           $dataArray['braingroom'][$i]['end_date']=$result['Offer']['end_date'];
           $dataArray['braingroom'][$i]['total_availability']=$result['Offer']['total_availability'];
           $dataArray['braingroom'][$i]['booked']=$result['Offer']['booked'];
           $dataArray['braingroom'][$i]['balance']=$result['Offer']['balance'];
           $dataArray['braingroom'][$i]['offer_picture']=$result['Offer']['offer_picture'];
           $i++;
           
          }
          echo json_encode($dataArray);
         }

    }
    public function viewTrendingClass(){
       $this->autoRender=false;
         $pageindex = $this->params->pass[0];
         
          $dataArray=array();
          $data=array();
         $limit = 10;
           if ($pageindex == 1 || $pageindex == "") {
                  $offset = 0;
                } 
                else {
                    $offset = ($pageindex - 1) * $limit;
                }
         $res=$this->VendorClass->query("select * from bg_vendor_classes where status=1 and trending_status=1  limit $offset,$limit");
        $pageReturn = count($res);
                if ($pageReturn == '10') {
                    $pageCountRows = $pageindex + 1;
                } else {
                    $pageCountRows = '-1';
                }
         if(!empty($res)){
          $dataArray['next_page']=$pageCountRows;
    $i=0;
    $dataArray['res_code']=1;
    foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['bg_vendor_classes']['id'];
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['user_id'])));
      if($class_by['UserMaster']['vendor_type_id']=='1'){
        $dataArray['braingroom'][$i]['class_provided_by']=$class_by['UserMaster']['institute_name'];
      }
      else{
       $dataArray['braingroom'][$i]['class_provided_by']=$class_by['UserMaster']['first_name'];
       
      }
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=$result['bg_vendor_classes']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    //$dataArray['braingroom'][$i]['class_mode']=$result['VendorClass']['class_mode'];
    //$dataArray['braingroom'][$i]['no_of_seats']=$result['VendorClass']['no_of_seats'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
    //$dataArray['braingroom'][$i]['seat_cost']=$result['VendorClass']['seat_cost'];
    $dataArray['braingroom'][$i]['class_date']=date("Y-m-d",$result['bg_vendor_classes']['class_date']);
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['bg_vendor_classes']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
      $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/user_upload/".$result['bg_vendor_classes']['pic_name'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    
    if((!empty($result['bg_vendor_classes']['latitude']))&&(!empty($result['bg_vendor_classes']['longitude']))){
    $URL = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$result['bg_vendor_classes']['latitude'].','.$result['bg_vendor_classes']['longitude'].'&sensor=false';
            
            $data = file_get_contents($URL);
            $geoAry = json_decode($data,true);
                for($j=0;$j<count($geoAry['results']);$j++){
                if($geoAry['results'][$i]['types'][0]=='sublocality_level_1'){
                    $address=$geoAry['results'][$j]['address_components'][0]['long_name'];
                    $city=$geoAry['results'][$j]['address_components'][1]['long_name'];
                    $state=$geoAry['results'][$j]['address_components'][3]['long_name'];
                    $country=$geoAry['results'][$j]['address_components'][4]['long_name'];
                    break;
                }else{
                    $address=$geoAry['results'][0]['address_components'][2]['long_name'];
                    $city=$geoAry['results'][0]['address_components'][3]['long_name'];
                    $state=$geoAry['results'][0]['address_components'][5]['long_name'];
                    $country=$geoAry['results'][0]['address_components'][6]['long_name'];
                    }
                }
                 $dataArray['braingroom'][$i]['city']=$city;
                $dataArray['braingroom'][$i]['location_area']=$address;
                $dataArray['braingroom'][$i]['locality']=$result['bg_vendor_classes']['location'];
    
      }
               
               
  
   
    //$dataArray['braingroom'][$i]['country_id']=$result['VendorClass']['country_id'];
    //$dataArray['braingroom'][$i]['contact_person']=$result['VendorClass']['contact_person'];
    //$dataArray['braingroom'][$i]['contact_no']=$result['VendorClass']['contact_no'];
    //$dataArray['braingroom'][$i]['latitude']=$result['VendorClass']['latitude'];
    //$dataArray['braingroom'][$i]['logitude']=$result['VendorClass']['logitude'];
    $i++;
    }
     $dataArray['next_page']=$pageCountRows;
    echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['res_msg']="Record Not Found";
    echo json_encode($dataArray);die;
     
  }
        
    }
  public function viewFeaturedClass(){
      
       $this->autoRender=false;
         $pageindex = $this->params->pass[0];
         
          $dataArray=array();
          $data=array();
         $limit = 10;
           if ($pageindex == 1 || $pageindex == "") {
                  $offset = 0;
                } 
                else {
                    $offset = ($pageindex - 1) * $limit;
                }
         $res=$this->VendorClass->query("select * from bg_vendor_classes where status=1 and featured_status=1  limit $offset,$limit");
        $pageReturn = count($res);
                if ($pageReturn == '10') {
                    $pageCountRows = $pageindex + 1;
                } else {
                    $pageCountRows = '-1';
                }
         if(!empty($res)){
          $dataArray['next_page']=$pageCountRows;
    $i=0;
    $dataArray['res_code']=1;
    foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['bg_vendor_classes']['id'];
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['user_id'])));
    
      if($class_by['UserMaster']['vendor_type_id']=='1'){
        $dataArray['braingroom'][$i]['class_provided_by']=$class_by['UserMaster']['institute_name'];
      }
      else{
       $dataArray['braingroom'][$i]['class_provided_by']=$class_by['UserMaster']['first_name'];
       
      }
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=$result['bg_vendor_classes']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    //$dataArray['braingroom'][$i]['class_mode']=$result['VendorClass']['class_mode'];
    //$dataArray['braingroom'][$i]['no_of_seats']=$result['VendorClass']['no_of_seats'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
    //$dataArray['braingroom'][$i]['seat_cost']=$result['VendorClass']['seat_cost'];
    $dataArray['braingroom'][$i]['class_date']=date("Y-m-d",$result['bg_vendor_classes']['class_date']);
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['bg_vendor_classes']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
      $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/user_upload/".$result['bg_vendor_classes']['pic_name'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    
    if((!empty($result['bg_vendor_classes']['latitude']))&&(!empty($result['bg_vendor_classes']['longitude']))){
    $URL = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$result['bg_vendor_classes']['latitude'].','.$result['bg_vendor_classes']['longitude'].'&sensor=false';
            
            $data = file_get_contents($URL);
            $geoAry = json_decode($data,true);
                for($j=0;$j<count($geoAry['results']);$j++){
                if($geoAry['results'][$i]['types'][0]=='sublocality_level_1'){
                    $address=$geoAry['results'][$j]['address_components'][0]['long_name'];
                    $city=$geoAry['results'][$j]['address_components'][1]['long_name'];
                    $state=$geoAry['results'][$j]['address_components'][3]['long_name'];
                    $country=$geoAry['results'][$j]['address_components'][4]['long_name'];
                    break;
                }else{
                    $address=$geoAry['results'][0]['address_components'][2]['long_name'];
                    $city=$geoAry['results'][0]['address_components'][3]['long_name'];
                    $state=$geoAry['results'][0]['address_components'][5]['long_name'];
                    $country=$geoAry['results'][0]['address_components'][6]['long_name'];
                    }
                }
                 $dataArray['braingroom'][$i]['city']=$city;
                $dataArray['braingroom'][$i]['location_area']=$address;
                $dataArray['braingroom'][$i]['locality']=$result['bg_vendor_classes']['location'];
    
      }
               
               
  
   
    //$dataArray['braingroom'][$i]['country_id']=$result['VendorClass']['country_id'];
    //$dataArray['braingroom'][$i]['contact_person']=$result['VendorClass']['contact_person'];
    //$dataArray['braingroom'][$i]['contact_no']=$result['VendorClass']['contact_no'];
    //$dataArray['braingroom'][$i]['latitude']=$result['VendorClass']['latitude'];
    //$dataArray['braingroom'][$i]['logitude']=$result['VendorClass']['logitude'];
    $i++;
    }
     $dataArray['next_page']=$pageCountRows;
    echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['res_msg']="Record Not Found";
    echo json_encode($dataArray);die;
     
  }
        
    }
    public function viewRecommendedClass(){
       $this->autoRender=false;
         $pageindex = $this->params->pass[0];
         
          $dataArray=array();
          $data=array();
         $limit = 10;
           if ($pageindex == 1 || $pageindex == "") {
                  $offset = 0;
                } 
                else {
                    $offset = ($pageindex - 1) * $limit;
                }
         $res=$this->VendorClass->query("select * from bg_vendor_classes where status=1 and recommended_status=1  limit $offset,$limit");
       
        $pageReturn = count($res);
                if ($pageReturn == '10') {
                    $pageCountRows = $pageindex + 1;
                } else {
                    $pageCountRows = '-1';
                }
         if(!empty($res)){
          $dataArray['next_page']=$pageCountRows;
    $i=0;
    $dataArray['res_code']=1;
    foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['bg_vendor_classes']['id'];
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=$result['bg_vendor_classes']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    //$dataArray['braingroom'][$i]['class_mode']=$result['VendorClass']['class_mode'];
    //$dataArray['braingroom'][$i]['no_of_seats']=$result['VendorClass']['no_of_seats'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
    //$dataArray['braingroom'][$i]['seat_cost']=$result['VendorClass']['seat_cost'];
    $dataArray['braingroom'][$i]['class_date']=date("Y-m-d",$result['bg_vendor_classes']['class_date']);
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['bg_vendor_classes']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
      $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/user_upload/".$result['bg_vendor_classes']['pic_name'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    
    if((!empty($result['bg_vendor_classes']['latitude']))&&(!empty($result['bg_vendor_classes']['longitude']))){
    $URL = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$result['bg_vendor_classes']['latitude'].','.$result['bg_vendor_classes']['longitude'].'&sensor=false';
            
            $data = file_get_contents($URL);
            $geoAry = json_decode($data,true);
                for($j=0;$j<count($geoAry['results']);$j++){
                if($geoAry['results'][$i]['types'][0]=='sublocality_level_1'){
                    $address=$geoAry['results'][$j]['address_components'][0]['long_name'];
                    $city=$geoAry['results'][$j]['address_components'][1]['long_name'];
                    $state=$geoAry['results'][$j]['address_components'][3]['long_name'];
                    $country=$geoAry['results'][$j]['address_components'][4]['long_name'];
                    break;
                }else{
                    $address=$geoAry['results'][0]['address_components'][2]['long_name'];
                    $city=$geoAry['results'][0]['address_components'][3]['long_name'];
                    $state=$geoAry['results'][0]['address_components'][5]['long_name'];
                    $country=$geoAry['results'][0]['address_components'][6]['long_name'];
                    }
                }
                 $dataArray['braingroom'][$i]['city']=$city;
                $dataArray['braingroom'][$i]['location_area']=$address;
                $dataArray['braingroom'][$i]['locality']=$result['bg_vendor_classes']['location'];
    
      }
               
               
  
   
    //$dataArray['braingroom'][$i]['country_id']=$result['VendorClass']['country_id'];
    //$dataArray['braingroom'][$i]['contact_person']=$result['VendorClass']['contact_person'];
    //$dataArray['braingroom'][$i]['contact_no']=$result['VendorClass']['contact_no'];
    //$dataArray['braingroom'][$i]['latitude']=$result['VendorClass']['latitude'];
    //$dataArray['braingroom'][$i]['logitude']=$result['VendorClass']['logitude'];
    $i++;
    }
     $dataArray['next_page']=$pageCountRows;
    echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['res_msg']="Record Not Found";
    echo json_encode($dataArray);die;
     
  }
        
    }
    public function nearByClass(){
      $this->autoRender=false;
      $pageindex = $this->params->pass[0];

          $dataArray=array();
          $data=array();
         $limit = 10;
        $postData=$this->request->input();

        $requestJson=json_decode($postData,true); 
        $userArray=array();

            $check_request_keys = array(
                                        '0' => 'uuid',    
                                     ); 
                                 
              $resultJson =  $this->validateJson($requestJson,$check_request_keys);
            
             
             if($resultJson == '1'){  
             
                    $uuid=trim($requestJson['braingroom']['uuid']);

                if ($pageindex == 1 || $pageindex == "") {
                  $offset = 0;
                } 
                else {
                    $offset = ($pageindex - 1) * $limit;
                }
                 $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
                 if(!empty($res)){
                  $lat=$res['UserMaster']['latitude'];
                  $lng=$res['UserMaster']['longitude'];

                 }
              $res1=$this->VendorClass->query("SELECT * 
              FROM bg_vendor_classes
              WHERE latitude !=  ''
              AND longitude !=  '' and status=1
              AND ( 3959 * ACOS( COS( RADIANS('".$lat."') ) * COS( RADIANS( latitude ) ) * COS( RADIANS( longitude ) - RADIANS(  '".$lng."' ) ) + SIN( RADIANS( '".$lat."') ) * SIN( RADIANS( latitude ) ) ) ) <1000
          limit ".$offset." , ".$limit." "); 
              if(!empty($res1)){
                $i=0;
                $dataArray['res_code']=1;
                foreach($res1 as $result){
                 $dataArray['braingroom'][$i]['class_id']=$result['bg_vendor_classes']['id'];
                 $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
                 $dataArray['braingroom'][$i]['latitude']=$result['bg_vendor_classes']['latitude'];
                 $dataArray['braingroom'][$i]['longitude']=$result['bg_vendor_classes']['longitude'];
                 $i++;               
                 
                }
                echo json_encode($dataArray);
              }
              else{
              $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('648','0')));
                      
              }
    }
    else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
      }              
  }
  public function findPeopleNearBy(){
   $this->autoRender=false;
      $pageindex = $this->params->pass[0];

          $dataArray=array();
          $data=array();
         $limit = 10;
        $postData=$this->request->input();

        $requestJson=json_decode($postData,true); 
        $userArray=array();

            $check_request_keys = array(
                                        '0' => 'uuid',    
                                     ); 
                                 
              $resultJson =  $this->validateJson($requestJson,$check_request_keys);
            
             
             if($resultJson == '1'){  
             
                    $uuid=trim($requestJson['braingroom']['uuid']);

                if ($pageindex == 1 || $pageindex == "") {
                  $offset = 0;
                } 
                else {
                    $offset = ($pageindex - 1) * $limit;
                }
                 $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
                 if(!empty($res)){
                  $lat=$res['UserMaster']['latitude'];
                  $lng=$res['UserMaster']['longitude'];

                 }
              $res1=$this->UserMaster->query("SELECT * 
              FROM bg_user_masters
              WHERE latitude !=  ''
              AND longitude !=  '' and status=1 and  uuid !='$uuid' 
              AND ( 3959 * ACOS( COS( RADIANS('".$lat."') ) * COS( RADIANS( latitude ) ) * COS( RADIANS( longitude ) - RADIANS(  '".$lng."' ) ) + SIN( RADIANS( '".$lat."') ) * SIN( RADIANS( latitude ) ) ) ) <1000
          limit ".$offset." , ".$limit.""); 

              if(!empty($res1)){
                $i=0;
                $dataArray['res_code']=1;
                foreach($res1 as $result){
                 $dataArray['braingroom'][$i]['id']=$result['bg_user_masters']['id'];
                 $dataArray['braingroom'][$i]['first_name']=$result['bg_user_masters']['first_name'];
                 $dataArray['braingroom'][$i]['email']=$result['bg_user_masters']['email'];
                 if($result['bg_user_masters']['user_type_id']=='1'){
                  $dataArray['braingroom'][$i]['User_type']="Vendor";
                  if($result['bg_user_masters']['vendor_type_id']=='1'){
                  $dataArray['braingroom'][$i]['Vendor_type']="Organization";
                 }
                 if($result['bg_user_masters']['vendor_type_id']=='2'){
                  $dataArray['braingroom'][$i]['Vendor_type']="Individual";
                 }
                 }
                 if($result['bg_user_masters']['user_type_id']=='2'){
                  $dataArray['braingroom'][$i]['User_type']="Buyer";
                 }
                  $dataArray['braingroom'][$i]['address']=$result['bg_user_masters']['address'];
                 $dataArray['braingroom'][$i]['latitude']=$result['bg_user_masters']['latitude'];
                 $dataArray['braingroom'][$i]['longitude']=$result['bg_user_masters']['longitude'];
                 $i++;               
                 
                }
                echo json_encode($dataArray);
              }
              else{
              $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('648','0')));
                      
              }
    }
    else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
      }  
  }
    public function classSession(){
       $this->autoRender=false;
       $postData=$this->request->input();
       $resultJson=json_decode($postData,true);
          $check_request_keys = array(
                                   
                                      '0' => 'email',
                                      '1' => 'password',  
                                      
                                     
                                    
                                );

       
       foreach($resultJson as $result){
        $resultJson =  $this->validateJson($result, $check_request_keys);
        print_r($resultJson);die;
        //$resultJson =  $this->validateJson($requestJson, $check_request_keys);
       }

      
    }
    public function getCity(){
      $this->autoRender=false;
      $dataArray=array();
      $res=$this->City->find('all');
      if(!empty($res)){
        $i=0;
        $dataArray['res_code']=1;
        foreach($res as $result){
          $dataArray['braingroom'][$i]['id']=!empty($result['City']['id'])?$result['City']['id']:"";
          $dataArray['braingroom'][$i]['name']=!empty($result['City']['name'])?$result['City']['name']:"";
           $i++;
        }
        echo json_encode($dataArray);die;
      }
      else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('648','0')));
                    
      }
    }
 public function getCategory(){
   
  $this->autoRender=false;
  $res=$this->Category->find('all',array('conditions'=>array('status'=>1)));
  
  if(!empty($res)){
   $i=0;
   $dataArray['res_code']=1;
  foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['Category']['id'];
    $dataArray['braingroom'][$i]['category_name']=$result['Category']['category_name'];
     $i++;
  }
  echo json_encode($dataArray);
}
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('648','0')));
}

 }      
public function sendOtp(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'mobile_no',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $mobile_no=trim($requestJson['braingroom']['mobile_no']);
  $check=$this->UserMaster->find('first',array('conditions'=>array('contact_no'=>$mobile_no)));
  if(!empty($check)){
  $otp=$this->generateCode(6);
  $geo = file_get_contents('http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=gurpreet&password=1627184459&sendername=NETSMS&mobileno='.$mobile_no.'&message='.$otp);

// We convert the JSON to an array
/*$geo = json_decode($geo, true);

  $Url = 'http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=gurpreet&password=1627184459&sendername=NETSMS&mobileno='.$mobile_no.'&message='.$otp;
    $ch = curl_init();
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
 
    // Set a referer
    // curl_setopt($ch, CURLOPT_REFERER, "'http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=gurpreet&password=1627184459&sendername=NETSMS&mobileno='.$mobile_no.'&message='.$otp");
 
    // User agent
    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
 
    // Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);
 
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  
    // Download the given URL, and return output
    $output = curl_exec($ch);
    print_r($output);die;
    // Close the cURL resource, and free system resources
    curl_close($ch);*/
  $data['id']=$check['UserMaster']['id'];
  $data['reset_otp']=$otp;

  $this->UserMaster->save($data);
  
  $dataArray['res_code']=1;
  $dataArray['res_msg']="Otp Send Successfully on your Mobile Number";
  $dataArray['braingroom']['otp']=$otp;
  echo json_encode($dataArray);die;
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('649','0')));
         
  }
}
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('649','0')));
         
}
}
public function OtpVerification(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'otp',
                                '1'=>'uuid',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $otp=trim($requestJson['braingroom']['otp']);
  $uuid=trim($requestJson['braingroom']['uuid']);
  $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid,'reset_otp'=>$otp)));
  if(!empty($check)){
    $dataArray['res_code']=1;
    $dataArray['braingroom']['res_msg']="Otp Match Successfully";
    echo json_encode($dataArray);die;
     
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['braingroom']['res_msg']="Otp Does Not Match !";
    echo json_encode($dataArray);die;
  }
}
else{
   $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
     
}

}
public function viewMyClass(){
 $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'uuid',
                                
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $uuid=trim($requestJson['braingroom']['uuid']);
  $user_id=$this->findUserId($uuid);
 
  $res=$this->VendorClass->find('all',array('conditions'=>array('user_id'=>$user_id,'status'=>1)));
  if(!empty($res)){
     $dataArray['res_code']=1;
     $i=0;
    foreach($res as $result){
    $dataArray['braingroom'][$i]['class_id']=$result['VendorClass']['id'];
    $dataArray['braingroom'][$i]['class_topic']=$result['VendorClass']['class_topic'];
    $dataArray['braingroom'][$i]['class_summary']=$result['VendorClass']['class_summary'];
    $i++;
     

    }
    echo json_encode($dataArray);
  }
  else{
   $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('648','0')));
      
  }
  
}
$this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

}
public function findUserId($uuid){
  $this->autoRender=false;
  $result=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
 
 if(!empty($result)){
  $id=$result['UserMaster']['id'];
  return $id;
 }

}
public function sendRequest(){
   $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'class_id',
                                '1'=>'uuid',
                                
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $uuid=trim($requestJson['braingroom']['uuid']);
  
  $user_id=$this->findUserId($uuid);

  if(!empty($user_id)){
  $class_id=trim($requestJson['braingroom']['class_id']);
  $dataArray['vendor_id']=$user_id;
  $dataArray['class_id']=$class_id;
  $dataArray['status']=0;
  $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
  $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));

  $this->RequestCatalog->save($dataArray);

  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('650','1')));
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','1')));
   
  }  
}
else{
   $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','1')));
  
}
}
public function requestStatus(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                
                                '0'=>'uuid',  
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $uuid=trim($requestJson['braingroom']['uuid']);
  $vender_id=$this->findUserId($uuid);

  $res = $this->RequestCatalog->find('all',array('conditions'=>array('vendor_id' =>$vender_id)));
  
  if(!empty($res)){
  $dataArray['res_code']=1;
  $i=0;
  foreach($res as $result){
   $dataArray['braingroom'][$i]['id']=$result['RequestCatalog']['id'];
   if($result['RequestCatalog']['status']=='0'){
   $dataArray['braingroom'][$i]['request_status']="Pending";
 }
   if($result['RequestCatalog']['status']=='1'){
   $dataArray['braingroom'][$i]['request_status']="Approved";
 }
   if($result['RequestCatalog']['status']=='2'){
   $dataArray['braingroom'][$i]['request_status']="Rejected";
 }
 $i++;
  }
  echo json_encode($dataArray);die;
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','1'))); 
  }

}
else{
   $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','1')));
}
}


public function resetPassword(){
 $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'new_password',
                                '1'=>'uuid',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $new_password=trim($requestJson['braingroom']['new_password']);
  $uuid=trim($requestJson['braingroom']['uuid']);
  $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
  if(!empty($check)){
    $dataArray['id']=$check['UserMaster']['id'];
    $dataArray['password']=md5($new_password);
    $this->UserMaster->save($dataArray);
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('906','1')));
   
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
   
  }
}
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
   
} 
}
public function viewClassList(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'category_id',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $category_id=trim($requestJson['braingroom']['category_id']);
  $res=$this->VendorClass->find('all',array('conditions'=>array('category_id'=>$category_id,'status'=>1)));
  if(!empty($res)){
    $i=0;
    $dataArray['res_code']=1;
    foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['VendorClass']['id'];
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['VendorClass']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['VendorClass']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=$result['VendorClass']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['VendorClass']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    $dataArray['braingroom'][$i]['class_mode']=$result['VendorClass']['class_mode'];
    //$dataArray['braingroom'][$i]['no_of_seats']=$result['VendorClass']['no_of_seats'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
    //$dataArray['braingroom'][$i]['seat_cost']=$result['VendorClass']['seat_cost'];
    $dataArray['braingroom'][$i]['class_date']=date("Y-m-d",$result['VendorClass']['class_date']);
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['VendorClass']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_title']=$result['VendorClass']['class_title'];
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/user_upload/".$result['VendorClass']['pic_name'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    $dataArray['braingroom'][$i]['locality']=$result['VendorClass']['locality'];
    
    $city_name=$this->City->find('first',array('conditions'=>array('id'=>$result['VendorClass']['city_id'])));
    $dataArray['braingroom'][$i]['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
    $state_name=$this->State->find('first',array('conditions'=>array('id'=>$result['VendorClass']['state_id'])));
    $dataArray['braingroom'][$i]['state']=!empty($state_name['State']['name'])?$state_name['State']['name']:"";
    //$dataArray['braingroom'][$i]['country_id']=$result['VendorClass']['country_id'];
    //$dataArray['braingroom'][$i]['contact_person']=$result['VendorClass']['contact_person'];
    //$dataArray['braingroom'][$i]['contact_no']=$result['VendorClass']['contact_no'];
    //$dataArray['braingroom'][$i]['latitude']=$result['VendorClass']['latitude'];
    //$dataArray['braingroom'][$i]['logitude']=$result['VendorClass']['logitude'];
    $i++;
    }
    echo json_encode($dataArray);
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('641','0')));

  }
}
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
}
}
public function viewCatalogClass(){
  
  $this->autoRender=false;
  $res=$this->VendorClass->query('select bg_vendor_classes.* from bg_vendor_classes,bg_request_catalogs where bg_vendor_classes.id=bg_request_catalogs.class_id and bg_request_catalogs.status=1 and bg_vendor_classes.status=1');
  if(!empty($res)){
    $i=0;
    $dataArray['res_code']=1;
    foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['bg_vendor_classes']['id'];
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id'],'category_id'=>$result['bg_vendor_classes']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=$result['bg_vendor_classes']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
    $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    $dataArray['braingroom'][$i]['max_ticket_available']=$result['bg_vendor_classes']['max_ticket_available'];
    $dataArray['braingroom'][$i]['price_per_head']=$result['bg_vendor_classes']['price_per_head'];
    
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/user_upload/".$result['bg_vendor_classes']['pic_name'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    $dataArray['braingroom'][$i]['location']=$result['bg_vendor_classes']['location'];
   
    //$city_name=$this->City->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['city_id'])));
    //$dataArray['braingroom'][$i]['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
   
    //$dataArray['braingroom'][$i]['country_id']=$result['VendorClass']['country_id'];
    //$dataArray['braingroom'][$i]['contact_person']=$result['VendorClass']['contact_person'];
    //$dataArray['braingroom'][$i]['contact_no']=$result['VendorClass']['contact_no'];
    //$dataArray['braingroom'][$i]['latitude']=$result['VendorClass']['latitude'];
    //$dataArray['braingroom'][$i]['logitude']=$result['VendorClass']['logitude'];
    $i++;
    }
    echo json_encode($dataArray);
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('641','0')));

  }
}
public function searchCatalog(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'search_name',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $search_name=trim($requestJson['braingroom']['search_name']);
 
  if(!empty($search_name)){
    
    $res=$this->VendorClass->query("select bg_vendor_classes.* from bg_vendor_classes,bg_request_catalogs where bg_vendor_classes.id=bg_request_catalogs.class_id and bg_request_catalogs.status=1 and bg_vendor_classes.status=1 and  bg_vendor_classes.class_topic like '%$search_name%' or bg_vendor_classes.class_summary like '%$search_name%'");
   
    if(!empty($res)){
      $i=0;
      $dataArray['res_code']=1;
      foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['bg_vendor_classes']['id'];
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id'],'category_id'=>$result['bg_vendor_classes']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=$result['bg_vendor_classes']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
    $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    $dataArray['braingroom'][$i]['max_ticket_available']=$result['bg_vendor_classes']['max_ticket_available'];
    $dataArray['braingroom'][$i]['price_per_head']=$result['bg_vendor_classes']['price_per_head'];
    
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/user_upload/".$result['bg_vendor_classes']['pic_name'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    $dataArray['braingroom'][$i]['location']=$result['bg_vendor_classes']['location'];
     if($result['bg_vendor_classes']['level_id']=='1'){
     $dataArray['braingroom'][$i]['class_level']="Begineer";
     }
     if($result['bg_vendor_classes']['level_id']=='2'){
     $dataArray['braingroom'][$i]['class_level']="Intermediot";
     }
     if($result['bg_vendor_classes']['level_id']=='3'){
     $dataArray['braingroom'][$i]['class_level']="Advance";
     }
     $dataArray['braingroom'][$i]['age-group']=$result['bg_vendor_classes']['age_group'];
    $i++;
    }
    echo json_encode($dataArray);die;
  }
    else{
     $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('641','0')));//Record Not Found
    }
  }
  else{
    $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('642','0')));//Please Enter Category_name
  }

}
else{
   $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('623','0')));//Invalid Json Format
 }
}

public function viewPerticularClass(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'id',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $id=trim($requestJson['braingroom']['id']);
  $result=$this->VendorClass->find('first',array('conditions'=>array('id'=>$id,'status'=>1)));
  if(!empty($result)){
   
    $dataArray['res_code']=1;
  
    $dataArray['braingroom']['id']=$result['VendorClass']['id'];
    $dataArray['braingroom']['user_id']=$result['VendorClass']['user_id'];
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['VendorClass']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom']['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['VendorClass']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom']['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom']['class_type_id']=$result['VendorClass']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['VendorClass']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom']['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    $dataArray['braingroom']['class_mode']=$result['VendorClass']['class_mode'];
    $dataArray['braingroom']['no_of_seats']=$result['VendorClass']['no_of_seats'];
    $dataArray['braingroom']['booked_seats']=$result['VendorClass']['booked_seats'];
    $dataArray['braingroom']['seat_cost']=$result['VendorClass']['seat_cost'];
    $dataArray['braingroom']['class_date']=date("Y-m-d",$result['VendorClass']['class_date']);
    $dataArray['braingroom']['class_start_time']=date("h:i:s A",$result['VendorClass']['class_start_time']);
    $dataArray['braingroom']['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom']['class_title']=$result['VendorClass']['class_title'];
    $dataArray['braingroom']['description']=$result['VendorClass']['description'];
    $dataArray['braingroom']['pic_name']=HTTP_ROOT."img/user_upload/".$result['VendorClass']['pic_name'];
    $dataArray['braingroom']['address']=$result['VendorClass']['address'];
    $dataArray['braingroom']['locality']=$result['VendorClass']['locality'];
    
    $city_name=$this->City->find('first',array('conditions'=>array('id'=>$result['VendorClass']['city_id'])));
    $dataArray['braingroom']['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
    $state_name=$this->State->find('first',array('conditions'=>array('id'=>$result['VendorClass']['state_id'])));
    $dataArray['braingroom']['state']=!empty($state_name['State']['name'])?$state_name['State']['name']:"";
    $dataArray['braingroom']['country_id']=$result['VendorClass']['country_id'];
    $dataArray['braingroom']['contact_person']=$result['VendorClass']['contact_person'];
    $dataArray['braingroom']['contact_no']=$result['VendorClass']['contact_no'];
    $dataArray['braingroom']['latitude']=$result['VendorClass']['latitude'];
    $dataArray['braingroom']['logitude']=$result['VendorClass']['logitude'];
    
    echo json_encode($dataArray);
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('641','0')));

  }
}
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
}
}
     public function BuyerRegistration(){
    require ('sendgrid-php/vendor/autoload.php');
    require ('sendgrid-php/lib/SendGrid.php'); 
      $this->autoRender=false;
        $postData       = $this->request->input();
     
              
        $requestJson    = json_decode($postData, true);
       
      
        if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('623','0'))
                );
     
         }

       $userArray          = array();
       $dataArray          =array();  
        
        $check_request_keys = array(
                                    '0' => 'name',
                                    '1' => 'email',
                                    '2' => 'password',  
                                    '3' => 'mobile_no',
                                    '4' => 'city_id',  
                                    '5' => 'locality',  
                                    '6' => 'category_id',
                                    '7' => 'user_preference_id',
                                    '8' => 'd_o_b',
                                    '9' => 'gender',
                                    '10' => 'profile_image',
                                    '11' =>'latitude',
                                    '12' =>'longitude',
                                   
                                    
                                    
                                );

                $resultJson =  $this->validateJson($requestJson, $check_request_keys);
                if($resultJson=='1'){
                      
                      $dataArray['first_name']    = trim($requestJson['braingroom']['name']);
                     $dataArray['email']    = trim($requestJson['braingroom']['email']); 

                     $dataArray['password']= (trim($requestJson['braingroom']['password']));
                     $dataArray['contact_no']= (trim($requestJson['braingroom']['mobile_no']));
                     $dataArray['state_id']= (trim($requestJson['braingroom']['state']));
                     $dataArray['city_id']= (trim($requestJson['braingroom']['city_id']));
                     $dataArray['locality']= (trim($requestJson['braingroom']['locality']));
                     $dataArray['category_id']= (trim($requestJson['braingroom']['category_id']));
                     $dataArray['user_preference_id']= (trim($requestJson['braingroom']['user_preference_id']));
                     $dataArray['d_o_b']= (trim($requestJson['braingroom']['d_o_b']));
                     $dataArray['gender']= (trim($requestJson['braingroom']['gender']));
                     
                     $dataArray['profile_image']= (trim($requestJson['braingroom']['profile_image']));
                     $dataArray['latitude']= (trim($requestJson['braingroom']['latitude']));
                     $dataArray['longitude']= (trim($requestJson['braingroom']['longitude']));
                     
                     
                     $this->isBlank($dataArray['email'], '600', '0');
                     $this->isBlank($dataArray['password'], '601', '0');
                     $this->isBlank($dataArray['contact_no'], '625', '0');
                    
                     $this->isBlank($dataArray['city_id'], '627', '0');
                     $this->isBlank($dataArray['category_id'], '628', '0');
                      $this->requestAction(
                        array('controller' => 'validate', 'action' => 'validateEmail'),
                        array('pass' => array($dataArray['email']))
                );
                $this->requestAction(
                        array('controller' => 'validate', 'action' => 'emailExist'),
                        array('pass' => array($dataArray['email']))
                );
                $this->requestAction(
                        array('controller' => 'validate', 'action' => 'mobileExist'),
                        array('pass' => array($dataArray['contact_no']))
                );
                    /* $this->isBlank($dataArray['user_preference_id'], '629', '0');
                     $this->isBlank($dataArray['d_o_b'], '630', '0');
                     $this->isBlank($dataArray['gender'], '611', '0');

                     
                    
                     $this->isBlank($userArray['identity_of_verification'], '632', '0');
                     $this->isBlank($userArray['verfication_no'], '633', '0');*/
                     $dataArray['user_type_id']=2;//For Buyer
                     $dataArray['status']=2;
                     $this->requestAction(array('controller'=>'validate','action'=>'validateEmail'),array('pass'=>array($dataArray['email']))
                                          );
                     $this->requestAction(array('controller'=>'validate','action'=>'emailExist'),array('pass'=>array($dataArray['email']))
                                          );
                     $dataArray['password']=md5($dataArray['password']);
                      $uniqueIds  = $this->requestAction(array('controller' => 'validate','action' => 'generateUniqueIds'));
                      
                      $dataArray['uuid']      = $uniqueIds['uuid'];
                       $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                    
                  $dataArray['add_date']     = $getDateTime['datetime_in_sec'];
                  $dataArray['modify_date']  =   $getDateTime['datetime_in_sec'];
                  
                  $dataArray['sync_time']= $getDateTime['datetime_in_sec'];
                      $g_code=$this->generateCode(6); 
                    $dataArray['verification_code']=$g_code;                
                     $this->UserMaster->save($dataArray);
                     rename(HTTP_ROOT."/img/temp/".$dataArray['profile_image'],HTTP_ROOT."img/Buyer/profile/".$dataArray['profile_image']);
                     $user_id=$this->UserMaster->getLastInsertId();
                     $userArray['user_id']=$user_id;
                     $userArray['uuid']=$dataArray['uuid'];
                     $userArray['status']=1;
                     
                     $user['uuid']=$dataArray['uuid'];
                     $this->UserVerfication->save($userArray);
                     
                     $this->sendMail('signup', $userArray['email'],$g_code);
                     $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('700','1',$user))
                    ); 
                }
                else{
                 $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('623','0'))
                        );  
                }
    }
    public function getAllGiftCupan(){
      $this->autoRender=false;
      $res=$this->GiftCupan->find('all',array('conditions'=>array('status'=>1)));
      if(!empty($res)){
        $dataArray['res_code']=1;
        $i=0;
        foreach($res as $result){
         $dataArray['braingroom'][$i]['id']=$result['GiftCupan']['id'];
         $dataArray['braingroom'][$i]['gift_rupees']=$result['GiftCupan']['rupees'];
         $i++;
         
        }
        echo json_encode($dataArray);
      }
      else{
        $dataArray['res_code']=0;
        $dataArray['braingroom']['res_msg']='Record Not Found';
        echo json_encode($dataArray);
      }

    }
    public function getAllGiftCard(){
      $this->autoRender=false;
      $res=$this->Giftcard->find('all',array('conditions'=>array('status'=>1)));
      
      if(!empty($res)){
        $dataArray['res_code']=1;
        $i=0;
        foreach($res as $result){
         $dataArray['braingroom'][$i]['id']=$result['Giftcard']['id'];
         $dataArray['braingroom'][$i]['title']=$result['Giftcard']['title'];
         $dataArray['braingroom'][$i]['description']=$result['Giftcard']['description'];
         $dataArray['braingroom'][$i]['card_type_status']=$result['Giftcard']['card_type_status'];
         $dataArray['braingroom'][$i]['gift_image']=HTTP_ROOT.'/img/gift_image/'.$result['Giftcard']['gift_image'];

         
         $i++;
         
        }
        echo json_encode($dataArray);
      }
      else{
        $dataArray['res_code']=0;
        $dataArray['braingroom']['res_msg']='Record Not Found';
        echo json_encode($dataArray);
      }
 
    }
    public function buyCupanGift(){
          
      $this->autoRender=false;
      $postData=$this->request->input();
       $requestJson=json_decode($postData,true);
        $dataArray          =array();  
        $check_request_keys=array(
                                    '0'=>'uuid',
                                    '1'=>'cupan_id',
                                    
                                );
      
    $resultJson=$this->validateJson($requestJson,$check_request_keys);
   
if($resultJson=='1'){
     $uuid=trim($requestJson['braingroom']['uuid']);
     $cupan_id=trim($requestJson['braingroom']['cupan_id']);
     $user_id=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid),'fields'=>'id'));
      
     if(!empty($user_id)){
       $check_cupan_id=$this->GiftCupan->find('first',array('conditions'=>array('id'=>$cupan_id)));
       
       if(!empty($check_cupan_id)){
       $user_id=$user_id['UserMaster']['id'];
       $userArray['user_id']=$user_id;
       $userArray['rupees']=$check_cupan_id['GiftCupan']['rupees'];

       $cupan_code=$this->generateCupanCode(8);
       $check=$this->CupanDetail->find('first',array('conditions'=>array('cupan_code'=>$cupan_code)));
       
       if(empty($check)){
         $userArray['cupan_code']=$cupan_code;
       }
       else{
        $cupan_code=$this->generateCupanCode(8);
        $userArray['cupan_code']=$cupan_code;
       }
        $userArray['cupan_id']=$user_id;
        $userArray['status']=1;
        $userArray['add_date']=strtotime(date('Y-m-d H:i:s'));
        $userArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
       
        $this->CupanDetail->save($userArray);
        $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('907','1'))
                        );  
      
       
       
       }
       else{
       $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('652','0'))
                        ); 
       }

    }
    else{
     $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))
                        ); 
    }
  }
  else{
   $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('623','0'))
                        );   
  }
}

 function pushMessages(){
        
        $this->autoRender = false;
        $postData       = $this->request->input();
        $requestJson    = json_decode($postData, true);
       
        
        
        $check_request_keys = array(
                            
                            '0' => 'uuid',
                            '1' => 'device_id',
                            '2' => 'device_type',
                        );
       

          $resultJson=$this->validateJson($requestJson,$check_request_keys);

 
if($resultJson=='1'){

            $dataArray  = array();
          
          
            $uuid                       = trim($requestJson['braingroom']['uuid']);
            $mobile_no                  = trim($requestJson['braingroom']['mobile_no']); 
            $regid                      = trim($requestJson['braingroom']['device_id']);
            $device_type                = trim($requestJson['braingroom']['device_type']);        
             
           
           
            $getValidate = $this->DeviceData->find('first',array('conditions'=>array('device_id'=>$regid )));

             
            if(empty($getValidate)) {
                 
                $dataArray = array();
                $dataArray['uuid']           = $uuid;
                $dataArray['device_id']      = $regid;
                $dataArray['device_type']    = $device_type;
               
                $dataArray['add_date']       = strtotime(date('Y-m-d H:i:s'));
                $dataArray['modify_date']    = strtotime(date('Y-m-d H:i:s'));   
                  
                
                $this->DeviceData->save($dataArray);
                      
                $this->requestAction(
                    array('controller' => 'Validate','action' => 'generateServerResponse'), 
                    array('pass' => array('908', '1', $dataArray))
                );
                
            }else{
               $getValidate['DeviceData']['uuid']=$uuid;
              
               $this->DeviceData->save($getValidate);
                $this->requestAction(
                    array('controller' => 'Validate','action' => 'generateServerResponse'), 
                    array('pass' => array('908', '1', $dataArray))
                );

            }               
            
        }
        else{
           $this->requestAction(
                    array('controller' => 'Validate','action' => 'generateServerResponse'), 
                    array('pass' => array('623', '0')));
        }
    }
function generateCode($length=6){
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateCupanCode($length=8){
     $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

     public function fileUpload(){

    $request=$this->params->pass[0];
    $uuid=$this->params->pass[1];


    if($request== 'Image'){ 
       
       if(empty($uuid)){
        
         $img_filename = $_FILES['uploadedfile']['name'];
           
        
        $img_tmpname  = $_FILES['uploadedfile']['tmp_name'];
       
        
       
         
        if(($img_filename != "") && ($img_tmpname != "")){
            
            $explode_file   = explode(".",$img_filename);
            $countExp       = count($explode_file);
            $fileExtenstion = $explode_file[$countExp-1];
             
            if(($fileExtenstion != 'png') && ($fileExtenstion != 'jpg') && ($fileExtenstion != 'jpeg') &&($fileExtenstion != 'gif')){
                
                $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('611','0'))
                    ); 
            }else{
                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;    
                    
                    $upload=WWW_ROOT."img/temp/".$final_img;
                    
                      if(move_uploaded_file($img_tmpname,$upload)){                  
                        
                        $array= array();
                        $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                        
                       $array['braingroom']["res_code"] = "1";
                       $array['braingroom']["res_msg"]  = "Image Uploaded Successfully";
                       $array['braingroom']["sync_time"]= $getDateTime['datetime_in_sec'];
                        
                        $array['braingroom']["img_name"] =$final_img;
                        $data = json_encode($array);
                        echo $data;die;                              
                    } else{
                       $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('825','0'))
                        ); 
                        } 
                      }
                    }
                                   
                     
         
      }
      else{
       $img_filename = $_FILES['uploadedfile']['name'];

        $img_tmpname  = $_FILES['uploadedfile']['tmp_name'];
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        
        if(!empty($res)){
         
        if(($img_filename != "") && ($img_tmpname != "")){
            
            $explode_file   = explode(".",$img_filename);
            $countExp       = count($explode_file);
            $fileExtenstion = $explode_file[$countExp-1];
            
            if(($fileExtenstion != 'png') && ($fileExtenstion != 'jpg') && ($fileExtenstion != 'jpeg') &&($fileExtenstion != 'gif')){
                
                $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('611','0'))
                    ); 
            }else{
                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;    
                    
                    $upload=WWW_ROOT."img/user_upload/".$final_img;

                      if(move_uploaded_file($img_tmpname,$upload)){
                      
                         $this->UserMaster->updateAll(array('profile_image' => "'".$final_img."'"), array('uuid'=>$uuid));
                   
                        
                        $array= array();
                        $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                        
                       $array['braingroom']["res_code"] = "1";
                       $array['braingroom']["res_msg"]  = "Image Uploaded Successfully";
                       $array['braingroom']["sync_time"]= $getDateTime['datetime_in_sec'];
                        
                        $array['braingroom']["img_path"] =$final_img;
                        $data = json_encode($array);
                        echo $data;die;                              
                    } else{
                       $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('825','0'))
                        ); 
                        } 
                      }
                    }
                  }
                      else{
                         $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))
                        ); 
                      
                        
                
        
            }
        
       
           
       
        }
      }
        else if($request== 'File'){  
             if(empty($uuid)){

               $img_filename = $_FILES['uploadedfile']['name'];

        $img_tmpname  = $_FILES['uploadedfile']['tmp_name'];
       
        if(($img_filename != "") && ($img_tmpname != "")){
            
            $explode_file   = explode(".",$img_filename);
            $countExp       = count($explode_file);
            $fileExtenstion = $explode_file[$countExp-1];
            
            if(($fileExtenstion != 'png') && ($fileExtenstion != 'jpg') && ($fileExtenstion != 'jpeg') &&($fileExtenstion != 'gif')&&($fileExtenstion != 'doc')&&($fileExtenstion != 'pdf')&&($fileExtenstion != 'xls')&&($fileExtenstion != 'html')&&($fileExtenstion != 'ppt')&&($fileExtenstion != 'docx')){
                
                $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('611','0'))
                    ); 
            }else{
                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;    
                    
                    $upload=WWW_ROOT."img/files/".$final_img;
                    
                      if(move_uploaded_file($img_tmpname,$upload)){
                      
                      
                        
                        $array= array();
                        $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                        
                       $array['braingroom']["res_code"] = "1";
                       $array['braingroom']["res_msg"]  = "File Uploaded Successfully";
                       $array['braingroom']["sync_time"]= $getDateTime['datetime_in_sec'];
                        
                        $array['braingroom']["img_path"] =$final_img;

                        $data = json_encode($array);
                        echo $data;die;                              
                    } else{
                       $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('825','0'))
                        ); 
                        } 
                      }
                    }
                  
                      else{
                         $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))
                        ); 
                      
                        
                
        
            }
             }
             else{
        /*$img_filename = $_FILES['uploadedfile']['name'];

        $img_tmpname  = $_FILES['uploadedfile']['tmp_name'];
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        
        if(!empty($res)){
         
        if(($img_filename != "") && ($img_tmpname != "")){
            
            $explode_file   = explode(".",$img_filename);
            $countExp       = count($explode_file);
            $fileExtenstion = $explode_file[$countExp-1];
            
            if(($fileExtenstion != 'png') && ($fileExtenstion != 'jpg') && ($fileExtenstion != 'jpeg') &&($fileExtenstion != 'gif')&&($fileExtenstion != 'doc')&&($fileExtenstion != 'pdf')&&($fileExtenstion != 'xls')&&($fileExtenstion != 'html')&&($fileExtenstion != 'ppt')&&($fileExtenstion != 'docx')){
                
                $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('611','0'))
                    ); 
            }else{
                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;    
                    
                    $upload=WWW_ROOT."img/files/".$final_img;
                    
                      if(move_uploaded_file($img_tmpname,$upload)){
                      
                         $this->UserVerfication->updateAll(array('attached_media' => "'".$final_img."'"), array('uuid'=>$uuid));
                        
                        print_r("rahul");
                        $array= array();
                        $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                        
                       $array['braingroom']["res_code"] = "1";
                       $array['braingroom']["res_msg"]  = "File Uploaded Successfully";
                       $array['braingroom']["sync_time"]= $getDateTime['datetime_in_sec'];
                        
                        $array['braingroom']["img_path"] = HTTP_ROOT.'img/files/'.$final_img;

                        $data = json_encode($array);
                        echo $data;die;                              
                    } else{
                       $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('825','0'))
                        ); 
                        } 
                      }
                    }
                  }
                      else{
                         $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))
                        ); 
                      
                        
                
        
            }*/
          }
        }
          else if($request== 'VideoGallary'){  
         
        $img_filename = $_FILES['uploadedfile']['name'];

        $img_tmpname  = $_FILES['uploadedfile']['tmp_name'];
        //$res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        
        //if(!empty($res)){
         
        if(($img_filename != "") && ($img_tmpname != "")){
            
            $explode_file   = explode(".",$img_filename);
            $countExp       = count($explode_file);
            $fileExtenstion = $explode_file[$countExp-1];
            
            if(($fileExtenstion != 'avi') && ($fileExtenstion != 'asf') && ($fileExtenstion != 'mov') &&($fileExtenstion != 'flv')&&($fileExtenstion != 'swf')&&($fileExtenstion != 'mpg')&&($fileExtenstion != 'mp4')&&($fileExtenstion != 'wmv')&&($fileExtenstion != 'divX')&&($fileExtenstion != 'FLV')){
                
                $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('640','0'))
                    ); 
            }else{

                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;    
                    
                    $upload=WWW_ROOT."img/galary_video/".$final_img;
                    
                      if(move_uploaded_file($img_tmpname,$upload)){
                        
                        
                        $array= array();
                        $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                        
                       $array['braingroom']["res_code"] = "1";
                       $array['braingroom']["res_msg"]  = "Video Uploaded Successfully";
                       $array['braingroom']["sync_time"]= $getDateTime['datetime_in_sec'];
                        
                        $array['braingroom']["img_path"] =$final_img;

                        $data = json_encode($array);
                        echo $data;die;                              
                    } else{
                       $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('825','0'))
                        ); 
                        } 
                      }
                    }
                  
                      else{
                         $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))
                        ); 
                      
                        
                
        
            }
        }
if($request== 'ImageGallary'){  
       
        $img_filename = $_FILES['uploadedfile']['name'];

        $img_tmpname  = $_FILES['uploadedfile']['tmp_name'];
        //$res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        
       // if(!empty($res)){
         
        if(($img_filename != "") && ($img_tmpname != "")){
            
            $explode_file   = explode(".",$img_filename);
            $countExp       = count($explode_file);
            $fileExtenstion = $explode_file[$countExp-1];
            
            if(($fileExtenstion != 'png') && ($fileExtenstion != 'jpg') && ($fileExtenstion != 'jpeg') &&($fileExtenstion != 'gif')){
                
                $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('611','0'))
                    ); 
            }else{
                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;    
                    
                    $upload=WWW_ROOT."img/galary_image/".$final_img;

                      if(move_uploaded_file($img_tmpname,$upload)){
                      
                        
                        $array= array();
                        $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                        
                       $array['braingroom']["res_code"] = "1";
                       $array['braingroom']["res_msg"]  = "Image Uploaded Successfully";
                       $array['braingroom']["sync_time"]= $getDateTime['datetime_in_sec'];
                        
                        $array['braingroom']["img_path"] =$final_img;
                        $data = json_encode($array);
                        echo $data;die;                              
                    } else{
                       $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('825','0'))
                        ); 
                        } 
                      
                    }
                  }
                      else{
                         $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))
                        ); 
                      
                        
                
        
            }
        }
}
 public function postGallary(){

     $this->autoRender = false;

        $postData       = $this->request->input();
        
        $requestJson    = json_decode($postData, true);
       
      
        if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('623','0'))
                );
     
         }

       $userArray          = array();
       $dataArray          =array();  
        
        $check_request_keys = array(
                                    
                                    
                                    '0' => 'user_id',  
                                    '1' =>'category_id',
                                    '2' =>'media_title',
                                    '3' =>'media_path',
                                    '4' =>'description',
                               
                                   
                                    
                                    
                                );
                
                $resultJson =  $this->validateJson($requestJson, $check_request_keys);
             
                if($resultJson=='1'){
                  $dataArray['user_id']=trim($requestJson['braingroom']['user_id']);
                  $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
                  $dataArray['media_title']=trim($requestJson['braingroom']['media_title']);
                  $dataArray['media_path']=trim($requestJson['braingroom']['media_path']);
                  $dataArray['description']=trim($requestJson['braingroom']['description']);
                  $dataArray['status']=1;
                  $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
                  $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
                  
                  $this->VendorGallery->save($dataArray);
		 if($dataArray['category_id']==2){
                  $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('904','1'))
                    );
		}
	         if($dataArray['category_id']==1){
                  $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('905','1'))
                    );
		}
                 
               }

  
  else{
    $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('623','0'))
                    );
  }
}
public function getGallary(){
   $this->autoRender = false;

        $postData       = $this->request->input();
        
        $requestJson    = json_decode($postData, true);
       
      
        if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('623','0'))
                );
     
         }

       $userArray          = array();
       $dataArray          =array();  
        
        $check_request_keys = array(
                                    
                                    
                                    '0' => 'user_id',  
                                    '1' =>'category_id',
                                   
                                                           
                                    
                                    
                                );
                
                $resultJson =  $this->validateJson($requestJson, $check_request_keys);
             
                if($resultJson=='1'){

                 $user_id=trim($requestJson['braingroom']['user_id']);
                 $category_id=trim($requestJson['braingroom']['category_id']);

                 $res1=$this->VendorGallery->find('all',array('conditions'=>array('user_id'=>$user_id,'category_id'=>$category_id,'status'=>1)));
                 if(!empty($res1)){
                  $i=0;
                  foreach($res1 as $res){

                 
                  $userArray['res_code']=1;
                  $userArray['braingroom'][$i]['id']=$res['VendorGallery']['id'];
                  $userArray['braingroom'][$i]['media_title']=$res['VendorGallery']['media_title'];
                  if($category_id==2){
                  $userArray['braingroom'][$i]['media_path']=HTTP_ROOT.'/img/galary_video/'.$res['VendorGallery']['media_path'];
                  }
                  if($category_id==1){
                  $userArray['braingroom'][$i]['media_path']=HTTP_ROOT.'/img/user_upload/'.$res['VendorGallery']['media_path'];
                  }
                  $userArray['braingroom'][$i]['description']=$res['VendorGallery']['description'];
                  $i++;
                  }
                
                 echo json_encode($userArray);
                }
                else{
                  $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('639','0'))
                    ); 
                }
                }
                else{
                  $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('623','0'))
                    );  
                }
}


   public function login(){
      
      $this->autoRender = false;

        $postData       = $this->request->input();
        
        $requestJson    = json_decode($postData, true);
       
      
        if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('623','0'))
                );
     
         }

       $userArray          = array();
       $dataArray          =array();  
        
        $check_request_keys = array(
                                    
                                    
                                    '0' => 'email',  
                                    '1' => 'password',
                                    '2' =>'social_network_id',
                                    '3'=>'latitude',
                                    '4'=>'longitude',
                               
                                   
                                    
                                    
                                );

                $resultJson =  $this->validateJson($requestJson, $check_request_keys);
                
                if($resultJson=='1'){
                     //$user_type_id         = trim($requestJson['braingroom']['user_type_id']);
                     $email                = trim($requestJson['braingroom']['email']); 
                     $password             = (trim($requestJson['braingroom']['password']));
                     $social_id            = (trim($requestJson['braingroom']['social_network_id']));
                     $latitude             = (trim($requestJson['braingroom']['latitude']));
                     $longitude             = (trim($requestJson['braingroom']['longitude']));
                     
                     if($social_id==''){
                    
                    
                     $this->isBlank($email, '600', '0');
                      $this->requestAction(
                        array('controller' => 'validate', 'action' => 'validateEmail'),
                        array('pass' => array($email))
                );
                      $this->isBlank($password, '601', '0');
                   


                    

                     

                    
             
               
                $res=$this->UserMaster->find('first',array('conditions'=>array('email'=>$email,'password'=>md5($password))));
                
               if(!empty($res)){
                   
               $dataArray['uuid'] =$res['UserMaster']['uuid'];
                $dataArray['status']=1;
                $dataArray['id']=$res['UserMaster']['id'];
                $dataArray['vendor_type_id']=$res['UserMaster']['vendor_type_id'];
                
                $dataArray['user_type_id']=$res['UserMaster']['user_type_id'];
                if($dataArray['user_type_id']=='1'){
                 $dataArray['profile_pic']=HTTP_ROOT.'/img/Vendor/profile/'.$res['UserMaster']['profile_image'];
                }
                else{
                $dataArray['profile_pic']=HTTP_ROOT.'/img/Buyer/profile/'.$res['UserMaster']['profile_image'];
                }
                $dataArray['city_id']=$res['UserMaster']['city_id'];
              
                $dataArray['name']=$res['UserMaster']['first_name'];
                
                
                $this->UserMaster->save($dataArray);
                $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('900','1',$dataArray))
                    );
               }
               else{

                $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('604','0'))
                    );
               }  
                    
                }
                else{
                   $res=$this->UserMaster->find('first',array('conditions'=>array('social_network_id'=>$social_id)));
                
               if(!empty($res)){
                   
                $dataArray['uuid'] =$res['UserMaster']['uuid'];
                $dataArray['status']=1;
                $dataArray['id']=$res['UserMaster']['id'];
                $dataArray['vendor_type_id']=$res['UserMaster']['vendor_type_id'];
                
                $dataArray['user_type_id']=$res['UserMaster']['user_type_id'];
                if($dataArray['user_type_id']=='1'){
                 $dataArray['profile_pic']=$res['UserMaster']['profile_image'];
                }
                else{
                $dataArray['profile_pic']=$res['UserMaster']['profile_image'];
                }
                $dataArray['city_id']=$res['UserMaster']['city_id'];
              
                $dataArray['name']=$res['UserMaster']['first_name'];
              
              
                $dataArray['latitude']= $latitude;  
                $dataArray['longitude']= $longitude;
                
                $this->UserMaster->save($dataArray);
                $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('900','1',$dataArray))
                    );
               }
               else{

                $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('604','0'))
                    );
               }
                }
              }
                else{
                   $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),
                                  array('pass'=>array('623','0'))
                                  );
                }
    }
 public function socialLogin(){
      $this->autoRender=false;
        $postData       = $this->request->input();
               
        $requestJson    = json_decode($postData, true);
         if(empty($requestJson)){
            $this->requestAction(
                array('controller' => 'Validate', 'action' => 'generateServerResponse'),
                array('pass' => array('623','0'))
                );
     
         }

       $userArray          = array();
       $dataArray          =array();  
        
        $check_request_keys = array(
                                   
                                    '0' => 'first_name',
                                    '1' => 'last_name',  
                                    '2' => 'email',
                                    '3' => 'social_network_id',
                                    '4' =>'ip_address',
                                    '5' =>'address_latitude',
                                    '6' =>'address_longitude',
                                   
                                    
                                    
                                );

                $resultJson =  $this->validateJson($requestJson, $check_request_keys);
                
                if($resultJson=='1'){
                  $dataArray['first_name']=trim($requestJson['braingroom']['first_name']);
                  $dataArray['last_name']=trim($requestJson['braingroom']['last_name']);
                  $dataArray['email']=trim($requestJson['braingroom']['email']);
                  $dataArray['social_network_id']=trim($requestJson['braingroom']['social_network_id']);
                  $dataArray['ip_address']=trim($requestJson['braingroom']['ip_address']);
                  $dataArray['address_latitude']=trim($requestJson['braingroom']['address_latitude']);
                  $dataArray['address_longitude']=trim($requestJson['braingroom']['address_longitude']);
                  $check=$this->UserMaster->find('first',array('conditions'=>array('email'=>$dataArray['email'],'social_network_id'=>$dataArray['social_network_id'])));
                 
                  if(empty($check)){
                  $uniqueIds  = $this->requestAction(array('controller' => 'validate','action' => 'generateUniqueIds'));
                      
                  $dataArray['uuid']      = $uniqueIds['uuid'];
                  $getDateTime = $this->requestAction(array('controller' => 'Cpanels', 'action' => 'getDateAndIp'));
                    
                  $dataArray['add_date']     = $getDateTime['datetime_in_sec'];
                  $dataArray['modify_date']  =   $getDateTime['datetime_in_sec'];
                  $dataArray['status']=1;
                  
                  $userArray['sync_time']= $getDateTime['datetime_in_sec'];
                  $userArray['uuid']=$dataArray['uuid'];
                  $this->UserMaster->save($dataArray);
                  $this->requestAction(
                    array('controller' => 'validate', 'action' => 'generateServerResponse'),
                    array('pass' => array('700','1',$userArray))
                    );
                  
                  }
                  else{
                    $data['braingroom']['res_code']=1;
                    $data['braingroom']['res_msg']='You are Already Registered';
                    echo json_encode($data);die;
                  }
                }
                else{
                   $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('623','0'))
                        );
                }
    }
/*====================================@Rahul Pathak Date 26-04-2016 ====================================================*/
    public function getProfile(){
    $this->autoRender=false;
    $dataArray=array();
    $postData=$this->request->input();
    $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'id',
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  //print_r("rahul");die;
  $id=trim($requestJson['braingroom']['id']);
  $res=$this->UserMaster->find('first',array('conditions'=>array('id'=>$id,'status'=>1)));
  if(!empty($res)){
    //print_r($res);die;
    $dataArray['braingroom']['res_code']=1;
    $dataArray['braingroom']['id']=!empty($res['UserMaster']['id'])?$res['UserMaster']['id']:"";
    $dataArray['braingroom']['first_name']=!empty($res['UserMaster']['first_name'])?$res['UserMaster']['first_name']:"";
    $dataArray['braingroom']['last_name']=!empty($res['UserMaster']['last_name'])?$res['UserMaster']['last_name']:"";
    $dataArray['braingroom']['email']=!empty($res['UserMaster']['email'])?$res['UserMaster']['email']:"";
    $dataArray['braingroom']['user_type_id']=!empty($res['UserMaster']['user_type_id'])?$res['UserMaster']['user_type_id']:"";
    $dataArray['braingroom']['vendor_type_id']=!empty($res['UserMaster']['vendor_type_id'])?$res['UserMaster']['vendor_type_id']:"";
    $dataArray['braingroom']['category_id']=!empty($res['UserMaster']['category_id'])?$res['UserMaster']['category_id']:"";
    $dataArray['braingroom']['user_preference_id']=!empty($res['UserMaster']['user_preference_id'])?$res['UserMaster']['user_preference_id']:"";
    $dataArray['braingroom']['language']=!empty($res['UserMaster']['language'])?$res['UserMaster']['language']:"";
    $dataArray['braingroom']['d_o_b']=!empty($res['UserMaster']['d_o_b'])?$res['UserMaster']['d_o_b']:"";
    $dataArray['braingroom']['contact_no']=!empty($res['UserMaster']['contact_no'])?$res['UserMaster']['contact_no']:"";
    $city_name=$this->City->find('first',array('conditions'=>array('id'=>$res['UserMaster']['city_id'])));
    if(!empty($city_name)){
    $dataArray['braingroom']['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
    }
    else{
	$dataArray['braingroom']['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
        
	}
    $dataArray['braingroom']['locality']=!empty($res['UserMaster']['landmark'])?$res['UserMaster']['locality']:"";
    $dataArray['braingroom']['address']=!empty($res['UserMaster']['address'])?$res['UserMaster']['address']:"";
   
   
    $dataArray['braingroom']['profile_image']=HTTP_ROOT."img/user_upload/".$res['UserMaster']['profile_image'];
    $dataArray['braingroom']['gender']=!empty($res['UserMaster']['gender'])?$res['UserMaster']['gender']:"";
    $dataArray['braingroom']['area_of_expertise/interest']=!empty($res['UserMaster']['area_of_expertise/interest'])?$res['UserMaster']['area_of_expertise/interest']:"";
    $dataArray['braingroom']['coaching_experience']=!empty($res['UserMaster']['coaching_experience'])?$res['UserMaster']['coaching_experience']:"";
    $dataArray['braingroom']['last_latitude']=!empty($res['UserMaster']['last_latitude'])?$res['UserMaster']['last_latitude']:"";
    $dataArray['braingroom']['last_longitude']=!empty($res['UserMaster']['last_longitude'])?$res['UserMaster']['last_longitude']:"";
    $dataArray['braingroom']['uuid']=!empty($res['UserMaster']['uuid'])?$res['UserMaster']['uuid']:"";
    
    echo json_encode($dataArray);
  }
  else{

$this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('648','0')));
  }
}
else{
  $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('623','0')));
}
  }
/*=======================================================END=====================================================================*/    
/*=====================================================@Rahul Pathak 26-04-2016 UPDATE PROFILE==================================================*/
public function updateProfile(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'id',
                                '1'=>'first_name',
                                '2'=>'last_name',
                                '3'=>'email',
                                '4'=>'user_type_id',
                                '5'=>'vendor_type_id',
                                '6'=>'category_id',
                                '7'=>'user_preference_id',
                                '8'=>'language',
                                '9'=>'d_o_b',
                                '10'=>'contact_no',
                                '11'=>'country_id',
                                '12'=>'state_id',
                                '13'=>'city_id',
                                '14'=>'land_mark',
                                '15'=>'address',
                                '16'=>'address_latitude',
                                '17'=>'address_longitude',
                                '18'=>'ip_address',
                                '19'=>'gender',
                                '20'=>'area_of_expertise/interest',
                                '21'=>'coaching_experience',

                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $dataArray['id']=trim($requestJson['braingroom']['id']);
  $dataArray['first_name']=trim($requestJson['braingroom']['first_name']);
  $dataArray['last_name']=trim($requestJson['braingroom']['last_name']);
  $dataArray['email']=trim($requestJson['braingroom']['email']);
  $dataArray['user_type_id']=trim($requestJson['braingroom']['user_type_id']);
  $dataArray['vendor_type_id']=trim($requestJson['braingroom']['vendor_type_id']);
  $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
  $dataArray['user_preference_id']=trim($requestJson['braingroom']['user_preference_id']);
  $dataArray['language']=trim($requestJson['braingroom']['language']);
  $dataArray['d_o_b']=trim($requestJson['braingroom']['d_o_b']);
  $dataArray['contact_no']=trim($requestJson['braingroom']['contact_no']);
  $dataArray['country_id']=trim($requestJson['braingroom']['country_id']);
  $dataArray['state_id']=trim($requestJson['braingroom']['state_id']);
  $dataArray['city_id']=trim($requestJson['braingroom']['city_id']);
  $dataArray['land_mark']=trim($requestJson['braingroom']['land_mark']);
  $dataArray['address_latitude']=trim($requestJson['braingroom']['address_latitude']);
  $dataArray['address_longitude']=trim($requestJson['braingroom']['address_longitude']);
  $dataArray['ip_address']=trim($requestJson['braingroom']['ip_address']);
  $dataArray['gender']=trim($requestJson['braingroom']['gender']);
  $dataArray['area_of_expertise/interest']=trim($requestJson['braingroom']['area_of_expertise/interest']);
  $dataArray['coaching_experience']=trim($requestJson['braingroom']['coaching_experience']);
$check=$this->UserMaster->find('first',array('conditions'=>array('id'=>$dataArray['id'])));
if(!empty($check)){
  if($this->UserMaster->save($dataArray)){
     $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('903','1')));
  }
}
else{
    $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('639','0')));
     } 
}
else{
   $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('623','0')));
    }
}

/*======================================================END=======================================================================*/
public function addClass(){
 $this->autoRender=false;
 $postData=$this->request->input();
 $requestJson=json_decode($postData,true);
 $dataArray          =array();  
$check_request_keys=array(
                                '0'=>'user_id',
                                '1'=>'category_id',
                                '2'=>'segment_id',
                                '3'=>'class_topic',
                                '4'=>'class_summary',
                                '5'=>'class_schedule_id',
                                '6'=>'recurring_class_id',
                                '7'=>'no_of_session',
                                '8'=>'starting_month',
                                '9'=>'end_month',
                                '10'=>'day_of_week',
                                '11'=>'time_of_day',
                                '12'=>'class_date',
                                '13'=>'class_duration',
                                '14'=>'class_type_id',
                                '15'=>'location',
                                '16'=>'level_id',
                                '17'=>'age_group',
                                '18'=>'class_provider_id',
                                '19'=>'community_id',
                                '20'=>'max_ticket_available',
                                '21'=>'price_per_head',
                                '22'=>'class_tag',
                                '23'=>'upload_ppt_name',
                                '24'=>'upload_video_name',
                                '25'=>'upload_tutor_picture',
                                '26'=>'upload_class_photo',
                                
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $dataArray['user_id']=trim($requestJson['braingroom']['user_id']);
  $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
  $dataArray['segment_id']=trim($requestJson['braingroom']['segment_id']);
  $dataArray['class_topic']=trim($requestJson['braingroom']['class_topic']);
  $dataArray['class_summary']=trim($requestJson['braingroom']['class_summary']);
  $dataArray['class_timing_id']=trim($requestJson['braingroom']['class_schedule_id']);
  $dataArray['recurring_class_id']=trim($requestJson['braingroom']['recurring_class_id']);
  
  $dataArray['no_of_session']=trim($requestJson['braingroom']['no_of_session']);
  $dataArray['starting_month']=trim($requestJson['braingroom']['starting_month']);
  $dataArray['end_month']=trim($requestJson['braingroom']['end_month']);
  $dataArray['day_of_week']=trim($requestJson['braingroom']['day_of_week']);
  $dataArray['time_of_day']=trim($requestJson['braingroom']['time_of_day']);
  $dataArray['class_date']=trim($requestJson['braingroom']['class_date']);
  $dataArray['class_duration']=trim($requestJson['braingroom']['class_duration']);
  $dataArray['class_type_id']=trim($requestJson['braingroom']['class_type_id']);
  $dataArray['location']=trim($requestJson['braingroom']['location']);
  $dataArray['level_id']=trim($requestJson['braingroom']['level_id']);
  $dataArray['age_group']=trim($requestJson['braingroom']['age_group']);
  $dataArray['class_provider_id']=trim($requestJson['braingroom']['class_provider_id']);
  $dataArray['community_id']=trim($requestJson['braingroom']['community_id']);
  $dataArray['max_ticket_available']=trim($requestJson['braingroom']['max_ticket_available']);
  $dataArray['price_per_head']=trim($requestJson['braingroom']['price_per_head']);
  $dataArray['class_tag']=trim($requestJson['braingroom']['class_tag']);
  $dataArray['upload_ppt_name']=trim($requestJson['braingroom']['upload_ppt_name']);
  $dataArray['upload_video_name']=trim($requestJson['braingroom']['upload_video_name']);
  $dataArray['upload_tutor_picture']=trim($requestJson['braingroom']['upload_tutor_picture']);
  $dataArray['upload_class_photo']=trim($requestJson['braingroom']['upload_class_photo']);
  $dataArray['status']=1;
  $dataArray['upload_ppt_name']=trim($requestJson['braingroom']['upload_ppt_name']);
  $dataArray['upload_video_name']=trim($requestJson['braingroom']['upload_video_name']);
  $dataArray['upload_ppt_name']=trim($requestJson['braingroom']['upload_ppt_name']);
  $dataArray['upload_ppt_name']=trim($requestJson['braingroom']['upload_ppt_name']);
  
  $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
  $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
  
   $this->isBlank($dataArray['user_id'], '643', '0');
   $this->isBlank($dataArray['category_id'], '628', '0');
   $this->isBlank($dataArray['segment_id'], '644', '0');
   $this->isBlank($dataArray['class_type_id'], '645', '0');
   $this->isBlank($dataArray['class_timing_id'], '646', '0');
   // We define our address
$address = $dataArray['location'].' Chennai India';

// We get the JSON results from this request
$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');
// We convert the JSON to an array
$geo = json_decode($geo, true);
// If everything is cool
if ($geo['status'] = 'OK') {
  // We set our values
  $latitude = $geo['results'][0]['geometry']['location']['lat'];
  $longitude = $geo['results'][0]['geometry']['location']['lng'];

}
   $dataArray['latitude']=$latitude;
   $dataArray['longitude']=$longitude;
   
   $this->VendorClass->save($dataArray);

   
 
   $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('905','1')));

   
   
  
}
else{
   $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('623','0')));
} 
}

 public function categorySearch(){
 $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'category_name',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $category_name=trim($requestJson['braingroom']['category_name']);
 
  if(!empty($category_name)){
  
    $res=$this->Category->query("select * from bg_categories where category_name like '%$category_name%'");
    
    if(!empty($res)){
      $i=0;
      $dataArray['res_code']=1;
      foreach($res as $result){
       $dataArray['braingroom'][$i]['category_id']=$result['bg_categories']['id'];
       $dataArray['braingroom'][$i]['category_name']=$result['bg_categories']['category_name'];
       $i++;
      }
      echo json_encode($dataArray);
    }
    else{
     $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('641','0')));//Record Not Found
    }
  }
  else{
    $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('642','0')));//Please Enter Category_name
  }

}
else{
   $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('623','0')));//Invalid Json Format
 }
}   


public function getSegment(){
  $this->autoRender=false;
   $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'category_id',
                                
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){

  $category_id=trim($requestJson['braingroom']['category_id']);
  $res=$this->ClassSegment->find('all',array('conditions'=>array('category_id'=>$category_id)));
  
  if(!empty($res)){
    $i=0;
  $dataArray['res_code']=1;
  foreach($res as $result){
  $dataArray['braingroom'][$i]['id']=$result['ClassSegment']['id'];
  $dataArray['braingroom'][$i]['category_name']=$result['ClassSegment']['segment_name'];
  $i++;
  
  }
  echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['braingroom']['res_msg']="Category Not Found";
     
  }
}
else{
$this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
}

}
public function getCommunity(){
  $this->autoRender=false;
  $dataArray=array();
  $res=$this->Community->find('all',array('conditions'=>array('status'=>1)));
  

  if(!empty($res)){
  $i=0;
  $dataArray['res_code']=1;
  foreach($res as $result){
  $dataArray['braingroom'][$i]['id']=$result['Community']['id'];
  $dataArray['braingroom'][$i]['community_name']=$result['Community']['community_name'];
  $i++;
  
  }
  echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['braingroom']['res_msg']="Community Not Found";
     
  }
}
public function getClassType(){
  $this->autoRender=false;
  $dataArray=array();
  $res=$this->ClassType->find('all');
  if(!empty($res)){
  $i=0;
  $dataArray['res_code']=1;
  foreach($res as $result){
  $dataArray['braingroom'][$i]['id']=$result['ClassType']['id'];
  $dataArray['braingroom'][$i]['class_type']=$result['ClassType']['types'];
  $i++;
  
  }
  echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['braingroom']['res_msg']="Category Not Found";
    echo json_encode($dataArray); 
  }
}
public function getLocality(){
    $this->autoRender=false;
    $postData=$this->request->input();
    $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'city_id',
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
 $city_id=trim($requestJson['braingroom']['city_id']);
 $res=$this->Locality->find('all',array('conditions'=>array('city_id'=>$city_id),'order'=>array('name')));
if(!empty($res)){
  $dataArray['res_code']=1;
  $i=0;
  foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['Locality']['id'];
    $dataArray['braingroom'][$i]['name']=$result['Locality']['name'];
    $i++; 
  }
  echo json_encode($dataArray);die;
}
else{
     $dataArray['res_code']=0;
    $dataArray['braingroom']['res_msg']="Locality Not Found";
    echo json_encode($dataArray); 
}
 }
 else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
  }
}
public function forgotPassword()
{

    require ('sendgrid-php/vendor/autoload.php');
   require ('sendgrid-php/lib/SendGrid.php'); 
    $this->autoRender=false;
    $postData=$this->request->input();
    $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'email',
                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){

    $email=trim($requestJson['braingroom']['email']);
    $this->isBlank($email,'600','0');
    
   
    
    $res=$this->UserMaster->find('first',array('conditions'=>array('email'=>$email,'status'=>1)));
   
    if(!empty($res)){
        $newPassword = $this->generatePassword(10);

     
   

    $this->UserMaster->updateAll(array('password' => "'".md5($newPassword)."'"), array('email' => $email));
    $this->sendMail('forgot_password', $email, $newPassword);
    
     $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('901','1'))
    );
    }
    else{

        $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('605','0')));
    }
   
   
    }
 else{

        $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('623','0')));
    }

}
function generatePassword($length = 10) {

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length-4; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $characters1='0123456789';
        $charactersLength1 = strlen($characters1);
        $randomString .= $characters1[rand(0, $charactersLength1 - 1)];
        $characters2='!@#$%^&';
        $charactersLength2 = strlen($characters2);
        $randomString .= $characters2[rand(0, $charactersLength2 - 1)];
        return $randomString;
    }
    
       
	

        public function validateJson($requestJson, $check_request_keys){
      
        $this->autoRender   = false;
        $request_keys       = array();
        $validate_keys      = array();
        
        foreach($requestJson['braingroom'] as $key=>$val){
            array_push($request_keys, $key);
        }

       
        for($i=0;$i<count($check_request_keys);$i++){
        $var=in_array($request_keys[$i],$check_request_keys) ? array_push($validate_keys, 'S') :  array_push($validate_keys, 'F');
        }
       
        if(in_array("F", $validate_keys)){ // If request Json is not valid then return false
            return false;
        }else{
                //If request Json is valid all it's index are correct
            return  true;
        }        
    }
public function changePassword()
{
    $this->autoRender=false;
    $postData=$this->request->input();
    $requestJson  = json_decode($postData, true);
    
    $dataArray          =array();  
    $check_request_keys = array(
                               
                                '0' => 'uuid',
                                '1' => 'old_password',
                                '2'=>  'new_password',
                                
                                
                            );
     $resultJson =  $this->validateJson($requestJson, $check_request_keys);

     if($resultJson=='1'){

        $uuid=trim($requestJson['braingroom']['uuid']);
      
        $old_password=md5(trim($requestJson['braingroom']['old_password']));
        $new_password=md5(trim($requestJson['braingroom']['new_password']));
         $this->isBlank($uuid, '608', '0'); 
         
         $this->isBlank($old_password, '606', '0');
         $this->isBlank($new_password, '607', '0');
      
         $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid,)));
         
        if(!empty($res)){
    
            if($res['UserMaster']['password']==$old_password){
    
                $dataArray['password']=$new_password;
                $dataArray['id']=$res['UserMaster']['id'];
                $this->UserMaster->save($dataArray);
                 $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('902', '1'))
                            ); 
            }
            else{
             
               $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('609', '0'))
                            );     
            }

        }
        else{
          $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('624', '0'))
                            );   
        }
     }
     else{
      $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('623', '0'))
                            );   
     }
}

public function logout()
{
    $this->autoRender=false;
    $postData=$this->request->input();
    $requestJson  = json_decode($postData, true);
    
    $dataArray          =array();  
    $check_request_keys = array(
                                
                                '0' => 'uuid',
                                
                                
                                
                            );
     $resultJson =  $this->validateJson($requestJson, $check_request_keys);
     if($resultJson){
        $uuid=trim($requestJson['braingroom']['uuid']);
        
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        if(!empty($res)){
       
        $dataArray['id']=$res['UserMaster']['id'];
        $dataArray['status']=2;
        $this->UserMaster->save($dataArray);
         $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('610', '1'))
                            ); 
           
    }
    else{
        $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('624', '0'))
                            );
    }
}
else{
        $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('623', '0'))
                            );
    }

}
    public function isBlank($fieldName, $msgCode, $msgType){
        
        $this->autoRender = false;

        if($fieldName == ''){
           
            $this->requestAction(
                array('controller' => 'Validate','action' => 'generateServerResponse'), 
                array('pass' => array($msgCode, $msgType))
            );
        }
    }
  function postData($dataArray, $api){
       	
        $request_json = json_encode($dataArray);
        
        $urlAPI  = FULL_BASE_URL.DS.'braingroom'.DS.$api;

        $ch           = curl_init($urlAPI);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request_json); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($request_json)));

        $result = curl_exec($ch);
	

        return $result; 
    }
function sendMail($mailFor, $mail= NULL, $activationCode=NULL){
        
        switch($mailFor){
            
            case 'signup' : 
            $sendgrid = new SendGrid('ismail2020', 'winwin16@');
            $email    = new SendGrid\Email();
            $email->addTo($mail)->addTo('')->setFrom('support@braingroom.com')->setSubject('braingroom| Registration Verification Mail')->setText('!')->setHtml('
            <html>
                <head><title></title></head>
                <body>
                    <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                    <p>
                        <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Hi, You are successfully registered on a braingroom.</span><br>
                            <span style="font-size:14px;color:#666666;font-style:italic"></span>
                        </p>
                        <p>Your activation code is.</p>
                        <p>'.$activationCode.'</p>
                        <p></p>
                        <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                        <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                        <p></p>
                        <p>braingroom</p>
                        <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2014 braingroom.com All rights reserved.</span>
                    </div>        
                </body>
            </html>');
            $sendgrid->send($email);

                /*$to  = $mail;
                $subject = 'SkillGrok | Registration Verification Mail';
                $message = '
                <html>
                    <head><title></title></head>
                    <body>
                        <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                        <p>
                            <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Hi, You are successfully registered on a SkillGrok.</span><br>
                                <span style="font-size:14px;color:#666666;font-style:italic"></span>
                            </p>
                            <p>Your activation code is.</p>
                            <p>'.$activationCode.'</p>
                            <p></p>
                            <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                            <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                            <p></p>
                            <p>SkillGrok</p>
                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2014 braingroom.com All rights reserved.</span>
                        </div>        
                    </body>
                </html>';
                
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: SKILLGROK Team<support@braingroom.com>' . "\r\n";
                mail($to, $subject, $message, $headers);*/
                break ;
                
            case 'forgot_password' : 
                
                $sendgrid = new SendGrid('ismail2020', 'winwin16@');
                $email    = new SendGrid\Email();
                $email->addTo($mail)->addTo('')->setFrom('support@braingroom.com')->setSubject('braingroom | Forgot Password Mail')->setText('!')->setHtml('
                <html>
                    <head><title></title></head>
                    <body>
                        <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                            <p>
                                <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Lost Password Request</span><br>
                                <span style="font-size:14px;color:#666666;font-style:italic"></span>
                            </p>
                            <p>We received a lost password request from for your account on braingroom.com .</p>
                            <p>Your  New Password is  : </p>
                            <p>'.$activationCode.'</p>
                            <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                            <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                            <p></p>
                            <p>braingroom.com Team</p>
                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2013 braingroom.com All rights reserved.</span>
                        </div>        
                    </body>
                </html>');
                $sendgrid->send($email);
                /*$to  = $mail ;                
                $subject = 'SkillGrok | Forgot Password Mail';
                $message = '
                <html>
                    <head><title></title></head>
                    <body>
                        <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                            <p>
                                <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Lost Password Request</span><br>
                                <span style="font-size:14px;color:#666666;font-style:italic"></span>
                            </p>
                            <p>We received a lost password request from for your account on braingroom.com .</p>
                            <p>Your Password is  : </p>
                            <p>'.$activationCode.'</p>
                            <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                            <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                            <p></p>
                            <p>braingroom.com Team</p>
                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2013 braingroom.com All rights reserved.</span>
                        </div>        
                    </body>
                </html>';
                
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: SKILLGROK Team<support@braingroom.com>' . "\r\n";
                mail($to, $subject, $message, $headers);
                */
                break ;
                
            case 'resend_activation_code':
                
                $sendgrid = new SendGrid('appkraft', 'refrico2014');
                $email    = new SendGrid\Email();
                $email->addTo($mail)->addTo('')->setFrom('support@braingroom.com')->setSubject('SkillGrok | Activation Code Request')->setText('!')->setHtml('
                <html>
                    <head><title></title></head>
                    <body>
                        <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                        <p>
                            <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Hi, You had requested for activation code .</span><br>
                                <span style="font-size:14px;color:#666666;font-style:italic"></span>
                            </p>
                            <p>Your activation code is.</p>
                            <p>'.$activationCode.'</p>
                            <p></p>
                            <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                            <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                            <p></p>
                            <p>SkillGrok</p>
                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2014 braingroom.com All rights reserved.</span>
                        </div>        
                    </body>
                </html>');
                $sendgrid->send($email);
               
/*
                case 'accountInfo' : 
                $sendgrid = new SendGrid('appkraft', 'refrico2014');
                $email    = new SendGrid\Email();
                $email->addTo($mail)->addTo('')->setFrom('support@braingroom.com')->setSubject('SkillGrok | Registration Verification Mail')->setText('!')->setHtml('
                <html>
                    <head><title></title></head>
                    <body>
                        <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                        <p>
                            <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Hi, You are successfully registered on a SkillGrok.</span><br>
                                <span style="font-size:14px;color:#666666;font-style:italic"></span>
                            </p>
                            <p>Your Account Details are.</p>
                            <p> Email :     '.$email.'</p>
                             <p> Password :  '.$password.'</p>
                            <p></p>
                            <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                            <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                            <p></p>
                            <p>SkillGrok</p>
                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2014 braingroom.com All rights reserved.</span>
                        </div>        
                    </body>
                </html>');
                $sendgrid->send($email);*/
                /*$to  = $mail;
                $subject = 'SkillGrok | Activation Code Request';
                $message = '
                <html>
                    <head><title></title></head>
                    <body>
                        <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                        <p>
                            <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Hi, You had requested for activation code .</span><br>
                                <span style="font-size:14px;color:#666666;font-style:italic"></span>
                            </p>
                            <p>Your activation code is.</p>
                            <p>'.$activationCode.'</p>
                            <p></p>
                            <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                            <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                            <p></p>
                            <p>SkillGrok</p>
                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2014 braingroom.com All rights reserved.</span>
                        </div>        
                    </body>
                </html>';
                
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: SKILLGROK Team<support@braingroom.com>' . "\r\n";
                mail($to, $subject, $message, $headers);*/
                break ;
 
                
        }
    }
    function validateEmail($email){
        
        $this->autoRender = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->generateServerResponse('620','0', $languageCode);
        }
    }  
  
}
?>
