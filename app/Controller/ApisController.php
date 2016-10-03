<?php
Class ApisController extends AppController{
    
    public $components = array('RequestHandler','Session');
    public $uses = array('GiftingOption','UserMaster','UserVerfication','VendorGallery','Category','VendorClass',
      'ClassSegment','ClassType','City','Community','Locality','RequestCatalog','GiftCupan','CupanDetail',
      'Giftcard','DeviceData','Offer','Blog','Wishlist','BlogComment','BlogLike','ClassSchedule','TransactionHistory','GroupPost','GroupActivity','GroupLike','GroupComment','ActivityLike','ActivityComment','ActivityAccept','FeaturedPrice');
    
    function index(){ 
       print_r("rahul");die; 
    }
  
/**
 * @author: Alcanzar
 * This Function is used for Grokker/Grokee SingUp
 */  
 //@Author Rahul Pathak Group Part ---------------------------------------------------------------------------------------------------------
 public function addCategory(){
    $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'uuid',
                                '1'=>'category_id',
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){
          $uuid=trim($requestJson['braingroom']['uuid']);
          $category_id=trim($requestJson['braingroom']['category_id']);  
          $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
          if(!empty($check)){
          $dataArray['id']=$check['UserMaster']['id'];
          $dataArray['category_id']=$check['UserMaster']['category_id'].",".$category_id;
          $this->UserMaster->save($dataArray);
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('929','1')));
          
          }
          else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

         }
    }
    else{
   $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

    }
}
public function addGroupPost(){
  $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'uuid',
                                '1'=>'group_id',
                                '2'=>'description',
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){
          $uuid=trim($requestJson['braingroom']['uuid']);
          $dataArray['group_id']=trim($requestJson['braingroom']['group_id']);
          $dataArray['description']=trim($requestJson['braingroom']['description']);
          $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
          if(!empty($check)){
            $dataArray['user_id']=$check['UserMaster']['id'];
            $dataArray['status']=1;
            $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
            $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
            $this->GroupPost->save($dataArray);
             $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('938','1')));
  
          }
          else{
             $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
 
          }
    }
    else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

    }
}
public function addGroupActivity(){
  $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'uuid',
                                '1'=>'group_id',
                                '2'=>'city_id',
                                '3'=>'locality',
                                '4'=>'request_purpose',
                                '5'=>'date',
                                '6'=>'time',
                                '7'=>'location',
                                '8'=>'post_type',
                                '9'=>'note',
                                );                       
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){
          $uuid=trim($requestJson['braingroom']['uuid']);
          $dataArray['group_id']=trim($requestJson['braingroom']['group_id']);
          $dataArray['city_id']=trim($requestJson['braingroom']['city_id']);
          $dataArray['locality']=trim($requestJson['braingroom']['locality']);
          $dataArray['request_purpose']=trim($requestJson['braingroom']['request_purpose']);
          $dataArray['request_date']=trim($requestJson['braingroom']['date']);
          $dataArray['request_time']=trim($requestJson['braingroom']['time']);
          $dataArray['location']=trim($requestJson['braingroom']['location']);
          $dataArray['post_type']=trim($requestJson['braingroom']['post_type']);
          $dataArray['note']=trim($requestJson['braingroom']['note']);
         $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
          if(!empty($check)){
            $dataArray['user_id']=$check['UserMaster']['id'];
            $dataArray['status']=1;
            $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
            $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
            $this->GroupActivity->save($dataArray);
             $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('939','1')));

          }
          else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

          }
        }
        else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

        } 
  
}
public function viewGroupPost(){
      
     $this->autoRender=false;
 $pageindex = $this->params->pass[0];
 $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
  
  $dataArray=array();
  $data=array();
  $limit = 10;
  $check_request_keys=array(
                                '0'=>'group_id',
                                '1'=>'uuid',
                                
                            );
   $resultJson=$this->validateJson($requestJson,$check_request_keys);
   if($resultJson=='1'){
   $group_id=trim($requestJson['braingroom']['group_id']);
   $uuid=trim($requestJson['braingroom']['uuid']);

  if ($pageindex == 1 || $pageindex == "") {
     $offset = 0;
   } 
   else {
    $offset = ($pageindex - 1) * $limit;
  }
 $res=$this->Blog->query("select * from bg_group_posts where status=1 and group_id=".$group_id." limit ".$offset." , ".$limit);
  
  $pageReturn = count($res1);
                if ($pageReturn == '10') {
                    $pageCountRows = $pageindex + 1;
                } else {
                    $pageCountRows = '-1';
                }
 if(!empty($res)){

  $i=0;
  $dataArray['next_page']=$pageCountRows;
  $dataArray['res_code']=1;  
   foreach ($res as $result) {
        $dataArray['braingroom'][$i]['post_id']=$result['bg_group_posts']['id'];
        $dataArray['braingroom'][$i]['user_id']=$result['bg_group_posts']['user_id'];
        $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$dataArray['braingroom'][$i]['user_id'])));
        $dataArray['braingroom'][$i]['post_post_by']=$user_info['UserMaster']['first_name'];
        $pic=substr($user_info['UserMaster']['profile_image'],0,4);
         
        if($user_info['UserMaster']['user_type_id']=='1'){
           if($pic=='http'){
             $dataArray['braingroom'][$i]['user_image']=$user_info['UserMaster']['profile_image'];
       
           }
           else{
            $dataArray['braingroom'][$i]['user_image']=HTTP_ROOT.'/img/Vendor/profile/'.$user_info['UserMaster']['profile_image'];
            }
        }
        else{
          if($pic=='http'){
             $dataArray['braingroom'][$i]['user_image']=$user_info['UserMaster']['profile_image'];
       
           }
           else{
            $dataArray['braingroom'][$i]['user_image']=HTTP_ROOT.'/img/Buyer/profile/'.$user_info['UserMaster']['profile_image'];
           }
        }
        
        
        $dataArray['braingroom'][$i]['description']=ucwords($result['bg_group_posts']['description']);
        $dataArray['braingroom'][$i]['date']=date('Y-m-d  ',$result['bg_group_posts']['modify_date']);
        $dataArray['braingroom'][$i]['time']=date('h:i:s A ',$result['bg_group_posts']['modify_date']);
        
        $ttl_cmnt=$this->GroupComment->find('count',array('conditions'=>array('group_id'=>$result['bg_group_posts']['id'])));
        $dataArray['braingroom'][$i]['Total_comment']=$ttl_cmnt;  
        $ttl_like=$this->GroupLike->find('count',array('conditions'=>array('group_id'=>$result['bg_group_posts']['id'],'status'=>1)));
        $ttl_unlike=$this->GroupLike->find('count',array('conditions'=>array('group_id'=>$result['bg_group_posts']['id'],'status'=>2)));
        $dataArray['braingroom'][$i]['Total_like']=$ttl_like; 
        $dataArray['braingroom'][$i]['Total_Unlike']=$ttl_unlike;  
        $res1=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        //print_r($res1);die;
        if(!empty($res1)){
        $user_id=$res1['UserMaster']['id'];
 
        $check_like=$this->GroupLike->find('first',array('conditions'=>array('group_id'=>$result['bg_group_posts']['id'],'user_id'=>$user_id,'status'=>1)));
        if(!empty($check_like)){
        $dataArray['braingroom'][$i]['me_like']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_like']=0;  
        }
        $check_unlike=$this->GroupLike->find('first',array('conditions'=>array('group_id'=>$result['bg_group_posts']['id'],'user_id'=>$user_id,'status'=>2)));
        if(!empty($check_unlike)){
        $dataArray['braingroom'][$i]['me_unlike']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_unlike']=0;  
        }
        }
              
        $i++;
        
    }             
 }
 $dataArray['next_page']=$pageCountRows;
 echo json_encode($dataArray);
}            
}
public function postLikeUnlike(){
  $this->autoRender=false;
       $postData  =$this->request->input();
      $status=$this->params->pass[0];
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  
                                  '0'=>'uuid',
                                  '1'=>'group_id',

                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
        $uuid=trim($requestJson['braingroom']['uuid']);
        $group_id=trim($requestJson['braingroom']['group_id']);
        $user_id=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid),'fields'=>array('id')));
        if(!empty($user_id)){
          $check=$this->GroupLike->find('first',array('conditions'=>array('group_id'=>$group_id,'user_id'=>$user_id['UserMaster']['id'])));
          if(!empty($check)){
            if($check['GroupLike']['status']=='1'){
             $check['GroupLike']['status']=2;
             $check['GroupLike']['modify_date']=strtotime(date('Y-m-d H:i:s'));
             $this->GroupLike->save($check);
             $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('941','1')));
            
             }
             else{
              $check['GroupLike']['status']=1;
              $check['GroupLike']['modify_date']=strtotime(date('Y-m-d H:i:s'));
              $this->GroupLike->save($check);
              $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('940','1')));
              }
          }
          else{
          $dataArray['user_id']=$user_id['UserMaster']['id'];
          $dataArray['group_id']=$group_id;
          $dataArray['status']=1;
          $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
          $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
          
           $this->GroupLike->save($dataArray);
           $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('940','1')));
         
          }
        }
          
        else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
 
        }
       }
       else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
 
       }
       
}
public function GroupPostComment(){
   $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  '0'=>'uuid',
                                  '1'=>'group_id',
                                  '2'=>'comment',
                                  

                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
        $uuid=trim($requestJson['braingroom']['uuid']);
        $dataArray['group_id']=trim($requestJson['braingroom']['group_id']);
        $dataArray['comments']=trim($requestJson['braingroom']['comment']);
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        if(!empty($res)){
        $dataArray['user_id']=$res['UserMaster']['id'];
        $dataArray['status']=1;
        $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
        $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
        $this->GroupComment->save($dataArray);
         $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('942','1')));

        }
        else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

        }
        
       }
       else{
       $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

       }
}
public function getGroupPostComment(){
       $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  
                                  '0'=>'group_id',     
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
       $group_id=trim($requestJson['braingroom']['group_id']);
       $res=$this->GroupComment->find('all',array('conditions'=>array('group_id'=>$group_id,'status'=>1,)));
       if(!empty($res)){
        $dataArray['res_code']=1;
        $i=0;
        foreach($res as $result){
          $dataArray['braingroom'][$i]['comment_id']=$result['GroupComment']['id'];
          $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$result['GroupComment']['user_id'])));
          if(!empty($user_info)){
            $dataArray['braingroom'][$i]['posted_by_name']=$user_info['UserMaster']['first_name'];
            if($user_info['UserMaster']['user_type_id']==''){
            $dataArray['braingroom'][$i]['posted_by_image']=$user_info['UserMaster']['profile_image'];
          }
          else if($user_info['UserMaster']['user_type_id']=='1'){
          $dataArray['braingroom'][$i]['posted_by_image']=HTTP_ROOT.'/img/Vendor/profile/'.$user_info['UserMaster']['profile_image'];
            
          }
          else{
          $dataArray['braingroom'][$i]['posted_by_image']=HTTP_ROOT.'/img/Buyer/profile/'.$user_info['UserMaster']['profile_image'];
            
          }
          $dataArray['braingroom'][$i]['comment']=$result['GroupComment']['comments'];
          $dataArray['braingroom'][$i]['comment_date']=date('d-m-Y h:i:s A',$result['GroupComment']['add_date']);
          }
          $i++;            
          
        }
       echo json_encode($dataArray);
       }
       else{
        $dataArray['res_code']=0;
        $dataArray['res_msg']="Record Not Found";
        echo json_encode($dataArray);
       }
       }
       else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
 
       }
   
}
public function viewGroupActivity(){
      
     $this->autoRender=false;
 $pageindex = $this->params->pass[0];
 $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
  
  $dataArray=array();
  $data=array();
  $limit = 10;
  $check_request_keys=array(
                                '0'=>'group_id',
                                '1'=>'uuid',
                                
                            );
   $resultJson=$this->validateJson($requestJson,$check_request_keys);
   if($resultJson=='1'){
   $group_id=trim($requestJson['braingroom']['group_id']);
   $uuid=trim($requestJson['braingroom']['uuid']);

  if ($pageindex == 1 || $pageindex == "") {
     $offset = 0;
   } 
   else {
    $offset = ($pageindex - 1) * $limit;
  }
 $res=$this->GroupActivity->query("select * from bg_group_activities where status=1 and group_id=".$group_id." limit ".$offset." , ".$limit);
  
  $pageReturn = count($res1);
                if ($pageReturn == '10') {
                    $pageCountRows = $pageindex + 1;
                } else {
                    $pageCountRows = '-1';
                }
 if(!empty($res)){

  $i=0;
  $dataArray['next_page']=$pageCountRows;
  $dataArray['res_code']=1;  
   foreach ($res as $result) {
        $dataArray['braingroom'][$i]['activity_id']=$result['bg_group_activities']['id'];
        $dataArray['braingroom'][$i]['user_id']=$result['bg_group_activities']['user_id'];
        $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$dataArray['braingroom'][$i]['user_id'])));
        $dataArray['braingroom'][$i]['post_post_by']=$user_info['UserMaster']['first_name'];
        $pic=substr($user_info['UserMaster']['profile_image'],0,4);
         
        if($user_info['UserMaster']['user_type_id']=='1'){
           if($pic=='http'){
             $dataArray['braingroom'][$i]['user_image']=$user_info['UserMaster']['profile_image'];
       
           }
           else{
            $dataArray['braingroom'][$i]['user_image']=HTTP_ROOT.'/img/Vendor/profile/'.$user_info['UserMaster']['profile_image'];
            }
        }
        else{
          if($pic=='http'){
             $dataArray['braingroom'][$i]['user_image']=$user_info['UserMaster']['profile_image'];
       
           }
           else{
            $dataArray['braingroom'][$i]['user_image']=HTTP_ROOT.'/img/Buyer/profile/'.$user_info['UserMaster']['profile_image'];
           }
        }
        
        $dataArray['braingroom'][$i]['locality']=ucwords($result['bg_group_activities']['locality']);
        $dataArray['braingroom'][$i]['request_purpose']=ucwords($result['bg_group_activities']['request_purpose']);
        $dataArray['braingroom'][$i]['request_date']=ucwords($result['bg_group_activities']['request_date']);
        $dataArray['braingroom'][$i]['request_time']=ucwords($result['bg_group_activities']['request_time']);
        $dataArray['braingroom'][$i]['location']=ucwords($result['bg_group_activities']['location']);
        $dataArray['braingroom'][$i]['note']=ucwords($result['bg_group_activities']['note']);
        
        $dataArray['braingroom'][$i]['date']=date('Y-m-d  ',$result['bg_group_activities']['modify_date']);
        $dataArray['braingroom'][$i]['time']=date('h:i:s A ',$result['bg_group_activities']['modify_date']);

        
        $ttl_cmnt=$this->ActivityComment->find('count',array('conditions'=>array('activity_id'=>$result['bg_group_activities']['id'])));
        $dataArray['braingroom'][$i]['Total_comment']=$ttl_cmnt;  
        $ttl_like=$this->ActivityLike->find('count',array('conditions'=>array('activity_id'=>$result['bg_group_activities']['id'],'status'=>1)));
        $ttl_unlike=$this->ActivityLike->find('count',array('conditions'=>array('activity_id'=>$result['bg_group_activities']['id'],'status'=>2)));
        $dataArray['braingroom'][$i]['Total_like']=$ttl_like; 
        $dataArray['braingroom'][$i]['Total_Unlike']=$ttl_unlike;  
        $res1=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        //print_r($res1);die;
        if(!empty($res1)){
        $user_id=$res1['UserMaster']['id'];
 
        $check_like=$this->ActivityLike->find('first',array('conditions'=>array('activity_id'=>$result['bg_group_activities']['id'],'user_id'=>$user_id,'status'=>1)));
        if(!empty($check_like)){
        $dataArray['braingroom'][$i]['me_like']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_like']=0;  
        }
        $check_unlike=$this->ActivityLike->find('first',array('conditions'=>array('activity_id'=>$result['bg_group_activities']['id'],'user_id'=>$user_id,'status'=>2)));
        if(!empty($check_unlike)){
        $dataArray['braingroom'][$i]['me_unlike']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_unlike']=0;  
        }
        }
        

        $i++;
        
    }             
 }
 $dataArray['next_page']=$pageCountRows;
 echo json_encode($dataArray);
}            
}
public function activityLikeUnlike(){
  $this->autoRender=false;
       $postData  =$this->request->input();
      $status=$this->params->pass[0];
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  
                                  '0'=>'uuid',
                                  '1'=>'activity_id',

                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
        $uuid=trim($requestJson['braingroom']['uuid']);
        $activity_id=trim($requestJson['braingroom']['activity_id']);
        $user_id=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid),'fields'=>array('id')));
        if(!empty($user_id)){
          $check=$this->ActivityLike->find('first',array('conditions'=>array('activity_id'=>$activity_id,'user_id'=>$user_id['UserMaster']['id'])));
          if(!empty($check)){
            if($check['ActivityLike']['status']=='1'){
             $check['ActivityLike']['status']=2;
             $check['ActivityLike']['modify_date']=strtotime(date('Y-m-d H:i:s'));
             $this->ActivityLike->save($check);
             $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('944','1')));
            
             }
             else{
              $check['ActivityLike']['status']=1;
              $check['ActivityLike']['modify_date']=strtotime(date('Y-m-d H:i:s'));
              $this->ActivityLike->save($check);
              $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('943','1')));
              }
          }
          else{
          $dataArray['user_id']=$user_id['UserMaster']['id'];
          $dataArray['activity_id']=$activity_id;
          $dataArray['status']=1;
          $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
          $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
          
           $this->ActivityLike->save($dataArray);
           $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('943','1')));
         
          }
        }
          
        else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
 
        }
       }
       else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
 
       }
       
}
public function addActivityComment(){
   $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  '0'=>'uuid',
                                  '1'=>'activity_id',
                                  '2'=>'comment',
                                  

                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
        $uuid=trim($requestJson['braingroom']['uuid']);
        $dataArray['activity_id']=trim($requestJson['braingroom']['activity_id']);
        $dataArray['comment']=trim($requestJson['braingroom']['comment']);
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        if(!empty($res)){
        $dataArray['user_id']=$res['UserMaster']['id'];
        $dataArray['status']=1;
        $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
        $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
        $this->ActivityComment->save($dataArray);
         $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('933','1')));

        }
        else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

        }
        
       }
       else{
       $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

       }
}
public function getActivityComment(){
       $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  
                                  '0'=>'activity_id',     
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
       $activity_id=trim($requestJson['braingroom']['activity_id']);
       $res=$this->ActivityComment->find('all',array('conditions'=>array('activity_id'=>$activity_id,'status'=>1,)));
       if(!empty($res)){
        $dataArray['res_code']=1;
        $i=0;
        foreach($res as $result){
          $dataArray['braingroom'][$i]['comment_id']=$result['ActivityComment']['id'];
          $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$result['ActivityComment']['user_id'])));
          if(!empty($user_info)){
            $dataArray['braingroom'][$i]['posted_by_name']=$user_info['UserMaster']['first_name'];
            if($user_info['UserMaster']['user_type_id']==''){
            $dataArray['braingroom'][$i]['posted_by_image']=$user_info['UserMaster']['profile_image'];
          }
          else if($user_info['UserMaster']['user_type_id']=='1'){
          $dataArray['braingroom'][$i]['posted_by_image']=HTTP_ROOT.'/img/Vendor/profile/'.$user_info['UserMaster']['profile_image'];
            
          }
          else{
          $dataArray['braingroom'][$i]['posted_by_image']=HTTP_ROOT.'/img/Buyer/profile/'.$user_info['UserMaster']['profile_image'];
            
          }
          $dataArray['braingroom'][$i]['comment']=$result['ActivityComment']['comment'];
          $dataArray['braingroom'][$i]['comment_date']=date('d-m-Y h:i:s A',$result['ActivityComment']['add_date']);
          }
          $i++;            
          
        }
       echo json_encode($dataArray);
       }
       else{
        $dataArray['res_code']=0;
        $dataArray['res_msg']="Record Not Found";
        echo json_encode($dataArray);
       }
       }
       else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
 
       }
   
}

