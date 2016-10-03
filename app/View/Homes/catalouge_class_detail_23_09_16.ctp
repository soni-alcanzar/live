<style type="text/css">
.add_top1 {
    padding-top: 0px!important;
}
.image_price12{

    background-color: #00CDC6;
    height: 42px;
    margin-right: 5px;
    border-radius: 25px;
    width: 78px;
    padding: 9px 15px;
    position: relative;
    bottom:144px;
}
.error-gift{
    color: #A94442;
    
}
.ruth6542{padding-left: 0px!important; margin-bottom: 30px;}
.provider-name{ cursor: pointer;}
.popup_m_top_22_login {
    margin: 53px 0px 49px;
}
</style>
<?php  
$sesstion_data=array();

$sesstion_data =$this->Session->read('User');
 

?>
<div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
  <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
    <!-- <a href="http://braingroom.com/braingroom/homes/kids"> -->
      <?php     
        if($class['VendorClasse']['category_id'] == 1){?>
        <a href="<?php echo HTTP_ROOT;?>/braingroom/homes/fun/1">
            <img src="<?php echo HTTP_ROOT;?>/img/profile_img/fun.jpg" class="img-responsive" alt="">
        </a>
      <?php }?>
      <?php     
        if($class['VendorClasse']['category_id'] == 2){?>
        <a href="<?php echo HTTP_ROOT;?>/braingroom/homes/fun/2">
            <img src="<?php echo HTTP_ROOT;?>/img/profile_img/informative.jpg" class="img-responsive" alt="">
        </a>
      <?php }?>
      <?php     
        if($class['VendorClasse']['category_id'] == 3){?>
        <a href="<?php echo HTTP_ROOT;?>/braingroom/homes/fun/3">
            <img src="<?php echo HTTP_ROOT;?>/img/profile_img/health.jpg" class="img-responsive" alt="">
        </a>
      <?php }?>
      <?php     
        if($class['VendorClasse']['category_id'] == 4){?>
        <a href="<?php echo HTTP_ROOT;?>/braingroom/homes/fun/4">
            <img src="<?php echo HTTP_ROOT;?>/img/profile_img/kids.jpg" class="img-responsive" alt="">
        </a>
      <?php }?>
      <?php     
        if($class['VendorClasse']['category_id'] == 5){?>
        <a href="<?php echo HTTP_ROOT;?>/braingroom/homes/fun/5">
            <img src="<?php echo HTTP_ROOT;?>/img/profile_img/education.jpg" class="img-responsive" alt="">
        </a>
      <?php }?>
      <?php     
        if($class['VendorClasse']['category_id'] == 6){?>
        <a href="<?php echo HTTP_ROOT;?>/braingroom/homes/fun/6">
            <img src="<?php echo HTTP_ROOT;?>/img/profile_img/hme_mntc.jpg" class="img-responsive" alt="">
        </a>
      <?php }?>
   <!--  </a> -->
  </div>
