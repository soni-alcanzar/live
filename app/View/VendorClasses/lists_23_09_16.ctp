<style type="text/css">
a {
	color: #0254EB
}
a:visited {
	color: #0254EB
}
a.morelink {
	text-decoration:none;
	outline: none;
}
.morecontent span {
	display: none;
}
.comment {
	width: 400px;
	background-color: #f0f0f0;
	margin: 10px;
}
.cat_bg_color {
    background: #00CDC6 none repeat scroll 0% 0%;
    cursor: pointer;
}
.seg_brd_tp_class_segment {
    border-bottom: 1px solid #00C3C1;
}

.flexible-fixed-fun {
    color: #FFF;
    background-color: #00CDC6;
    font-family: OS_regular;
    padding: 3px 6px;
    z-index: 1050;
    position: absolute;
    border-radius: 25px;
    top: 35px;
    left: 21px;
    width: 69px;
    height: 28px;
    text-align: center;
    font-size: 13px;
}
.image_price12{

    background-color: #00CDC6;
    height: 30px;
    margin-right: 5px;
    border-radius: 25px;
    width: 70px;
    padding: 5px 13px;
    position: relative;
    bottom:152px;
}
.ccc{
/*bottom: -10px;*/
font-size: 17px;
/*padding-left: 32px;
padding-top: 20px;
position: relative; */
}
.image_price12-fun {
    background-color: #00CDC6;
    height: 26px;
    margin-right: 5px;
    border-radius: 25px;
    width: 61px;
    padding: 4px 0px;
    position: relative;
    bottom: -34px;
    text-align: center;
}
.pull-right-fun {
    float: right !important;
}

.hathyga {
    text-transform: capitalize;
    font-size: 20px;
    color: #01091C;
    font-family: "os_Regular";
    margin-top: 22px;
}
</style>
<script>
  $(function(){
    $('.scroll_box_display').fadeInScroll();
  });
</script>
<script src="http://malsup.github.com/jquery.form.js"></script> 

<?php 
if($page_no!='')
{
  $page = $page_no+10;
}
else
{
  $page =10;
}
$str = $_SERVER['REQUEST_URI'];
$main_url = (explode("?",$str));
$cat_url  = $main_url[0].'?page='.$page;
//$page=20;
//$cat_url = $_SERVER['REQUEST_URI'].'?page='.$page; 
    //echo $cat_url;
$total_class=count ($all_total_class); 
?>
<input type="hidden" name="" id="total_page" value="<?php echo $total_class; ?>">
<input type="hidden" name="" id="page_load" value="<?php echo $page; ?>">
<div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
  <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
    <a href="#">
    <img src="<?php echo HTTP_ROOT;?>/img/category_image/<?php echo $all_total_class[0]['Category']['banner_image']; ?>" class="img-responsive" alt="category_image">
    </a>
  </div>