public function activityAccept(){
       $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  '0'=>'uuid',
                                  '1'=>'activity_id',    
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
        $dataArray['uuid']=trim($requestJson['braingroom']['uuid']);
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        if(!empty($res)){
        $dataArray['user_id']=$res['UserMaster']['id'];
        $dataArray['activity_id']=trim($requestJson['braingroom']['activity_id']);
        $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
        print_r($dataArray);die;
        //$this->ActivityAccept->save($dataArray);
        }
        else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

        }
      }
      else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

      }
}
public function myGroup(){
       $this->autoRender=false;
      $this->loadModel('ConnectGroup');
 
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'uuid',
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){
          $uuid=trim($requestJson['braingroom']['uuid']);
      
      $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
      //print_r($check);die;
                  if(!empty($check)){
      $user_id=$check['UserMaster']['id'];
      $user_type=$check['UserMaster']['user_type_id'];
           
                   if($user_type=='1'){
                    $check_group=$this->ConnectGroup->query("SELECT distinct bg_connect_groups.* FROM bg_connect_groups,bg_vendor_classes WHERE bg_vendor_classes.segment_id=bg_connect_groups.segment_id and bg_connect_groups.status=1 and bg_vendor_classes.user_id='".$user_id."'");
                    
                      if(!empty($check_group)){
                        $p=0;
                        $dataArray['res_code']=1;
                        foreach($check_group as $res){
                        $dataArray['braingroom'][$p]['group_id']=$res['bg_connect_groups']['id'];
                        $dataArray['braingroom'][$p]['group_name']=$res['bg_connect_groups']['group_name'];
                        $dataArray['braingroom'][$p]['segment_id']=$res['bg_connect_groups']['segment_id'];
                        $dataArray['braingroom'][$p]['group_image']=HTTP_ROOT."/img/arrange_class/".$res['bg_connect_groups']['group_image'];
                        $p++;
                        }
                        echo json_encode($dataArray);
                      }
                        else{
                          $dataArray['res_code']=0;
                          $dataArray['res_msg']="Record Not Found";
                           echo json_encode($dataArray);
                          }
                    }
                     
                       else{
                       $check_group1=$this->ConnectGroup->query("SELECT DISTINCT bg_connect_groups . *
FROM bg_connect_groups, bg_vendor_classes, bg_transaction_histories
WHERE bg_transaction_histories.class_id = bg_vendor_classes.id
AND bg_vendor_classes.segment_id = bg_connect_groups.segment_id
AND bg_connect_groups.status =1
AND bg_vendor_classes.user_id ='".$user_id."'");
                        if(!empty($check_group1)){
                        $p=0;
                        $dataArray['res_code']=1;
                        foreach($check_group1 as $res){
                        $dataArray['braingroom'][$p]['group_id']=$res['bg_connect_groups']['id'];
                        $dataArray['braingroom'][$p]['group_name']=$res['bg_connect_groups']['group_name'];
                        $dataArray['braingroom'][$p]['segment_id']=$res['bg_connect_groups']['segment_id'];
                        $dataArray['braingroom'][$p]['group_image']=HTTP_ROOT."/img/arrange_class/".$res['bg_connect_groups']['group_image'];
                        $p++;
                        }
                        echo json_encode($dataArray);
                      }
                        else{
                          $dataArray['res_code']=0;
                          $dataArray['res_msg']="Record Not Found";
                           echo json_encode($dataArray);
                          }
                   
                      }
                      
 
                       }
                       else{
                       $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

                      
                       }
                    }
                    else{
                     $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

                    }

}
public function customizeSetting(){
     $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'uuid',
                                '1'=>'category_id',
                                '2'=>'city_id',
                                '3'=>'locality_id',
                                '4'=> 'distance',
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){
      $dataArray['uuid']=trim($requestJson['braingroom']['uuid']);
      $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
      $dataArray['city_id']=trim($requestJson['braingroom']['city_id']);
      $dataArray['locality_id']=trim($requestJson['braingroom']['locality_id']);
      $dataArray['distance']=trim($requestJson['braingroom']['distance']);
      $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$dataArray['uuid'])));
      
      if(!empty($check)){
        $dataArray['id']=$check['UserMaster']['id'];
        $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
        
        $city=$this->getCityData($check['UserMaster']['id']);
        $locality=$this->getLocalityData($check['UserMaster']['locality_id']);
        $address=$city." ".$locality;
        $lat_data=$this->getLatLong($address);
        $dataArray['latitude']=$lat_data['latitude'];
        $dataArray['longitude']=$lat_data['longitude'];
        $dataArray['ip_address']=$_SERVER['REMOTE_ADDR'];

        $this->UserMaster->save($dataArray);
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('948','1')));

      }
      else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

      }
      
     }
     else{
      $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

     }
}
function getLatLong($address){
    if(!empty($address)){
        //Formatted address
        $formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
        $data['latitude']  = $output->results[0]->geometry->location->lat; 
        $data['longitude'] = $output->results[0]->geometry->location->lng;
        //Return latitude and longitude of the given address
        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }else{
        return false;   
    }
}
public function getCityData($id){
   $this->autoRender=false;
  $res=$this->City->find('first',array('conditions'=>array('id'=>$id)));
  if(!empty($res)){
    return $res['City']['name'];
  }
  else{
    return ;
  }
}
public function getLocalityData($id){
   $this->autoRender=false;
  $res=$this->Locality->find('first',array('conditions'=>array('id'=>$id)));
  if(!empty($res)){
    return $res['Locality']['name'];
  }
  else{
    return false;
  }
}

public function bookingStatus(){
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
      $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
      //print_r($check);die;
                  if(!empty($check)){
      $user_id=$check['UserMaster']['id'];
      $user_type=$check['UserMaster']['user_type_id'];
                  
      if($user_type=='1'){
                  $check_vendor_class=$this->VendorClass->find('first',array('condition'=>array('user_id'=>$user_id)));
      //print_r($check_vendor_class);die;
                  if(!empty($check_vendor_class)){
      $dataArray['braingroom']['booking_status']=1;
      echo json_encode($dataArray);
      }
      else{
      $dataArray['braingroom']['booking_status']=0;
      echo json_encode($dataArray);
      }
      }
                  else{
      $check_learner_booking=$this->TransactionHistory->find('first',array('condition'=>array('user_id'=>$user_id)));
      if(!empty($check_learner_booking)){
      $dataArray['braingroom']['booking_status']=1;
      echo json_encode($dataArray);
      }
      else{
      $dataArray['braingroom']['booking_status']=0;
      echo json_encode($dataArray);
      }
      }
      
    }
    else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
    
    }
      }
    else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
    
    }
}
/* ==============================================my group api=====================================================*/

/*==================================================================end=========================================*/
public function getAllGroup(){
 $this->autoRender=false;
 $this->loadModel('ConnectGroup');
 $res=$this->ConnectGroup->find('all',array('conditions'=>array('status'=>'1')));
 //print_r($res);
 if(!empty($res)){
 $dataArray=array();
 $dataArray['res_code']=1;
 $p=0;
 foreach($res as $res1){
 $dataArray['braingroom'][$p]['group_id']=$res1['ConnectGroup']['id'];
 $dataArray['braingroom'][$p]['group_name']=$res1['ConnectGroup']['group_name'];
 $dataArray['braingroom'][$p]['segment_id']=$res1['ConnectGroup']['segment_id'];
 $dataArray['braingroom'][$p]['group_image']=HTTP_ROOT."/img/arrange_class/".$res1['ConnectGroup']['group_image'];
 $p++;
 }
 echo json_encode($dataArray);
 }
 else{
 $dataArray['res_code']=0;
 $dataArray['res_msg']="Record Not Found";
 echo json_encode($dataArray);
 }
 }    
 //@Author Pankaj Maurya----------------------------------------------------------------------------------------------------------