</div>
<?php /* Modified by dinesh@braingroom.com 19/07/16*/?>
<div class="col-xs-12 col-sm-12  col-md-12 col-lg-offset-1 col-lg-10">
    <div class="container-fluid  padd_l_r">
        <div class="col-md-12 col-sm-12 col-xs-12 funtr"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padd_l_r">
                <span class="feature_work">Catalogue Class Details</span>
            </div>

          <!--   <div class="col-md-12 col-sm-12 col-xs-12 loss-pad">
                <img class="weigh-img" src="<?php echo HTTP_ROOT;?>/img/weight_loss/weigh1.png">
                <span class="weight-yoga">Hatha Yoga for Weight Loss</span>
            </div> -->
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 ruth6542 ruth654786">
            <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr" style="background:#fff;">
                <!-- work -->
                <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r add_top_13a">
                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r weight_brd class-title-div">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <p class="weight_loss class-title-heading class-title-heading-first" >
                                <div class="col-md-12 col-sm-12 col-xs-12 loss-pad">
                                    
                                    <span class="weight-yoga"><?php echo $detail['VendorClasse']['class_topic'] ?></span>
                                </div>

                            </p>               
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" style="padding:0px; margin-top:10px;">
                            <div class="col-md-12 col-sm-12 col-xs-12 padd_thirty post-class-head">
                            <?php /* Modified by dinesh@braingroom.com 19/07/16*/?>
                                <p class="provider-name class-title-heading class-user-title-heading pull-right" 
                                id="<?php echo $detail['UserMaster']['id'] ?>">By <?php echo $detail['UserMaster']['first_name'] ?></p>
                                <?php 
                                   
                                   if($detail['UserMaster']['profile_pic']!='')
                                   {
                                    ?>
                                     <img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/
                                     <?php echo $detail['UserMaster']['profile-pic'] ?>" id="profile-pic<?php echo $photo;?>" class="georgeimg prflimg pull-right profile-img"> 
                                     <?php
                                     }
                                     else
                                     {
                                        ?>
                                        <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/defult_pic.png" id="defult_pic" class="georgeimg prflimg pull-right profile-img"> 
                                        <?php
                                    }
                                    
                                ?>
                            </div>
                            <?php /* Modified by dinesh@braingroom.com 19/07/16*/?>
                            <div class="col-md-12 col-sm-12 col-xs-12 star_class post-class-head star-divv padd_thirty pull-right">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
                                <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
                                    <div class="col-md-12 col-sm-12 col-xs-12 padd_thirty">
                                        <div style="">

                                          <?php 
                                   
                                   if($detail['VendorClasse']['upload_class_photo']!='')
                                   {
                                    ?>
                                     <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/<?php echo $detail['VendorClasse']['upload_class_photo']?>" class=" img-thumbnail" width="400" height="5" alt="img">
                                     <!--  <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/<?php echo $photo; ?>" id="profile-pic<?php echo $photo;?>" class="georgeimg prflimg pull-right profile-img">  -->
                                     <?php
                                     }
                                     else
                                     {
                                        ?>

                                        <img src="<?php echo HTTP_ROOT;?>/img/weight_loss/weight_banner.jpg" class=" img-thumbnail" alt="img">
                                        <?php
                                    }
                                    
                                ?>
                                            <!-- <img src="<?php //echo HTTP_ROOT;?>/img/weight_loss/weight_banner.jpg" class=" img-thumbnail" alt="img"> -->
                                            
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 webnair">
                                            <div class="col-md-6 col-sm-6 col-xs-6 wenair">
                                                <span><?php echo $this->Html->image('icon_webnair.png', array('alt' => 'Class Type','class'=>'fixed_class'));?></span> <span><?php  echo $detail['RequestCatalog']['class_type'] ?></span>

                                            </div>  
                                           
                                            <div class="col-md-6 col-sm-6 col-xs-6 wenair">
                                                <span><?php echo $this->Html->image('kids_gang.png', array('alt' => 'CakePHP','class'=>'fixed_class'));?></span> <span><?php  echo $community_name; ?></span>
                                            </div>  
                                            
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>

                                

                                <div class="col-md-12 col-sm-12 col-xs-12 padd_thirty br_desc">
                                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r desc_clr">
                                     <h4 style="font-size:25px;" class="butt_gft" align="center">Summary</h4>
                                        <div class="col-md-12 col-sm-12 col-xs-12 desc_cntnt clss-desc-content"  style=" margin-top:10px;">
                                           
                                            <p class="sum-p" style="height: auto ! important;"><?php if($detail['VendorClasse']['class_summary']!=''){ echo $detail['VendorClasse']['class_summary'];} 
                                            else { echo 'NA';} ?> </p>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 padd_thirty br_desc">
                                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r desc_clr">
                                     <h4 style="font-size:25px;" class="butt_gft" align="center">Class Provider</h4>
                                        <div class="col-md-12 col-sm-12 col-xs-12 desc_cntnt clss-desc-content"  style=" margin-top:10px;">
                                           
                                            <p class="sum-p" style="height: auto ! important;">
                                              <?php  if($detail['UserMaster']['yourself']!=''){ 
                                                echo $detail['UserMaster']['yourself'];
                                              }else 
                                                {  
                                                  echo 'NA'; 
                                                } 
                                              ?>
                                          </p>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-xs-12 padd_thirty br_desc">
                                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r desc_clr">
                                     <h4 style="font-size:25px;" class="butt_gft" align="center">FAQ</h4>
                                        <div class="col-md-12 col-sm-12 col-xs-12 desc_cntnt clss-desc-content"  style=" margin-top:10px;">
                                           
                                            <p class="sum-p" style="height: auto ! important;">Lorem ipsum is simply dummy text of the pnnting and typesetting industry Lorem psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. re-maining essentially unchanged. It was popularised in the 1960s with the release of letrasetsheets containine Lorem ipsum passages, and more recently ore nec with </p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 padd_thirty br_desc">
                                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r desc_clr">
                                     <h4 style="font-size:25px;" class="butt_gft" align="center">Terms & Conditions </h4>
                                        <div class="col-md-12 col-sm-12 col-xs-12 desc_cntnt clss-desc-content"  style=" margin-top:10px;">
                                           
                                            <p class="sum-p" style="height: auto ! important;">Lorem ipsum is simply dummy text of the pnnting and typesetting industry Lorem psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. re-maining essentially unchanged. It was popularised in the 1960s with the release of letrasetsheets containine Lorem ipsum passages, and more recently ore nec with </p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 padd_thirty br_desc">
                                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r desc_clr">
                                     <h4 style="font-size:25px;" class="butt_gft" align="center">Cancellation Policy </h4>
                                        <div class="col-md-12 col-sm-12 col-xs-12 desc_cntnt clss-desc-content"  style=" margin-top:10px;">
                                           
                                            <p class="sum-p" style="height: auto ! important;">Lorem ipsum is simply dummy text of the pnnting and typesetting industry Lorem psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. re-maining essentially unchanged. It was popularised in the 1960s with the release of letrasetsheets containine Lorem ipsum passages, and more recently ore nec with </p>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                        <!-- left section / -->

                        <!-- right section -->
                        

                    <div class="col-md-4 col-sm-4 col-xs-12 rs_fty right-sidebar">
                            <div class="col-md-12 col-sm-12 col-xs-12 book_1500 right-book-first">
                                <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr right-book-content-first">
                                <!--  Login -->
                                <?php 
                                /*echo  $sesstion_data['UserMaster']['user_type_id'];
                                die('jglkfdjglkfdjgkljfdkgjdfkjgh');*/
                                if(@$sesstion_data['UserMaster']['user_type_id']==2){
                                  
                                  ?>
                                  <div class="col-xs-12 col-sm-12 padd_l_r">
                                             <div class="col-sm-12 col-xs-6 book_center get_quote_m_top22 padd_l_r">
                                                    <a class="btn btn-default get-quote" href="#" onclick="mypopup();">Get Quote</a>
                                                  </div>
                                  </div>
                                  <?php
                                      }
                                      else  if(@$sesstion_data['UserMaster']['id']==1){
                                ?>
                                  <div class="col-xs-12 col-sm-12 padd_l_r">
                                                 <div class="col-sm-12 col-xs-6 book_center get_quote_m_top22 padd_l_r">&nbsp;</div>
                                      </div>
                                      
                                  <?php
                                }
                                else
                                {
                                  ?>
                                  <!-- Without Login -->
                                       <div class="col-xs-12 col-sm-12 padd_l_r">
                                                 <div class="col-sm-12 col-xs-6 book_center get_quote_m_top22 padd_l_r">
                                                        <a class="btn btn-default get-quote" href="#" onclick="mypopup_login();">Get Quote</a>
                                                      </div>
                                      </div>
                                  <!-- End Without Login -->
                                  <?php
                                    }
                                ?>
                                <div class="col-xs-12 col-sm-12 padd_l_r get_quote_m_top22">

                                 
                                    <?php if($locality_name!=''){?>
                                   <div class="col-md-12 col-sm-12 col-xs-12 padisplay1 ">
                                      <div class="col-md-2 col-sm-3 col-xs-1 padd_beg">
                                          <img class="w-loc" src="<?php echo HTTP_ROOT?>/img/weight_loss/location.png" alt="img">
                                      </div>
                                      <div class="col-md-8 col-sm-9 col-xs-10 begin_lm cust-md-padd right-bgin-content booknow-content">
                                           <span class="sum-chennai"><?php echo $detail['City']['name'];?></span><br>
                                          <span class="sum-chennai"><?php echo $locality_name; ?></span>
                                      </div>
                                    </div>
                                    <?php
                                        }
                                  ?>
                                   <?php if($detail['RequestCatalog']['region']!=''){?>
                                    <div class="col-md-12 col-sm-12 col-xs-12 padisplay1 ">
                                      <div class="col-md-2 col-sm-3 col-xs-1 padd_beg">
                                          <img class="w-loc" src="<?php echo HTTP_ROOT?>/img/weight_loss/view.png" alt="img">
                                      </div>
                                      <div class="col-md-8 col-sm-9 col-xs-10 begin_lm cust-md-padd right-bgin-content booknow-content">
                                          <span class="sum-chennai"><?php echo $detail['RequestCatalog']['region']; ?></span>
                                      </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php if($detail['RequestCatalog']['class_type']!=''){?>
                                    <div class="col-md-12 col-sm-12 col-xs-12 padisplay1 ">
                                      <div class="col-md-2 col-sm-3 col-xs-1 padd_beg">
                                          <img class="w-loc" src="<?php echo HTTP_ROOT?>/img/weight_loss/group.png" alt="img">
                                      </div>
                                      <div class="col-md-8 col-sm-9 col-xs-10 begin_lm cust-md-padd right-bgin-content booknow-content">
                                          <span class="sum-chennai"><?php echo $detail['RequestCatalog']['class_type'] ?></span>
                                      </div>
                                    </div>
                                        <?php
                                      }
                                      ?>
                                      <?php if($group_name!=''){?>
                                    <div class="col-md-12 col-sm-12 col-xs-12 padisplay1 ">
                                      <div class="col-md-2 col-sm-3 col-xs-1 padd_beg">
                                         <img class="w-loc" src="<?php echo HTTP_ROOT?>/img/weight_loss/group.png" alt="img"> 
                                      </div>
                                      <div class="col-md-8 col-sm-9 col-xs-10 begin_lm cust-md-padd right-bgin-content booknow-content">
                                          <span class="sum-chennai"><?php echo $group_name ?> </span>
                                      </div>
                                    </div> 
                                      <?php
                                        }
                                    ?>
                                     <?php if($detail['VendorClasse']['class_duration']!=''){?>
                                    <div class="col-md-12 col-sm-12 col-xs-12 padisplay1 ">
                                      <div class="col-md-2 col-sm-3 col-xs-1 padd_beg">
                                         <img class="w-loc" src="<?php echo HTTP_ROOT?>/img/weight_loss/group.png" alt="img"> 
                                      </div>
                                      <div class="col-md-8 col-sm-9 col-xs-10 begin_lm cust-md-padd right-bgin-content booknow-content">
                                          <span class="sum-chennai">Duration: <?php echo $detail['VendorClasse']['class_duration']; ?></span>
                                      </div>
                                    </div>
                                    <?php
                                        }
                                      ?>

                                  </div>
                             
                                </div>
                                
                                
                                <div class="">&nbsp;</div><div class="">&nbsp;</div><div class="">&nbsp;</div>
                                <div class="col-md-12 col-sm-12 col-xs-12 video-div vc_c_video_tag_20">
                                    <div class="col-xs-12 col-sm-12 padd_l_r"><h3 class="cls_loc vc_c_video_tag_20">Video</h3></div>
                                    <div class="col-xs-12 col-sm-12 video_tag_div_pad">
                                      <video controls class="class-video">
                                            <source src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/<?php echo $video; ?>" type="video/mp4">
                                              Your browser does not support HTML5 video.
                                      </video>
                                    </div>
                                </div>
                            </div>
                            
                              
                            
                        </div>
                        
                    </div>    
                    <!-- end right section / -->

                    <!-- quote btn click open popup code -->
                      <div class="modal fade" id="quote_btn_click">
                        <div class="modal-dialog" style="left:0%;">
                          <div class="modal-content col-xs-12 col-sm-12 padd_l_r">
                            <div class="modal-header col-xs-12 col-sm-12" style="background-color:#2bcdc1;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title cat_mod_title" >Get Quote Form</h4>
                            </div>

                            <div class="modal-body col-xs-12 col-sm-12 padd_l_r">
                              
                              <div class="col-xs-12 col-sm-12 col-md-12">
                              <form id="registration_form22">
                              <input type="hidden" name="us_id" id="us_id" value="<?php echo $us_id; ?>">
                              <input type="hidden" name="us_id" id="us_id" value="<?php echo $us_id; ?>">
                              
                              <input type="hidden" name="catalog_id" id="catalog_id" value="<?php echo $cl_id; ?>">
                              <center><div id="error_get" class="error-gift"></div></center>

                                  <div class="col-xs-12 col-sm-12 col-md-6 popup_m_top_22">
                                  <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                                  <input type="text" name="organization" placeholder="Organization Name" id="org" class="form-control" autofocus="autofocus">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_1">&nbsp;</div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 col-md-6 popup_m_top_22">
                                                <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                                  <input type="text" name="strength" placeholder="Expected Audience Strength" id="strength" class="form-control strength_no">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_2">&nbsp;</div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 col-md-6 popup_m_top_22">
                                              <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                                <input type="text" name="location" placeholder="Host Class Location" id="location" class="form-control">
                                              </div>
                                              <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_3">&nbsp;</div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 col-md-6 popup_m_top_22">
                                              <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r"> 
                                                <select class="form-control frm_ctrl_22" name="class_mode" id="class_mode">
                                                  <option value="">Select Class Mode</option>
                                                  <?php 

                                                  foreach($all_class_type as $key => $value_class_type){

                                                    $class_type_id         = $value_class_type['ClassType']['id'];
                                                    $class_type_name       = $value_class_type['ClassType']['types'];
                                                    ?>
                                                  <option value="<?php echo $class_type_id; ?>"><?php echo $class_type_name; ?></option>
                                                  <?php
                                                      }
                                                    ?>

                                                  
                                                </select>
                                                <span class="pop_select_btn"><img src="<?php echo HTTP_ROOT?>/img/caret.png"></span>
                                              </div>
                                               <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_4">&nbsp;</div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 col-md-6 popup_m_top_22">
                                              <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                                <input type="text" name="data_qu" placeholder="Date" id="data_get_qu" class="form-control"></div>
                                              <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_3">&nbsp;</div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 col-md-6 popup_m_top_22">
                                                <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                                  <input type="text" name="mobile" placeholder="mobile number" id="mobile" class="form-control mobile_no">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_2">&nbsp;</div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 col-md-6 popup_m_top_22">
                                            <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                              <textarea row="5" name="explain_catalogue_class" placeholder="Explain Catalogue Class Need" id="explain_catalogue_class" class="form-control"></textarea>
                                            </div>
                                             <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_5">&nbsp;</div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 popup_m_top_22">
                                            <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                              <input type="checkbox" name="des_yes" id="checkbox22" onclick="showDis();" value="1"> Is customization required ? If yes, Briefly explain it
                                            </div>
                                             <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_6">&nbsp;</div>
                                          </div>

                                           <div class="col-xs-12 col-sm-12 col-md-12 popup_m_top_22 " id="div_dis"  style="display:none;">
                                            <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r">
                                            
                                              <textarea row="5" name="discription" placeholder="Discription" id="discription" class="form-control"></textarea>
                                            </div>
                                             <div class="col-xs-12 col-sm-12 col-md-12 padd_l_r " id="err_22_7">&nbsp;</div>
                                          </div>
                                           <input type="hidden" name="class_id" value='<?php echo $detail['VendorClasse']['id']; ?>'>
                                            <input type="hidden" name="catalog_id" value='<?php echo $detail['RequestCatalog']['id']; ?>'>
                                          <div class="">&nbsp;</div>
                                          <div class="col-xs-12 col-sm-12 popup_m_top_22">
                                            <input type="button" name="popup_submit" id="p_submit22" class="btn btn-primary" value="Submit">
                                          </div>
                                 </form>
                                <div class="">&nbsp;</div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>  

                      <!-- quote btn click open popup login code -->
                      <div class="modal fade" id="quote_btn_click_login">
                        <div class="modal-dialog">
                          <div class="modal-content col-xs-12 col-sm-12 padd_l_r">
                              <div class="modal-header col-xs-12 col-sm-12" style="background-color:#2bcdc1;">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <center><h3 class="modal-title cat_mod_title" >Get Quote Form</h3></center> 
                              </div>
                              <?php $first=$this->params->pass[0];
                                    $second=$this->params->pass[1];
                              ?>
                              <div class="col-xs-12 col-sm-12 col-md-12 popup_m_top_22_login"><center><p><a href="<?php echo HTTP_ROOT;?>/Homes/login/<?php echo $first?>/<?php echo $second;?>/quote">Please login as learner for access Get Quote form</a></p></center></div>
                          </div>
                        </div>
                      </div>      
                    <script type="text/javascript">
                        function mypopup(){
                          
                          
                          $("#quote_btn_click").modal('show');
                          $("#quote_btn_click_login").modal('hide');
                          // $('#quote_btn_click').show();
                       
                       }
                       function mypopup_login(){
                          
                          
                          $("#quote_btn_click_login").modal('show');
                          $("#quote_btn_click").modal('hide');
                          // $('#quote_btn_click').show();
                       
                       }

                        function showDis(){

                          if(document.getElementById("checkbox22").checked == true){
                             
                              $('#div_dis').show();
                          }else{
                              $('#div_dis').hide();
                          }
                        }

                        // $('#p_submit22').click(function() { 


                        // });


                        /*validation code*/

                      </script>
                    <!-- quote btn click open popup code / -->

                    <!-- end right section / -->

                    <div class="col-md-12 col-sm-12 col-xs-12 people_aricon1">
                            <!-- work 12col -->
                            <?php if($class['VendorClasse']['recurring_class_id'] != 0) { ?>
                                <div class="col-md-12 col-sm-12 col-xs-12 recur_session">
                                    <div class="col-md-12 col-sm-12 col-xs-12 recurring">
                                        <div class="col-md-12 col-sm-12 col-xs-12 recur_book">
                                            <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
                                                <div class="row">
                                                    <div class="col-md-1 col-sm-2 col-xs-1 cltime">
                                                        <?php echo $this->Html->image('icon4.png', array('alt' => 'CakePHP','class'=>'rec_cal'));?>
                                                    </div>
                                                    <div class="col-md-11 col-sm-10 col-xs-11 recur_timing">
                                                        Recurring Session Timing
                                                    </div>
                                                </div>    
                                                <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
                                                    <div class="col-md-1 col-sm-2 col-xs-1">
                                                        
                                                    </div>
                                                    <div class="col-md-11 col-sm-10 col-xs-11 padd_l_r">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r recur_s_time">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 padd_l_r people_aricon">
                                                                <div class="col-md-1 col-sm-1 col-xs-1 padd_l_r">
                                                                    <?php echo $this->Html->image('sideicon3.png', array('alt' => 'CakePHP','class'=>'jan_one'));?>
                                                                </div>
                                                                <div class="col-md-11 col-sm-11 col-xs-11 pm_5">
                                                                    Jan 1, 5:00PM to 7 PM
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-4 padd_l_r people_aricon">
                                                                <div class="pull-right book_flt">
                                                                    <button class="btn recur_book1">Book Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r recur_s_time">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 padd_l_r people_aricon">
                                                                <div class="col-md-1 col-sm-1 col-xs-1 padd_l_r">
                                                                    <?php echo $this->Html->image('sideicon3.png', array('alt' => 'CakePHP','class'=>'jan_one'));?>
                                                                </div>
                                                                <div class="col-md-11 col-sm-11 col-xs-11 pm_5">
                                                                    Jan 1, 5:00PM to 7 PM
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-4 padd_l_r people_aricon">
                                                                <div class="pull-right book_flt">
                                                                    <button class="btn recur_book1">Book Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r recur_s_time">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 padd_l_r people_aricon">
                                                                <div class="col-md-1 col-sm-1 col-xs-1 padd_l_r">
                                                                    <?php echo $this->Html->image('sideicon3.png', array('alt' => 'CakePHP','class'=>'jan_one'));?>
                                                                </div>
                                                                <div class="col-md-11 col-sm-11 col-xs-11 pm_5">
                                                                    Jan 1, 5:00PM to 7 PM
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-4 padd_l_r people_aricon">
                                                                <div class="pull-right book_flt">
                                                                    <button class="btn recur_book1">Book Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r recur_s_time">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 padd_l_r people_aricon">
                                                                <div class="col-md-1 col-sm-1 col-xs-1 padd_l_r">
                                                                    <?php echo $this->Html->image('sideicon3.png', array('alt' => 'CakePHP','class'=>'jan_one'));?>
                                                                </div>
                                                                <div class="col-md-11 col-sm-11 col-xs-11 pm_5">
                                                                    Jan 1, 5:00PM to 7 PM
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-4 padd_l_r people_aricon">
                                                                <div class="pull-right book_flt">
                                                                    <button class="btn recur_book1">Book Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            <?php } ?>
                            <?php /*?><div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:150px;">
                                <center>
                                    <a href="<?php echo HTTP_ROOT;?>/Homes/bookNow"><button class="btn butt_gft
                                         bok-now-btn">
                                        <!-- <i class="fa fa-gift gift_fa" aria-hidden="true"></i> -->
                                        <span class="padd_gft">Book Now</span>
                                    </button></a>
                                </center>
                            </div><?php */?>
                            <div class="col-md-12 col-sm-12 col-xs-12 image_sldr">
                                <!-- image slider -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                   <!--  <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol> -->

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                          <?php echo $this->Html->image('discount_banner.jpg', array('alt' => 'CakePHP','class'=>'img-responsive'));?>
                                        </div>

                                        <div class="item">
                                          <?php echo $this->Html->image('discount_banner.jpg', array('alt' => 'CakePHP','class'=>'img-responsive'));?>
                                        </div>

                                        <div class="item">
                                          <?php echo $this->Html->image('discount_banner.jpg', array('alt' => 'CakePHP','class'=>'img-responsive'));?>
                                        </div>

                                        <div class="item">
                                          <?php echo $this->Html->image('discount_banner.jpg', array('alt' => 'CakePHP','class'=>'img-responsive'));?>
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
                                        <?php echo $this->Html->image('arrow1.png', array('alt' => 'CakePHP','class'=>'glyphicon glyphicon-chevron-left arrow12'));?>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
                                        <?php echo $this->Html->image('arrow2.png', array('alt' => 'CakePHP','class'=>'glyphicon glyphicon-chevron-left arrow12'));?>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- image slider -->
                              
                            </div>
                            
                            <div><div class="col-xs-12 col-sm-12 pad_all">
          <center>
          <span class="learning01">Recommended Classes</span>
          </center>
      </div>
      <div class="">&nbsp;</div>
      <div class="col-xs-12 col-sm-12 ">
          <center>
              <img src="<?php echo HTTP_ROOT;?>/img/underline.png" alt="images not found" class="b_img_line img-responsive">
          </center>
      </div>            
      

      <div class="">&nbsp;</div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
              <div class="row slide3_row1">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
                      <div id="testimonials" class="container-fluid">
                          <div class="row">
                              <div class="C_17_num flex-index-slider">
            
                                  <div id="grid-contant-slider1" class="b_sld">
                                    
                                          <?php 
                                              foreach ($recommended_class as $result) { 
                                                $class_topic = $result['VendorClasse']['class_topic'];
                                                $trending_status = $result['VendorClasse']['trending_status'];
												$class_id = base64_encode($result['VendorClasse']['id']);
                                          ?>
                                          <div class="item b_1_crs treding" id="<?php echo $result['VendorClasse']['id'];?>">
                                            
                                            <li>
                                              <div class="grid1 gridworkshopsbg1 grid-slider-image">
                                                <div class="view1 view-first">
                                                  <div class="index_img">
                                                  <?php 
                                                  echo "<span class='flexible-fixed flexible-fixed-index'>";
                                                  echo ($result['VendorClasse']['class_timing_id'] == 2)?'Fixed':'Flexible';
                                                  echo "</span>";
                                                  ?>
                                                    <?php if(!empty($result['VendorClasse']['upload_class_photo'])){
 
                                                      echo $this->Html->link($this->Html->image('img/Vendor/class_image/'.$result['VendorClasse']['upload_class_photo'], array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));           
                                                     }else{
														
				if(preg_match("/Guitar\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Guitar/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Keyboard\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Bharathanatiyam\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bharathanatiyam/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Piano\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							   else if(preg_match("/Free style\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Freestyle/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Hip- hop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Hip-hop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Bollywood dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bollywooddance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Folk dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Folkdance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Westerndance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Gymnastics\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Gymnastics/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Karnatic\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Karnatic/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tottos\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tattoos/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Yoga\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/yoga/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Zumba\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Zumba/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 } 
							 else if(preg_match("/Swimming\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Swimming/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Physical fitness\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Physicalfitness/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Ballet Dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/BalletDance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Salsa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Salsa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Jazz\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Jazz/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tango\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tango/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Judo\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Judo/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Drums\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Drums/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tabballa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tabballa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western Pop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Pop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Glasspainting\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Glasspainting/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 
							 									 else{
												$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
 }
			
														}?>
                                                    <div class="image_price12 pull-right image_price-index">
                                                    <span class="ccc" style="color:white">
                                                    &#8377;<?php echo $result['VendorClasseLevelDetail'][0]['price'];?></span>
                                                    </div>
                                                    </div>
                                                </div> 
                                                
                                                
                                                 <div class="golden home-tumb-slide">
                                                  <div class="slider-topic12">
                                                  <?php echo $class_topic;?>
                                                  </div>
                                                  <div class="provider-by" style="color:black !important; margin-bottom:10px !important;">
                                                  <strong>By:</strong>
                                                  <?php 
                                                  if($result['User']['vendor_type_id'] ==2):
                                                        echo $result['User']['first_name'].' '.$result['User']['last_name'];
                                                    else:
                                                        echo $result['User']['institute_name'];
                                                    endif;
                                                  ?>
                                                  </div>
                                                  <div class="indx-address">PLACE :<?php echo $result['VendorClasseLocationDetail'][0]['Locality']['name'];?></div>
                                                  <h5>No of Sessions:&nbsp;<?php echo $result['VendorClasse']['no_of_session'];?> </h5>
                                                  <h5>Duration:&nbsp;<?php echo $result['VendorClasse']['class_duration'];?> </h5>
                                                  </div>
                                               
                                              </div>
                                            </li>
                                          </a>
                                          </div>
                                        
                                        <?php }?>
                                    
                                       
                                    </div>
            
                              </div>
                          </div>
                      </div>        
                 </div>
              </div>
            </div> 
    </div>  <!-- worh 12 col -->
                        </div>
                </div>
                <!-- work -->
            </div>
        </div>
    </div>    
</div>
 <?php
 $mapper = array();
 foreach($class['VendorClasseLocationDetail'] as $locz => $value){ 
	 	$mapper[$locz]['lat'] = $value['latitude'];
		$mapper[$locz]['lng'] =$value['longitude'];
		$mapper[$locz]['description'] =$value['location'];
		$mapper[$locz]['title'] = $class['VendorClasse']['class_topic'];
	 }
$loc = json_encode($mapper);
?>	
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places&key=AIzaSyBTWFXzW0kk-GOyASPoip3CXq02xbhr_z4"></script>  -->
<script type="text/javascript">
$(function() {
  $("#p_submit22").click(function() {
  var  org           = $("#org").val();
  var  strength      = $("#strength").val();
  var  location      = $("#location").val();
  var  class_mode    = $("#class_mode").val();
  var  data_get_qu   = $("#data_get_qu").val();
  var  mobile        = $("#mobile").val();
  if(org==''){
    $('#error_get').html('Please Enter Organization');
  }
  else if(strength==''){
    $('#error_get').html('Please Enter Expected Audience Strength');
  }
  else if(location==''){
    $('#error_get').html('Please Enter Host Class Location');
  }
  else if(class_mode==''){
    $('#error_get').html('Please Select Class Mode');
  }
  else if(data_get_qu==''){
    $('#error_get').html('Please Choose Date');
  }
  else if(mobile==''){
    $('#error_get').html('Please Enter Mobile');
  }
  else{
  var query = $('#registration_form22').serialize();
        var url = '<?php echo HTTP_ROOT; ?>/Homes/getQuote';
              $.post(url, query, function (response) {
            
               if(response==1){
                alert('saved successfully');
                  $("#quote_btn_click").modal('hide');
            }
          });
    }
  });
  });
</script>
<script>
// <![CDATA[
var markers = <?php echo $loc; ?>;
window.onload = function () {
var mapOptions = {
center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
zoom: 10,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById("gmap"), mapOptions);
var infoWindow = new google.maps.InfoWindow();
var lat_lng = new Array();
var latlngbounds = new google.maps.LatLngBounds();
for (i = 0; i < markers.length; i++) {
var data = markers[i]
var myLatlng = new google.maps.LatLng(data.lat, data.lng);
lat_lng.push(myLatlng);
var marker = new google.maps.Marker({
position: myLatlng,
map: map,
title: data.title
});
latlngbounds.extend(marker.position);
(function (marker, data) {
google.maps.event.addListener(marker, "click", function (e) {
infoWindow.setContent(data.description);
infoWindow.open(map, marker);
});
})(marker, data);
}
map.setCenter(latlngbounds.getCenter());
map.fitBounds(latlngbounds);

}

// ]]></script>
<script type="text/javascript"> 

		
      $(document).ready(function(){
		  $('.js-form-submit-upper').on('click',function(){
			  
				var len = document.getElementsByName('level_check[]').length;

				var location = $('#VendorClassesLocality').val();
				var z ;
				var total =0;
				if(location == ''){
					alert('Please select location');
					$('.panel-collapse').collapse('show');
					$('#VendorClassesLocality').focus();
					return false;
				} 
				else if ($("#VendorClassesBookNowForm input:checkbox:checked").length == 0)
				{
					alert('Please select your level');
					$('.panel-collapse').collapse('show');
					$('#VendorClassesLocality').focus();
					return false;
				}
				else
				{	
					$('#VendorClassesBookNowForm').submit();
					return true;
				}
				return false;
		
			  
		  });
		$('.js-form-submit').on('click',function(){
				var len = document.getElementsByName('level_check[]').length;
				var location = $('#VendorClassesLocality').val();
				var z ;
				var total =0;
				if(location == ''){
					alert('Please select location');
					return false;
				} 
				else if ($("#VendorClassesBookNowForm input:checkbox:checked").length > 0)
				{
					return true;
				}
				else
				{	alert('Please select your level');
					return false;
					}
		return false;
		});
		$('[data-toggle="popover"]').popover();
		$('.panel-collapse.in').collapse('hide');          
		$('#organization').hide();
		$('#individual').show(); 

          $("#radio-1").click(function(){
          //alert('najmu');
          //Holds the product ID of the clicked element
          $('#organization').hide();
          $('#individual').show();
        });
        $("#radio-2").click(function(){
          // Holds the product ID of the clicked element
          $('#individual').hide();
          $('#organization').show();
        });
        $('.provider-name').click(function(){
          var id = $(this).attr('id');
          window.location.href = "<?php echo HTTP_ROOT;?>/Homes/profile/"+btoa(id);
        });
       /* Modified by dinesh@braingroom.com 19/07/16*/ 
       $('.profile-img').click(function(){
          var id = $(this).attr("profile-pic<?php echo $class['VendorClasse']['user_id'];?>");
          window.location.href = "<?php echo HTTP_ROOT;?>/Homes/profile/"+btoa(id);
        });
		/* Modified by dinesh@braingroom.com 19/07/16*/ 
  $('#datepicker').click(function(){
   
    /* $( "#datepicker").datepicker();*/
    $( "#datepicker" ).datepicker({yearRange:'1900:2030',maxDate:0,changeYear: true, changeMonth: true });

     $( "#datepicker").datepicker("show");
  })
   $('#datepicker').keypress(function(){
     $( "#datepicker" ).datepicker();
     $( "#datepicker" ).datepicker("show");
  });


    $("#file-upload").on('change',function(){
        var a = $(this).val();      
        $('#upload_photo').val(a);
    });

    $("#img_click").on('click',function(){
        $('#file-upload').click();
    });

    $("#file-upload1").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo1').val(a);
    });

    $("#img_click1").on('click',function(){
      $('#file-upload1').click();
    });

    $("#file-upload2").on('change',function(){
        var a = $(this).val();      
        $('#upload_photo2').val(a);
    });

    $("#img_click2").on('click',function(){
        $('#file-upload2').click();
    });

    $("#file-upload3").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo3').val(a);
    });

    $("#img_click3").on('click',function(){
      $('#file-upload3').click();
    });

  

});

