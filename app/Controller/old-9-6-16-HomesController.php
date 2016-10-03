<?php
class HomesController extends AppController {
  //{

	var $uses = array('Admin','UserMaster','City','Locality','Category','Community','UserVerfication','ClassSegment','ClassType','ClassPost');
	 var $components = array('Paginator','Messages','Session');

    
	 public function checkUser(){
    	if(!$this->Session->check('User')){
    		$this->redirect(array('controller'=>'Homes','action'=>'login'));
    	}
    }
     public function index() {
    	$this->layout=null;
       }
    public function dashboard(){
       print_r($this->Session->read('User'));die;
      //$this->checkUser();
      $this->layout='vendor_layout';
      $user=$this->Session->read('User');
      
      $this->set('user_view',$user);
      }
    public function myProfile(){
      $this->checkUser();
      $this->layout='vendor_layout';
      $user=$this->Session->read('User');
      
     $this->set('user_view',$user);
      

    }
    /* Start NAJMUDDIN 2.06.2016*/
    public function add_class(){
      //$this->checkUser();
      $this->layout='vendor_layout';
      $user=$this->Session->read('User');
      
     $this->set('user_view',$user);
      

    }
    public function gift_class(){
      //$this->checkUser();
      $this->layout='vendor_layout';
      $user=$this->Session->read('User');
      
     $this->set('user_view',$user);
      

    }
    /*end   NAJMUDDIN 2.06.2016 */
    /*sitaram 30.05.2016*/

    public function Faq(){
      //$this->checkUser();
      $this->layout='vendor_layout';
      $user=$this->Session->read('User');
      $this->set('user_view',$user);
    }

    
    public function postClass(){

     // $login1=$this->Session->read('Login1');

      //$this->checkUser();
      $this->layout='vendor_layout';
      ##########################################
       $user=$this->Session->read('User');
        $this->set('user_view',$user);
          //$this->checkUser();
      #########################################
       $cat=$this->Category->find('all',array('conditions'=>array('status'=>1))); 
       $this->set('all_main_cat',$cat);

        $class_type=$this->ClassType->find('all'); 
        $this->set('all_class_type',$class_type);
    }
  /*sitaram 31.05.2016 / */



    public function EmailConfirmation($mail=null){
    $this->layout=null;
   
}
public function ChangePassword(){
  $this->layout='vendor_layout';
}
############ Create By Rohit ##############
function changepasswordac(){
    
    $this->checkUser();
    $this->autoRender = false;
    $user=$this->Session->read('User');
    $id=   $user['id'];
    //echo $id;
    //die;
    $newpassword = $this->request->data['newpassword'];
    $cpassword =   $this->request->data['cpassword'];
    $oldpassword = $this->request->data['oldpassword'];
    $my_id=$this->request->data['newpassword'];
    if($newpassword!=$cpassword)
    {
      echo '2';
      exit();
    }
    $oldpassword=md5($oldpassword);
    $newpassword=md5($newpassword);
    $chkUser = $this->UserMaster->find('first', array('conditions' => array('UserMaster.id' => $id, 'UserMaster.password' =>$oldpassword,'UserMaster.status' =>'1','UserMaster.user_type_id' =>'1')));
    if(!empty($chkUser)){
    $this->UserMaster->updateAll(array('UserMaster.password' => "'$newpassword'",'UserMaster.my_id' => "'$my_id'"), array('UserMaster.id' => $id, 'UserMaster.user_type_id' =>'1'));

    echo '1';
    exit();
    }
    else {
            echo '0';
            exit();
           }
        exit();
    }
############ Create By Rohit ##############