public function getCommunityGroupClass(){
     $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'community_id',
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){
          $community_id=trim($requestJson['braingroom']['community_id']);
          $res = $this->VendorClass->find('all',array('conditions'=>array('community_id'=>$community_id)));
          if(!empty($res)){
               $dataArray['res_code']=1;
               $i=0;
               foreach($res as $result){
                    $dataArray['braingroom'][$i]['class_topic']       =$result['VendorClass']['class_topic'];
                    $dataArray['braingroom'][$i]['class_summary']     =$result['VendorClass']['class_summary'];
                    $dataArray['braingroom'][$i]['starting_month']    =$result['VendorClass']['starting_month'];
                    $dataArray['braingroom'][$i]['end_month']         =$result['VendorClass']['end_month'];
                    $dataArray['braingroom'][$i]['day_of_week']       =$result['VendorClass']['day_of_week'];
                    $dataArray['braingroom'][$i]['time_of_day']       =$result['VendorClass']['time_of_day'];
                    $dataArray['braingroom'][$i]['class_duration']    =$result['VendorClass']['class_duration'];
                    $dataArray['braingroom'][$i]['location']          =$result['VendorClass']['location'];
                    $dataArray['braingroom'][$i]['age_group']         =$result['VendorClass']['age_group'];
                    $dataArray['braingroom'][$i]['max_ticket_available']=$result['VendorClass']['max_ticket_available'];
                    $dataArray['braingroom'][$i]['price_per_head']    =$result['VendorClass']['price_per_head'];
                    $dataArray['braingroom'][$i]['class_tag']         =$result['VendorClass']['class_tag'];
                    $dataArray['braingroom'][$i]['upload_tutor_picture']=$result['VendorClass']['upload_tutor_picture'];
                    $dataArray['braingroom'][$i]['upload_class_photo']=$result['VendorClass']['upload_class_photo'];
                    $i++;
               }
               echo json_encode($dataArray);die;
          }
          else{
               $dataArray['res_code']=0;
               $dataArray['braingroom']['res_msg']="Community Not Found";
               echo json_encode($dataArray); 
          }
          
     }else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
     }
}

public function communityGroupSearching(){
     $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'keyword',
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);

     if($resultJson=='1'){
          $keyword=trim($requestJson['braingroom']['keyword']);
          $res = $this->Community->find('first',array('conditions'=>array('community_name LIKE'=>'%'.$keyword.'%')));
          if(!empty($res)){
               $com_id = $res['Community']['id'];
               $res2 = $this->VendorClass->find('all',array('conditions'=>array('community_id'=>$com_id)));
               if($res2){
                    $dataArray['res_code']=1;
                    $i=0;
                    foreach($res2 as $result){
                         $dataArray['braingroom'][$i]['class_topic']       =$result['VendorClass']['class_topic'];
                         $dataArray['braingroom'][$i]['class_summary']     =$result['VendorClass']['class_summary'];
                         $dataArray['braingroom'][$i]['starting_month']    =$result['VendorClass']['starting_month'];
                         $dataArray['braingroom'][$i]['end_month']         =$result['VendorClass']['end_month'];
                         $dataArray['braingroom'][$i]['day_of_week']       =$result['VendorClass']['day_of_week'];
                         $dataArray['braingroom'][$i]['time_of_day']       =$result['VendorClass']['time_of_day'];
                         $dataArray['braingroom'][$i]['class_duration']    =$result['VendorClass']['class_duration'];
                         $dataArray['braingroom'][$i]['location']          =$result['VendorClass']['location'];
                         $dataArray['braingroom'][$i]['age_group']         =$result['VendorClass']['age_group'];
                         $dataArray['braingroom'][$i]['max_ticket_available']=$result['VendorClass']['max_ticket_available'];
                         $dataArray['braingroom'][$i]['price_per_head']    =$result['VendorClass']['price_per_head'];
                         $dataArray['braingroom'][$i]['class_tag']         =$result['VendorClass']['class_tag'];
                         $dataArray['braingroom'][$i]['upload_tutor_picture']=$result['VendorClass']['upload_tutor_picture'];
                         $dataArray['braingroom'][$i]['upload_class_photo']=$result['VendorClass']['upload_class_photo'];
                         $i++;
                    }
                    
                    echo json_encode($dataArray);die;  
               }
          }
          else{
               $dataArray['res_code']=0;
               $dataArray['braingroom']['res_msg']="Community Not Found";
               echo json_encode($dataArray); 
          }
     }
     else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
     }
}
public function communityGroupFilter(){
     $this->autoRender=false;
     $postData=$this->request->input();
    
     $requestJson=json_decode($postData,true);
     $dataArray          =array(); 
 
     // print_r($requestJson);

     
     $check_request_keys=array(
                                '0'=>'category',
                                '1'=>'from',
                                '2'=>'to',
                                '3'=>'Location'                                
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     
     if($resultJson=='1'){
          $keyword=trim($requestJson['braingroom']['category']);

          $res = $this->Category->find('first',array('conditions'=>array('category_name LIKE'=>'%'.$keyword.'%')));
           
         if(!empty($res)){
               $cat_id = $res['Category']['id'];
               $res2 = $this->VendorClass->find('all',array('conditions'=>array('category_id'=>$cat_id)));
               if($res2){
                    $dataArray['res_code']=1;
                    $i=0;
                    foreach($res2 as $result){
                         $dataArray['braingroom'][$i]['class_topic']       =$result['VendorClass']['class_topic'];
                         $dataArray['braingroom'][$i]['class_summary']     =$result['VendorClass']['class_summary'];
                         $dataArray['braingroom'][$i]['starting_month']    =$result['VendorClass']['starting_month'];
                         $dataArray['braingroom'][$i]['end_month']         =$result['VendorClass']['end_month'];
                         $dataArray['braingroom'][$i]['day_of_week']       =$result['VendorClass']['day_of_week'];
                         $dataArray['braingroom'][$i]['time_of_day']       =$result['VendorClass']['time_of_day'];
                         $dataArray['braingroom'][$i]['class_duration']    =$result['VendorClass']['class_duration'];
                         $dataArray['braingroom'][$i]['location']          =$result['VendorClass']['location'];
                         $dataArray['braingroom'][$i]['age_group']         =$result['VendorClass']['age_group'];
                         $dataArray['braingroom'][$i]['max_ticket_available']=$result['VendorClass']['max_ticket_available'];
                         $dataArray['braingroom'][$i]['price_per_head']    =$result['VendorClass']['price_per_head'];
                         $dataArray['braingroom'][$i]['class_tag']         =$result['VendorClass']['class_tag'];
                         $dataArray['braingroom'][$i]['upload_tutor_picture']=$result['VendorClass']['upload_tutor_picture'];
                         $dataArray['braingroom'][$i]['upload_class_photo']=$result['VendorClass']['upload_class_photo'];
                         $i++;
                    }
               
                 echo json_encode($dataArray);die;
               }

               
          }
          else{
                   $dataArray['res_code']=0;
                   $dataArray['braingroom']['res_msg']="Category Not Found";
                   echo json_encode($dataArray); 
         }
          
     }
     else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
     }
}
public function getCategoryFilterData(){
     $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'class_type_id',
                                '1'=>'community_id',
                                '2'=>'class_provider_id',
                                '3'=>'location',
                                '4'=>'starting_month',
                                '5'=>'end_month',
                                '6'=>'day_of_week',
                                '7'=>'class_mode',
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){

          $class_type_id        =  trim($requestJson['braingroom']['class_type_id']);
          $community_id         =  trim($requestJson['braingroom']['community_id']);
          $class_provider_id    =  trim($requestJson['braingroom']['class_provider_id']);
          $location             =  trim($requestJson['braingroom']['location']);
          $from                 =  trim($requestJson['braingroom']['starting_month']);
          $to                   =  trim($requestJson['braingroom']['end_month']);
          $day_of_week          =  trim($requestJson['braingroom']['day_of_week']);
          $mode                 =  trim($requestJson['braingroom']['class_mode']);

          $res = $this->VendorClass->find('all',array('condittions'=>array('class_type_id'=>$class_type_id,'community_id'=>$community_id,'class_provider_id'=>$class_provider_id,'location'=>$location,'starting_month'=>$from,'end_month'=>$to,'day_of_week'=>$day_of_week,'class_mode'=>$mode)));
          /*$res=$this->VendorClass->query("SELECT * FROM bg_vendor_classes WHERE class_type_id = '".$class_type_id."' and community_id = '".$community_id."' and class_provider_id = '".$class_provider_id."' and location = '".$location."' and starting_month = '".$from."' and end_month = '".$to."' and day_of_week = '".$day_of_week."' and class_mode = '".$mode."' ;");*/
          
          

          if(!empty($res)){
               $dataArray['res_code']=1;
               $i=0;
               foreach($res as $result){
                  $dataArray['braingroom'][$i]['class_topic']       =$result['VendorClass']['class_topic'];
                   $dataArray['braingroom'][$i]['class_summary']     =$result['VendorClass']['class_summary'];
                   $dataArray['braingroom'][$i]['starting_month']    =$result['VendorClass']['starting_month'];
                   $dataArray['braingroom'][$i]['end_month']         =$result['VendorClass']['end_month'];
                   $dataArray['braingroom'][$i]['day_of_week']       =$result['VendorClass']['day_of_week'];
                   $dataArray['braingroom'][$i]['time_of_day']       =$result['VendorClass']['time_of_day'];
                   $dataArray['braingroom'][$i]['class_duration']    =$result['VendorClass']['class_duration'];
                   $dataArray['braingroom'][$i]['location']          =$result['VendorClass']['location'];
                   $dataArray['braingroom'][$i]['age_group']         =$result['VendorClass']['age_group'];
                   $dataArray['braingroom'][$i]['max_ticket_available']=$result['VendorClass']['max_ticket_available'];
                   $dataArray['braingroom'][$i]['price_per_head']    =$result['VendorClass']['price_per_head'];
                   $dataArray['braingroom'][$i]['class_tag']         =$result['VendorClass']['class_tag'];
                   $dataArray['braingroom'][$i]['upload_tutor_picture']=$result['VendorClass']['upload_tutor_picture'];
                   $dataArray['braingroom'][$i]['upload_class_photo']=$result['VendorClass']['upload_class_photo'];
                    $i++;
               }
               
               echo json_encode($dataArray);die;
          }
          else{
               $dataArray['res_code']=0;
               $dataArray['braingroom']['res_msg']="Category Data Not Found";
               echo json_encode($dataArray); 
          }
     }
     else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
     }
}
public function getCategorySortedData(){
     $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'sorting_id', //0=>high to low,1=>low to high
                                '1'=>'class_provider_type_id', //0=>upcomming,1=>newly added 
                                '2'=>'location',//0=>closest to farest
                                '3'=>'lat',
                                '4'=>'long'
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){
          $sorting_id               =  trim($requestJson['braingroom']['sorting_id']);
          $class_provider_type_id   =  trim($requestJson['braingroom']['class_provider_type_id']);
          $location                 =  trim($requestJson['braingroom']['location']);
          $latform                  =  trim($requestJson['braingroom']['lat']);
          $longfrom                 =  trim($requestJson['braingroom']['long']);

          /*$res=$this->VendorClass->find('all');
          $dataArray  = array();
          $i=0;
          foreach($res as $result){
            $dataArray['braingroom'][$i]['latitude']   = $result['VendorClass']['latitude'];
            $dataArray['braingroom'][$i]['longitude']  = $result['VendorClass']['longitude'];
            $i++;
          }
          print_r($dataArray);die;
          $res = $this->haversineGreatCircleDistance($latform,$longfrom,);*/

          if($sorting_id == 0){
            $res=$this->VendorClass->find('all',array('order'=>array('price_per_head'=>'desc')));
          }
          if($sorting_id == 1){
            $res=$this->VendorClass->find('all',array('order'=>array('price_per_head'=>'asc')));
          }
        

          if(!empty($res)){
               $dataArray['res_code']=1;
               $i=0;
               foreach($res as $result){
                  $dataArray['braingroom'][$i]['class_topic']       =$result['VendorClass']['class_topic'];
                   $dataArray['braingroom'][$i]['class_summary']     =$result['VendorClass']['class_summary'];
                   $dataArray['braingroom'][$i]['starting_month']    =$result['VendorClass']['starting_month'];
                   $dataArray['braingroom'][$i]['end_month']         =$result['VendorClass']['end_month'];
                   $dataArray['braingroom'][$i]['day_of_week']       =$result['VendorClass']['day_of_week'];
                   $dataArray['braingroom'][$i]['time_of_day']       =$result['VendorClass']['time_of_day'];
                   $dataArray['braingroom'][$i]['class_duration']    =$result['VendorClass']['class_duration'];
                   $dataArray['braingroom'][$i]['location']          =$result['VendorClass']['location'];
                   $dataArray['braingroom'][$i]['age_group']         =$result['VendorClass']['age_group'];
                   $dataArray['braingroom'][$i]['max_ticket_available']=$result['VendorClass']['max_ticket_available'];
                   $dataArray['braingroom'][$i]['price_per_head']    =$result['VendorClass']['price_per_head'];
                   $dataArray['braingroom'][$i]['class_tag']         =$result['VendorClass']['class_tag'];
                   $dataArray['braingroom'][$i]['upload_tutor_picture']=$result['VendorClass']['upload_tutor_picture'];
                   $dataArray['braingroom'][$i]['upload_class_photo']=$result['VendorClass']['upload_class_photo'];
                    $i++;
               }
               echo json_encode($dataArray);die;
          }
          else{
               $dataArray['res_code']=0;
               $dataArray['braingroom']['res_msg']="Category Data Not Found";
               echo json_encode($dataArray); 
          }
     }
     else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
     }
}
function haversineGreatCircleDistance(
  $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  return $angle * $earthRadius;
}