</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.bxslider').bxSlider({
	  auto:true,
	  minSlides: 1,
	  maxSlides: 4,
	  slideWidth: 270,
	  slideMargin: 0
	});
});
</script>

<script>
	function select_ticket(i){
		
		if (document.getElementById('level_'+i).checked){
			//document.getElementById('total_cost').value ='';	
					var len = document.getElementsByName('level_check[]').length;
					var z ;
					var total =0;
					for(z =1; z<=len; z++){
						
							if (document.getElementById('level_'+z).checked){
								var level_price = document.getElementById('level_price_'+z).value;
								var max_tickets = document.getElementById('tic_'+z).value;
								// sum = parseInt(level_price*max_tickets);
								   total += parseInt(level_price*max_tickets);
							}
							
						}
					document.getElementById('total_cost').value = total;
					$('#book_to_amt').html('&#8377;'+total);
		}
		else {
			alert('Please check the level before selecting tickets');
		}
	}
  function check_value(i){
		  if (document.getElementById('level_'+i).checked){
			  	
				 	var level_price = document.getElementById('level_price_'+i).value;
					var max_tickets = document.getElementById('tic_'+i).value;
					var total_mt = document.getElementById('total_cost').value;
					if(total_mt === '' || typeof total_mt === "undefined"){total_mt =0;}
					var tot_amount = parseInt(total_mt) + level_price*max_tickets;
					document.getElementById('total_cost').value = tot_amount;
					$('#book_to_amt').html('&#8377;'+tot_amount);
			  } else {
					var level_price = document.getElementById('level_price_'+i).value;
					var max_tickets = document.getElementById('tic_'+i).value;
					var total_mt = document.getElementById('total_cost').value;
					if(total_mt === '' || typeof total_mt === "undefined"){total_mt =0;}
					var tot_amount = parseInt(total_mt) - level_price*max_tickets;
					document.getElementById('total_cost').value = tot_amount;
					$('#book_to_amt').html('&#8377;'+tot_amount);
			}
  }
			
  </script>
  <script type="text/javascript">
 	$(document).ready(function(){
		document.getElementById('total_cost').value ='';
		
		var w = document.getElementsByTagName('input'); 
			for(var i = 0; i < w.length; i++){ 
				if(w[i].type=='checkbox'){ 
					w[i].checked = false; 
				}
		}
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

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
$(document).ready(function(){
	$('#locality').on('change', function (){
		var id = $(this).val();
		$.ajax({
			type: "POST", url: "/vendor_classe_location_details/get_address/"+id,
			data: $(this).serialize(),
			async: false,
					success: function(response){
						$('.js-repl-address').html(response);
					}
		});
	});
	$('.js-show-description').on('click',function (){
		var id =$(this).data('id');
		$.ajax({
			type: "POST", url: "/vendor_classe_level_details/description/"+id,
			data: $(this).serialize(),
			async: false,
					success: function(response){
					$('.modal-body').html(response).modal();
					$(".modal-body").dialog({         
					height: 140,
					modal: true,
					buttons: {
					Ok: function() {
					//$(".modal").dialog('close');
					$('.#myModal').remove();
					}
					}
					}); //dialog
					}//success
			});//ajax
	});
		$('.js-show-locations').on('click',function (){
		var id =$(this).data('id');
		$.ajax({
			type: "POST", url: "/vendor_classe_location_details/details/"+id,
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
	$("input[name='data[VendorClasseLocationDetail]']").on("click",function() {
		
		var id = $(this).val();
		$.ajax({
			type: "POST", url: "/braingroom-product/vendor_classe_location_details/get_address/"+id,
			data: $(this).serialize(),
			async: false,
					success: function(response){
						$('.js-change-address').html(response);
						}//success
			});
	});
});
</script>
<script type="text/javascript">
$("#data_get_qu").datepicker({yearRange:'1900:2030',minDate:0,changeYear: true, changeMonth: true });
</script>
<script type="text/javascript">
$(".mobile_no").keypress(function (e) {
$(document).on("keypress",".mobile_no",function(e){
  if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
       
        return false;
  }
});
});
</script>
<script type="text/javascript">
$(".strength_no").keypress(function (e) {
$(document).on("keypress",".strength_no",function(e){
  if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
       
        return false;
  }
});
});
</script>