 	public function reg1(){
        $this->layout=null;
        if($this->request->is('post')){
          $data=$this->data;
          $data['UserMaster']['password']=md5($data['UserMaster']['password']);
          $this->Session->delete('registration1');
          $Usertype = array();
                    $Usertype['utype']      = $data['user_type'];
                   
                    $this->Session->write('usertype', $Usertype);



          if($data['user_type']=='2'){

          $this->Session->write('registration1',$data);
          $this->redirect(array('controller'=>'Homes','action'=>'reg4'));
          }
          else{
          $this->Session->write('registration1',$data);
          $this->redirect(array('controller'=>'Homes','action'=>'reg2'));
          }
        }
          $city=$this->City->find('all');
          $cityArray=array();
          $catArray=array();
          if(!empty($city)){
              $cityArray['0']='Select City';
            foreach($city as $res){
              $cityArray[$res['City']['id']]=$res['City']['name'];
            }
        $this->set('city',$cityArray);
        }
        $cat=$this->Category->find('all',array('conditions'=>array('status'=>1)));
        if(!empty($cat)){
         $catArray[0]="Select Interest Areas";
         foreach ($cat as $result) {
            $catArray[$result['Category']['id']]=$result['Category']['category_name'];
              
            } 
            $this->set('category',$catArray);  
        }
        
        $nm=$this->Session->read('name');
        if(!empty($nm)){
            $this->set('data',$nm);
        }

         $cat_localitie=$this->Locality->find('all');
         $this->set('localitie',$cat_localitie);

             /* echo "<pre>";
              print_r($cat_localitie);
              echo "</pre>";
              exit();*/
      }
      public function getLocality(){
        $this->autoRender=false;
        $locationArray=array();
        if(!empty($this->params->pass[0])){
            $city_id=$this->params->pass[0];
            $res=$this->Locality->find('all',array('conditions'=>array('city_id'=>$city_id)));
            if(!empty($res)){
                $i=0;
              foreach ($res as $result){
                //$locationArray[$result['Locality']['id']]=$result['Locality']['name'];
                $locationArray[$i]['id']=$result['Locality']['id'];
                $locationArray[$i]['name']=$result['Locality']['name'];
                $i++;
              }
              echo json_encode($locationArray);die;
            }
            else{
                echo "0";die;
            }
        }
      }
      public function getUser($id=null){
       $user_data=$this->UserMaster->find('first',array('conditions'=>array('id'=>$id)));
       return $user_data;
      }
 	 public function reg2(){
 	  	$this->layout=null;
     /* if(!$this->Session->check('registration1')){
        $this->redirect(array('controller'=>'Homes','action'=>'reg1'));
      }*/
      
      if($this->request->is('post')){

      $data1=$this->data;
     
      if($data1['vendor_type_id']=='2'){
          if($data1['UserMaster']['profile_pic']['error']=='4'){
          $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                              array('pass'=>array('917','0')));
                    $validate++;
          //$this->redirect(array('controller'=>'Homes','action'=>'reg2'));
        }
        else{
        $profile_name=$this->uploadImage('Vendor/profile','UserMaster','profile_pic',$data1);

                //print_r($background_name);die;
                if($profile_name=="0"){
                 
                  $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('917','0')));
                  $validate++;
                }
        else{
      $data=$this->Session->read('registration1');

      //echo $data1['user_type'];
      //echo "test by rohit";
      //die;

      $this->Session->delete('registration1');
      $data['UserMaster']['profile_image']=$profile_name;
      $data['UserMaster']['user_type_id']=$data1['user_type'];
      $data['UserMaster']['vendor_type_id']=$data1['vendor_type_id'];
      $data['UserMaster']['d-o-b']=$data1['UserMaster']['d-o-b'];
      $data['UserMaster']['Institute']=$data1['UserMaster']['Institute'];
      $data['UserMaster']['registration_id']=$data1['UserMaster']['registration_id'];
      $data['UserMaster']['expertise_area']=$data1['UserMaster']['expertise_area'];
      $data['UserMaster']['address']=$data1['UserMaster']['address'];
      $data['UserMaster']['description']=$data1['UserMaster']['description'];
      $data['UserMaster']['profile_pic']['name']=$data1['UserMaster']['profile_pic']['name'];
      $data['UserMaster']['profile_pic']['type']=$data1['UserMaster']['profile_pic']['type'];
      $data['UserMaster']['profile_pic']['tmp_name']=$data1['UserMaster']['profile_pic']['tmp_name'];
      $data['UserMaster']['profile_pic']['error']=$data1['UserMaster']['profile_pic']['error'];
      $data['UserMaster']['profile_pic']['size']=$data1['UserMaster']['profile_pic']['size'];
      $this->Session->write('registration2',$data);
      $this->redirect(array('controller'=>'Homes','action'=>'reg3'));
         }
        }
      }
      if($data1['vendor_type_id']=='1'){
          if($data1['UserMaster']['profile_pic1']['error']=='4'){
          $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                              array('pass'=>array('917','0')));
                    $validate++;
          //$this->redirect(array('controller'=>'Homes','action'=>'reg2'));
        }
        else{
        $profile_name=$this->uploadImage('Vendor/profile','UserMaster','profile_pic1',$data1);

                //print_r($background_name);die;
                if($profile_name=="0"){
                 
                  $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('917','0')));
                  $validate++;
                }
        else{
      $data['UserMaster']['profile_image']=$profile_name;
      $data['UserMaster']['user_type_id']=$data1['user_type'];
      $data=$this->Session->read('registration1');
      $this->Session->delete('registration1');
      $data['UserMaster']['vendor_type_id']=$data1['vendor_type_id'];
      $data['UserMaster']['d-o-b']=$data1['UserMaster']['d-o-b'];
      $data['UserMaster']['Institute']=$data1['UserMaster']['Institute'];
      $data['UserMaster']['registration_id']=$data1['UserMaster']['registration_id'];
      $data['UserMaster']['expertise_area']=$data1['UserMaster']['expertise_area'];
      $data['UserMaster']['address']=$data1['UserMaster']['address'];
      $data['UserMaster']['description']=$data1['UserMaster']['description'];
      $data['UserMaster']['profile_pic1']['name']=$data1['UserMaster']['profile_pic']['name'];
      $data['UserMaster']['profile_pic1']['type']=$data1['UserMaster']['profile_pic']['type'];
      $data['UserMaster']['profile_pic1']['tmp_name']=$data1['UserMaster']['profile_pic']['tmp_name'];
      $data['UserMaster']['profile_pic1']['error']=$data1['UserMaster']['profile_pic']['error'];
      $data['UserMaster']['profile_pic1']['size']=$data1['UserMaster']['profile_pic']['size'];
      $this->Session->write('registration2',$data);
      $this->redirect(array('controller'=>'Homes','action'=>'reg3'));
    }
        }
      }
     
     }
      // print_r($this->Session->read('registration1'));die;
 	  }
 	  public function reg3(){
      require ('sendgrid-php/vendor/autoload.php');
      require ('sendgrid-php/lib/SendGrid.php'); 
 	  	$this->layout=null;
      $skip_val=$this->params->pass[0];

      //echo $skip_val;
       $usertype = $this->Session->read('usertype');
      /* echo "<pre>";
       print_r($usertype);
       echo "</pre>";
       die;*/
      $data['user_type']=$usertype['utype'];
      //echo "hello";
      //die;


      if($skip_val=='Back')
      {
        
        if($data['user_type']=='2'){

          $this->Session->write('registration1',$data);
          $this->redirect(array('controller'=>'Homes','action'=>'reg1'));
          }
        $skip_val='Skip';

      }
      
      if($skip_val!='Skip')
      {
        //echo $skip_val;
        //die;
          
          /*if(!$this->Session->check('registration2')){
            $this->redirect(array('controller'=>'Homes','action'=>'reg1'));
          }*/
      }
     
      if($this->request->is('post')){
        /*echo "<pre>";
        print_r($this->request->data);
        echo "</pre>";
        die;*/
        $this->UserVerfication->save($this->request->data);
        $userArray=array();
        $data1=$this->data;
        $data=$this->Session->read('registration2');
        echo "<pre>";
        print_r($data);
        echo "</pre>";
       
        
        $this->Session->destroy();
        $userArray['profile_image']=$data['UserMaster']['profile_image'];
        $userArray['first_name']=$data['UserMaster']['first_name'];
        $userArray['email']=$data['UserMaster']['email'];
        $userArray['user_type_id']=1;
        $userArray['password']=$data['UserMaster']['password'];
        $userArray['contact_no']=$data['UserMaster']['contact_no'];
        $userArray['city_id']=$data['UserMaster']['city_id'];
        $userArray['locality']=$data['UserMaster']['locality'];
        $userArray['category_id']=$data['UserMaster']['category_id'];
        $userArray['vendor_type_id']=$data['UserMaster']['vendor_type_id'];
        $userArray['d_o_b']=$data['UserMaster']['d-o-b'];
        $userArray['institute_name']=$data['UserMaster']['Institute'];
        $userArray['registration_id']=$data['UserMaster']['registration_id'];
        $userArray['area_of_expertise/interest']=$data['UserMaster']['expertise_area'];
        $userArray['address']=$data['UserMaster']['address'];
        $userArray['description']=$data['UserMaster']['description'];
        $userArray['coaching_experience']=$data1['UserMaster']['coaching_experience'];
        $userArray['ip_address']=$_SERVER['REMOTE_ADDR'];
       
        $userArray['add_date']=strtotime(date('Y-m-d H:i:s'));
        $userArray['modify_date']=strtotime(date('Y-m-d H:i:s'));
        $userArray['status']=2;
        $address = $userArray['locality'].' Chennai India';

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
        $userArray['latitude']=$latitude;
        $userArray['longitude']=$longitude;
        
        $this->UserMaster->save($userArray);
        $this->sendMail('signup', $userArray['email'],$userArray['email']);
        $this->Session->delete('registration2');
        $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('104','1')));
        $this->redirect(array('controller'=>'Homes','action'=>'reg4'));
                           
  }
 	  }
 	  public function reg4(){
      require ('sendgrid-php/vendor/autoload.php');
      require ('sendgrid-php/lib/SendGrid.php'); 
 	  $this->layout=null;
      $communityArray=array();
       $skip_val=$this->params->pass[0];



      //echo $skip_val;
      //die;
      if($skip_val=='Back')
      {
        $skip_val='Skip';
      }
      
      if($skip_val!='Skip')
      {
         /* if(!$this->Session->check('registration1')){
            $this->redirect(array('controller'=>'Homes','action'=>'reg1'));
          }*/
      }
      if($this->request->is('post')){
        $data1=$this->data;

        $data=$this->Session->read('registration1');
        $data['UserMaster']['user_preference_id']=$data1['UserMaster']['community_id'];
        $data['UserMaster']['gender']=$data1['UserMaster']['gender'];
        $data['UserMaster']['d_o_b']=$data1['UserMaster']['d_o_b'];
        $data['UserMaster']['user_type_id']=$data['user_type'];
        $data['UserMaster']['add_date']=strtotime(date('Y-m-d H:i:s'));
        $data['UserMaster']['modify_date']=strtotime(date('Y-m-d H:i:s'));
        $data['UserMaster']['status']=2;
        $profile_name=$this->uploadImage('Buyer/profile','UserMaster','profile_pic',$data1);
          //echo $profile_name
          //die;
                  //print_r($background_name);die;
                if($profile_name==0){
                 
                  $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('917','0')));
                  $validate++;
                }
        else{
        $data['UserMaster']['profile_image']=$profile_name;
        $this->UserMaster->save($data);
          $this->sendMail('signup', $data['UserMaster']['email'],$data['UserMaster']['email']);
         $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('104','1')));
         $this->Session->delete('registration1');
         $this->redirect(array('controller'=>'Homes','action'=>'login'));
       }
       
      }
      $res=$this->Community->find('all',array('conditions'=>array('status'=>1)));
      if(!empty($res)){
        $communityArray['0']='Select';
        foreach($res as $result){
         $communityArray[$result['Community']['id']]=$result['Community']['community_name'];
        }
        $this->set('community_name',$communityArray);
      }
      $genderArray['1']="Male";
      $genderArray['2']="Female";
      $this->set('gender',$genderArray);

 	  }
    public function uploadImage($folder,$modelName,$image_name,$data){
        $validate=0;
        $filename = WWW_ROOT. 'img'.DS.$folder.DS.time().$data[$modelName][$image_name]['name'];

                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $filename1 = WWW_ROOT. 'img'.DS.$folder.DS.time().".".$ext;

                    
                    if( $ext == 'gif' || $ext == 'png' || $ext == 'jpg' ) { 
                            
                            move_uploaded_file($data[$modelName][$image_name]['tmp_name'],$filename1);
                            $data[$modelName][$image_name]=time().".".$ext;
                            return $data[$modelName][$image_name];
                    }else{
          
                            //$this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                           // array('pass'=>array('308','0')));
                            //$validate++; 
                          return "0";

                        }
                       

    }
    public function checkMobile(){
      $this->autoRender=false;
      if(!empty($this->params->pass[0])){
        $mob_no=base64_decode($this->params->pass[0]);
        $check=$this->UserMaster->find('first',array('conditions'=>array('contact_no'=>$mob_no)));
        if(!empty($check)){
          echo "1";die;//exists Mobile Number
        }
        else{
          echo "2";die;//Not Exists
        }
      }
    }
 	  public function registration(){
 	  	$this->layout=null;
 	  	$user_ip = getenv('REMOTE_ADDR');

		$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

		$country = $geo["geoplugin_countryName"];
		
		
 	  }
 	  public function forgotPassword(){
 	  	$chkLogin['braingroom']['email']='rahul.bst1224@gmail.com';

 	  	$responseApi = $this->requestAction(
								array('controller' => 'apis', 'action' => 'postData'),
								array('pass' => array($chkLogin, 'apis/forgotPassword'))
							);
 	  	print_r($responseApi);die;
			
		   
			$response = json_decode($responseApi, true);
		print_r($response['braingroom']['res_code']);
 	  }
          public function socialLogin(){
    $this->autoRender = false;
    $fb_name=$_POST['response']['name'];
    $fb_id=$_POST['response']['id'];
    $email=$_POST['response']['email'];
    $profile_image=$_POST['response']['picture']['data']['url'];
    
   $find =$this->UserMaster->find('first',array('conditions'=>array('social_network_id'=>$fb_id)));
   
if(!empty($find))
                {
                    $status = $find['UserMaster']['status'];
                    $email  = $find['UserMaster']['email'];
	if($status==1)
            {
                $email_id    = $find['UserMaster']['email'];
                $id          = $find['UserMaster']['id'];
                $uuid        = $find['UserMaster']['uuid'];
                $first_name  = $find['UserMaster']['first_name'];
                $Login = array();
                        $Login['id']         = $id;
                        $Login['uuid']       = $uuid;
                        $Login['email']   = $email_id;
                        $Login['first_name'] = $first_name;
                        $Login['profile_image']=$profile_image;
                        $this->Session->write('User', $Login);
                        echo '2';die;
            }
            else if($status==0)
                {
                    
                    $find = $this->UserMaster->find('first', array('conditions' => array('UserMaster.social_network_id'=>$fb_id)));
                    $id   = $find['UserMaster']['id'];
                    $Login = array();
                    $Login['fb_name']=$fb_name;
                    $Login['social_network_id']=$fb_id;
                    $Login['id']=$id;
                    $Login['email']= $email;
                    $Login['profile_image']=$profile_image;
                    
                    $this->Session->write('User',$Login);
                   
                    echo '1';die;
                
                }
	}
               
  
            else
                {
                    $check=$this->UserMaster->find('first',array('conditions'=>array('email'=>$email)));
                    if(!empty($check)){
		                $userArray['social_network_id']=$fb_id;
                    $userArray['first_name']=$fb_name;
                    $userArray['profile_image']=$profile_image;
                    $userArray['id']=$check['UserMaster']['id'];
                    $this->UserMaster->save($userArray);
                    $find = $this->UserMaster->find('first', array('conditions'=> array('social_network_id'=>$fb_id)));
                   
                    $id   = $find['UserMaster']['id'];
                    $Name = array();
                    $Name['fb_name']=$fb_name;
                    $Name['social_network_id']=$fb_id;
                    $Name['id']=$id;
                    $Name['email']   = $email;
                    $Name['profile_image']=$profile_image;
                    $this->Session->write('User', $Name);
                    echo '1';die;
                    }
		    else{
                     $this->request->data['first_name']=$fb_name;
                    $this->request->data['social_network_id']=$fb_id;
                    $this->request->data['email']= $email;
                    $this->request->data['profile_image']=$profile_image;
                    $this->UserMaster->save($this->request->data);
		     $find = $this->UserMaster->find('first', array('conditions'=> array('social_network_id'=>$fb_id)));
                   
                    $id   = $find['UserMaster']['id'];
                    $Name = array();
                    $Name['fb_name']=$fb_name;
                    $Name['social_network_id']=$fb_id;
                    $Name['id']=$id;
                    $Name['email']   = $email;
                    $Name['profile_image']=$profile_image;
                    $this->Session->write('User', $Name);
                    echo '1';die;
                    }
                   
                }
        
    
        }
 public function checkEmail(){
  $this->autoRender = false;
  if(!empty($this->params->pass[0])){
        $email=$this->params->pass[0];
        $res1=$this->UserMaster->find('first',array('conditions'=>array('email'=>$email)));
        //print_r($res1);
        if(!empty($res1)){
          echo "1";die;//Email Already Exists
        }
        else{
          echo "2";die;//Email Not Exists
        }
      }
    }

 	 public function login(){
 	  	$this->layout=null;
      if(!empty($this->params->pass[0])){
        $email=base64_decode($this->params->pass[0]);
        $check=$this->UserMaster->find('first',array('conditions'=>array('email'=>$email)));
        
        if(!empty($check)){
          $user['id']=$check['UserMaster']['id'];
          $user['status']=1;

           //$user['id']=$check['UserMaster']['id'];

           
          $this->UserMaster->save($user);
          $this->requestAction(array('controller'=>'Cpanels','action'=>'generateMessages'),
                               array('pass'=>array('105','1')));

        }
      }
        //$this->Session->delete('User');
 	  	$validate=0;
 	  	if($this->request->is('post')){
 	  		$data=$this->data;
        //print_r($data);die;
       
 	  		if(empty($data['email'])){
 	  			$validate++;
 	  			$this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('600','0')));


 	  		}
       
        
          
 	  		else if(empty($data['password'])){
 	  			$validate++;
 	  			$this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('601','0')));
 	  		}
 	  		
        
 	  		else{
 	  			if($validate=='0'){
 	  				

 	  				
 	  				 $email=$data['email'];
 	  				 $password=md5($data['password']);
 	  				 $res=$this->UserMaster->find('first',array('conditions'=>array('email'=>$email,'password'=>$password)));
            /* echo "<pre>";
             print_r($res);
             echo "</pre>";
             die;*/
                     if(!empty($res)){

                          $u_login_id=$res['UserMaster']['id'];
                          $u_login_uuid=$res['UserMaster']['uuid'];
                          $u_login_name=$res['UserMaster']['first_name'];
                          $u_login_email=$res['UserMaster']['email'];


                          $Login1 = array();
                          $Login1['id']             = $u_login_id;
                          $Login1['uuid']           = $u_login_uuid;
                          $Login1['first_name']     = $u_login_name;
                          $Login1['email']          = $u_login_email;
                        
                        $this->Session->write('User', $Login);
                        //$this->Session->write('Login1', $Login1);
                     	if($res['UserMaster']['status']!='1'){ //User Not Verified
                     		 $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('653','0')));
                          $this->redirect(array('controller'=>'Homes','action'=>'login'));
                     	}
                     	else{
                     		if($res['UserMaster']['user_type_id']=='1'){
                             $this->Session->write('User',$res);
                             $this->redirect(array('controller'=>'Homes','action'=>'dashboard'));
                     		}
                     		else{
                     			$this->Session->write('User',$res);
                                 $this->redirect(array('controller'=>'Homes','action'=>'dashboard'));
                     		}
                          
                     	}
                     }
                     else{
                     	      $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('604','0')));
                          
                            $this->redirect(array('action'=>'login'));

                     }
 	  			    
 	  			}
 	  		}
 	  	}
 	  /*	$dataArray=array();
 	  	$this->layout=null;
 	  	if((isset($_POST['email']))&&(isset($_POST['password']))){
 	  	//$dataArray['braingroom']['user_type_id']=$_POST['type'];
 	  	$dataArray['braingroom']['email']=$_POST['email'];
 	  	$dataArray['braingroom']['password']=$_POST['password'];
		$dataArray['braingroom']['social_network_id']="";
 	  	$responseApi=$this->requestAction(array('controller'=>'apis','action'=>'postData'),
 	  									  array('pass'=>array($dataArray,'apis/login'))
 	  									  );
		
 	  	$data = json_decode($responseApi,true);
 	  	if($data['braingroom']['res_code']=='1'){
 	  		$this->Session->write('User',$data['braingroom']['id']);
 	  	}
 	  	echo json_encode($data['braingroom']);
 	  	die;
 	    
 	  }*/
     //exit();
 	  }
     public function sendOtp(){
        $this->layout=null;
        $validate=0;
        if($this->request->is('post')){
            $data=$this->data;
            if(empty($data['mobile_no'])){
               $validate++;
               $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('625','0')));
            }
            else{
                if($validate=='0'){
                  $mobile_no=$data['mobile_no'];
                  $res=$this->UserMaster->find('first',array('conditions'=>array('contact_no'=>$mobile_no)));
                  if(!empty($res)){
                     $otp=$this->requestAction(array('controller'=>'Apis','action'=>'generateCode'),
                                               array('pass'=>array(6)));
                     
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
                   
                    // Close the cURL resource, and free system resources
                    curl_close($ch);
                     $data['id']=$res['UserMaster']['id'];
                    $data['reset_otp']=$otp;

                    $this->UserMaster->save($data);
                    $userArray['mobile_no']=$mobile_no;
                    $userArray['otp']=$otp;
                    $this->Session->Write('verify',$userArray);
                     //$this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                           // array('pass'=>array('101','1')));
                     $this->redirect(array('controller'=>'Homes','action'=>'verifyOtp'));

                  } 
                  else{
                  $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('649','0')));
                  $this->redirect($this->referer());  
                  }
                }
            }
        }
      }
      public function verifyOtp(){
        $this->layout=null;
        if(!$this->Session->check('verify')){
            $this->redirect(array('controller'=>'Homes','action'=>'sendOtp'));
        }
        else{
            if($this->request->is('post')){
                $data=$this->data;
                $send_otp=$data['otp_code'];
                $mobile_no=$this->Session->read('verify.mobile_no');
                $otp=$this->Session->read('verify.otp');
                $check=$this->UserMaster->find('first',array('conditions'=>array('contact_no'=>$mobile_no,'reset_otp'=>$otp)));
                if(!empty($check)){
                  $this->Session->delete('verify');
                  $this->Session->write('match',$mobile_no);
                  $this->redirect(array('controller'=>'Homes','action'=>'resetPassword'));
                }
                else{
                    $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('909','0')));
                  $this->redirect($this->referer());   
                }
            }

        
        }

      }
      public function resetPassword(){
         $this->layout=null;
          if(!$this->Session->check('match')){
            $this->redirect(array('controller'=>'Homes','action'=>'sendOtp'));
        }
        else{
            if($this->request->is('post')){
                $data=$this->data;
               $new_password=$data['new_password'];
               $cnfrm_password=$data['cnfrm_password'];
               $mobile_no=$this->Session->read('match');
               if($new_password==$cnfrm_password){
                $res=$this->UserMaster->find('first',array('conditions'=>array('contact_no'=>$mobile_no)));
                $dataArray['id']=$res['UserMaster']['id'];

                $dataArray['password']=md5($new_password);
                $this->UserMaster->save($dataArray);
                $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('102','1')));
                $this->Session->delete('match');
                  $this->redirect(array('controller'=>'Homes','action'=>'login'));
               }
               else{
                $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('910','0')));
                  $this->redirect($this->referer());
               }
                
            }

        }

      }
 	   function validateEmail($email){

        $this->autoRender = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           return 0;
        }
        else{
        	return 1;
        }
    }  
 	  public function logout(){
 	  	$this->checkUser();
      $this->Session->destroy();
      $this->redirect(array('controller'=>'Homes','action'=>'login'));

 	
 	  }
 	  public function main(){
 	  	$this->checkUser();
 	  	$this->layout=null;
 	  	


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
                        <p>Your Verification Link is .</p>
                        <p>http://braingroom.com/braingroom/Homes/login/'.base64_encode($activationCode).'</p>
                        <p>Click On Link to Activate Your Account</p>
                        <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                        <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                        <p></p>
                        <p>braingroom</p>
                        <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright © 2016 braingroom.com All rights reserved.</span>
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
   ############## Start Registration By Rohit #############
    public function Register(){

         $this->layout='registration_layout';
          $city=$this->City->find('all');

          $cat_localitie=$this->Locality->find('all');

          $cat=$this->Category->find('all',array('conditions'=>array('status'=>1)));

          $res_community=$this->Community->find('all',array('conditions'=>array('status'=>1)));

          /*print_r($cat);
          die;*/
         $this->set('localitie',$cat_localitie);
         $this->set('city',$city);
         $this->set('category',$cat);
          $this->set('community',$res_community);
          //print_r($city);
          //die;
    }

    public function uploadImage1($folder,$modelName,$image_name,$data){
        $validate=0;
        $filename = WWW_ROOT. 'img'.DS.$folder.DS.time().$data[$modelName][$image_name]['name'];

                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $filename1 = WWW_ROOT. 'img'.DS.$folder.DS.time().".".$ext;

                    
                    if( $ext == 'gif' || $ext == 'png' || $ext == 'jpg' ) { 
                            
                            move_uploaded_file($data[$modelName][$image_name]['tmp_name'],$filename1);
                            $data[$modelName][$image_name]=time().".".$ext;
                            return $data[$modelName][$image_name];
                    }else{
          
                            //$this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                           // array('pass'=>array('308','0')));
                            //$validate++; 
                          return "0";

                        }
                       

    }
    public function saveRegister(){
          $this->autoRender = false;

            /*$c=count($_FILES);

            echo $c;
            echo "</br>";
          
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";


            echo "</br>";

            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            die;*/
          //$filename=$_FILES['data']['name'][$na];
          //$newfile=$random_digit=rand(0000,9999).$filename;

           //$img_count=count($_FILES);

           //echo 'Image Count-->'.$img_count;
            //echo "<pre>";
            //print_r($this->data);
            //echo "<pre>";
            //die;
          
          require ('sendgrid-php/vendor/autoload.php');
          require ('sendgrid-php/lib/SendGrid.php'); 
          $add_date=strtotime(date('Y-m-d H:i:s'));
          $this->request->data['add_date']=$add_date;
          $this->request->data['modify_date']=$add_date;
          $cat_id=$this->request->data['category_id'];
          $email=$this->request->data['email'];
          $user_type_id=$this->request->data['user_type_id'];
          if($user_type_id==2)
          {
            $this->request->data['user_preference_id']=$user_type_id;
          }
          $uuid=uniqid('fas_');
          $this->request->data['uuid']=$uuid;


          
          if($this->request->data['d_o_b2']!='')
          {
              $d_o_b2=$this->request->data['d_o_b2'];
              $this->request->data['d_o_b']=$d_o_b2;
          }
            //$profile_image_buyer=$_FILES['data']['name']['profile_image'];
            $this->request->data['profile_image']='';
            $password=$this->request->data['password'];
            $password=md5($password);
            $this->request->data['password']=$password;
            $total_array=count($cat_id);
            //echo $total_array;
            for ($i=0; $i < $total_array ; $i++) { 
              if($i==0)
              {
            
                @$category.=$cat_id[$i];
              }
              else
              {
                @$category.=','.$cat_id[$i];
              }

         
        }
            //echo $category;
             $this->request->data['category_id']=@$category;
             $post_data = $this->request->data;
             /*echo "<pre>";
             print_r($post_data);
             echo "</pre>";
             die;*/
             if($this->UserMaster->save($post_data)){

               $last_des_id=$this->UserMaster->getLastInsertId();
              // $email=$this->request->data['email'];
               $this->sendMail('signup',$email,$email);


           ############  Start Step 3 #############

            $pv1=$this->request->data['identity_of_primary_verification1'];
            $doc_id=$this->request->data['document_id'];
            $pv2=$this->request->data['identity_of_primary_verification2'];
            $doc_id2=$this->request->data['document_id2'];
            $sv1=$this->request->data['identity_of_secoundry_verification1'];
            $sv2=$this->request->data['identity_of_secoundry_verification2'];
            $sv3=$this->request->data['identity_of_secoundry_verification3'];


            $this->request->data['identity_of_primary_verification1']=$pv1;
            $this->request->data['identity_of_primary_verification2']=$pv2;
            $this->request->data['document_id']=$doc_id;
            $this->request->data['document_id2']=$doc_id2;
            $this->request->data['identity_of_secoundry_verification1']=$sv1;
            $this->request->data['identity_of_secoundry_verification2']=$sv2;
            $this->request->data['identity_of_secoundry_verification3']=$sv3;
            $this->request->data['user_id']=$last_des_id;

            

            $post_data1 = $this->request->data;
            
            $this->UserVerfication->save($post_data1);




           ############ End Step 3 #############

           //echo $last_des_id;
           //die;
          

           /*Start Image Upload Section*/
              // $profile_name=$this->uploadImage1('Buyer/profile','UserMaster','profile_image',$data1);

          $imgcount=count($_FILES);
          $img_val=0;
          for ($i=1; $i <= $imgcount; $i++) { 

            
            $ut_id=$this->request->data['user_type_id'];
            if($ut_id==1)
            {
                $filename1=$_FILES['data']['name']['profile_image1'];
                //echo $filename1;
                if($filename1=='')
                {
                  @$na='profile_image2';
                  //echo 'yes';
                }
                else
                {
                @$na='profile_image1';
              }
            }
            else
            {
              @$na='profile_image';
            }
            $filename=$_FILES['data']['name'][$na];
            if($filename=='')
            {

            //$filename=$_FILES["fileToUpload".$i]["name"];
            //$titlename=$this->request->data["titlename".$i];
            //echo $titlename;
            /*echo '<br/>';
            echo '<br/>';
            echo $filename;
            die;*/
               if($ut_id==1)
            {
                $target_dir = WWW_ROOT."img/"."Vendor/profile/";
            }
            else
            {
              $target_dir = WWW_ROOT."img/"."Buyer/profile/";
            }
      
            

            $newfile=$random_digit=rand(0000,9999).$filename;
            //echo $newfile;
            //die; 
            $target_file = $target_dir .$newfile;
            $uploadOk = 1;

            //echo $target_file;
            //die; 
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            //if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES['data']['tmp_name'][$na]);
              if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          // Check file size
          if ($_FILES['data']['size'][$na] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

          //echo $target_file;
          //die;
          if (move_uploaded_file($_FILES['data']['tmp_name'][$na], $target_file)) {
              
              //$this->UserMaster->updateAll(array('profile_image' => $newfile),array('id' => $last_des_id));

            $this->UserMaster->query("UPDATE bg_user_masters SET  profile_image='".$newfile."' WHERE id='".$last_des_id."'");
              } else {
                      echo "Sorry, there was an error uploading your file.";
                  }

      }
    }

      

           /*End Image Upload Section*/

           $filename_doc_img_1=$_FILES['data']['name']['document_image_pvri_1'];
           $filename_doc_img_2=$_FILES['data']['name']['document_image_pvri_2'];

           $certif_img1=$_FILES['data']['name']['certif_img1'];
           $certif_img2=$_FILES['data']['name']['certif_img2'];
           $certif_img3=$_FILES['data']['name']['certif_img3'];
           

            ################## start 1 ####################

           /* Start Image Upload for P verify 1*/



           
            if($filename_doc_img_1!='')
            {

            //$filename=$_FILES["fileToUpload".$i]["name"];
            //$titlename=$this->request->data["titlename".$i];
            //echo $titlename;
            /*echo '<br/>';
            echo '<br/>';
            echo $filename;
            die;*/
               
            $target_dir = WWW_ROOT."img/"."Vendor/Varification/";
            
             
            $na='document_image_pvri_1';

            $newfile=$random_digit=rand(0000,9999).$filename_doc_img_1;
            //echo $newfile;
            //die; 
            $target_file = $target_dir .$newfile;
            $uploadOk = 1;

            //echo $target_file;
            //die; 
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            //if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES['data']['tmp_name'][$na]);
              if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          // Check file size
          if ($_FILES['data']['size'][$na] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

          //echo $target_file;
          //die;
          if (move_uploaded_file($_FILES['data']['tmp_name'][$na], $target_file)) {
              
              //$this->UserMaster->updateAll(array('profile_image' => $newfile),array('id' => $last_des_id));

            $this->UserVerfication->query("UPDATE bg_user_verfications SET  primary_attached_media1='".$newfile."' WHERE user_id='".$last_des_id."'");
              } else {
                      echo "Sorry, there was an error uploading your file.";
                  }

      }
    }


           /*End Start Image Upload for P verify 1 */

           ########################## End 1 ############################

            ################## start 2 ####################

           /* Start Image Upload for P verify 2*/
            if($filename_doc_img_2!='')
            {

            //$filename=$_FILES["fileToUpload".$i]["name"];
            //$titlename=$this->request->data["titlename".$i];
            //echo $titlename;
            /*echo '<br/>';
            echo '<br/>';
            echo $filename;
            die;*/
               
            $target_dir = WWW_ROOT."img/"."Vendor/Varification/";
            
             
            $na='document_image_pvri_2';

            $newfile=$random_digit=rand(0000,9999).$filename_doc_img_2;
            //echo $newfile;
            //die; 
            $target_file = $target_dir .$newfile;
            $uploadOk = 1;

            //echo $target_file;
            //die; 
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            //if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES['data']['tmp_name'][$na]);
              if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          // Check file size
          if ($_FILES['data']['size'][$na] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

          //echo $target_file;
          //die;
          if (move_uploaded_file($_FILES['data']['tmp_name'][$na], $target_file)) {
              
              //$this->UserMaster->updateAll(array('profile_image' => $newfile),array('id' => $last_des_id));

             $this->UserVerfication->query("UPDATE bg_user_verfications SET  primary_attached_media2='".$newfile."' WHERE user_id='".$last_des_id."'");
              } else {
                      echo "Sorry, there was an error uploading your file.";
                  }

      }
    }


           /*End Start Image Upload for P verify 2 */

           ########################## End 2 ############################


           ################## start 3 ####################

           /* Start Image Upload for sec verify 1*/
            if($certif_img1!='')
            {

            //$filename=$_FILES["fileToUpload".$i]["name"];
            //$titlename=$this->request->data["titlename".$i];
            //echo $titlename;
            /*echo '<br/>';
            echo '<br/>';
            echo $filename;
            die;*/
               
            $target_dir = WWW_ROOT."img/"."Vendor/Varification/";
            
             
            $na='certif_img1';

            $newfile=$random_digit=rand(0000,9999).$certif_img1;
            //echo $newfile;
            //die; 
            $target_file = $target_dir .$newfile;
            $uploadOk = 1;

            //echo $target_file;
            //die; 
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            //if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES['data']['tmp_name'][$na]);
              if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          // Check file size
          if ($_FILES['data']['size'][$na] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

          //echo $target_file;
          //die;
          if (move_uploaded_file($_FILES['data']['tmp_name'][$na], $target_file)) {
              
              //$this->UserMaster->updateAll(array('profile_image' => $newfile),array('id' => $last_des_id));

             $this->UserVerfication->query("UPDATE bg_user_verfications SET  secoundry_attached_media1='".$newfile."' WHERE user_id='".$last_des_id."'");
              } else {
                      echo "Sorry, there was an error uploading your file.";
                  }

      }
    }


           /*End Start Image Upload for Sec verify 1 */

           ########################## End 3 ############################


             ################## start 4 ####################

           /* Start Image Upload for sec verify 2*/
            if($certif_img2!='')
            {

            //$filename=$_FILES["fileToUpload".$i]["name"];
            //$titlename=$this->request->data["titlename".$i];
            //echo $titlename;
            /*echo '<br/>';
            echo '<br/>';
            echo $filename;
            die;*/
               
            $target_dir = WWW_ROOT."img/"."Vendor/Varification/";
            
             
            $na='certif_img2';

            $newfile=$random_digit=rand(0000,9999).$certif_img2;
            //echo $newfile;
            //die; 
            $target_file = $target_dir .$newfile;
            $uploadOk = 1;

            //echo $target_file;
            //die; 
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            //if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES['data']['tmp_name'][$na]);
              if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          // Check file size
          if ($_FILES['data']['size'][$na] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

          //echo $target_file;
          //die;
          if (move_uploaded_file($_FILES['data']['tmp_name'][$na], $target_file)) {
              
              //$this->UserMaster->updateAll(array('profile_image' => $newfile),array('id' => $last_des_id));

             $this->UserVerfication->query("UPDATE bg_user_verfications SET  secoundry_attached_media2='".$newfile."' WHERE user_id='".$last_des_id."'");
              } else {
                      echo "Sorry, there was an error uploading your file.";
                  }

      }
    }


           /*End Start Image Upload for Sec verify 2 */

           ########################## End 4 ############################


           ################## start 5 ####################

           /* Start Image Upload for sec verify 3*/
            if($certif_img3!='')
            {

            //$filename=$_FILES["fileToUpload".$i]["name"];
            //$titlename=$this->request->data["titlename".$i];
            //echo $titlename;
            /*echo '<br/>';
            echo '<br/>';
            echo $filename;
            die;*/
               
            $target_dir = WWW_ROOT."img/"."Vendor/Varification/";
            
             
            $na='certif_img3';

            $newfile=$random_digit=rand(0000,9999).$certif_img3;
            //echo $newfile;
            //die; 
            $target_file = $target_dir .$newfile;
            $uploadOk = 1;

            //echo $target_file;
            //die; 
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            //if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES['data']['tmp_name'][$na]);
              if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          // Check file size
          if ($_FILES['data']['size'][$na] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

          //echo $target_file;
          //die;
          if (move_uploaded_file($_FILES['data']['tmp_name'][$na], $target_file)) {
              
              //$this->UserMaster->updateAll(array('profile_image' => $newfile),array('id' => $last_des_id));

            $this->UserVerfication->query("UPDATE bg_user_verfications SET  secoundry_attached_media3='".$newfile."' WHERE user_id='".$last_des_id."'");
              } else {
                      echo "Sorry, there was an error uploading your file.";
                  }

      }
    }
     /*End Start Image Upload for Sec verify 3 */

           ########################## End 5 ############################

          $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 
                            array('pass'=>array('104','1')));
         $this->Session->delete('registration1');
         $this->redirect(array('controller'=>'Homes','action'=>'login'));
       }

           
      }
    
}  
/* Satrt Rohit Mishra*/
public function savepostClass(){
  //$this->checkUser();

  $this->autoRender=false;
  //echo 'savepostClass';
  //die;


  if($this->ClassPost->save($this->request->data)){

   


    //$msgResponse="Add successfully";
   // $this->Session->setFlash('<div class="alert alert-success">'.$msgResponse.'</div>');
    $this->redirect(array('controller'=>'Homes','action'=>'PostClass'));

  
  }
}
public function findsubCat(){
      
       $this->autoRender=false;
        $cat_id=$_POST['cat_id'];
        //echo $cat_id;
          $cat_sub=$this->ClassSegment->find('all',array('conditions'=>array('category_id'=>$cat_id))); 
          
         /*echo "<pre>";

          print_r($cat_sub);
          echo "</pre>";
*/
          echo '<select class="form-control reg_input" name="class_segment_id" id="class_segment_id">
                          <option value="">Choose Class Segment</option>';
                          foreach ($cat_sub as $key => $cat_sub) {
                            $sub_cat_name=$cat_sub['ClassSegment']['segment_name'];
                            $id=$cat_sub['ClassSegment']['id'];
                    echo  '<option value="'.$id.'">'.$sub_cat_name.'</option>';

                      }
                          
          echo '</select>'; 
          //$this->set('all_sub_cat',$cat_sub);
        //echo "hi";
        //die;
      
}
/*End*/ 
############## End Registration By Rohit #############
    public function test(){
        $this->layout=null;
        $cat_localitie=$this->Locality->find('all');
         $this->set('localitie',$cat_localitie);
      }
    

}

?>