public function GiftingOptions(){
     $this->autoRender=false;
     $postData=$this->request->input();
     $requestJson=json_decode($postData,true);
     $dataArray          =array();  
     $check_request_keys=array(
                                '0'=>'user_id',
                                '1'=>'gift_type',
                                '2'=>'recepient_name',
                                '3'=>'email',
                                '4'=>'message',
                                '5'=>'gift_card_id',
                                '6'=>'gift_coupan_id',
                                '7'=>'recepient_image'
                            );
     $resultJson=$this->validateJson($requestJson,$check_request_keys);
     if($resultJson=='1'){

          $user_id              =  trim($requestJson['braingroom']['user_id']);
          $gift_type            =  trim($requestJson['braingroom']['gift_type']);
          $recepient_name       =  trim($requestJson['braingroom']['recepient_name']);
          $email                =  trim($requestJson['braingroom']['email']);
          $message              =  trim($requestJson['braingroom']['message']);
          $gift_card_id         =  trim($requestJson['braingroom']['gift_card_id']);
          $gift_coupan_id       =  trim($requestJson['braingroom']['gift_coupan_id']);
          $recepient_image       =  trim($requestJson['braingroom']['recepient_image']);

          $this->isBlank($user_id, '918', '0');
          $this->isBlank($gift_type, '919', '0');
          $this->isBlank($recepient_name, '920', '0');
          $this->isBlank($email, '921', '0');
          $this->isBlank($message, '922', '0');
          $this->isBlank($gift_card_id, '923', '0');
          $this->isBlank($gift_coupan_id, '924', '0');
          $this->isBlank($recepient_image, '925', '0');
          $this->requestAction(
                        array('controller' => 'validate', 'action' => 'validateEmail'),
                        array('pass' => array($email))
                );
          $userArray = array();
          $userArray['user_id']           = $user_id;
          $userArray['gifting_type']      = $gift_type;
          $userArray['receipient_name']   = $recepient_name;
          $userArray['email']             = $email;
          $userArray['message']           = $message;
          $userArray['receipient_image']  = $recepient_image;
          $userArray['gift_card_id']      = $gift_card_id;
          $userArray['gift_coupan_id']    = $gift_coupan_id;
          $userArray['status']            = 1;
          $userArray['add_date']          = strtotime(date('Y-m-d h:i:s'));
          $userArray['modify_date']       = strtotime(date('Y-m-d h:i:s'));
          $this->GiftingOption->save($userArray);
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('106','1',$userArray)));

          
          
     }else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
     }
     
}
/*--------------------------code end----------------------------------------   */
      
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
                  $userArray['area_of_expertise']=trim($requestJson['braingroom']['area_of_expertise']);
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
                  rename(WWW_ROOT."/img/temp/".$userArray['profile_image'],WWW_ROOT."img/Vendor/profile/".$userArray['profile_image']);
                  $user['user_id']=$this->UserMaster->getLastInsertId();

                  $this->UserVerfication->save($user);
                  rename(WWW_ROOT."/img/temp/".$user['primary_attached_media1'],WWW_ROOT."img/Vendor/Varification/".$user['primary_attached_media1']);
                  rename(WWW_ROOT."/img/temp/".$user['primary_attached_media2'],WWW_ROOT."img/Vendor/Varification/".$user['primary_attached_media2']);
                  rename(WWW_ROOT."/img/temp/".$user['secoundry_attached_media1'],WWW_ROOT."img/Vendor/Varification/".$user['secoundry_attached_media1']);
                  rename(WWW_ROOT."/img/temp/".$user['secoundry_attached_media2'],WWW_ROOT."img/Vendor/Varification/".$user['secoundry_attached_media1']);
                  
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

    public function viewMyClassList(){
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
     $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
     if(!empty($check)){
      $user_id=$check['UserMaster']['id'];
      $all_class=$this->VendorClass->find('all',array('conditions'=>array('user_id'=>$user_id)));
         
if(!empty($all_class)){
$dataArray['res_code']=1; 
 $i=0;
$res1=$this->FeaturedPrice->find('first',array('conditions'=>array('status'=>1)));
    if(!empty($res1)){
      $dataArray['home_weekday_price']=$res1['FeaturedPrice']['home_weekday_price']; 
      $dataArray['home_weekend_price']=$res1['FeaturedPrice']['home_weekend_price']; 
      $dataArray['category_weekday_price']=$res1['FeaturedPrice']['category_weekday_price']; 
      $dataArray['category_weekend_price']=$res1['FeaturedPrice']['category_weekend_price']; 
      }
      else{
       $dataArray['braingroom']['home_weekday_price']=""; 
      $dataArray['braingroom']['home_weekend_price']="";
      $dataArray['braingroom']['category_weekday_price']="";
      $dataArray['braingroom']['category_weekend_price']="";  
      }    
 foreach($all_class as $result){
    $dataArray['braingroom'][$i]['id']=$result['VendorClass']['id'];
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['VendorClass']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['VendorClass']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=$result['VendorClass']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['VendorClass']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    //$dataArray['braingroom'][$i]['class_mode']=$result['VendorClass']['class_mode'];
    //$dataArray['braingroom'][$i]['no_of_seats']=$result['VendorClass']['no_of_seats'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
    //$dataArray['braingroom'][$i]['seat_cost']=$result['VendorClass']['seat_cost'];
    $dataArray['braingroom'][$i]['class_date']=!empty($result['VendorClass']['class_date'])?date("Y-m-d",$result['VendorClass']['class_date']):"";
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['VendorClass']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['VendorClass']['class_topic'];
      $dataArray['braingroom'][$i]['class_summary']=$result['VendorClass']['class_summary'];
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/user_upload/".$result['VendorClass']['pic_name'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    
    if((!empty($result['bg_vendor_classes']['latitude']))&&(!empty($result['VendorClass']['longitude']))){
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
                $dataArray['braingroom'][$i]['locality']=$result['VendorClass']['location'];
    
      }
               
               
  
   
    $i++;
    }
echo json_encode($dataArray);die;
}
else{
$dataArray['res_code']=0;
$dataArray['res_msg']="Record Not Found";
echo json_encode($dataArray);die;

}
   }
$this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
  
    }
else{
$this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
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
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    if($result['bg_vendor_classes']['class_timing_id']=='1'){
    $dataArray['braingroom'][$i]['class_type_data']="Flexible";
    }
    else{
    $dataArray['braingroom'][$i]['class_type_data']="Fixed";
    }
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    //$dataArray['braingroom'][$i]['class_mode']=$result['VendorClass']['class_mode'];
     $dataArray['braingroom'][$i]['no_of_seats']=$result['bg_vendor_classes']['max_ticket_available'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['bg_vendor_classes']['booked_seats'];
    $dataArray['braingroom'][$i]['price']=$result['bg_vendor_classes']['price_per_head'];
   if(!empty($result['bg_vendor_classes']['class_date'])){
    $dataArray['braingroom'][$i]['class_date']=date("Y-m-d",$result['bg_vendor_classes']['class_date']);
    }
    else{
    $dataArray['braingroom'][$i]['class_date']="";
    }
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['bg_vendor_classes']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
      $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
      $dataArray['braingroom'][$i]['class_ratting']=0;
    
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
     if(!empty($result['bg_vendor_classes']['upload_class_photo'])){
     
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."/img/Vendor/class_image/".$result['bg_vendor_classes']['upload_class_photo'];
      }
     else{
     $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."/img/Vendor/class_image/no-image.png";
      }
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
               }
                 $dataArray['braingroom'][$i]['city']=!empty($city)?$city:"";
                $dataArray['braingroom'][$i]['location_area']=!empty($address)?$address:"";
                $dataArray['braingroom'][$i]['locality']=!empty($result['bg_vendor_classes']['location'])?$result['bg_vendor_classes']['location']:"";
    
      
               
               
  
   
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
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    if($result['bg_vendor_classes']['class_timing_id']=='1'){
    $dataArray['braingroom'][$i]['class_type_data']="Flexible";
    }
    else{
    $dataArray['braingroom'][$i]['class_type_data']="Fixed";
    }
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    //$dataArray['braingroom'][$i]['class_mode']=$result['VendorClass']['class_mode'];
    $dataArray['braingroom'][$i]['no_of_seats']=$result['bg_vendor_classes']['max_ticket_available'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['bg_vendor_classes']['booked_seats'];
    $dataArray['braingroom'][$i]['price']=$result['bg_vendor_classes']['price_per_head'];
     if(!empty($result['bg_vendor_classes']['class_date'])){
    $dataArray['braingroom'][$i]['class_date']=date("Y-m-d",$result['bg_vendor_classes']['class_date']);
    }
    else{
    $dataArray['braingroom'][$i]['class_date']="";
    }
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['bg_vendor_classes']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
      $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
       $dataArray['braingroom'][$i]['class_ratting']=0;
     if(!empty($result['bg_vendor_classes']['upload_class_photo'])){
     
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."/img/Vendor/class_image/".$result['bg_vendor_classes']['upload_class_photo'];
      }
     else{
     $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."/img/Vendor/class_image/no-image.png";
      }
   
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
    $dataArray['braingroom'][$i]['seat_cost']=$result['bg_vendor_classes']['price_per_head'];
    $dataArray['braingroom'][$i]['class_date']=date("Y-m-d");
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['bg_vendor_classes']['class_start_time']);
    //$dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
      $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    //$dataArray['braingroom'][$i]['description']=$result['VendorClass']['description'];
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."/img/user_upload/".$result['bg_vendor_classes']['upload_class_photo'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
     $dataArray['braingroom'][$i]['rating']= 4;
    
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
                 if(!empty($result['bg_vendor_classes']['latitude'])){
                 $dataArray['braingroom'][$i]['latitude']=$result['bg_vendor_classes']['latitude'];
                 }
                 else{
                 $dataArray['braingroom'][$i]['latitude']=0;
                 }
                 if(!empty($result['bg_vendor_classes']['longitude'])){
                 $dataArray['braingroom'][$i]['longitude']=$result['bg_vendor_classes']['longitude'];
                 }
                 else{
                 $dataArray['braingroom'][$i]['longitude']=0;
                 }
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
public function getCategory($uuid=null){
 if(empty($uuid)){
   
  $this->autoRender=false;
  $res=$this->Category->find('all',array('conditions'=>array('status'=>1)));
  
  if(!empty($res)){
   $i=0;
   $dataArray['res_code']=1;
  foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['Category']['id'];
    $dataArray['braingroom'][$i]['category_name']=$result['Category']['category_name'];
    $dataArray['braingroom'][$i]['category_image']=HTTP_ROOT.'/img/category_image/'.$result['Category']['category_image'];
    
    
     $i++;
  }
  echo json_encode($dataArray);
}
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('648','0')));
}
}
else{
 $check_category=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
//$category_array=array();
//print_r($check_category);
 if(!empty($check_category)){
  print_r($check_category);die;
$category=$check_category['UserMaster']['category_id'];
$category_array=explode(",",$category);

$res=$this->Category->find('all',array('conditions'=>array('status'=>1)));

  if(!empty($res)){
   $i=0;
   $dataArray['res_code']=1;
  foreach($res as $result){
    $dataArray['braingroom'][$i]['id']=$result['Category']['id'];
    $dataArray['braingroom'][$i]['category_name']=$result['Category']['category_name'];
    $dataArray['braingroom'][$i]['category_image']=HTTP_ROOT.'/img/category_image/'.$result['Category']['category_image'];
    if (in_array($result['Category']['id'],$category_array))
    {
    $dataArray['braingroom'][$i]['my_category_status']=1;
    
    }
    else{
    $dataArray['braingroom'][$i]['my_category_status']=0;
    
    }
     $i++;
  }
  echo json_encode($dataArray);die;
}
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('648','0')));
}
}
else{
 $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))); 
}
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

  //$geo = file_get_contents('http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=gurpreet&password=1627184459&sendername=NETSMS&mobileno='.$mobile_no.'&message='.$otp);
  //$geo = file_get_contents('http://193.105.74.159/api/v3/sendsms/plain?user=braingroom&password=3e4IG3WL&sender=BRAING&SMSText='.$otp.'&type=longsms&GSM=919415434931');

// We convert the JSON to an array


//$geo = json_decode($geo, true);
    //$Url = "http://193.105.74.159/api/v3/sendsms/plain?user=braingroom&password=3e4IG3WL&sender=BRAING&SMSText=TEST&type=longsms&GSM=9929882XXXX";
  //$Url = 'http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=gurpreet&password=1627184459&sendername=NETSMS&mobileno='.$mobile_no.'&message='.$otp;
$Url = 'http://193.105.74.159/api/v3/sendsms/plain?user=braingroom&password=3e4IG3WL&sender=BRAING&SMSText='.$otp.'&type=longsms&GSM=91'.$mobile_no;
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
    //print_r($output);die;
    // Close the cURL resource, and free system resources
    curl_close($ch);

// =========rohit===========