</div>  
<div class="col-xs-12 col-sm-12  col-md-12 col-lg-offset-1 col-lg-10" >
          <div class="container-fluid  padd_l_r" style="">
            <div class="col-md-12 col-sm-12 col-xs-12 funtr"> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padd_l_r">
        <h4 class="feature_work">Featured Workshop &amp; Classes</h4>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12" style="border:2px solid #00CDC6;">  </div>
        <!-- silder box 1 -->

          <div class=" col-md-12 col-sm-12 col-xs-12 pad_all funsld">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                    <div class="row slide3_row1">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="testimonials" class="container-fluid">
                                <div class="row">
                                  <div class="C_17_num flex-index-slider">
                                    <div id="grid-contant-slider1" class="b_sld">
                                    <?php 
                                    foreach ($featured_status as $result) { 
										if(!empty($result['VendorClasse']['segment_id'])):
											$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
										endif;
									 	$class_id = base64_encode($result['VendorClasse']['id']);
                                    ?>
                                    <div class="item b_1_crs featured" id="<?php echo $result['VendorClasse']['id'];?>">
                                    <li>
                                    <div class="grid1 gridfreeclassesbg grid-slider-image">
                                    <div class="view3 view-first">
                                    <div class="index_img">
                                    <?php 
                                    echo "<span class='flexible-fixed flexible-fixed-index'>";
                                    echo ($result['VendorClasse']['class_timing_id'] == 2)?'Fixed':'Flexible';
                                    echo "</span>";
                                    ?>
                                      <?php 
												if(!empty($result['VendorClasse']['upload_class_photo'])){
													
echo $this->Html->link($this->Html->image('Vendor/class_image/'.$result['VendorClasse']['upload_class_photo'].'.jpg', array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                     
                                                 }
			else{
												$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
			}
			
 ?>
                                    <div class="image_price12 pull-right image_price-index">
                                    <span class="ccc" style="color:white">
                                    &#8377;<?php 
									if(!empty($result['VendorClasseLevelDetail'])): 
										echo $result['VendorClasseLevelDetail'][0]['price'];
									endif;
									?></span>
                                    </div>
                                    </div>                
                                    </div>                
                                    <div class="golden home-tumb-slide">
                                    <div class="slider-topic12">
                                    <?php 
									if(!empty($result['VendorClasse'])):
										//echo substr($result['VendorClasse']['class_topic'],0,25);
										echo $result['VendorClasse']['class_topic'];
									endif;
									?>
                                    </div>
                                    <div class="provider-by" style="color:black !important; margin-bottom:2px !important;">
                                    <strong>By:</strong>
                                    <?php 
									if(!empty($result['User'])):
										if($result['User']['vendor_type_id'] ==1):
											echo $result['User']['institute_name'];
										else:
											echo $result['User']['first_name'].' '.$result['User']['last_name'];
										endif;
									endif;
									?>
                                    </div>
                                    <div class="indx-address">PLACE :<?php 
									if(!empty($result['VendorClasseLocationDetail'])):
										echo $result['VendorClasseLocationDetail'][0]['Locality']['name'];
									else:
										echo 'NA';
									endif;
									?></div>
                                    <h5>No of Sessions:&nbsp;<?php 
									if(!empty($result['VendorClasse']['no_of_session'])):
									echo $result['VendorClasse']['no_of_session'];
									endif; ?> </h5>
                                    <h5>Total Duration:&nbsp;<?php 
									if(!empty($result['VendorClasse']['class_duration'])):
									echo $result['VendorClasse']['class_duration'].' '.'Hours';
									endif; ?> </h5>
                                    </div>
                                    </div>
                                    </li>
                                    </div>
                                    <?php } ?>
                                    </div>                                       
                                  </div>
                                </div>
                            </div>        
                       </div>
                    </div>
                </div> 
          </div>

        <!-- end slider 1 -->
         
          
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r br_srch_act">
            <div class="col-md-7 col-sm-7 col-xs-6"></div>
            <div class="col-md-5 col-sm-5 col-xs-6 padd_l_r inpt_adon">
              <!-- Start Form 1 -->
              <?php
                    if($seg_id==''){
                              $action_url=HTTP_ROOT.'/Homes/fun/'.$cat_id.'/?page='.$page; 
                         } 
                         else{
                          $action_url=HTTP_ROOT.'/Homes/fun/'.$cat_id.'/'.$seg_id.'/?page='.$page;
                         }

                   ?>
              <form id ="form_search" name="form_search" method="post">
                  <div class="input-group srch_adon_brd">
                    <input type="hidden" class="form-control br_inpt_radius" name="search_cat_id" value="<?php echo $cat_id; ?>">
                    <input type="text" class="form-control br_inpt_radius" id="search_key" name="search_key" placeholder="Search for short classes &  activities">
                    <span class="input-group-btn">
                      <input type="submit" class="btn btn-default br_inpt_radius srch_adon" name="search" value="Submit" id="submit">
                      <!-- <button class="btn btn-default br_inpt_radius srch_adon" type="button">Search</button> -->
                    </span>
                  </div>
                </form>
                  <!-- End Form 1 -->


            </div>  
          </div>  
          <!-- Furry Teddy Bear -->
          <!-- *************tab head*************** -->
          <?php 
          /*echo "<pre>";
          print_r($view_clasa_segment);
          echo "</pre>" ;*/

          ?> 
          <div class="col-md-12 col-sm-12 col-xs-12 tab_head sr_2605_03_padding nav nav-tabs list_220 padd_l_r" style="">
            <div class="col-xs-12 col-sm-12 sr_2605_03_padding padd_l_r">
              <div class="col-md-2 col-sm-2 col-xs-3 rec_health padd_l_r one_seg12">
                 <?php if($cat_id==1){
                      echo 'Fun & Recreation';
                     }
                     else if($cat_id==2)
                     {
                        echo 'Informative & Motivational';
                     }
                     else if($cat_id==3)
                     {
                        echo 'Health & Wellness';
                     }
                     else if($cat_id==4)
                     {
                        echo 'Kids & Teens';
                     }
                     else if($cat_id==5)
                     {
                        echo 'Education & Skill Development';
                     }
                     else if($cat_id==6)
                     {
                        echo 'Home Maintenance';
                     }


                     
                ?>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-9 sr_2605_03_padding  sr_2705_bdr3 one_seg12 padd_l_r">

              
                    <div class="row">
                      <?php foreach ($class_segments as $key => $segment_value) {

                    $class_segment_id    =   $segment_value['ClassSegment']['id'];
                    $class_segment_name  =   $segment_value['ClassSegment']['segment_name'];
                   
                    //$seg_id
                    ?>
                      <div class="col-md-3 col-sm-3 col-xs-3 padd_l_r two_seg seg_brd_tp_class_segment <?php if($class_segment_id==$seg_id){ echo 'cat_bg_color'; }?>">
                        <a href="javascript:void(0);" data-cat-id="<?php echo $cat_id;?>" data-seg-id="<?php echo $class_segment_id;?>" class="js-load-classes"><?php echo $class_segment_name; ?></a>
                      </div> 
                      <?php 
                      }
                      ?>    
                    </div>
                    </div>
              </div>
            </div>
          </div>
          <!-- *************tab head*************** -->
          <!-- **************form update*********** -->
           <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r tp_br">
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-5 padd_l_r">
              <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
                <div class="col-md-12 col-sm-12 col-xs-12 fltrdv">
                  <div class="filter_br">
                    Filter
                  </div>
                </div>
              </div>  
               <!-- Start form 2 -->
              <form id="reg-form" action="" name="fm" method="post">
               
                <input type="hidden" class="form-control br_inpt_radius" name="search_cat_id" value="<?php echo $cat_id; ?>">
              <div class="col-md-12 col-sm-12 col-xs-12 fldv1 list_filter">
                <div class="form-group mrg_btm">
                  <input class="form-control crt_br" name="start_datepicker" id="start_datepicker" type="text" placeholder="Start Date">
                  <span class="carimg_br12"><img src="<?php echo HTTP_ROOT;?>/img/cal.png"></span>
                </div>

                <div class="form-group mrg_btm">
                  <input class="form-control crt_br" name="end_datepicker" id="end_datepicker" type="text" placeholder="End Date">
                  <span class="carimg_br12"><img src="<?php echo HTTP_ROOT;?>/img/cal.png"></span>
                </div>

                <div class="form-group mrg_btm">
                  <select class="form-control crt_br" id="select">
                    <option>Day of Week</option>
                    <option>Sunday</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thirsday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                  </select>
                  <span class="carimg_br12"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                </div>
                <div class="form-group str-mrgn">
                 <!--  <input class="form-control crt_br" id="usr reg_input" type="text" value="Time of Day"> -->
                  <select class="form-control crt_br" id="select">
                              <option value="">Time of Day</option>
                              <option value="9 AM">9 AM</option>
                              <option value="10 AM">10 AM</option>
                              <option value="11 AM">11 AM</option>
                              <option value="12 PM">12 PM</option>
                              <option value="1 PM">1 PM</option>
                              <option value="2 PM">2 PM</option>
                              <option value="3 PM">3 PM</option>
                              <option value="4 PM">4 PM</option>
                              <option value="5 PM">5 PM</option>
                              <option value="6 PM">6 PM</option>
                              <option value="7 PM">7 PM</option>
                              <option value="8 PM">8 PM</option>
                              <option value="9 PM">9 PM</option>
                  </select>
                  <span class="carimg_br12"><!-- <img src="<?php //echo HTTP_ROOT;?>/img/caret.png"> --></span>
                </div>
                <div class="form-group mrg_btm">
                  <select class="form-control crt_br" id="select" name="class_type">
                    <option value="">Choose Class Type</option>
                            <?php
                                      foreach ($all_class_type as $key => $value_class_type) {

                                    $class_id   =$value_class_type['ClassType']['id'];
                            $class_name =$value_class_type['ClassType']['types'];

                              ?>
                              <option value="<?php echo $class_id; ?>"><?php echo $class_name; ?></option>
                            <?php
                          }
                          ?>
                  </select>
                  <span class="carimg_br12"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                </div>
                <div class="form-group mrg_btm">
                  <select class="form-control crt_br" name="Community_id" id="select">
                    <option value="">Community Type</option>
                    <option value="">Choose Community Class Type</option>
                          <?php
                          foreach ($coummunity_data as $key => $coummunity_value) {

                            $id        = $coummunity_value['Community']['id'];
                            $comm_name = $coummunity_value['Community']['community_name'];
                            # code...
                           
                          ?>
                          <option value="<?php echo $id; ?>"><?php echo $comm_name; ?></option>
                          <?php
                              }
                        ?>
                  </select>
                  <span class="carimg_br12"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                </div>
                <div class="form-group mrg_btm">
                  <select class="form-control crt_br" id="select" name="class_schedule">
                    <option value="">Class Schedules</option>
                    <option value="1">Flexible</option>
                    <option value="2">Fixed</option>
                  </select>
                  <span class="carimg_br12"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                </div>
                <div class="form-group mrg_btm">
                  <select class="form-control crt_br" id="select" name="class_provider">
                    <option>Class Provider</option>

                    <?php
                          foreach ($usermaster_data as $key => $usermaster_value) {

                            $id        = $usermaster_value['UserMaster']['id'];
                            $user_name = $usermaster_value['UserMaster']['first_name'];
                            # code...
                           
                          ?>
                          <option value="<?php echo $id; ?>"><?php echo $user_name; ?></option>
                          <?php
                              }
                        ?>
                   
                  </select>
                  <span class="carimg_br12"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                </div>
                <div class="form-group mrg_btm">
                  <input class="form-control crt_br" id="location" name="location" type="text" placeholder="Location">
                  <span class="carimg_br12">&nbsp;</span>
                </div>
                <div class="form-group">
                  <div class="sm-12 xs-12 butt_pos">
<input type="hidden" name="cat_id" value="<?php echo $this->request->params['pass'][0];?>" />
<input type="hidden" name="seg_id" value="<?php // echo $this->request->params['pass'][1];?>" />
                     <input type="submit" class="btn btn-success buutt_ok" name="Filter" value="Submit" id="submit">
                  </div>
                </div>
              </div>
             </form>
             <!-- End form 2 -->

              <div class="col-md-12 col-sm-12 col-xs-12 fldv1 padd_l_r sort_by_br786"> 
                <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
                  <div class="col-md-12 col-sm-12 col-xs-12 fltrdv">
                    <div class="filter_br">
                      Sort By
                      </div>
                  </div>
                  <!-- Start Form 3 -->
                  <div class="col-md-12 col-sm-12 col-xs-12 padd-l_r list_filter">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <p class="price_br">Price</p>
                    </div>
                   <?php 
                   if($seg_id==''){
                        $action_url=HTTP_ROOT.'/Homes/fun/'.$cat_id.'/?page='.$page; 
                   } 
                   else{
                    $action_url=HTTP_ROOT.'/Homes/fun/'.$cat_id.'/'.$seg_id.'/?page='.$page;
                   }

                   ?>
                    <form action="" name="fm" method="post" id="reg-form">
                    <input type="hidden" name="cat_id" value="<?php echo $this->request->params['pass'][0];?>" />
<input type="hidden" name="seg_id" value="<?php echo $this->request->params['pass'][1];?>" />
                       <input type="hidden" class="form-control br_inpt_radius" name="search_cat_id" value="<?php echo $cat_id; ?>">
                      <div class="row">
                        <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" <?php if(@$find_sort_val==1){ echo 'checked'; } ?>>
                          <span class="hghlow">Highest to Lowest</span>
                        </label>
                        <label class="radio-inline radpos">
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="2" <?php if(@$find_sort_val==2){ echo 'checked'; } ?>>
                          <span class="hghlow">Lowest to Highest</span>
                        </label>
                      </div>  
                   
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <p class="price_br">Class</p>
                    </div>
                    <div class="form-group b_1_radio">
                     
                        <div class="row">
                          <label class="radio-inline">
                            <!-- <input type="radio" name="gender" value="male" checked> -->
                              <input type="radio" name="optionsRadios" value="3" <?php if(@$find_sort_val==3){ echo 'checked'; } ?>>
                              <span class="hghlow">Upcoming</span>
                          </label>
                          <label class="radio-inline newly_add">
                            <!-- <input type="radio" name="gender" value="male" checked> -->
                            <input type="radio" name="optionsRadios" value="4" <?php if(@$find_sort_val==4){ echo 'checked'; } ?>>
                            <span class="hghlow">Newly Added</span>
                          </label>
                        </div>  
                     
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <p class="price_br">Location</p>
                    </div>
                    <div role="form">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="4" name="location">
                          <span class="closest">Closest to Farthest</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group tp_br786">
                      <div class="sm-12 xs-12 butt_pos">
                        <!-- <a href="#" class="btn btn-success buutt_cancel">Cancel</a>
                        <a href="#" class="btn btn-success buutt_ok">Ok</a> -->
                        <input type="submit" class="btn btn-success buutt_ok" name="Sort" value="Submit">
                      </div>
                    </div>
                  </div>  
                </form>
               <!--  End Form 3 -->
                </div>                
              </div>  
            </div>
            <!-- **************form update*********** -->
            <!-- images with text code  tab content--> 
            <div class="js-load-class">
             <?php  $total_class=count ($all_total_class); 
                    $page_count = $page-10;
             ?>

                    <div class="col-lg-9 col-md-8 col-sm-9 col-xs-7 padd_l_r sr_2605_02 tab-content padd_220" id="cat_list" >
                <div class="col-md-12 col-sm-12 col-xs-12 fltrdv">
                  <div class="filter_br">
                   
                    <?php echo $total_class; ?> Class listing Found
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 sr_2605_03_padding tab-pane fade  active in list_filter1" id="banking" name="banking">

                  <?php 

                  if($total_class==0)
                  {

                    echo "Classes not Exist!";

                  }

                  ?>
                  <?php foreach ($all_total_class as $key => $allclass_value) {
                    
                 $seg_pic = explode(',',$allclass_value['VendorClasse']['segment_id']);
                  $class_id                 =   $allclass_value['VendorClasse']['id'];
                  $class_topic              =   $allclass_value['VendorClasse']['class_topic'];
                  $upload_class_photo       =   $allclass_value['VendorClasse']['upload_class_photo'];
                  $class_class_summary      =   $allclass_value['VendorClasse']['class_summary'];
                  $class_class_duration     =   $allclass_value['VendorClasse']['class_duration'];
                  $class_price_per_head     =   $allclass_value['VendorClasse']['price_per_head'];
                  $class_status             =   $allclass_value['VendorClasse']['status'];
                  $class_mod_id             =   $allclass_value['VendorClasse']['class_timing_id'];
					$cl_shud_session_date     =   $allclass_value['ClassSchedule']['session_date'];
					if(!empty($allclass_value['ClassSchedule'])):
						
						$cl_shud_session_time     =   $allclass_value['ClassSchedule']['session_time'];
					endif;
					if($class_mod_id==1){
					
						$class_name_type='Flexible';
					}
					else if($class_mod_id==2)
					{
						$class_name_type='Fixed';
					}
					$class_id = base64_encode($class_id);
					$top = substr($class_topic, 0, 10). '...';
                ?> 
                <div class="col-sm-12 col-xs-12 sr_260501 padd_l_r scroll_box_display"> 
                          <!-- ********images************ -->
                          <div class="col-md-4 col-sm-4 col-xs-12 img-responsive padd_l_r">
                            <div class="col-xs-12 col-sm-12 fun01_img_w">
                              <span class="flexible-fixed-fun"><?php echo $class_name_type; ?></span>
                              <span class="image_price12-fun pull-right-fun" style="color:white">₹ <?php echo $allclass_value['VendorClasseLevelDetail'][0]['price']; ?></span>
      
  <?php 
												if(!empty($allclass_value['VendorClasse']['upload_class_photo'])){
													
//echo $this->Html->link($this->Html->image('Vendor/class_image/'.$allclass_value['VendorClasse']['upload_class_photo'].'.jpg', array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                 ?>    
													 <a href="<?php echo HTTP_ROOT?>/classes/<?php echo $allclass_value['VendorClasse']['class_topic']; ?>" >
											
										<?php	echo $this->Image->resize('Vendor/class_image/'.$allclass_value['VendorClasse']['upload_class_photo'].'.jpg','305','148', array('class' => 'imgresponsive img-thumbnail'));
											?>
											</a>
                                            <?php
                                                 }
			else{
												$seg_pic = explode(',',$allclass_value['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
			}
			
 ?>
                            </div>  

                          </div><!-- ********images************ -->
                          <!-- ********text************ -->
                          <div class="col-md-8 col-sm-8 col-xs-12 text_res sr_2605_03_padding">
                             <div class="col-xs-12 col-sm-12 sr_2605_06 sr_2605_06_textLorem021">
                                <div class="hathyga col-xs-12 col-sm-12">
                                <?php //echo $this->Html->link($class_topic,array('controller' => 'vendor_classes','action'=>'classes',base64_encode($allclass_value['VendorClasse']['id'])), array('escape' => false)); ?>
             <a href="<?php echo HTTP_ROOT?>/classes/<?php echo $allclass_value['VendorClasse']['class_topic']; ?>" ><?php echo $class_topic; ?></a>
                                    <span class="pull-right">
                                        <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite sr_class_acc_div padd_l_r"
                                        style="margin-bottom:7px;">
                                            <div class="row">
                                                <img class="img-responsive" style="display: inline; margin-right: 5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/user.png">
                                                <span class="city">
                                                <strong> By :</strong> 
                                                <?php echo ucfirst($allclass_value['User']['first_name'].' '.$allclass_value['User']['last_name']);?>
                                                </span>
                                            </div>
                                        </div>
                                   
                                    </span>
                              </div>
                                   
                                   
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite">
                                  <img class="img-responsive" style="display: inline; margin-top: -10px;  width: 20px; margin-right: 5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/location.png">
                                  <span class="city">
                                  <?php
								  if(!empty($allclass_value['VendorClasseLocationDetail'])):
								  	echo $allclass_value['VendorClasseLocationDetail'][0]['Locality']['name'];
								  endif;	
								  ?>
                                  </span>
                                  <?php /*?><a href="javascript:void(0);" type="button" class="btn btn-nfo js-show-locations" data-id="<?php echo $allclass_value['VendorClasse']['id']?>" data-toggle="modal" data-target="#myModal">Other Places</a><?php */?>
                                <img src="<?php echo HTTP_ROOT;?>/img/8.jpg" class="pull-right star" style="height: 20px;">
                                </div>
                                <?php /*?><div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite sr_class_acc_div padd_l_r"
                                   style="margin-bottom:7px;">
                                  <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <img class="img-responsive" style="display: inline; margin-right: 5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/user.png">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 sr_class_acc_text02 upclass-location">
                                   <span class="city">
                                    <strong> By :</strong> 
                                    <?php echo ucfirst($allclass_value['User']['first_name'].' '.$allclass_value['User']['last_name']);?>
                                   </span>
                                    </div>
                                  </div>
                                </div><?php */?>
                                <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite">
                                 
                                <?php
                                  if($class_mod_id==1){
                                  ?>
                                  <img class="img-responsive" style="display: inline; width: 15px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/clock.png">
                                  <span class="city">Total Duration: <?php echo $class_class_duration; ?></span>
                                   <span class="city"><?php echo $cl_shud_session_date; ?></span>
                                   <span>No of Sessions: <?php echo $allclass_value['VendorClasse']['no_of_session'];?></span>
                                  <?php
                                  }
                                  else if($class_mod_id==2)
                                  {
                                    ?>
                                        <img class="img-responsive" style="display: inline; width: 15px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/clock.png">
                                 
                                   <span class="city"><?php echo $cl_shud_session_date; ?></span>
                                     <span class="city"><?php echo $cl_shud_session_time; ?></span>

                                    <?php
                                  }
                                  ?>
                                </div>
                                <?php /*?><div class="col-xs-12 col-sm-12 ">
                                	<span>No of Sessions: <?php echo $allclass_value['VendorClasse']['no_of_session'];?></span>
                                </div><?php */?>
                                <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_2605_06_textLorem sr_serch_div_l_hite">
                                  <img class="img-responsive" style="display: inline; margin-right: 5px; width: 10px; margin-top: -5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/information.png">&nbsp;&nbsp;
                                  <!-- <img class="img-responsive" style="display: inline; margin-right: 5px; margin-top: -5px; width: 17px;" src="images/fun&refreshment/calander.png">&nbsp;&nbsp; -->
                                  <?php /*?><span class="comment more city"><?php echo $class_class_summary; ?></span><?php */?>
                                  <p class="comment more city text-justify"><?php echo $class_class_summary; ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                	<span>Age Group: 
                                    
                                     <?php 
												$z= explode(',',$allclass_value['VendorClasse']['age_category']);
												foreach($z as $x =>$value){
													if($x == 0): $c[$x] = 'Kids'; endif;
													if($x == 1): $c[$x]= 'Teens';endif;
													if($x == 2): $c[$x]= 'Adults';endif;
												}  
												echo implode(',',$c);
											?>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                <span>Other Localities:
                                <?php 
								//if(count($allclass_value['VendorClasseLocationDetail'])>1):
									foreach($allclass_value['VendorClasseLocationDetail'] as $other_citie){
											$other_cities[] =  $other_citie['Locality']['name'];
									}
									//reset($other_cities);
									//$key = key($other_cities);
									//unset($other_cities[$key]);
									echo implode(',',array_unique($other_cities));
									
								//else:
								//	echo 'NA'; 		
								//endif;
								?>
                                </span>
                                </div>
                                
                          </div>        
                          <!-- ********text************ -->
                    </div> 
                  <?php } ?>
                  <center class="white_bg">
                    <div id="status1"></div>
                    <style type="text/css">
                     

               
                    </style>

<?php //if($total_class>5){ ?>
                    <!-- <div class="pagination pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div> -->
    <?php
  //}
  ?>

                </center>
                </div>
                                             
            </div>
          </div> 
          </div> 
          <!-- images with text code / --> 
          <div class="col-md-12 col-sm-12 col-xs-12 funtr"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padd_l_r">
              <h4 class="feature_work">Recommended Classes</h4>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12" style="border:2px solid #00CDC6;">  </div> 
          <!-- slider code -->
          <?php /*?><div class=" col-md-12 col-sm-12 col-xs-12 pad_all funsld">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
              <div class="row slide3_row1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div id="testimonials" class="container-fluid">
                    <div class="row">

                      <div class="C_17_num">
                        <div id="grid-contant-slider2" class="b_sld">
                        <?php 
							foreach($recommended_class as $result){
								 $seg_pic = explode(',',$result['VendorClasse']['segment_id']);
								 $class_id = base64_encode($result['VendorClasse']['id']);
						?>
                          <div class="item b_1_crs">
                            <li>
                              <div class="grid1 gridfreeclassesbg">
                                <div class="view3 view-first">
                                      <div class="index_img">
                                      
                       <?php 
												if(!empty($result['VendorClasse']['upload_class_photo'])){
													
echo $this->Html->link($this->Html->image('Vendor/class_image/'.$result['VendorClasse']['upload_class_photo'].'.jpg', array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                     
                                                 }
			else{
												$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
			}
			
 ?>
                                    
                                        <img src="<?php echo HTTP_ROOT;?>/img/pic3.jpg" class="img-responsive" alt=""/>
                                        <button class="btn butt_dollar">&#8377;320</button>
                                      </div>                
                                </div>                
                                <div class="golden">
                                    <h4><?php echo substr($result['VendorClasse']['class_topic'], 0, 10). '...';?></h4>
                                    <p>PLACE :<?php echo $result['VendorClasseLocationDetail'][0]['Locality']['name'];?></p>
                                    <h5>Sat, 15 jan, 7 to 8pm </h5>
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </h6>
                                    <button class="btn" tabindex="0">details</button>
                                </div>
                              </div>
                            </li>
                          </div>
                          <?php } ?>
                          
                          
                                  
                        </div>                                       
                      </div>

                    </div>
                  </div>        
                </div>
              </div>
            </div>        
          </div><?php */?>
          <div class=" col-md-12 col-sm-12 col-xs-12 pad_all funsld">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                    <div class="row slide3_row1">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="testimonials" class="container-fluid">
                                <div class="row">
                                  <div class="C_17_num flex-index-slider">
                                    <div id="grid-contant-slider2" class="b_sld">
                                    <?php 
                                    foreach ($recommended_class as $result) { 
										if(!empty($result['VendorClasse']['segment_id'])):
											$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
										endif;
									 	$class_id = base64_encode($result['VendorClasse']['id']);
                                    ?>
                                    <div class="item b_1_crs featured" id="<?php echo $result['VendorClasse']['id'];?>">
                                    <li>
                                    <div class="grid1 gridfreeclassesbg grid-slider-image">
                                    <div class="view3 view-first">
                                    <div class="index_img">
                                    <?php 
                                    echo "<span class='flexible-fixed flexible-fixed-index'>";
                                    echo ($result['VendorClasse']['class_timing_id'] == 2)?'Fixed':'Flexible';
                                    echo "</span>";
                                    ?>
                                      <?php 
												if(!empty($result['VendorClasse']['upload_class_photo'])){
													
echo $this->Html->link($this->Html->image('Vendor/class_image/'.$result['VendorClasse']['upload_class_photo'].'.jpg', array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                     
                                                 }
			else{
												$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
			}
			
 ?>
                                    <div class="image_price12 pull-right image_price-index">
                                    <span class="ccc" style="color:white">
                                    &#8377;<?php 
									if(!empty($result['VendorClasseLevelDetail'])): 
										echo $result['VendorClasseLevelDetail'][0]['price'];
									endif;
									?></span>
                                    </div>
                                    </div>                
                                    </div>                
                                    <div class="golden home-tumb-slide">
                                    <div class="slider-topic12">
                                    <?php 
									if(!empty($result['VendorClasse'])):
										//echo substr($result['VendorClasse']['class_topic'],0,25);
										echo $result['VendorClasse']['class_topic'];
									endif;
									?>
                                    </div>
                                    <div class="provider-by" style="color:black !important; margin-bottom:2px !important;">
                                    <strong>By:</strong>
                                    <?php 
									if(!empty($result['User'])):
										if($result['User']['vendor_type_id'] ==1):
											echo $result['User']['institute_name'];
										else:
											echo $result['User']['first_name'].' '.$result['User']['last_name'];
										endif;
									endif;
									?>
                                    </div>
                                    <div class="indx-address">PLACE :<?php 
									if(!empty($result['VendorClasseLocationDetail'])):
										echo $result['VendorClasseLocationDetail'][0]['Locality']['name'];
									else:
										echo 'NA';
									endif;
									?></div>
                                    <h5>No of Sessions:&nbsp;<?php 
									if(!empty($result['VendorClasse']['no_of_session'])):
									echo $result['VendorClasse']['no_of_session'];
									endif; ?> </h5>
                                    <h5>Total Duration:&nbsp;<?php 
									if(!empty($result['VendorClasse']['class_duration'])):
									echo $result['VendorClasse']['class_duration'].' '.'Hours';
									endif; ?> </h5>
                                    </div>
                                    </div>
                                    </li>
                                    </div>
                                    <?php } ?>
                                    </div>                                       
                                  </div>
                                </div>
                            </div>        
                       </div>
                    </div>
                </div> 
          </div>
          <!-- slider code / -->    
          <div class="col-md-12 col-sm-12 col-xs-12 sr_0106_div_a_class padd_l_r white_line"> 
              <a href="#" class="btn btn-default btn-lg btn-block sr_0106_gift_a_class">
                <i class="fa fa-gift gft_fa_br" aria-hidden="true"></i>
                <span class="ngo-gift">Gift A Class</span>
              </a>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 banner_gift">
            <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
              <div class="indvdl_gifting">
                <div><a href="#" class="btn btn-default indvdl_butt">
                  <i class="fa fa-gift gft_fa" aria-hidden="true"></i><span class="ngo-top">Individual Gifting</span></a>
                </div>
                <div class="ngo_gift"><a href="#" class="btn btn-default ngo_butt">
                  <i class="fa fa-gift gft_fa" aria-hidden="true"></i><span class="ngo-top">NGO Gifting</span></a>
                </div>
                <div class="ngo_gift"><a href="#" class="btn btn-default crprt_butt">
                  <i class="fa fa-gift gft_fa" aria-hidden="true"></i><span class="ngo-top">Corporate Gifting</span></a>
                </div>
            </div>
            </div>
          </div>         
        </div>
      </div>
		<script type="text/javascript">
			$(document).ready(function()
			{
			$(document).on('submit', '#reg-form', function()
			{
				$('.js-load-class').html('<img src="<?php echo HTTP_ROOT; ?>/img/loader.gif" align="absmiddle">&nbsp;Please Wait...');
			var data = $(this).serialize();
			$.ajax({
			type : 'POST',
			url  : "/vendor_classes/filter/",
			data : data,
			success :  function(data)
				{
					$('.js-load-class').html(data);
				}
			});
			return false;
			});
			});
        </script>
         <script>
		$(document).ready(function(){
        	$(document).on('submit', '#form_search', function(){
				var search_key = document.getElementById('search_key').value;
				if(search_key == ''){
						alert('Search Box is empty. Please type in class name or organization!');
						return false;
					}
				else {		
					$('.js-load-class').html('<img src="<?php echo HTTP_ROOT; ?>/img/loader.gif" align="absmiddle">&nbsp;Please Wait...');
					var data = $(this).serialize();
					$.ajax({
					type : 'POST',
					url  : "/vendor_classes/search_by_name/",
					data : data,
					success :  function(data)
						{
							$('.js-load-class').html(data);
						}
					});
					return false;
					}
			});
		});
			</script>
      <script type="text/javascript">
        $(document).ready(function(){
          //alert('hi');
            window.scroll(0,770);
          });
    </script>
    <script type="text/javascript">
       $( "#start_datepicker" ).datepicker({yearRange:'1900:2030',minDate:0,changeYear: true, changeMonth: true });
        $( "#end_datepicker" ).datepicker({yearRange:'1900:2030',minDate:0,changeYear: true, changeMonth: true });
    </script>
   <script type="text/javascript">
        function loadmore(){
            /*$("#cat_list").scroll(function(){
        alert('hi');*/
          
        }
    </script>
    <script type="text/javascript">
          $("#cat_list").scroll(function(){
          var h = $("#banking").height();
          var top = this.scrollTop;
          var c = $(document).height();
          var total_page = $("#total_page").val();
          var page_load = $("#page_load").val();
          page_load = page_load-10;


          //var c1 = $(window).height()
           //alert(h);
            //alert(top);
           var scroll = $(window).scrollTop();
           var documentHeight=$('html').height();

             //alert(documentHeight);
            var  c1=h-top;
           //alert(c1);
            if(c1<=1005 && page_load<=total_page)
              {
                 //alert(scroll);
                 //alert(top);
                 // alert(scroll);
                  $("#status1").html('<img src="<?php echo HTTP_ROOT; ?>/img/loader.gif" align="absmiddle">&nbsp;Please Wait...');
                 setTimeout(function()
                  { 
                    //alert('hi');
                    location.assign('<?php echo $cat_url; ?>');
                  }, 3000);
                  
                 //alert(c1);
                 //alert(top)
                 //location.assign('<?php echo $cat_url; ?>');
              }
        });
</script>
     <script>
      $(document).ready(function() {
	var showChar = 150;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});
	$('.js-load-classes').on('click',function (){
		$('.js-load-class').html('<img src="<?php echo HTTP_ROOT; ?>/img/loader.gif" align="absmiddle">&nbsp;Please Wait...');
		var cat_id =$(this).data('cat-id');
		var seg_id =$(this).data('seg-id');
		$.ajax({
			type: "POST", url: "/vendor_classes/load_classes/"+cat_id+"/"+seg_id,
			data: $(this).serialize(),
			async: false,
					success: function(response){
							$('.js-load-class').html(response);
						}//success
			});//ajax
	});
	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
	$('.js-show-locations').on('click',function (){
		var id =$(this).data('id');
		$.ajax({
			type: "POST", 
			url: "/vendor_classe_location_details/details/"+id,
			data: $(this).serialize(),
			async: false,
					success: function(response){
					$('.modal-body').html(response).modal();
					$(".modal-body").dialog({         
					height: 140,
					modal: true,
					buttons: {
					Ok: function() {
					$(this).dialog('close');
					}
					}
					}); //dialog
					}//success
			});//ajax
	});
});
      </script>
      
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">More Information</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>