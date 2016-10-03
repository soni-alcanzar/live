<?php

class HomesController extends AppController {

  //{



  var $uses = array('Admin','UserMaster','City','Locality','Category','Community','UserVerfication','ClassType','ClassSegment','VendorClasse','ClassRegular','ClassSchedule','VendorGalleries','TransactionHistorie');

   var $components = array('Paginator','Messages','Session');



    public function checkUser(){

      if(!$this->Session->check('User')){

        $this->redirect(array('controller'=>'Homes','action'=>'login'));

      }

    }

    public function index() {

      $this->layout='index_layout';

      $loggedinuser = $this->Session->read('User');

      $user_id = $loggedinuser['UserMaster']['id'];

      $user = $this->UserMaster->find('all', array('conditions'=>array('id'=>$user_id)));

      $this->set('user_view',$user);

      $trading_class = $this->VendorClasse->find('all', array('conditions' => array('trending_status' => 1)));

      if(!empty($trading_class)){

        $l=0;

       foreach($trading_class as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['VendorClasse']['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $trading_class[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $trading_class[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $l++;

      }



      $this->set('class_status',$trading_class);

     }

     $featured_class = $this->VendorClasse->find('all', array('conditions' => array('featured_status' => 1)));

      if(!empty($featured_class)){

        $l=0;

       foreach($featured_class as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['VendorClasse']['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $featured_class[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $featured_class[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $l++;

      }



      $this->set('featured_status',$featured_class);

     }

     $recommended_class = $this->VendorClasse->find('all', array('conditions' => array('recommended_status' => 1)));

      if(!empty($recommended_class)){

        $l=0;

       foreach($recommended_class as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['VendorClasse']['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $recommended_class[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $recommended_class[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $l++;

      }

      

      $this->set('recomendeds_status',$recommended_class);

     }

       }

       public function about() {

      $this->layout='index_layout';

       }

       public function terms() {

      $this->layout='index_layout';

       }

       public function weighLoss() {

      $this->layout='index_layout';

       }

      public function sellExpress() {

      $this->layout='index_layout';

       }

      public function arrangeClass() {

      $this->layout='arrange_layout';

    }



       // **********Najmuddin

    // date 28 june

    public function promoteClass(){

      $this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      

     $this->set('user_view',$user);

    }

    public function bookClass(){

      $this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      

     $this->set('user_view',$user);

    }

     public function viewclassDetail(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');

      $this->set('user_view',$user);

      if(!empty($this->params->pass[0])){

        //echo $class_id=$this->params->pass[0];

        $class_id=base64_decode($this->params->pass[0]);

        $class_detail = $this->VendorClasse->find('first',array('conditions'=>array('id'=>$class_id)));

        if(!empty($class_detail)){

         $l=0;

       foreach($class_detail as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $class_detail[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $class_detail[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $l++;

      }

        }

        $community_id = $class_detail['VendorClasse']['community_id'];

        $community = $this->Community->find('first',array(

            'conditions'=>array(

                'id'=>$community_id

              ),

            'fields'=>'community_name'));

        $community_name = $community['Community']['community_name'];



        $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$class_detail['VendorClasse']['user_id']),'fields'=>'first_name'));

        $class_detail['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

        $class_detail['VendorClasse']['community_name']=$community_name ;

        $this->set('view_class',$class_detail);

  /************** added by vineet ********/

        $user_id = $user['UserMaster']['id'];

        $shedule_detail = $this->ClassSchedule->find('all',array('conditions'=> array('class_provider_id'=>$user_id)));

        $this->set('shedule_class',$shedule_detail);

        $cat=$this->Category->find('all',array('conditions'=>array('status'=>1)));

        $this->set('category',$cat);

        $category_id = $class_detail['VendorClasse']['category_id'];

        $segment = $this->ClassSegment->find('all',array('conditions' => array('category_id'=> $category_id)));

        $this->set('segment',$segment);

        $classstatus = $this->VendorClasse->find('all', array('conditions' => array('trending_status' => 1)),array('conditions'=> array('featured_status'=> 1)), array('conditions'=> array('recommended_status' => 1)));

        $this->set('class_status',$classstatus);

      }   



      //$this->set('user_view',$user);

    }

      public function fun(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');





      $cat_id = $this->params->pass[0];

      $seg_id = $this->params->pass[1];



    

    

    $res_cat_img = $this->Category->find('all',array('conditions'=>array('Category.id'=>$cat_id)));

    $this->set('cat_img',$res_cat_img);

      $this->set('view_clasa_segment',$res);



      $res = $this->ClassSegment->find('all',array('conditions'=>array('ClassSegment.category_id'=>$cat_id)));

      $this->set('view_clasa_segment',$res);



      if($seg_id=='')

      {

        

 $res_total_class = $this->VendorClasse->find('all',array('conditions'=>array('VendorClasse.category_id'=>$cat_id)));

      $this->set('all_total_class',$res_total_class);



        $this->paginate=array('limit'=>5,'order' => array('VendorClasse.id'=>'desc'),

                      'conditions'=>array('VendorClasse.category_id'=>$cat_id));

                      

                      

              $res_class = $this->paginate('VendorClasse');

        $this->set('allclass',$res_class);

        $this->set('cat_id',$cat_id);

  $this->set('seg_id',$seg_id);

        

    }

    else

    {

       $res_total_class = $this->VendorClasse->find('all',array('conditions'=>array('VendorClasse.category_id'=>$cat_id,'VendorClasse.segment_id'=>$seg_id)));

      $this->set('all_total_class',$res_total_class);





      $this->paginate=array('limit'=>5,

                      'conditions'=>array('VendorClasse.category_id'=>$cat_id,'VendorClasse.segment_id'=>$seg_id));

              $res_class = $this->paginate('VendorClasse');

        $this->set('allclass',$res_class);

        $this->set('cat_id',$cat_id);

        $this->set('seg_id',$seg_id);

    }

    }

    public function addClassCatalog(){

      //$this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      $this->set('user_view',$user);

      $user_id = $user['UserMaster']['id'];

      $user_name = $user['UserMaster']['first_name'];

      $add_class_list = $this->VendorClasse->find('all', array('conditions' => array('user_id'=>$user_id)));

      $this->set('add_class_list',$add_class_list);

      $this->set('user_name',$user_name);

      //add_class_list

    }

    public function addClass(){

      //$this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    public function informative(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    public function gift(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    public function explore(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    public function gift_class1(){

      //$this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      

     $this->set('user_view',$user);

      



    }

    public function brain_catalog(){

      //$this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      

     $this->set('user_view',$user);

      



    }

    public function health(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    public function kids(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    public function education(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    public function home_maintenance(){

      //$this->checkUser();

      $this->layout='fun_layout';

      $user=$this->Session->read('User');



      //$this->set('user_view',$user);

    }

    // ***************Najmuddin

    public function dashboard(){

      $this->checkUser();

      //print_r($this->Session->read('User'));die;

      $user=$this->Session->read('User');

      $this->layout='vendor_layout';

      $this->set('user_view',$user);

      }

    public function profile(){

      $this->layout= 'profile_layout';

      if(!empty($this->params->pass[0])){

        $profile_id = base64_decode($this->params->pass[0]);

        $user = $this->UserMaster->Find("first",array('conditions'=>array('id' => $profile_id)));

        $this->set('user_view',$user);

        $res = $this->UserMaster->find('first' ,array('conditions' => array('id' => $profile_id)));

        if(!empty($res)){

          $city_name=$this->City->find('first',array('conditions'=>array('id'=>$res['UserMaster']['city_id'])));

          $this->set('city_name',$city_name);



          $locality_name=$this->Locality->find('first',array('conditions'=>array('id'=>$res['UserMaster']['locality_id']))); 

          //print_r($locality_name);die;

          if(!empty($locality_name)){

          $res['UserMaster']['locality']=$locality_name['Locality']['name'];

          } 

          

          $interest=$this->Category->query("select * from bg_categories where id IN (".$res['UserMaster']['category_id'].")");

          //print_r($interest);die;

          if(!empty($interest)){

           foreach($interest as $res1){

          $res['UserMaster']['interest']=$res['UserMaster']['interest'].$res1['bg_categories']['category_name'].",";

          }

          $res['UserMaster']['interest']=rtrim($res['UserMaster']['interest'], ",");

           

          }

        

          $city=$this->City->find('all');

          //print_r($city);die;

          $cat_localitie=$this->Locality->find('all');

          $cat=$this->Category->find('all',array('conditions'=>array('status'=>1)));

          $this->set('localitie',$cat_localitie);

          $this->set('city',$city);

          $this->set('category',$cat);

          //print_r($res);die;  

         $this->set('user_view',$res);

         $class_detail=$this->VendorClasse->find('all',array('conditions'=>array('user_id'=>$user['UserMaster']['id'],'end_month >='=>date('m/d/Y'))));

         //print_r($class_detail);die;

         if(!empty($class_detail)){

       $l=0;

       foreach($class_detail as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['VendorClasse']['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $class_detail[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $class_detail[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $l++;

      }

     // print_r($class_detail);die;

      $this->set('upcoming_class',$class_detail);

     

   }

    

     $class_detail1=$this->VendorClasse->find('all',array('conditions'=>array('user_id'=>$user['UserMaster']['id'],'starting_month <'=>date('m/d/Y'))));

     //print_r($class_detail1);die;

    // print_r($class_detail);die;

     if(!empty($class_detail1)){

       $p=0;

       foreach($class_detail1 as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['VendorClasse']['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $class_detail1[$p]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $class_detail1[$p]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $p++;

    }

      $this->set('past_class',$class_detail1);

      //print_r($class_detail1);die;

     }

      }

    }

    }

    public function myProfile(){

      $this->checkUser();

      $this->layout='vendor_layout';

      $userdata = $this->Session->read('User');

      $user_id = $userdata['UserMaster']['id'];

      //upload image file

      if(isset($_FILES['imagefiles'])){

          $errors= array();



        foreach($_FILES['imagefiles']['tmp_name'] as $key => $tmp_name ){

          

            $file_name = $user_id."_".$_FILES['imagefiles']['name'][$key];

            $file_size =$_FILES['imagefiles']['size'][$key];

            $file_tmp =$_FILES['imagefiles']['tmp_name'][$key];

            $file_type=$_FILES['imagefiles']['type'][$key];

            //debug($key." - ".$tmp_name." - ".$file_size ." - ".$file_name);die;

            if($file_size > 2097152){

              $errors[]='File size must be less than 2 MB';

            }

            

              $get_name = explode('.',$file_name);  

              //print_r($get_name);die;

              $final_name = mt_rand(100000,999999).'.'.$get_name[1];





              $desired_dir=WWW_ROOT.'img/Vendor/UploadImage_'.$user_id.'/';

                if(empty($errors)==true){

                  if(is_dir($desired_dir)==false){

                      mkdir("$desired_dir", 0777);    // Create directory if it does not exist

                  }

                  if(is_dir("$desired_dir/".$final_name)==false){

                    move_uploaded_file($file_tmp,$desired_dir.$final_name);

                    

                    $photodata = $this->VendorGalleries->set(array(

                                                        'user_id' => $user_id,

                                                        'category_id' => 1,

                                                        'media_title' => 'My Image',

                                                        'media_path' => $final_name,

                                                        'description' => '',

                                                        'status'      => 1,

                                                        'add_date'    => time(),

                                                        'modify_date' => time()

                                                      )

                                                    );

                    $photoresult =   $this->VendorGalleries->save($data);

                  }

                  if($photoresult){

                    $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 

                          array('pass'=>array('107','1')));

                    $this->redirect(array('controller'=>'homes','action'=>'myProfile'));

                  } 

                }else{

                  print_r($errors);

              }

          }

          if($result)

          {

            if($result){

                $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 

                      array('pass'=>array('107','1')));

                $this->redirect(array('controller'=>'homes','action'=>'myProfile'));

              } 

          } 

        if(empty($error)){

         echo "Success";

        }

      }

      $galleryimage = $this->VendorGalleries->find('all', array(

                            'conditions' => array(

                              'VendorGalleries.user_id'    => $user_id,

                              'VendorGalleries.category_id' => 1

                          )

                      ));



      $this->set(compact('galleryimage')); 

      //upload video file

      //print_r($_FILES['videofiles']);die;

      if(isset($_FILES['videofiles'])){

          $errors= array();



        foreach($_FILES['videofiles']['tmp_name'] as $key => $tmp_name ){

          

            $file_name = $user_id."_".$_FILES['videofiles']['name'][$key];

            $file_size =$_FILES['videofiles']['size'][$key];

            $file_tmp =$_FILES['videofiles']['tmp_name'][$key];

            $file_type=$_FILES['videofiles']['type'][$key];

            //debug($key." - ".$tmp_name." - ".$file_size ." - ".$file_name);die;

            // if($file_size > 2097152){

            //   $errors[]='File size must be less than 2 MB';

            // }

            //print_r($file_name);die;



              $get_name = explode('.',$file_name);  

              $final_name = mt_rand(100000,999999).'.'.$get_name[2];

              $desired_dir=WWW_ROOT.'img/Vendor/UploadVideo_'.$user_id.'/';

                if(empty($errors)==true){

                  if(is_dir($desired_dir)==false){

                      mkdir("$desired_dir", 0777);    // Create directory if it does not exist

                  }

                  if(is_dir("$desired_dir/".$final_name)==false){

                    move_uploaded_file($file_tmp,$desired_dir.$final_name);



                    $data = $this->VendorGalleries->set(array(

                                                        'user_id' => $user_id,

                                                        'category_id' => 2,

                                                        'media_title' => 'My Video',

                                                        'media_path' => $final_name,

                                                        'description' => '',

                                                        'status'      => 1,

                                                        'add_date'    => time(),

                                                        'modify_date' => time()

                                                      )

                                                    );

                    //$a = $this->VendorGallery->create(); 

                    // print_r($a);die;

                    $result =   $this->VendorGalleries->save($data);

                    //print_r($result);die;

                    /*$log = $this->ShopGallery->getDataSource()->getLog();            

                    debug($log);*/

                  } 

                 if($result){

                    $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 

                          array('pass'=>array('108','1')));

                    $this->redirect(array('controller'=>'homes','action'=>'myProfile'));

                  } 

                }else{

                  print_r($errors);

              }

          }

          if($result){

            $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 

                  array('pass'=>array('108','1')));

            $this->redirect(array('controller'=>'homes','action'=>'myProfile'));

          } 

        if(empty($error)){

         echo "Success";

        }

      }

      $galleryvideo = $this->VendorGalleries->find('all', array(

                              'conditions' => array(

                                'VendorGalleries.user_id'    => $user_id,

                                'VendorGalleries.category_id' => 2

                          )

                      ));



      $this->set(compact('galleryvideo'));



      if($this->request->is('post')){

        $data=$this->data;

        //print_r($data);die;

        if(!empty($data['UserMaster']['category_id'])){

        $str='';

        foreach($data['UserMaster']['category_id'] as $res){ 

        $str=$str.$res.",";

        }

        $str=rtrim($str, ",");

        $data['UserMaster']['category_id']=$str;

        $this->UserMaster->save($data);

                //$this->UserMaster->save($data);

         $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 

                           array('pass'=>array('109','1')));

         $this->redirect(array('controller'=>'homes','action'=>'myProfile'));

        

        }

        else{

        //print_r($data);die;

         $this->UserMaster->save($data);

                //$this->UserMaster->save($data);

         $this->requestAction(array('controller'=>'Cpanels', 'action'=>'generateMessages'), 

                           array('pass'=>array('109','1')));

         $this->redirect(array('controller'=>'homes','action'=>'myProfile'));

       

        }

          

      }

      $user=$this->Session->read('User');

      $res=$this->UserMaster->find('first',array('conditions'=>array('id'=>$user['UserMaster']['id'])));

      

 if(!empty($res)){

      $city_name=$this->City->find('first',array('conditions'=>array('id'=>$res['UserMaster']['city_id'])));

      if(!empty($city_name)){

      $res['UserMaster']['city']=$city_name['City']['name'];

      }

      $locality_name=$this->Locality->find('first',array('conditions'=>array('id'=>$res['UserMaster']['locality_id']))); 

      //print_r($locality_name);die;

      if(!empty($locality_name)){

      $res['UserMaster']['locality']=$locality_name['Locality']['name'];

      } 

      

      $interest=$this->Category->query("select * from bg_categories where id IN (".$res['UserMaster']['category_id'].")");

      

      if(!empty($interest)){

       foreach($interest as $res1){

      $res['UserMaster']['interest']=$res['UserMaster']['interest'].$res1['bg_categories']['category_name'].",";

      }

      $res['UserMaster']['interest']=rtrim($res['UserMaster']['interest'], ",");

       

      }

    

      $city=$this->City->find('all');

      //print_r($city);die;

      $cat_localitie=$this->Locality->find('all');

      $cat=$this->Category->find('all',array('conditions'=>array('status'=>1)));

      $this->set('localitie',$cat_localitie);

      $this->set('city',$city);

      $this->set('category',$cat);

      //print_r($res);die;  

     $this->set('user_view',$res);

     $class_detail=$this->VendorClasse->find('all',array('conditions'=>array('user_id'=>$user['UserMaster']['id'],'end_month >='=>date('m/d/Y'))));

     //print_r($class_detail);die;

     if(!empty($class_detail)){

       $l=0;

       foreach($class_detail as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['VendorClasse']['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $class_detail[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $class_detail[$l]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $l++;

      }

     // print_r($class_detail);die;

      $this->set('upcoming_class',$class_detail);

     

   }

    

     $class_detail1=$this->VendorClasse->find('all',array('conditions'=>array('user_id'=>$user['UserMaster']['id'],'starting_month <'=>date('m/d/Y'))));

     //print_r($class_detail1);die;

    // print_r($class_detail);die;

     if(!empty($class_detail1)){

       $p=0;

       foreach($class_detail1 as $res){

      $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$res['VendorClasse']['user_id'])));

      if($class_by['UserMaster']['vendor_type_id']=='1'){

        $class_detail1[$p]['VendorClasse']['class_by']=$class_by['UserMaster']['institute_name'];

      }

      else{

       $class_detail1[$p]['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

       

      }

      $p++;

    }

      $this->set('past_class',$class_detail1);

      //print_r($class_detail1);die;

     }

     $class_pics=$this->VendorClasse->find('all',array('conditions'=>array('user_id'=>$user['UserMaster']['id']),'fields'=>'upload_class_photo'));

     if(!empty($class_pics)){

      $this->set('class_pics',$class_pics);

     }

     $class_video=$this->VendorClasse->find('all',array('conditions'=>array('user_id'=>$user['UserMaster']['id']),'fields'=>'upload_video_name'));

     //print_r($class_video);die;

     if(!empty($class_video)){

      $this->set('class_video',$class_video);

     }

      }



    }

public function imageUpload(){



  $dataArray=array();

  if(!empty($this->params->pass[0])){

  $user_id=base64_decode($this->params->pass[0]);

  $type=$this->params->pass[1];

  if($type=='1'){

  if(!empty($_FILES)){

      $img_filename = $_FILES['FileUpload']['name'];

      $img_tmpname  = $_FILES['FileUpload']['tmp_name'];

     if(($img_filename != "") && ($img_tmpname != "")){

        $explode_file   = explode(".",$img_filename);

        $countExp       = count($explode_file);

        $fileExtenstion = $explode_file[$countExp-1];

       }

       if(($fileExtenstion != 'png') && ($fileExtenstion != 'jpg') && ($fileExtenstion != 'jpeg') &&($fileExtenstion != 'gif')){

                $dataArray['res_code']=0;

                echo json_encode($dataArray);die;

                }else{

                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;

                $check=$this->UserMaster->find('first',array('conditions'=>array('id'=>$user_id)));

                if(!empty($check)){

                if(($check['UserMaster']['user_type_id'])=='1'){ 

                $upload=WWW_ROOT."img/Vendor/profile/".$final_img;

                unlink(WWW_ROOT."/img/Vendor/profile/".$check['UserMaster']['profile_image']);   

                

                $abc="img/Vendor/profile/".$final_img;

                }

                else{

                $upload=WWW_ROOT."img/Buyer/profile/".$final_img;

                unlink(WWW_ROOT."/img/Buyer/profile/".$check['UserMaster']['profile_image']);   

                $abc="img/Buyer/profile/".$final_img; 

                }

                   

                if(move_uploaded_file($img_tmpname,$upload)){                  

                  $check['UserMaster']['id']=$user_id;

                  $check['UserMaster']['profile_image']=$final_img;

                  $this->UserMaster->save($check);

                  $dataArray['res_code']=1;

                  $dataArray['res_img']=$abc;

                  echo json_encode($dataArray);die;

                } 

                } 

            

}

}

$dataArray['res_code']=0;

echo json_encode($dataArray);die;

}



if($type=='2'){



  if(!empty($_FILES)){

     //print_r($_FILES);die;

      $img_filename = $_FILES['FileUpload']['name'];

      $img_tmpname  = $_FILES['FileUpload']['tmp_name'];

     if(($img_filename != "") && ($img_tmpname != "")){

        $explode_file   = explode(".",$img_filename);

        $countExp       = count($explode_file);

        $fileExtenstion = $explode_file[$countExp-1];

       }

       if(($fileExtenstion != 'png') && ($fileExtenstion != 'jpg') && ($fileExtenstion != 'jpeg') &&($fileExtenstion != 'gif')){

                $dataArray['res_code']=0;

                echo json_encode($dataArray);die;

                }else{

                $final_img = str_replace(".","",str_replace(" ","",date("YmdHis").microtime())).".".$fileExtenstion;



                $check=$this->UserMaster->find('first',array('conditions'=>array('id'=>$user_id)));

                if(!empty($check)){

                if(($check['UserMaster']['user_type_id'])=='1'){ 

                $upload=WWW_ROOT."img/Vendor/profile/".$final_img;

                unlink(WWW_ROOT."/img/Vendor/profile/".$check['UserMaster']['background_image']);   

                

                $abc="img/Vendor/profile/".$final_img;

                }

                else{

                $upload=WWW_ROOT."img/Buyer/profile/".$final_img;

                unlink(WWW_ROOT."/img/Buyer/profile/".$check['UserMaster']['background_image']);   

                $abc="img/Buyer/profile/".$final_img; 

                }

                   

                if(move_uploaded_file($img_tmpname,$upload)){                  

                  $check['UserMaster']['id']=$user_id;

                  $check['UserMaster']['background_image']=$final_img;

                  $this->UserMaster->save($check);

                  $dataArray['res_code']=1;

                  $dataArray['res_img']=$abc;

                  echo json_encode($dataArray);die;

                } 

                } 

            

}

}

$dataArray['res_code']=0;

echo json_encode($dataArray);die;

} 

}

}

    public function gift_class(){

      //$this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      

     $this->set('user_view',$user);

      



    }

    public function classDetail(){

     $this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      $this->set('user_view',$user);     

      if(!empty($this->params->pass[0])){

        //echo $class_id=$this->params->pass[0];

        $class_id=base64_decode($this->params->pass[0]);

        $class_detail = $this->VendorClasse->find('first',array('conditions'=>array('id'=>$class_id)));

        $community_id = $class_detail['VendorClasse']['community_id'];

        $community = $this->Community->find('first',array(

            'conditions'=>array(

                'id'=>$community_id

              ),

            'fields'=>'community_name'));

        $community_name = $community['Community']['community_name'];



        $class_by=$this->UserMaster->find('first',array('conditions'=>array('id'=>$class_detail['VendorClasse']['user_id']),'fields'=>'first_name'));

        $class_detail['VendorClasse']['class_by']=$class_by['UserMaster']['first_name'];

        $class_detail['VendorClasse']['community_name']=$community_name ;

        $this->set('view_class',$class_detail);

        /************** added by vineet ********/

        $user_id = $user['UserMaster']['id'];

        $shedule_detail = $this->ClassSchedule->find('all',array('conditions'=> array('class_provider_id'=>$user_id)));

        $this->set('shedule_class',$shedule_detail);

        $cat_id = $class_detail['VendorClasse']['category_id'];

        $cat=$this->Category->find('all',array('conditions'=>array('id'=>$cat_id)));

        $this->set('category',$cat);

        $segment_id = $class_detail['VendorClasse']['segment_id'];

        $segment = $this->ClassSegment->find('all',array('conditions' => array('id'=> $segment_id)));

        $this->set('segment',$segment);

        $classstatus = $this->VendorClasse->find('all', array('conditions' => array('trending_status' => 1)),array('conditions'=> array('featured_status'=> 1)), array('conditions'=> array('recommended_status' => 1)));

        $this->set('class_status',$classstatus);

      }   



    }

    public function class_13c(){

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



    /*sitaram 31.05.2016 / */





public function postClass(){



     //$this->checkUser();

      //print_r($this->Session->read('User'));die;

      $user=$this->Session->read('User');

      $this->layout='vendor_layout';

      $this->set('user_view',$user);



  $cat=$this->Category->find('all',array('conditions'=>array('status'=>1))); 

        $this->set('all_main_cat',$cat);



        $class_type=$this->ClassType->find('all'); 

        $this->set('all_class_type',$class_type);

        /* Braingroom modifications */

        $localitie=$this->Locality->find('all');

        $this->set('localitie',$localitie);

		/* Braingroom modifications */



        $coummunity_data=$this->Community->find('all',array('conditions'=>array('status'=>1)));

        $this->set('coummunity_data',$coummunity_data);

    }

  /*sitaram 31.05.2016 / */



public function findsubCat(){

      

       $this->autoRender=false;

       $cat_id=$_POST['cat_id'];

       $cat_sub=$this->ClassSegment->find('all',array('conditions'=>array('category_id'=>$cat_id))); 

/* Braingroom modifications */

   echo '<div class="form-group" >

<select class="form-control reg_input" name="segment_id[]" id="segment_id" multiple="multiple" value="" 

   data-actions-box="true"  style="overflow:auto" onblur="cat(this.value)">';

								foreach ($cat_sub as $key => $cat_sub) {



									$sub_cat_name=$cat_sub['ClassSegment']['segment_name'];

                            $id=$cat_sub['ClassSegment']['id'];

								 echo  '<option value="'.$id.'">'.$sub_cat_name.'</option>';

								}



						echo	'</select></div>

						<div id="s2" class="error_msg">&nbsp;&nbsp;</div>

							<span class="carimg"><img src="'.HTTP_ROOT.'"/img/caret.png"></span>

							<p class="err_css" id="error_01" style="padding-top:0px;padding-left:10px;"></p>



							';

/* Braingroom modifications */





}







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

    echo $id;

    die;

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

                        $Login['UserMaster']['id']         = $id;

                        $Login['UserMaster']['uuid']       = $uuid;

                        $Login['UserMaster']['email']   = $email_id;

                        $Login['UserMaster']['first_name'] = $first_name;

                        $Login['UserMaster']['profile_image']=$profile_image;

                        $this->Session->write('User', $Login);

                        echo '2';die;

            }

            else if($status==0)

                {

                    

                    $find = $this->UserMaster->find('first', array('conditions' => array('UserMaster.social_network_id'=>$fb_id)));

                    $id   = $find['UserMaster']['id'];

                    $Login = array();

                    $Login['UserMaster']['fb_name']=$fb_name;

                    $Login['UserMaster']['social_network_id']=$fb_id;

                    $Login['UserMaster']['id']=$id;

                    $Login['UserMaster']['email']= $email;

                    $Login['UserMaster']['profile_image']=$profile_image;

                    $this->Session->write('User', $Login);

                    //$this->Session->write('uid', $id);

                   //print_r($this->Session->read('User11'));die; 

                    echo '1';

                

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

                    $Name['UserMaster']['fb_name']=$fb_name;

                    $Name['UserMaster']['social_network_id']=$fb_id;

                    $Name['UserMaster']['id']=$id;

                    $Name['UserMaster']['email']   = $email;

                    $Name['UserMaster']['profile_image']=$profile_image;

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

                    $Name['UserMaster']['fb_name']=$fb_name;

                    $Name['UserMaster']['social_network_id']=$fb_id;

                    $Name['UserMaster']['id']=$id;

                    $Name['UserMaster']['email']   = $email;

                    $Name['UserMaster']['profile_image']=$profile_image;

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

                     if(!empty($res)){

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

    /*  $dataArray=array();

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

             $sendgrid = new SendGrid('skillgrok2014', '$ki11@Grok');

            $email    = new SendGrid\Email();

            $email->addTo($mail)->addTo('')->setFrom('support@braingroom.com')->setSubject('braingroom| Registration Verification Mail')->setText('!')->setHtml('

            <html>

                <head><title></title></head>

                <body>

                    <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">

                    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

                    <p>

                        <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Registration completed Successfully, Your Verification Link has been Sent to Your Email id,</span><br>

                            <span style="font-size:14px;color:#666666;font-style:italic"></span>

                        </p>

                        <p>Please Verify Your Account to continue...,</p>

                        <p>http://amazer.co.in/braingroom/Homes/login/'.base64_encode($activationCode).'</p>

                        <p>Click On Link to Activate Your Account</p>

                        <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">

                        <p>If you have any problems, or believe you have received this in error, please contact us.</p>

                        <p></p>

                        <p>braingroom</p>

                        <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright Ã‚Â© 2016 braingroom.com All rights reserved.</span>

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

                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright Ã‚Â© 2014 braingroom.com All rights reserved.</span>

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

                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright Ã‚Â© 2013 braingroom.com All rights reserved.</span>

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

                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright Ã‚Â© 2013 braingroom.com All rights reserved.</span>

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

                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright Ã‚Â© 2014 braingroom.com All rights reserved.</span>

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

                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright Ã‚Â© 2014 braingroom.com All rights reserved.</span>

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

                            <span style="font-size:11px;color:#8a8a8a;line-height:100%">Copyright Ã‚Â© 2014 braingroom.com All rights reserved.</span>

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



            @$category.=$cat_id[$i].',';



         

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



            $this->UserVerfication->query("UPDATE bg_user_verfications SET  document_image='".$newfile."' WHERE user_id='".$last_des_id."'");

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



             $this->UserVerfication->query("UPDATE bg_user_verfications SET  document_image2='".$newfile."' WHERE user_id='".$last_des_id."'");

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

############## End Registration By Rohit #############





public function savepostClass(){

  

  // $this->checkUser();

  $this->autoRender=false;



  $user=$this->Session->read('User');

  $this->set('user_view',$user);

 

  /* echo "<pre>";

  print_r($this->request->data);

  echo "</pre>";

  die; */

  

  

  

        $data_1 =  $this->request->data['data_1'];

    $cls_count=count($data_1);

    $time_1 =  $this->request->data['time_1'];

    //$cls_count_time=count($time_1);

  //die;

  

  $time_day=$this->request->data['time_day'];



  $duration=$this->request->data['duration'];



  $class_duration = $duration.' '.$time_day;



  $this->request->data['class_duration']=$class_duration;



  $this->request->data['user_id']=''; 

  $this->request->data['class_provider_id']='';

  $this->request->data['status']= 1;

  $date = date("d-m-Y");

  $timestamp = strtotime($date);

  $this->request->data['modify_date']= $timestamp;

  $this->request->data['add_date']= $timestamp;

  $cl_van_id = $_SESSION['User']['UserMaster']['id'];

  $this->request->data['user_id']= $cl_van_id;

  $address=$this->request->data['location'];















$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');

// We convert the JSON to an array

$geo = json_decode($geo, true);

// If everything is cool

if ($geo['status'] = 'OK') {

  // We set our values

  @$latitude = $geo['results'][0]['geometry']['location']['lat'];

  @$longitude = $geo['results'][0]['geometry']['location']['lng'];

}



if($latitude=='' && $latitude='null')

{

$this->request->data['latitude']=0;

}



if($longitude=='' && $longitude='null')

{

$this->request->data['longitude']=0;

}



        $this->request->data['latitude']=$latitude;

        $this->request->data['longitude']=$longitude;

  $this->request->data['class_provider_id']=$cl_van_id;

         /* Braingroom modifications */



        $this->request->data['segment_id']=implode(',',$this->request->data['segment_id']);

		$this->request->data['community_id']=implode(',',$this->request->data['community_id']);

		/* Braingroom modifications */



  if($this->VendorClasse->save($this->request->data)){



    $last_des_id=$this->VendorClasse->getLastInsertId();

  

  $sessionid = 'session_id_'.rand(10,900);

  $this->request->data['session_id']= $sessionid;

  $this->request->data['van_class_id']= '';

  $this->request->data['modified_date']= date('dd-mm-yy');

  $this->request->data['add_date']= date('dd-mm-yy');

  $this->request->data['status']= 1;

  $this->request->data['class_provider_id']= $last_des_id;

  $cl_vander_id = $_SESSION['User']['UserMaster']['id'];

  $this->request->data['class_provider_id']= $cl_vander_id;

  $this->request->data['class_id']= $last_des_id;

  $date = date("d-m-Y");

    $timestamp = strtotime($date);

    $this->request->data['modified_date']= $timestamp;

    $this->request->data['add_date']= $timestamp;

    

  for($cl=0;$cl<=$cls_count; $cl++){

    

    @$cl_sesstion_date = $data_1[$cl];

    @$cl_sesstion_time = $time_1[$cl];

    if($cl_sesstion_date!= '')

    {

    $this->request->data['session_date']= $cl_sesstion_date;

    $this->request->data['session_time']= $cl_sesstion_time;

    

    $this->ClassSchedule->saveAll($this->request->data);

    }

    

    

  }

    

      $img1_name      = $_FILES['data']['name']['class_image1'];

      $img1_type      = $_FILES['data']['type']['class_image1'];

      $img1_tmp_name  = $_FILES['data']['tmp_name']['class_image1'];

      $img1_size      = $_FILES['data']['size']['class_image1'];



 ###################### 2 ##################################



    $img2_name      = $_FILES['data']['name']['class_image2'];

    $img2_type      = $_FILES['data']['type']['class_image2'];

    $img2_tmp_name  = $_FILES['data']['tmp_name']['class_image2'];

    $img2_size      = $_FILES['data']['size']['class_image2'];



   ###################### 3 ##################################



    $img3_name      = $_FILES['data']['name']['class_image3'];

    $img3_type      = $_FILES['data']['type']['class_image3'];

    $img3_tmp_name  = $_FILES['data']['tmp_name']['class_image3'];

    $img3_size      = $_FILES['data']['size']['class_image3'];





  ###################### 4 ##################################



    $img4_name      = $_FILES['data']['name']['class_image4'];

    $img4_type      = $_FILES['data']['type']['class_image4'];

    $img4_tmp_name  = $_FILES['data']['tmp_name']['class_image4'];

    $img4_size      = $_FILES['data']['size']['class_image4'];









  /* Start Image Upload 1*/

            if($img1_name!='')

            {



            //$filename=$_FILES["fileToUpload".$i]["name"];

            //$titlename=$this->request->data["titlename".$i];

            //echo $titlename;

            /*echo '<br/>';

            echo '<br/>';

            echo $filename;

            die;*/

               

            $target_dir = WWW_ROOT."img/"."Vendor/class_image/";

            

             

            $na='class_image1';



            $newfile=$random_digit=rand(0000,9999).$img1_name;

            //echo $newfile;

            //die; 

            $target_file = $target_dir .$newfile;

            $uploadOk = 1;



            //echo $target_file;

            //die; 

            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            // Check if image file is a actual image or fake image

            //if(isset($_POST["submit"])) {

              //$check = getimagesize($_FILES['data']['tmp_name'][$na]);

              //if($check !== false) {

                //echo "File is an image - " . $check["mime"] . ".";

                //$uploadOk = 1;

              //} else {

                //echo "File is not an image.";

                //$uploadOk = 0;

              //}

          

          // Check if file already exists

          if (file_exists($target_file)) {

            echo "Sorry, file already exists.";

            $uploadOk = 0;

          }

          // Check file size

          //if ($_FILES['data']['size'][$na] > 500000) {

           // echo "Sorry, your file is too large.";

           // $uploadOk = 0;

          //}

          // Allow certain file formats

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "ppt" && $imageFileType != "jpeg"

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



           $this->VendorClasse->query("UPDATE bg_vendor_classes SET  upload_ppt_name='".$newfile."' WHERE id='".$last_des_id."'");

              } else {

                      echo "Sorry, there was an error uploading your file.";

                  }



      }

    }

     /*End Start Image Upload 1 */





     /* Start Image Upload 2*/

            if($img2_name!='')

            {



            //$filename=$_FILES["fileToUpload".$i]["name"];

            //$titlename=$this->request->data["titlename".$i];

            //echo $titlename;

            /*echo '<br/>';

            echo '<br/>';

            echo $filename;

            die;*/

               

            $target_dir = WWW_ROOT."img/"."Vendor/class_image/";

            

             

            $na='class_image2';



            $newfile=$random_digit=rand(0000,9999).$img1_name;

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

       /* if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

        && $imageFileType != "gif" ) {

            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

            $uploadOk = 0;

        }*/

        // Check if $uploadOk is set to 0 by an error

        if ($uploadOk == 0) {

            echo "Sorry, your file was not uploaded.";

        // if everything is ok, try to upload file

        } else {



          //echo $target_file;

          //die;

          if (move_uploaded_file($_FILES['data']['tmp_name'][$na], $target_file)) {

              

              //$this->UserMaster->updateAll(array('profile_image' => $newfile),array('id' => $last_des_id));



           $this->VendorClasse->query("UPDATE bg_vendor_classes SET  upload_tutor_picture='".$newfile."' WHERE id='".$last_des_id."'");

              } else {

                      echo "Sorry, there was an error uploading your file.";

                  }



      }

    }

     /*End Start Image Upload 2 */





      /* Start Image Upload 3 */

            if($img3_name!='')

            {



            //$filename=$_FILES["fileToUpload".$i]["name"];

            //$titlename=$this->request->data["titlename".$i];

            //echo $titlename;

            /*echo '<br/>';

            echo '<br/>';

            echo $filename;

            die;*/

               

            $target_dir = WWW_ROOT."img/"."Vendor/class_image/";

            

             

            $na='class_image3';



            $newfile=$random_digit=rand(0000,9999).$img1_name;

            //echo $newfile;

            //die; 

            $target_file = $target_dir .$newfile;

            $uploadOk = 1;



            //echo $target_file;

            //die; 

            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            // Check if image file is a actual image or fake image

            //if(isset($_POST["submit"])) {

              //$check = getimagesize($_FILES['data']['tmp_name'][$na]);

              //if($check !== false) {

                //echo "File is an image - " . $check["mime"] . ".";

                //$uploadOk = 1;

              //} else {

               // echo "File is not an image.";

                //$uploadOk = 0;

              //}

          

          // Check if file already exists

          if (file_exists($target_file)) {

            echo "Sorry, file already exists.";

            $uploadOk = 0;

          }

          // Check file size

          //if ($_FILES['data']['size'][$na] > 500000) {

           // echo "Sorry, your file is too large.";

           // $uploadOk = 0;

          //}

          // Allow certain file formats

        if($imageFileType != "mp4" && $imageFileType != "mkv" && $imageFileType != "avi"

        && $imageFileType != "swf" && $imageFileType != "webm"  && $imageFileType != "264" && $imageFileType != "mov" && $imageFileType != "dvr") {

            echo "Sorry, only Video upload";

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



           $this->VendorClasse->query("UPDATE bg_vendor_classes SET  upload_video_name='".$newfile."' WHERE id='".$last_des_id."'");

              } else {

                      echo "Sorry, there was an error uploading your file.";

                  }



      }

    }

     /*End Start Image Upload 3 */







       /* Start Image Upload 4 */

            if($img4_name!='')

            {



            //$filename=$_FILES["fileToUpload".$i]["name"];

            //$titlename=$this->request->data["titlename".$i];

            //echo $titlename;

            /*echo '<br/>';

            echo '<br/>';

            echo $filename;

            die;*/

               

            $target_dir = WWW_ROOT."img/"."Vendor/class_image/";

            

             

            $na='class_image4';



            $newfile=$random_digit=rand(0000,9999).$img4_name;

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



           $this->VendorClasse->query("UPDATE bg_vendor_classes SET  upload_class_photo='".$newfile."' WHERE id='".$last_des_id."'");

              } else {

                      echo "Sorry, there was an error uploading your file.";

                  }



      }

    }