//$url='http://193.105.74.159/api/v3/sendsms/plain?user=alcanzarsoft&password=FfXj97HK&sender=Freelpt&SMSText='.$optcode.'&type=longsms&GSM=971'.$mobile;

 /*$url = 'http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=gurpreet&password=1627184459&sendername=NETSMS&mobileno='.$mobile_no.'&message='.$otp;
                       // create a new cURL resource

              $ch = curl_init();

              // set URL and other appropriate options
                  curl_setopt($ch, CURLOPT_URL,$url);
              curl_setopt($ch, CURLOPT_HEADER, 0);

              // grab URL and pass it to the browser
               $output = curl_exec($ch);
                                                         // print_r($output);die;

              // close cURL resource, and free up system resources
              curl_close($ch);
*/
//===========end rohit============



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
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['VendorClass']['category_id'],'status'=>1),'fields'=>array('category_name')));
    $dataArray['braingroom'][$i]['category_id']=!empty($result['VendorClass']['category_id'])?$result['VendorClass']['category_id']:"";
    $dataArray['braingroom'][$i]['category_name']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    $dataArray['braingroom'][$i]['segment_id']=!empty($result['VendorClass']['segment_id'])?$result['VendorClass']['segment_id']:"";
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['VendorClass']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    $dataArray['braingroom'][$i]['class_type_id']=!empty($result['VendorClass']['class_type_id'])?$result['VendorClass']['class_type_id']:"";
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['VendorClass']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    $dataArray['braingroom'][$i]['class_mode']=!empty($result['VendorClass']['class_mode'])?$result['VendorClass']['class_mode']:"";
    //$dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $dataArray['braingroom'][$i]['class_title']=!empty($result['VendorClass']['class_topic'])?$result['VendorClass']['class_topic']:"";
    $dataArray['braingroom'][$i]['class_summary']=!empty($result['VendorClass']['class_summary'])?$result['VendorClass']['class_summary']:"";
    if($result['VendorClass']['class_timing_id']=='1'){
    $dataArray['braingroom'][$i]['class_based']="Flexible";
    }
    else{
    $dataArray['braingroom'][$i]['class_based']="Fixed";  
    }
    if($result['VendorClass']['recurring_class_id']=='1'){
    $dataArray['braingroom'][$i]['recurring_class']="Regular"; 
    }
    else{
    $dataArray['braingroom'][$i]['class_based']="InRegular"; 
    }
    $dataArray['braingroom'][$i]['no_of_session']=!empty($result['VendorClass']['no_of_session'])?$result['VendorClass']['no_of_session']:"";
    $dataArray['braingroom'][$i]['class_duration']=!empty($result['VendorClass']['class_duration'])?$result['VendorClass']['class_duration']:"";
    $dataArray['braingroom'][$i]['class_location']=!empty($result['VendorClass']['location'])?$result['VendorClass']['location']:"";
    $dataArray['braingroom'][$i]['latitude']=!empty($result['VendorClass']['latitude'])?$result['VendorClass']['latitude']:"0";
    $dataArray['braingroom'][$i]['logitude']=!empty($result['VendorClass']['longitude'])?$result['VendorClass']['longitude']:"0";
    if($result['VendorClass']['level_id']=='1'){
     $dataArray['braingroom'][$i]['class_level']="Begineer";
    }
    else if($result['VendorClass']['level_id']=='2'){
      $dataArray['braingroom'][$i]['class_level']="Intermediot";
    }
    else{
      $dataArray['braingroom'][$i]['class_level']="Advance";  
    }
    $dataArray['braingroom'][$i]['age_group']=!empty($result['VendorClass']['longitude'])?$result['VendorClass']['longitude']:"0";
    
    $dataArray['braingroom'][$i]['no_of_seats']=!empty($result['VendorClass']['max_ticket_available'])?$result['VendorClass']['max_ticket_available']:"";
    //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
    $dataArray['braingroom'][$i]['seat_cost']=!empty($result['VendorClass']['price_per_head'])?$result['VendorClass']['price_per_head']:"";
    //$dataArray['braingroom'][$i]['class_date']=!empty(date("Y-m-d",$result['VendorClass']['starting_month']))?date("Y-m-d",$result['VendorClass']['starting_month']):"";
    //$dataArray['braingroom'][$i]['class_start_time']=!empty(date("h:i:s A",$result['VendorClass']['class_start_time']))?date("h:i:s A",$result['VendorClass']['class_start_time']):"";
    $dataArray['braingroom'][$i]['class_tag']=!empty($result['VendorClass']['class_tag'])?$result['VendorClass']['class_tag']:"";
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/Vendor/class_image/".$result['VendorClass']['upload_class_photo'];
    //$dataArray['braingroom'][$i]['class_created_date']=!empty(date("h:i:s A",$result['VendorClass']['add_date']))?date("h:i:s A",$result['VendorClass']['add_date']):"";
    $i++;
    }
    echo json_encode($dataArray);
  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

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
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['segment_id']),'fields'=>array('segment_name')));
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    if($result['bg_vendor_classes']['class_timing_id']=='1'){
    $dataArray['braingroom'][$i]['class']="Flexible";
    }
    else{
    $dataArray['braingroom'][$i]['class']="Fixed";
    }
    $dataArray['braingroom'][$i]['class_type_id']=$result['bg_vendor_classes']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['class_type_id']),'fields'=>array('types')));
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    $dataArray['braingroom'][$i]['class_topic']=$result['bg_vendor_classes']['class_topic'];
    $dataArray['braingroom'][$i]['class_summary']=$result['bg_vendor_classes']['class_summary'];
    $dataArray['braingroom'][$i]['max_ticket_available']=$result['bg_vendor_classes']['max_ticket_available'];
    $dataArray['braingroom'][$i]['price_per_head']=$result['bg_vendor_classes']['price_per_head'];
    
    $dataArray['braingroom'][$i]['pic_name']=HTTP_ROOT."img/Vendor/class_img/".$result['bg_vendor_classes']['upload_class_photo'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    $dataArray['braingroom'][$i]['location']=!empty($result['bg_vendor_classes']['location'])?$result['bg_vendor_classes']['location']:"";
   
    $city_name=$this->City->find('first',array('conditions'=>array('id'=>$result['bg_vendor_classes']['city_id'])));
    $dataArray['braingroom'][$i]['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
   
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
                                    '13' =>'community_id',
                                  
                                    
                                    
                                );

                $resultJson =  $this->validateJson($requestJson, $check_request_keys);

                if($resultJson=='1'){
                      
                      $dataArray['first_name']    = trim($requestJson['braingroom']['name']);
                     $dataArray['email']    = trim($requestJson['braingroom']['email']); 

                     $dataArray['password']= (trim($requestJson['braingroom']['password']));
                     $dataArray['contact_no']= (trim($requestJson['braingroom']['mobile_no']));
                     $dataArray['state_id']= (trim($requestJson['braingroom']['state']));
                     $dataArray['city_id']= (trim($requestJson['braingroom']['city_id']));
                     $dataArray['locality_id']= (trim($requestJson['braingroom']['locality']));
                     $dataArray['category_id']= (trim($requestJson['braingroom']['category_id']));
                     $dataArray['user_preference_id']= (trim($requestJson['braingroom']['user_preference_id']));
                     $dataArray['d_o_b']= (trim($requestJson['braingroom']['d_o_b']));
                     $dataArray['gender']= (trim($requestJson['braingroom']['gender']));
                     
                     $dataArray['profile_image']= (trim($requestJson['braingroom']['profile_image']));
                     $dataArray['latitude']= (trim($requestJson['braingroom']['latitude']));
                     $dataArray['longitude']= (trim($requestJson['braingroom']['longitude']));
                    $dataArray['community_id']= (trim($requestJson['braingroom']['community_id']));
                     
                     
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
                     $profile_pic = $dataArray['profile_image'];
                     rename(WWW_ROOT."/img/temp/".$profile_pic , WWW_ROOT."img/Buyer/profile/".$profile_pic);
                     //copy(HTTP_ROOT."/img/temp/".$profile_pic , HTTP_ROOT."img/user_upload/".$profile_pic);
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
                    
                    $upload=WWW_ROOT."img/temp/".$final_img;
                    
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
          else if($request== 'allMedia'){  
             if(empty($uuid)){

               $img_filename = $_FILES['uploadedfile']['name'];

        $img_tmpname  = $_FILES['uploadedfile']['tmp_name'];
       
        if(($img_filename != "") && ($img_tmpname != "")){
            
            $explode_file   = explode(".",$img_filename);
            $countExp       = count($explode_file);
            $fileExtenstion = $explode_file[$countExp-1];
            
            
                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;    
                    
                    $upload=WWW_ROOT."img/temp/".$final_img;
                    
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
                  
                      else{
                         $this->requestAction(array('controller'=>'validate','action'=>'generateServerResponse'),array('pass'=>array('624','0'))
                        ); 
                      
                        
                
        
            }
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
                   
                  if(empty($res['UserMaster']['profile_image'])){
                    
                    $dataArray['profile_pic']=HTTP_ROOT.'/img/Vendor/profile/default.png';
                   
                  }
                  else{
                  $dataArray['profile_pic']=HTTP_ROOT.'/img/Vendor/profile/'.$res['UserMaster']['profile_image'];
                  }
                }
                else{
                   
               if(empty($res['UserMaster']['profile_image'])){
                    $dataArray['profile_pic']=HTTP_ROOT.'/img/Buyer/profile/default.png';
                    }
                  else{
                  $dataArray['profile_pic']=HTTP_ROOT.'/img/Buyer/profile/'.$res['UserMaster']['profile_image'];
                 
                  }
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
 
  $id=trim($requestJson['braingroom']['id']);
  $res=$this->UserMaster->find('first',array('conditions'=>array('id'=>$id,'status'=>1)));
//print_r($res);die;
  if(!empty($res)){
    //print_r($res);die;
    $dataArray['braingroom']['res_code']=1;
    $interest=$this->Category->query("select * from bg_categories where id IN (".$res['UserMaster']['category_id'].")");
    $category_name="";
      if(!empty($interest)){
       foreach($interest as $res1){
      $category_name=$category_name.$res1['bg_categories']['category_name'].",";
      }
      
      $category_name=rtrim($category_name, ",");
    }
    
    $dataArray['braingroom']['id']=!empty($res['UserMaster']['id'])?$res['UserMaster']['id']:"";
    $dataArray['braingroom']['user_type_id']=!empty($res['UserMaster']['user_type_id'])?$res['UserMaster']['user_type_id']:"";
    $dataArray['braingroom']['user_type']=($res['UserMaster']['user_type_id']=='1')?"Vender":"Buyer";
    $dataArray['braingroom']['category_id']=!empty($res['UserMaster']['category_id'])?$res['UserMaster']['category_id']:"";
    $dataArray['braingroom']['category_name']=!empty($category_name)?$category_name:"";

    $dataArray['braingroom']['community_id']=!empty($res['UserMaster']['community_id'])?$res['UserMaster']['community_id']:"";
   
    $dataArray['braingroom']['user_preference_id']=!empty($res['UserMaster']['user_preference_id'])?$res['UserMaster']['user_preference_id']:"";
    
    $dataArray['braingroom']['name']=!empty($res['UserMaster']['first_name'])?$res['UserMaster']['first_name']:"";
    $dataArray['braingroom']['email']=!empty($res['UserMaster']['email'])?$res['UserMaster']['email']:"";
    $dataArray['braingroom']['contact_no']=!empty($res['UserMaster']['contact_no'])?$res['UserMaster']['contact_no']:"";
    $dataArray['braingroom']['city_id']=!empty($res['UserMaster']['city_id'])?$res['UserMaster']['city_id']:"";

    $city_name=$this->City->find('first',array('conditions'=>array('id'=>$res['UserMaster']['city_id'])));
    if(!empty($city_name)){
    $dataArray['braingroom']['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
    }
    else{
    $dataArray['braingroom']['city']="";
    }
    $loc_name = $this->Locality->find('first',array('conditions'=>array('id'=>$res['UserMaster']['locality_id'])));
    $locality_name = $loc_name['Locality']['name'];
    $dataArray['braingroom']['locality_id']=$res['UserMaster']['locality_id'];
    $dataArray['braingroom']['locality']=!empty($locality_name)?$locality_name:"";
    $dataArray['braingroom']['interest']=!empty($res['UserMaster']['area_of_expertise/interest'])?$res['UserMaster']['area_of_expertise/interest']:"";
    $dataArray['braingroom']['institution']=!empty($res['UserMaster']['institute_name'])?$res['UserMaster']['institute_name']:"";
    $dataArray['braingroom']['expertise_area']=!empty($res['UserMaster']['area_of_expertise'])?$res['UserMaster']['area_of_expertise']:"";
    $dataArray['braingroom']['address']=!empty($res['UserMaster']['address'])?$res['UserMaster']['address']:"";
    $dataArray['braingroom']['description']=!empty($res['UserMaster']['description'])?$res['UserMaster']['description']:"";
    $dataArray['braingroom']['teaching_experience']=!empty($res['UserMaster']['coaching_experience'])?$res['UserMaster']['coaching_experience']:"";
    if($res['UserMaster']['gender']==1){
    $dataArray['braingroom']['gender']="Male";
    }
    if($res['UserMaster']['gender']==2){
    $dataArray['braingroom']['gender']="Female";
    }
    if(empty($res['UserMaster']['gender'])){
    $dataArray['braingroom']['gender']="";
    }
    $dataArray['braingroom']['d_o_b']=!empty($res['UserMaster']['d_o_b'])?$res['UserMaster']['d_o_b']:"";
    $pic=substr($res['UserMaster']['profile_image'],0,4);
         
        if($res['UserMaster']['user_type_id']=='1'){
           if($pic=='http'){
             $dataArray['braingroom']['profile_image']=$res['UserMaster']['profile_image'];
       
           }
           else{
            $dataArray['braingroom']['profile_image']=HTTP_ROOT.'/img/Vendor/profile/'.$res['UserMaster']['profile_image'];
            }
        }
        else{
          if($pic=='http'){
             $dataArray['braingroom']['profile_image']=$res['UserMaster']['profile_image'];
       
           }
           else{
            $dataArray['braingroom']['profile_image']=HTTP_ROOT.'/img/Buyer/profile/'.$res['UserMaster']['profile_image'];
           }
        }
  $verification=$this->UserVerfication->find('first',array('conditions'=>array('user_id'=>$res['UserMaster']['id'])));
    $dataArray['braingroom']['identity_primary_verification1']=!empty($verification['UserVerfication']['identity_of_primary_verification1'])?$verification['UserVerfication']['identity_of_primary_verification1']:"";
    $dataArray['braingroom']['primary_verfication_no1']=!empty($verification['UserVerfication']['primary_verfication_no1'])?$verification['UserVerfication']['primary_verfication_no1']:"";
    
    $dataArray['braingroom']['identity_primary_verification2']=!empty($verification['UserVerfication']['identity_of_primary_verification2'])?$verification['UserVerfication']['identity_of_primary_verification2']:"";
    $dataArray['braingroom']['primary_verfication_no2']=!empty($verification['UserVerfication']['primary_verfication_no2'])?$verification['UserVerfication']['primary_verfication_no2']:"";
    $dataArray['braingroom']['identity_of_secoundry_verification1']=!empty($verification['UserVerfication']['identity_of_secoundry_verification1'])?$verification['UserVerfication']['identity_of_secoundry_verification1']:"";
    $dataArray['braingroom']['identity_of_secoundry_verification2']=!empty($verification['UserVerfication']['identity_of_secoundry_verification2'])?$verification['UserVerfication']['identity_of_secoundry_verification2']:"";
    $dataArray['braingroom']['identity_of_secoundry_verification3']=!empty($verification['UserVerfication']['identity_of_secoundry_verification3'])?$verification['UserVerfication']['identity_of_secoundry_verification3']:"";
    if($res['UserMaster']['user_type_id']=='1'){
    $dataArray['braingroom']['primary_attached_media1']=!empty($verification['UserVerfication']['primary_attached_media1'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['primary_attached_media1']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['primary_attached_media2']=!empty($verification['UserVerfication']['primary_attached_media2'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['primary_attached_media2']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['secoundry_attached_media1']=!empty($verification['UserVerfication']['secoundry_attached_media1'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['secoundry_attached_media1']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['secoundry_attached_media2']=!empty($verification['UserVerfication']['secoundry_attached_media2'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['secoundry_attached_media2']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['secoundry_attached_media3']=!empty($verification['UserVerfication']['secoundry_attached_media3'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['secoundry_attached_media3']:HTTP_ROOT."/img/Vendor/Varification/"."";
    }
    else{
    $dataArray['braingroom']['primary_attached_media1']=!empty($verification['UserVerfication']['primary_attached_media1'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['primary_attached_media1']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['primary_attached_media2']=!empty($verification['UserVerfication']['primary_attached_media2'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['primary_attached_media2']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['secoundry_attached_media1']=!empty($verification['UserVerfication']['secoundry_attached_media1'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['secoundry_attached_media1']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['secoundry_attached_media2']=!empty($verification['UserVerfication']['secoundry_attached_media2'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['secoundry_attached_media2']:HTTP_ROOT."/img/Vendor/Varification/"."";
    $dataArray['braingroom']['secoundry_attached_media3']=!empty($verification['UserVerfication']['secoundry_attached_media3'])?HTTP_ROOT."/img/Vendor/Varification/".$verification['UserVerfication']['secoundry_attached_media3']:HTTP_ROOT."/img/Vendor/Varification/"."";
      
    }
       
    $dataArray['braingroom']['last_latitude']=!empty($res['UserMaster']['last_latitude'])?$res['UserMaster']['last_latitude']:"";
    $dataArray['braingroom']['last_longitude']=!empty($res['UserMaster']['last_longitude'])?$res['UserMaster']['last_longitude']:"";
    $dataArray['braingroom']['uuid']=!empty($res['UserMaster']['uuid'])?$res['UserMaster']['uuid']:"";
    //print_r($dataArray);die;
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
 public function updateProfile(){
  $this->autoRender=false;
  $postData=$this->request->input();
  $requestJson=json_decode($postData,true);

    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'uuid',
                                '1'=>'name',
                                '2'=>'email',
                                '3'=>'contact_no',
                                '4'=>'city_id',
                                '5'=>'locality_id',
                                '6'=>'category_id',
                                '7'=>'community_id',
                                '8'=>'institution',
                                '9'=>'registration_id',
                                '10'=>'expertise_area',
                                '11'=>'address',
                                '12'=>'description',
                                '13'=>'gender',
                                '14'=>'profile_image',
                                '15'=>'primary_verification_media1',
                                '16'=>'primary_verification_media2',
                                '17'=>'secoundary_verification_media1',
                                '18'=>'secoundary_verification_media2',
                                '19'=>'secoundary_verification_media3',


                            );
  
$resultJson=$this->validateJson($requestJson,$check_request_keys);

if($resultJson=='1'){
  $dataArray['uuid']=trim($requestJson['braingroom']['uuid']);
  $dataArray['first_name']=trim($requestJson['braingroom']['name']);
  $dataArray['email']=trim($requestJson['braingroom']['email']);
  $dataArray['contact_no']=trim($requestJson['braingroom']['contact_no']);
  $dataArray['city_id']=trim($requestJson['braingroom']['city_id']);
  $dataArray['locality_id']=trim($requestJson['braingroom']['locality_id']);
  $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
  $dataArray['community_id']=trim($requestJson['braingroom']['community_id']);
  $dataArray['institute_name']=trim($requestJson['braingroom']['institution']);
  $dataArray['official_reg_id']=trim($requestJson['braingroom']['registration_id']);
  $dataArray['area_of_expertise']=trim($requestJson['braingroom']['expertise_area']);
  $dataArray['address']=trim($requestJson['braingroom']['address']);
  $dataArray['decription']=trim($requestJson['braingroom']['description']);
  $dataArray['gender']=trim($requestJson['braingroom']['gender']);
  $dataArray['profile_image']=trim($requestJson['braingroom']['profile_image']);
  $dataArray['primary_verification_media1']=trim($requestJson['braingroom']['primary_verification_media1']);
  $dataArray['primary_verification_media2']=trim($requestJson['braingroom']['primary_verification_media2']);
  $dataArray['secoundary_verification_media1']=trim($requestJson['braingroom']['secoundary_verification_media1']);
  $dataArray['secoundary_verification_media2']=trim($requestJson['braingroom']['secoundary_verification_media2']);
  $dataArray['secoundary_verification_media3']=trim($requestJson['braingroom']['secoundary_verification_media3']);

  $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$dataArray['uuid'])));

if(!empty($check)){
  $dataArray['id']=$check['UserMaster']['id'];

  if($this->UserMaster->save($dataArray)){
    $user['user_id']=$dataArray['id'];
    $user['uuid']=$dataArray['uuid'];
    $check1=$this->UserVerfication->find('first',array('conditions'=>array('uuid'=>$user['uuid'],'user_id'=>$user['user_id'])));
    
    if(!empty($check1)){
    $user['id']=$check1['UserVerfication']['id'];
    $user['primary_attached_media1']=$dataArray['primary_verification_media1'];
    $user['primary_attached_media1']=$dataArray['primary_verification_media2'];
    $user['secoundry_attached_media1']=$dataArray['secoundary_verification_media1'];
    $user['secoundry_attached_media2']=$dataArray['secoundary_verification_media2'];
    $user['secoundry_attached_media3']=$dataArray['secoundary_verification_media3'];
    $user['status']=1;
    $this->UserVerfication->save($user);
    }
    else{
    $user['user_id']=$check['UserMaster']['id'];
    $user['uuid']=$dataArray['uuid'];
    $user['primary_attached_media1']=$dataArray['primary_verification_media1'];
    $user['primary_attached_media1']=$dataArray['primary_verification_media2'];
    $user['secoundry_attached_media1']=$dataArray['secoundary_verification_media1'];
    $user['secoundry_attached_media2']=$dataArray['secoundary_verification_media2'];
    $user['secoundry_attached_media3']=$dataArray['secoundary_verification_media3'];
    $user['status']=1;
    $this->UserVerfication->save($user);
      
    }             
    if($check['UserMaster']['user_type_id']=='1'){
    rename(WWW_ROOT."/img/temp/".$dataArray['primary_verification_media1'],WWW_ROOT."img/Vendor/Varification/".$dataArray['primary_verification_media1']);
    rename(WWW_ROOT."/img/temp/".$dataArray['primary_verification_media2'],WWW_ROOT."img/Vendor/Varification/".$dataArray['primary_verification_media2']);
    rename(WWW_ROOT."/img/temp/".$dataArray['secoundary_verification_media1'],WWW_ROOT."img/Vendor/Varification/".$dataArray['secoundary_verification_media1']);
    rename(WWW_ROOT."/img/temp/".$dataArray['secoundary_verification_media2'],WWW_ROOT."img/Vendor/Varification/".$dataArray['secoundary_verification_media2']);
    rename(WWW_ROOT."/img/temp/".$dataArray['secoundary_verification_media3'],WWW_ROOT."img/Vendor/Varification/".$dataArray['secoundary_verification_media3']);
      
    }
    else{
    rename(WWW_ROOT."/img/temp/".$dataArray['primary_verification_media1'],WWW_ROOT."img/Buyer/Varification/".$dataArray['primary_verification_media1']);
    rename(WWW_ROOT."/img/temp/".$dataArray['primary_verification_media2'],WWW_ROOT."img/Buyer/Varification/".$dataArray['primary_verification_media2']);
    rename(WWW_ROOT."/img/temp/".$dataArray['secoundary_verification_media1'],WWW_ROOT."img/Buyer/Varification/".$dataArray['secoundary_verification_media1']);
    rename(WWW_ROOT."/img/temp/".$dataArray['secoundary_verification_media2'],WWW_ROOT."img/Buyer/Varification/".$dataArray['secoundary_verification_media2']);
    rename(WWW_ROOT."/img/temp/".$dataArray['secoundary_verification_media3'],WWW_ROOT."img/Buyer/Varification/".$dataArray['secoundary_verification_media3']);
    }             
     $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('903','1')));
  }
}
else{
 $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('624','1')));
   
}
}
else{
  $this->requestAction(
        array('controller' => 'Validate', 'action' => 'generateServerResponse'),
        array('pass' => array('623','1')));
  
}
}
 public function updateSetting(){
      
       $this->autoRender=false;
       $postData=$this->request->input();
       $requestJson=json_decode($postData,true);
       $check_request_keys = array(
                                   
                                      '0' => 'category_id',
                                      '1' => 'latitude',
                                      '2' => 'longitude',
                                      '3' => 'email',
                                      '4' => 'uuid', 
                                      
                                     
                                    
                                );
    $resultJson=$this->validateJson($requestJson,$check_request_keys);
    
    if($resultJson=='1'){
      $uuid=trim($requestJson['braingroom']['uuid']);
      $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
      $dataArray['latitude']=trim($requestJson['braingroom']['latitude']);
      $dataArray['longitude']=trim($requestJson['braingroom']['longitude']);
      $dataArray['email']=trim($requestJson['braingroom']['email']);
      $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
      if(!empty($res)){
        $res['UserMaster']['category_id']=$dataArray['category_id'];
        $res['UserMaster']['latitude']= $dataArray['latitude'];
        $res['UserMaster']['longitude']=$dataArray['longitude'];
        $res['UserMaster']['email']=$dataArray['email'];
        $this->UserMaster->save($res);
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('937','1')));

   
         
        
         
      }
      else{
         $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

   
      }

    }
    else{
       $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
    }


}
public function viewSetting(){
       $this->autoRender=false;
       $postData=$this->request->input();
       $requestJson=json_decode($postData,true);
       $check_request_keys = array(
                                   
                                      '0' => 'uuid',  
                                );
    $resultJson=$this->validateJson($requestJson,$check_request_keys);
   
    if($resultJson=='1'){
      $uuid=trim($requestJson['braingroom']['uuid']);
      //print_r($uuid);die;
      $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
      if(!empty($res)){
      $category_name=$this->Category->find('first',array('id'=>$res['UserMaster']['category_id']));
    // print_r($category_name);die;
     
      $dataArray['res_code']=1;
     $dataArray['category_id']=$res['UserMaster']['category_id'];
     $dataArray['category_name']=$category_name['Category']['category_name'];

     $dataArray['latitude']=$res['UserMaster']['latitude'];
     $dataArray['longitude']=$res['UserMaster']['longitude'];
     $dataArray['email']=$res['UserMaster']['email'];
     echo json_encode($dataArray);
   }
   else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

   }
 }
   else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

   }


  
}

/*=====================================================@Rahul Pathak 26-04-2016 UPDATE PROFILE==================================================*/

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
  $dataArray['braingroom'][$i]['segment_image']=HTTP_ROOT."/img/segment_image/".$result['ClassSegment']['segment_image'];
  
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
public function customizeCategory(){
    $this->autoRender=false;
    $postData  =$this->request->input();
    $requestJson=json_decode($postData,true);
       $dataArray          =array();  
       $check_request_keys=array(
                                  '0'=>'uuid',
                                  '1'=>'category_id',
                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);

       if($resultJson=='1'){
        $dataArray['uuid']=trim($requestJson['braingroom']['uuid']);
        $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$dataArray['uuid'])));
        if(!empty($res)){
          $category=$res['UserMaster']['category_id'];
          $category=$category.",".$dataArray['category_id'];
          $dataArray['id']=$res['UserMaster']['id'];
          $dataArray['category_id']=$category;
          $this->UserMaster->save($dataArray);
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('929','1')));

          
        }
        else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
         
        }     
       }
       else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
         
       }

  }
  public function Findcategory(){
       $this->autoRender=false;
       $postData  =$this->request->input();

       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
       $check_request_keys=array(
                                  '0'=>'uuid',
                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);

       if($resultJson=='1'){

            $uuid=trim($requestJson['braingroom']['uuid']);
            
             
            $this->isBlank($uuid, '918', '0');
            
         
            $userArray = array();
            
         

            $res = $this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid),'fields'=>array('category_id')));
            
             if(!empty($res)){
               $res_arr_values['braingroom']['res_code']=1;
              //print_r($res);die;
              $str=$res['UserMaster']['category_id'];
              $total_cat_id=explode(",",$str);

              $num_of_array=count($total_cat_id);
              $res_arr_values = array();
                 
            
             for ($i=0; $i < $num_of_array; $i++) { 

                $c_id=$total_cat_id[$i];

                $catdetail=$this->Category->find('all',array('conditions'=>array('id'=>$c_id)));
                foreach($catdetail as $res){
                $res_arr_values['braingroom'][$i]['id']=$res['Category']['id'];
                $res_arr_values['braingroom'][$i]['category_name']=$res['Category']['category_name'];
                $res_arr_values['braingroom'][$i]['category_image']=HTTP_ROOT.'/img/category_image/'.$res['Category']['category_image'];
                 }
                }
         
                echo json_encode($res_arr_values);
             
              die;
            }
            else{
             $res_arr_values['braingroom']['res_code']=0;
             $res_arr_values['braingroom']['res_msg']="Record Not Found";
              echo json_encode($res_arr_values);
             
              die;
             }
            $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('106','1',$userArray)));

            
            
         }else{
            $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
         }
     
}
public function pastClasses(){
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
      $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid),'fields'=>'id'));
      if(!empty($res)){
      $user_id=$res['UserMaster']['id'];
      $upcoming_class=$this->VendorClass->find('all',array('conditions'=>array('user_id'=>$user_id,'end_month <'=>date('m/d/Y'))));      
    if(!empty($upcoming_class)){
        $i=0;
    $dataArray['res_code']=1;
    foreach($upcoming_class as $result){
    $dataArray['braingroom'][$i]['id']=$result['VendorClass']['id'];
    $dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
    $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['VendorClass']['category_id'],'status'=>1),'fields'=>array('category_name')));
    if(!empty($category_name)){
    $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
    }
    $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['VendorClass']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
    if(!empty($segment_name)){
    $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
    }
    $dataArray['braingroom'][$i]['class_type_id']=$result['VendorClass']['class_type_id'];
    $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['VendorClass']['class_type_id']),'fields'=>array('types')));
    if(!empty($class_type)){
    $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
    }
    $dataArray['braingroom'][$i]['max_ticket_available']=$result['VendorClass']['max_ticket_available'];
    //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
    $dataArray['braingroom'][$i]['price_per_head']=$result['VendorClass']['price_per_head'];
    $dataArray['braingroom'][$i]['starting_month']=date("Y-m-d",$result['VendorClass']['starting_month']);
    $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['VendorClass']['class_start_time']);
    $dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
    $dataArray['braingroom'][$i]['class_topic']=$result['VendorClass']['class_topic '];
    $dataArray['braingroom'][$i]['class_summary']=$result['VendorClass']['class_summary'];
    $dataArray['braingroom'][$i]['upload_class_photo']=HTTP_ROOT."img/Vendor/class_image/".$result['VendorClass']['upload_class_photo'];
    //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
    $dataArray['braingroom'][$i]['locality']=$result['VendorClass']['location'];
    
    $city_name=$this->City->find('first',array('conditions'=>array('id'=>$result['VendorClass']['city_id'])));
    if(!empty($city_name)){
    $dataArray['braingroom'][$i]['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
    }
    //$dataArray['braingroom'][$i]['country_id']=$result['VendorClass']['country_id'];
    //$dataArray['braingroom'][$i]['contact_person']=$result['VendorClass']['contact_person'];
    //$dataArray['braingroom'][$i]['contact_no']=$result['VendorClass']['contact_no'];
    $dataArray['braingroom'][$i]['latitude']=$result['VendorClass']['latitude'];
    $dataArray['braingroom'][$i]['logitude']=$result['VendorClass']['logitude'];
    $i++;
    }
    echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['res_msg']="Class Not Found";
    echo json_encode($dataArray);
     
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
public function upComingClass(){
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
      //echo  $uuid;    
      $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid),'fields'=>'id'));
      if(!empty($res)){
        $user_id=$res['UserMaster']['id'];
        $upcoming_class=$this->VendorClass->find('all',array('conditions'=>array('user_id'=>$user_id,'end_month >='=>date('m/d/Y'))));      
        if(!empty($upcoming_class)){
          $i=0;
          $dataArray['res_code']=1;
          foreach($upcoming_class as $result){
            $class_id = $result['VendorClass']['id'];
            $dataArray['braingroom'][$i]['id']=$result['VendorClass']['id'];
            $dataArray['braingroom'][$i]['user_id']=$result['VendorClass']['user_id'];
            $category_name=$this->Category->find('first',array('conditions'=>array('id'=>$result['VendorClass']['category_id'],'status'=>1),'fields'=>array('category_name')));
            if(!empty($category_name)){
              $dataArray['braingroom'][$i]['category']=!empty($category_name['Category']['category_name'])?$category_name['Category']['category_name']:"";
            }
            $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['VendorClass']['segment_id'],'category_id'=>$result['VendorClass']['category_id']),'fields'=>array('segment_name')));
            if(!empty($segment_name)){
              $dataArray['braingroom'][$i]['segment']=!empty($segment_name['ClassSegment']['segment_name'])?$segment_name['ClassSegment']['segment_name']:"";
            }
            $dataArray['braingroom'][$i]['class_type_id']=$result['VendorClass']['class_type_id'];
            $class_type=$this->ClassType->find('first',array('conditions'=>array('id'=>$result['VendorClass']['class_type_id']),'fields'=>array('types')));
            if(!empty($class_type)){
              $dataArray['braingroom'][$i]['class_type']=!empty($class_type['ClassType']['types'])?$class_type['ClassType']['types']:"";
            }
            $dataArray['braingroom'][$i]['max_ticket_available']=$result['VendorClass']['max_ticket_available'];
            //$dataArray['braingroom'][$i]['booked_seats']=$result['VendorClass']['booked_seats'];
            $dataArray['braingroom'][$i]['price_per_head']=$result['VendorClass']['price_per_head'];
            $dataArray['braingroom'][$i]['starting_month']=date("Y-m-d",$result['VendorClass']['starting_month']);
            $dataArray['braingroom'][$i]['class_start_time']=date("h:i:s A",$result['VendorClass']['class_start_time']);
            $dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
            $dataArray['braingroom'][$i]['class_topic']=$result['VendorClass']['class_topic'];
            $dataArray['braingroom'][$i]['class_summary']=$result['VendorClass']['class_summary'];
            $dataArray['braingroom'][$i]['upload_class_photo']=HTTP_ROOT."img/Vendor/class_image/".$result['VendorClass']['upload_class_photo'];
            //$dataArray['braingroom'][$i]['address']=$result['VendorClass']['address'];
            $dataArray['braingroom'][$i]['locality']=$result['VendorClass']['location'];
            
            $city_name=$this->City->find('first',array('conditions'=>array('id'=>$result['VendorClass']['city_id'])));
            if(!empty($city_name)){
              $dataArray['braingroom'][$i]['city']=!empty($city_name['City']['name'])?$city_name['City']['name']:"";
            }
            //$dataArray['braingroom'][$i]['country_id']=$result['VendorClass']['country_id'];
            //$dataArray['braingroom'][$i]['contact_person']=$result['VendorClass']['contact_person'];
            //$dataArray['braingroom'][$i]['contact_no']=$result['VendorClass']['contact_no'];
            $dataArray['braingroom'][$i]['latitude']=$result['VendorClass']['latitude'];
            $dataArray['braingroom'][$i]['logitude']=$result['VendorClass']['logitude'];
            $dataArray['braingroom'][$i]['rating']=4;
            $dataArray['braingroom'][$i]['class_schedule_id']=$result['VendorClass']['class_timing_id'];// 1 means flexible, 2 means fixed
            $class_schedule_id = $result['VendorClass']['class_timing_id'];


           // echo "<br> ".$class_schedule_id."<br>";
            if($class_schedule_id == 1){
              //echo " flexible ";
              $dataArray['braingroom'][$i]['class_duration']=$result['VendorClass']['class_duration'];
            }else{
              //echo " fixed ";
              $upcoming_class = $this->ClassSchedule->find(
                    'first',array('conditions'=>array(
                          'class_id'=>$result['VendorClass']['id'],
                          'session_date >='=>date('m/d/Y')        
                          )));
              $dataArray['braingroom'][$i]['upcoming_class_date'] = $upcoming_class['ClassSchedule']['session_date'];

            }
            $i++;
          }
    echo json_encode($dataArray);
  }
  else{
    $dataArray['res_code']=0;
    $dataArray['res_msg']="Class Not Found";
    echo json_encode($dataArray);
     
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

/*==============================================@Rahul Pathak Date 10-06-2016================================================*/
public function blogPostVendor(){
        $this->autoRender=false;
       $postData  =$this->request->input();

       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
       $check_request_keys=array(
                                  '0'=>'uuid',
                                  '1'=>'segment_id',
                                  '2'=>'blog_title',
                                  '3'=>'blog_description',
                                  '4'=>'blog_image',

                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
      
       if($resultJson=='1'){
       $uuid=trim($requestJson['braingroom']['uuid']);
       $dataArray['segment_id']=trim($requestJson['braingroom']['segment_id']);
       $dataArray['blog_title']=trim($requestJson['braingroom']['blog_title']);
       $dataArray['blog_description']=trim($requestJson['braingroom']['blog_description']);
       $dataArray['blog_image']=trim($requestJson['braingroom']['blog_image']);
     
       $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
      
       if(!empty($res)){
       $dataArray['user_id']=$res['UserMaster']['id'];
       $dataArray['status']=1;
       $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
       $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
       
       $this->Blog->save($dataArray);
       rename(WWW_ROOT."/img/temp/".$dataArray['blog_image'],WWW_ROOT."img/Vendor/blog/".$dataArray['blog_image']);
                  
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('930','1')));

       }
       else{
         $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

       }
       
       }
       else{
         $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

       }
}
public function searchSegment(){
    
      $this->autoRender=false;
       $postData  =$this->request->input();

       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
       $check_request_keys=array(
                                  '0'=>'search_name',
                                  

                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
             if($resultJson=='1'){
    $search_name=trim($requestJson['braingroom']['search_name']);
    
   $res=$this->ClassSegment->query("select id,segment_name from bg_class_segments where segment_name like '%$search_name%' order by segment_name");
   if(!empty($res)){
    $dataArray['res_code']=1;
    $i=0;
     foreach($res as $result){
      $dataArray['braingroom'][$i]['id']=$result['bg_class_segments']['id'];
      $dataArray['braingroom'][$i]['segment_name']=$result['bg_class_segments']['segment_name'];
      $i++;
     }
     echo json_encode($dataArray);
   }
   else{
   $dataArray['res_code']=0;
   $dataArray['res_msg']="Record Not Found";
   echo json_encode($dataArray);
   }   
}
else{
   $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('623', '0'))
                            );
  }     
} 
public function findSegment(){
       $this->autoRender=false;
       $postData  =$this->request->input();
       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
       $check_request_keys=array(
                                  '0'=>'search_id',
                                  

                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
             if($resultJson=='1'){
              $id=trim($requestJson['braingroom']['search_id']);
             $result=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$id)));
             if(!empty($result)){
              $dataArray['res_code']=1;
               $dataArray['braingroom']['id']=$result['ClassSegment']['id'];
               $dataArray['braingroom']['segment_name']=$result['ClassSegment']['segment_name'];
               $dataArray['braingroom']['segment_image']=HTTP_ROOT."/img/segment_image/".$result['ClassSegment']['segment_image'];
               echo json_encode($dataArray);
             }
             else{
               $dataArray['res_code']=0;
               $dataArray['res_msg']="Record Not Found";
               echo json_encode($dataArray);
             }
             }
             else{
              $this->requestAction(
                            array('controller' => 'Validate','action' => 'generateServerResponse'), 
                            array('pass' => array('623', '0'))
                            );
             }
} 

public function getUserPost(){
 $this->autoRender=false;
 $pageindex = $this->params->pass[0];
 $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
  
  $dataArray=array();
  $data=array();
  $limit = 10;
  $check_request_keys=array(
                                '0'=>'segment_id',
                                '1'=>'uuid',
                                
                            );
   $resultJson=$this->validateJson($requestJson,$check_request_keys);
   if($resultJson=='1'){
   $segment_id=trim($requestJson['braingroom']['segment_id']);
   $uuid=trim($requestJson['braingroom']['uuid']);
   $check=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
      //print_r($check);die;
                  if(!empty($check)){
      $user_id=$check['UserMaster']['id'];
      $user_type=$check['UserMaster']['user_type_id'];
                  
      
  if ($pageindex == 1 || $pageindex == "") {
     $offset = 0;
   } 
   else {
    $offset = ($pageindex - 1) * $limit;
  }
                  
 $res=$this->Blog->query("select * from bg_blogs where status=1 and segment_id=".$segment_id." limit ".$offset." , ".$limit);
  
  $pageReturn = count($res1);
                if ($pageReturn == '10') {
                    $pageCountRows = $pageindex + 1;
                } else {
                    $pageCountRows = '-1';
                }
 if($user_type=='2'){

 if(!empty($res)){

  $i=0;
  $dataArray['next_page']=$pageCountRows;
  $dataArray['res_code']=1;  
   foreach ($res as $result) {
        $dataArray['braingroom'][$i]['blog_id']=$result['bg_blogs']['id'];
        $dataArray['braingroom'][$i]['user_id']=$result['bg_blogs']['user_id'];
        $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$dataArray['braingroom'][$i]['user_id'])));
        $dataArray['braingroom'][$i]['blog_post_by']=$user_info['UserMaster']['first_name'];
        $dataArray['braingroom'][$i]['user_image']=HTTP_ROOT.'/img/Vendor/profile/'.$user_info['UserMaster']['profile_image'];
        $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_blogs']['segment_id'])));
        if(!empty($segment_name)){
        $dataArray['braingroom'][$i]['segment_id']=$result['bg_blogs']['segment_id'];
        $dataArray['braingroom'][$i]['segment_name']=$segment_name['ClassSegment']['segment_name'];
          
        }
        $dataArray['braingroom'][$i]['blog_title']=ucwords($result['bg_blogs']['blog_title']);
        $dataArray['braingroom'][$i]['blog_description']=$result['bg_blogs']['blog_description'];
        $dataArray['braingroom'][$i]['blog_image']=HTTP_ROOT.'/img/Vendor/blog/'.$result['bg_blogs']['blog_image'];
        $dataArray['braingroom'][$i]['blog_post_date']=date('Y-m-d h:i:s A',$result['bg_blogs']['modify_date']);
        $ttl_cmnt=$this->BlogComment->find('count',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'])));
        $dataArray['braingroom'][$i]['Total_comment']=$ttl_cmnt;  
        $ttl_like=$this->BlogLike->find('count',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'status'=>1)));
        $ttl_unlike=$this->BlogLike->find('count',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'status'=>2)));
        $dataArray['braingroom'][$i]['Total_like']=$ttl_like; 
        $dataArray['braingroom'][$i]['Total_Unlike']=$ttl_unlike;  
        $res1=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        //print_r($res1);die;
        if(!empty($res1)){
        $user_id=$res1['UserMaster']['id'];
 
        $check_like=$this->BlogLike->find('first',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'user_id'=>$user_id,'status'=>1)));
        if(!empty($check_like)){
        $dataArray['braingroom'][$i]['me_like']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_like']=0;  
        }
        $check_unlike=$this->BlogLike->find('first',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'user_id'=>$user_id,'status'=>2)));
        if(!empty($check_unlike)){
        $dataArray['braingroom'][$i]['me_unlike']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_unlike']=0;  
        }
        }
              
        $i++;
        
    }             
 }