     /*End Start Image Upload 3 */

    $msgResponse="The class is created successfully!";

   $this->Session->setFlash('<div class="alert alert-success">'.$msgResponse.'</div>');

 $this->redirect(array('controller'=>'Homes','action'=>'PostClass'));



  

  }

  die;

}



public function addRegular(){



  $this->autoRender = false;

  $user=$this->Session->read('User');

  //echo "hi";

  //die;



//print_r($user);

  //die;

  $se='session_'.rand(10,100);

  $this->request->data['session_id']=$se;

  //$cl_van_id = $_SESSION['User']['UserMaster']['id'];

  $c_van_id= $user['UserMaster']['id'];

    $this->request->data['class_vandor_id']= $c_van_id;

  $date = date("d-m-Y");

  $timestamp = strtotime($date);

  //$this->request->data['modify_date']= $timestamp;

  $this->request->data['add_date']= $timestamp;



  $total_date = $this->request->data['reg_date'];

  $total_time = $this->request->data['reg_time'];



  $date = count($total_date);

  $time = count($total_time);



  for($i=0;$i<=$date; $i++)

  {



    if(@$date[$i]!='' && @$date[$i]!='')

    {

    

    $sd=$date[$i];

    $ed=$time[$i];



    $this->request->data['start_date']=$sd;

    $this->request->data['end_date']=$ed;

    $this->ClassRegular->saveAll($this->request->data);



    }

  

}

echo '1';

die;

}

public function addLrregular(){



  $this->autoRender = false;



  //ClassLrregular



  /*echo "<pre>";

  print_r($_SESSION);

  echo "</pre>";*/



  /*$user=$this->Session->read('User');



  echo "<pre>";

  print_r($user);

  echo "</pre>";



  echo "hi";*/

  //die;





  $user=$this->Session->read('User');



   $c_van_id= $user['UserMaster']['id'];



  $reg_date = $this->request->data['date_month_lrr']; 

  $reg_time = $this->request->data['session_time']; 

  //$c_van_id = $_SESSION['User']['UserMaster']['id'];

  $today_date = date('d-m-Y');

  $timestamp = strtotime($today_date);

  $s='sessionid'.rand(10,900);

  $this->request->data['session_id']=$s;

  $this->request->data['class_ven_id']=$c_van_id;

  $this->request->data['add_date']=$timestamp;



  $startdate      =      $this->request->data['start_date_lrr'];

  $no_lrc         =      $this->request->data['no_lrc'];

  $end_date_lrr   =      $this->request->data['end_date_lrr'];

  $no_lrsc        =      $this->request->data['no_lrsc'];



  $this->request->data['start_date']     =$startdate;

  $this->request->data['no_of_lrc']      =$no_lrc;

  $this->request->data['no_of_ss_class'] =$no_lrsc;

  $this->request->data['start_date']     =$end_date_lrr;

  //print_r($reg_date);

  

  $dateof_week=count($reg_date);

  //echo $dateof_week;



  for($i=0;$i<=$dateof_week; $i++)

  {



    if(@$reg_date[$i]!='' && @$reg_time[$i]!='')

    {

    

    $sd=$reg_date[$i];

    $ed=$reg_time[$i];



    $this->request->data['date_month']=$sd;

    $this->request->data['time_of_day']=$ed;

    $this->ClassLrregular->saveAll($this->request->data);



    }

  

}

echo '1';

die;

}