$dataArray['next_page']=$pageCountRows;
 echo json_encode($dataArray);

}
else{
$dataArray['next_page']=$pageCountRows;
$dataArray['res_code']=0;

 echo json_encode($dataArray);

}
}
 }
}
public function getBlog(){
 $this->autoRender=false;
 $pageindex = $this->params->pass[0];
 $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
  
  $dataArray=array();
  $data=array();
  $limit = 10;
  $check_request_keys=array(
                                '0'=>'segment_id',
                                '1'=>'uuid',
                                
                            );
   $resultJson=$this->validateJson($requestJson,$check_request_keys);
   if($resultJson=='1'){
   $segment_id=trim($requestJson['braingroom']['segment_id']);
   $uuid=trim($requestJson['braingroom']['uuid']);
   $res1=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
  
   if(!empty($res1)){
    $lat=$res1['UserMaster']['latitude'];
    $lng=$res1['UserMaster']['longitude'];
    if ($pageindex == 1 || $pageindex == "") {
     $offset = 0;
   } 
   else {
    $offset = ($pageindex - 1) * $limit;
  }


  //=======================================================================================================================
 $res=$this->Blog->query("SELECT bg_blogs.*,bg_user_masters.*,SQRT(
    POW(69.1 * (latitude - $lat ), 2) +
    POW(69.1 * ($lng- longitude) * COS(latitude / 57.3), 2)) AS distance
FROM bg_blogs,bg_user_masters Having distance < 1000 and bg_blogs.status=1 and bg_blogs.user_id=bg_user_masters.id and bg_blogs.segment_id=".$segment_id." ORDER BY distance");



  //===========================================================================================================================

   
  $pageReturn = count($res1);
                if ($pageReturn == '10') {
                    $pageCountRows = $pageindex + 1;
                } else {
                    $pageCountRows = '-1';
                }
 if(!empty($res)){

  $i=0;
  $dataArray['next_page']=$pageCountRows;
  $dataArray['res_code']=1;  
   foreach ($res as $result) {
        $dataArray['braingroom'][$i]['blog_id']=$result['bg_blogs']['id'];
        $dataArray['braingroom'][$i]['user_id']=$result['bg_blogs']['user_id'];
        $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$dataArray['braingroom'][$i]['user_id'])));
        $dataArray['braingroom'][$i]['blog_post_by']=$user_info['UserMaster']['first_name'];
        $dataArray['braingroom'][$i]['user_image']=HTTP_ROOT.'/img/Vendor/profile/'.$user_info['UserMaster']['profile_image'];
        $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_blogs']['segment_id'])));
        if(!empty($segment_name)){
        $dataArray['braingroom'][$i]['segment_id']=$result['bg_blogs']['segment_id'];
        $dataArray['braingroom'][$i]['segment_name']=$segment_name['ClassSegment']['segment_name'];
          
        }
        $dataArray['braingroom'][$i]['blog_title']=ucwords($result['bg_blogs']['blog_title']);
        $dataArray['braingroom'][$i]['blog_description']=$result['bg_blogs']['blog_description'];
        $dataArray['braingroom'][$i]['blog_image']=HTTP_ROOT.'/img/Vendor/blog/'.$result['bg_blogs']['blog_image'];
        $dataArray['braingroom'][$i]['blog_post_date']=date('Y-m-d h:i:s A',$result['bg_blogs']['modify_date']);
        $ttl_cmnt=$this->BlogComment->find('count',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'])));
        $dataArray['braingroom'][$i]['Total_comment']=$ttl_cmnt;  
        $ttl_like=$this->BlogLike->find('count',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'status'=>1)));
        $ttl_unlike=$this->BlogLike->find('count',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'status'=>2)));
        $dataArray['braingroom'][$i]['Total_like']=$ttl_like; 
        $dataArray['braingroom'][$i]['Total_Unlike']=$ttl_unlike;  
        $res1=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        //print_r($res1);die;
        if(!empty($res1)){
        $user_id=$res1['UserMaster']['id'];
 
        $check_like=$this->BlogLike->find('first',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'user_id'=>$user_id,'status'=>1)));
        if(!empty($check_like)){
        $dataArray['braingroom'][$i]['me_like']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_like']=0;  
        }
        $check_unlike=$this->BlogLike->find('first',array('conditions'=>array('blog_id'=>$result['bg_blogs']['id'],'user_id'=>$user_id,'status'=>2)));
        if(!empty($check_unlike)){
        $dataArray['braingroom'][$i]['me_unlike']=1;  
        }
        else{
        $dataArray['braingroom'][$i]['me_unlike']=0;  
        }
        }
              
        $i++;
        
    }