public function bookDesign(){

      //$this->checkUser();

      $this->layout='book_layout';

      $user=$this->Session->read('User');

      

     $this->set('user_view',$user);

      



    }

  public function bookNow(){

      //$this->checkUser();

      $this->layout='vendor_layout';

      $user=$this->Session->read('User');

      $this->set('user_view',$user);

      if(!empty($this->params->pass[0])){ 



        $class_id = $this->params->pass[0];

        $class_id = base64_decode($class_id);

        $class_detail = $this->VendorClasse->find('first',array('conditions'=>array('id'=>$class_id)));

        $this->set('view_class',$class_detail);

        $this->set('class_id',$class_id);

        

       

        $class_type = $class_detail['VendorClasse']['class_timing_id'];

        if($class_type==2)

        {



          $fixed_class_detail = $this->ClassSchedule->find('first',array('conditions'=>array('class_id'=>$class_id)));

          $this->set('view_fixed_class',$fixed_class_detail);

        }

      }



    }



    public function gmailSave(){

       $this->autoRender = false;

  if(!empty($_POST))

  {

          

    $sn_id = $this->request->data['social_network_id'];

    $sn_id_res=$this->UserMaster->find('first',array('conditions'=>array('social_network_id'=>$sn_id)));

    //print_r($sn_id_res);



    $id            = $sn_id_res['UserMaster']['id'];

                $uuid          = $sn_id_res['UserMaster']['uuid'];

                $email_id      = $sn_id_res['UserMaster']['email'];

                $first_name    = $sn_id_res['UserMaster']['first_name'];

                $profile_image = $sn_id_res['UserMaster']['profile_image'];

    $user_type_id  = $sn_id_res['UserMaster']['user_type_id'];

    $gmail_id      = $sn_id_res['UserMaster']['gmail_id'];







    //die;

    if(!empty($sn_id_res))

    {

      $Login = array();

                        $Login['UserMaster']['id']             = $id;

                        $Login['UserMaster']['uuid']           = $uuid;

                        $Login['UserMaster']['email']          = $email_id;

                        $Login['UserMaster']['first_name']     = $first_name;

                        $Login['UserMaster']['profile_image']  =$profile_image;

      $Login['UserMaster']['user_type_id']   =$user_type_id;

      $Login['UserMaster']['gmail_id']       =$gmail_id;

                        $this->Session->write('User', $Login);

      echo '1';

      die;

    }

    else{



    

    $this->request->data['password']= rand(100,1000);

    $add_date=strtotime(date('Y-m-d H:i:s'));

            $this->request->data['add_date']=$add_date;

            $this->request->data['modify_date']=$add_date;

    $this->request->data['gmail_id']=1;



    if($this->UserMaster->save($this->request->data))

    {

      echo '1';

          }

    else

    {

      echo '0';

    }

}

  }

}