$dataArray['next_page']=$pageCountRows;
 echo json_encode($dataArray);
             
 }
else{
 
 
 $dataArray['res_code']=0; 
 $dataArray['res_msg']="Record Not Found"; 
 echo json_encode($dataArray);
}
   }
   else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

   }
  
} 
else{
  $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

}           
}public function editCategory(){
  $this->autoRender=false;
  $postData=$this->request->input();
   $requestJson=json_decode($postData,true);
    $dataArray          =array();  
    $check_request_keys=array(
                                '0'=>'uuid',
                                '1'=>'category_id',
                                
                            );
   $resultJson=$this->validateJson($requestJson,$check_request_keys);
   if($resultJson=='1'){
   $dataArray['uuid']=trim($requestJson['braingroom']['uuid']);
   $dataArray['category_id']=trim($requestJson['braingroom']['category_id']);
   $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$dataArray['uuid'])));
   if(!empty($res)){
    $dataArray['id']=$res['UserMaster']['id'];
    $dataArray['category_id']=$dataArray['category_id'];
    $this->UserMaster->save($dataArray);
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('934','1')));

   }
   else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

   }
   
   }
   else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

   }
   
}

public function blogSearch(){
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
    
    $res=$this->Blog->query("select * from bg_blogs where bg_blogs.blog_title like '%$search_name%' or bg_blogs.blog_description like '%$search_name%' and status=1");
    if(!empty($res)){
      $i=0;
      $dataArray['res_code']=1;
      foreach($res as $result){
        $dataArray['braingroom'][$i]['blog_id']=$result['bg_blogs']['id'];
        $dataArray['braingroom'][$i]['user_id']=$result['bg_blogs']['user_id'];
        $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$dataArray['braingroom'][$i]['user_id'])));
        $dataArray['braingroom'][$i]['blog_post_by']=$user_info['UserMaster']['first_name'];
        $segment_name=$this->ClassSegment->find('first',array('conditions'=>array('id'=>$result['bg_blogs']['segment_id'])));
        if(!empty($segment_name)){
        $dataArray['braingroom'][$i]['segment_id']=$result['bg_blogs']['segment_id'];
        $dataArray['braingroom'][$i]['segment_name']=$segment_name['ClassSegment']['segment_name'];
          
        }
        $dataArray['braingroom'][$i]['blog_title']=$result['bg_blogs']['blog_title'];
        $dataArray['braingroom'][$i]['blog_description']=$result['bg_blogs']['blog_description'];
        $dataArray['braingroom'][$i]['blog_image']=HTTP_ROOT.'/img/Vendor/blog/'.$result['bg_blogs']['blog_image'];
        
        $i++;
      }
     echo json_encode($dataArray);
    }
    else{
      $dataArray['braingroom']['res_code']=0;
      $dataArray['braingroom']['res_msg']="Record Not Found";
       echo json_encode($dataArray);
    }
    //print_r($res);die;
    }
    else{
      $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('932','0')));   
    }

  }
  else{
    $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

  }
}
public function addWishList(){
       $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  '0'=>'uuid',
                                  '1'=>'class_id',
                                  

                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
       $uuid=trim($requestJson['braingroom']['uuid']);
       $dataArray['class_id']=trim($requestJson['braingroom']['class_id']);
       $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
       if(!empty($res)){
       $dataArray['user_id']=$res['UserMaster']['id'];
       $dataArray['status']=1;
       $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
       $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
       $this->Wishlist->save($dataArray);
       $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('931','1')));

     }
     else{
      $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

     }
     }
     else{
     $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

     }

}
public function blogComment(){
   $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  '0'=>'uuid',
                                  '1'=>'blog_id',
                                  '2'=>'comment',
                                  

                                  
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
        $uuid=trim($requestJson['braingroom']['uuid']);
        $dataArray['blog_id']=trim($requestJson['braingroom']['blog_id']);
        $dataArray['comment']=trim($requestJson['braingroom']['comment']);
        $res=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid)));
        if(!empty($res)){
        $dataArray['user_id']=$res['UserMaster']['id'];
        $dataArray['status']=1;
        $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
        $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
        $this->BlogComment->save($dataArray);
         $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('933','1')));

        }
        else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));

        }
        
       }
       else{
       $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));

       }
}
public function getBlogComment(){
       $this->autoRender=false;
       $postData  =$this->request->input();
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  
                                  '0'=>'blog_id',     
                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
       $blog_id=trim($requestJson['braingroom']['blog_id']);
       $res=$this->BlogComment->find('all',array('conditions'=>array('blog_id'=>$blog_id,'status'=>1)));
       if(!empty($res)){
        $dataArray['res_code']=1;
        $i=0;
        foreach($res as $result){
          $dataArray['braingroom'][$i]['comment_id']=$result['BlogComment']['id'];
          $user_info=$this->UserMaster->find('first',array('conditions'=>array('id'=>$result['BlogComment']['user_id'])));
          if(!empty($user_info)){
            $dataArray['braingroom'][$i]['posted_by_name']=$user_info['UserMaster']['first_name'];
            if($user_info['UserMaster']['user_type_id']==''){
            $dataArray['braingroom'][$i]['posted_by_image']=$user_info['UserMaster']['profile_image'];
          }
          else if($user_info['UserMaster']['user_type_id']=='1'){
          $dataArray['braingroom'][$i]['posted_by_image']=HTTP_ROOT.'/img/Vendor/profile/'.$user_info['UserMaster']['profile_image'];
            
          }
          else{
          $dataArray['braingroom'][$i]['posted_by_image']=HTTP_ROOT.'/img/Buyer/profile/'.$user_info['UserMaster']['profile_image'];
            
          }
          $dataArray['braingroom'][$i]['comment']=$result['BlogComment']['comment'];
          $dataArray['braingroom'][$i]['comment_date']=date('d-m-Y h:i:s A',$result['BlogComment']['add_date']);
          }
          $i++;            
          
        }
       echo json_encode($dataArray);
       }
       else{
        $dataArray['res_code']=0;
        $dataArray['res_msg']="Record Not Found";
        echo json_encode($dataArray);
       }
       }
       else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
 
       }
   
}
public function blogLikeUnlike(){
  $this->autoRender=false;
       $postData  =$this->request->input();
      $status=$this->params->pass[0];
      
       

       $requestJson=json_decode($postData,true);
       $dataArray          =array();  
      $check_request_keys=array(
                                  
                                  '0'=>'uuid',
                                  '1'=>'blog_id',

                              );
       $resultJson=$this->validateJson($requestJson,$check_request_keys);
       
       if($resultJson=='1'){
        $uuid=trim($requestJson['braingroom']['uuid']);
        $blog_id=trim($requestJson['braingroom']['blog_id']);
        $user_id=$this->UserMaster->find('first',array('conditions'=>array('uuid'=>$uuid),'fields'=>array('id')));
        if(!empty($user_id)){
          $check=$this->BlogLike->find('first',array('conditions'=>array('blog_id'=>$blog_id,'user_id'=>$user_id['UserMaster']['id'])));
          if(!empty($check)){
            if($check['BlogLike']['status']=='1'){
             $check['BlogLike']['status']=2;
             $check['BlogLike']['modify_date']=strtotime(date('Y-m-d H:i:s'));
             $this->BlogLike->save($check);
             $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('936','1')));
            
             }
             else{
              $check['BlogLike']['status']=1;
              $check['BlogLike']['modify_date']=strtotime(date('Y-m-d H:i:s'));
              $this->BlogLike->save($check);
              $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('935','1')));
              }
          }
          else{
          $dataArray['user_id']=$user_id['UserMaster']['id'];
          $dataArray['blog_id']=$blog_id;
          $dataArray['status']=1;
          $dataArray['add_date']=strtotime(date('Y-m-d H:i:s'));
          $dataArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
          
           $this->BlogLike->save($dataArray);
           $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('935','1')));
         
          }
        }
          
        else{
          $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('624','0')));
 
        }
       }
       else{
        $this->requestAction(array('controller'=>'Validate','action'=>'generateServerResponse'),array('pass'=>array('623','0')));
 
       }
       
}
/*===================================================End===========================================================================*/

    function validateEmail($email){
        
        $this->autoRender = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->generateServerResponse('620','0', $languageCode);
        }
    }  
  
}
?>