public function saveBookclass(){

      //$this->checkUser();

      $this->autoRender = false;

      

      ############### Save Date Code Start###############

      if(!empty($_POST)){

          

          $tran_id = $_POST['tran_id'];

          if($tran_id==1)

          {

           

           $timestem = strtotime(date('Y-m-d H:i:s'));



            $this->request->data['user_id'] = $_POST['user_id'];

            $this->request->data['class_id'] = $_POST['class_id'];

            $this->request->data['payment_type'] = $_POST['user_type_id'];

            $this->request->data['transaction_date']=$timestem;

            $this->request->data['payment_amt']=$_POST['amount'];

            //$_POST['tran_id]';

            $this->TransactionHistorie->save($this->request->data);

          }



        

      }



     ################ Save Date Code End #############

          //print_r($_POST);

     // Merchant key here as provided by Payu

    $MERCHANT_KEY = "hF6qmoBJ";



    // Merchant Salt as provided by Payu

    $SALT = "sBL86X9MpG";



    // End point - change to https://secure.payu.in for LIVE mode

    //$PAYU_BASE_URL = "https://test.payu.in";

    //$PAYU_BASE_URL = "https://secure.payu.in";



    $action = '';



    $posted = array();

    if(!empty($_POST)) {

        //print_r($_POST);

foreach($_POST as $key => $value) {    

        $posted[$key] = $value; 

      

      }

    }



    $formError = 0;



    if(empty($posted['txnid'])) {

      // Generate random transaction id

      $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

    } else {

      $txnid = $posted['txnid'];

    }

    $hash = '';

    // Hash Sequence

    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

    if(empty($posted['hash']) && sizeof($posted) > 0) {

      if(

          empty($posted['key'])

         /* || empty($posted['txnid'])*/

          /*|| empty($posted['amount'])

          || empty($posted['firstname'])

          || empty($posted['email'])

          || empty($posted['phone'])

          || empty($posted['productinfo'])

          || empty($posted['surl'])

          || empty($posted['furl'])

      || empty($posted['service_provider'])*/

  ) {

    $formError = 1;

  } else {

    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));

  $hashVarsSeq = explode('|', $hashSequence);

    $hash_string = '';  

  foreach($hashVarsSeq as $hash_var) {

      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';

      $hash_string .= '|';

    }



    $hash_string .= $SALT;





    $hash = strtolower(hash('sha512', $hash_string));

    //$action = $PAYU_BASE_URL . '/_payment';

  }

} elseif(!empty($posted['hash'])) {

  $hash = $posted['hash'];

  //$action = $PAYU_BASE_URL . '/_payment';

}

  echo $txnid;

  echo '*';

  echo $hash;

 



}

public function paySuccess()

{

    $status=$_POST["status"];

    $amount=$_POST["amount"];

    $txnid=$_POST["txnid"];

    $posted_hash=$_POST["hash"];

    $key=$_POST["key"];

    $salt="GQs7yium";



  if(isset($_POST["additionalCharges"])) {

       $additionalCharges=$_POST["additionalCharges"];

        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$amount.'|'.$txnid.'|'.$key;

        

                  }

  else {    



        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$total_price;



         }

     $hash = hash("sha512", $retHashSeq);

     

       /*if ($hash != $posted_hash) {

         $msg = 'Invalid Transaction. Please try again';

        $this->set('msg',$msg);

       }*/

     //else {

               

          $msg = "<h3>Thank You. Your order status is ". $status .".</h3><br/><h4>Your Transaction ID for this transaction is ".$txnid.".</h4>

          <br/><h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";

          $this->set('msg',$msg);

           

       //}         

}

public function payFailure()

{



$status=$_POST["status"];

$amount=$_POST["amount"];

$txnid=$_POST["txnid"];



$posted_hash=$_POST["hash"];

$key=$_POST["key"];

$salt="GQs7yium";



If (isset($_POST["additionalCharges"])) {

       $additionalCharges=$_POST["additionalCharges"];

        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$amount.'|'.$txnid.'|'.$key;

        

                  }

  else {    



        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$amount.'|'.$txnid.'|'.$key;



         }

     $hash = hash("sha512", $retHashSeq);

  

       //if ($hash != $posted_hash) {

         //echo "Invalid Transaction. Please try again";

          //$msg = 'Invalid Transaction. Please try again';

        //$this->set('msg',$msg);

       //}

     //else {



         $msg="<h3>Your order status is ". $status .".</h3><br/><h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";

          $this->set('msg',$msg);

     //} 

  }



 public function catalogDetail(){

          $this->layout='fun_layout';

          $user=$this->Session->read('User');

          //$this->checkUser();

          $this->set('user_view',$user);

          $catalog_id = $this->params->pass[0];

          $cataloglist=$this->VendorClasse->query("select * FROM bg_vendor_classes,bg_request_catalogs where bg_vendor_classes.user_id=bg_request_catalogs.vendor_id and catalogue_cat_id=$catalog_id LIMIT 5");

          $this->set('cataloglist',$cataloglist);

          $this->set('catalog_id',$catalog_id);

    }

public function test(){

        $this->layout=null;

        

      }



}



?>

