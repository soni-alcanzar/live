<style>
  .home_header_city{

      -moz-appearance: none;
      -webkit-appearance: none;
      padding:10px 12px;
      border:none;
      margin-top:3px;     

  }
</style>

<?php $Allcities    = $this->requestAction(array('controller'=>'Homes', 'action'=>'getCities')); ?>

<?php 

$Allcategory  = $this->requestAction(array('controller'=>'Homes', 'action'=>'getCategory')); 

?>

<?php $Allsegment1=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(1)));
  
      $Allsegment2=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(2)));
     $Allsegment3=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(3)));
     $Allsegment4=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(4)));
     $Allsegment5=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(5)));
     $Allsegment6=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(6)));
?>

<?php

    $a=$this->params->pass[0];
    $city_name =$this->requestAction(array('controller'=>'Homes','action'=>'upcoming/'.$a));

?>


<div class="container-fluid padd_l_r ">  
  <div class="col-md-12 col-xs-12 b_header padd_l_r b12_field">
      <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12  b12_field padd_l_r ">
        <!-- <div class="col-md-12 col-sm-12 col-xs-12 b_header padd_l_r"> -->
          <!-- <div class=" bdrcol-sm-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2  col-xs-12 b_row padd_l_r"> -->
            <div class="col-xs-12 col-sm-12 sr_15_07_padd">
              <!-- ***************left button*************** -->
              <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 pull-left padd_l_r sr_18_07_header_bdr">
                  <a href="<?php echo HTTP_ROOT;?>/Homes/sellExpress">
                    <button class="btn buttclass" >Class Providers</button>
                  </a>
                  <a href="<?php echo HTTP_ROOT;?>/Homes/arrangeClass">
                    <button class="btn butidea sr_18_07_cfo">Catalogue for Organizers</button>
                  </a>
                  <a href="<?php echo HTTP_ROOT;?>/Homes/gift">
                    <button class="btn butgift" >
                      <i class="fa fa-gift gifticon" aria-hidden="true"></i>
                      Gift A Class
                    </button>
                  </a>  
                  <a href="<?php echo HTTP_ROOT;?>/blog">
                    <button class="btn butidea sr_18_07_cfo border-blog">
                    <i class="glyphicon glyphicon-comment"></i> Blog</button>
                  </a>
                  <a href="#">
                  <button class="btn butidea sr_18_07_cfo border-blog"> 
                    Contact US</button>  
                  </a>
              </div>
              <!-- ***************left button*************** -->
              <!-- ***************right button*************** -->
              <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4  padd_l_r">
                  <div class="pull-right br_login" id="br_login" >
                      <i class="fa fa-sign-in b_login" aria-hidden="true"></i>
                      
                        <?php  
                         
                        $user =$this->Session->read('User'); 

                        if(!empty($user))
                        {
                          ?>
                          <?php echo $this->Element('home_comman_logout'); ?>
                        
                        <?php }else{ ?>
                        <span>
                          <?php echo $this->Html->link('Login/Sign Up', array('controller' => 'Homes','action' => 'login'), array('escape' => false,'id'=>'','class'=>'b_signup','style'=>'padding:10px 12px;'));
                          ?>
                        </span>
            <?php
                      }
                      ?>
                      
                      <select class="b_chennai home_header_city" name="header_city_id" id="header_city_id"       onchange="get_city_value(this.value)">
                             <?php  if(!empty($city_name)){?>
                              <option selected value="<?php echo $city_name;?>">
                                <?php echo $city_name ;?>
                              </option>
                            
                                <?php }
                                else{
                                  foreach ($Allcities as  $city_value){ ?>
                                    <option value="<?php echo $city_value['City']['id']; ?>">
                                      <?php echo $city_value['City']['name']; ?>
                                    </option>
                                <?php }} ?>
                        </select>
                        <i class="fa fa-map-marker" aria-hidden="true" style="position:relative;left:-6%;"></i>
                  </div>
              </div>
              <!-- ***************right button*************** -->
            </div>
          <!-- </div> -->
        <!-- </div> -->
      </div>
  </div>
  <div class="col-xs-12 col-sm-12 padd_l_r">
        <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-xs-12 col-sm-12 padd_l_r sr_29_07_m_top">
              <!-- <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 br_pad brn_pad"> -->
                 <!--  <div class="col-sm-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 col-xs-12 brn_pad"> -->
                      <div class="col-md-3 col-sm-3 col-xs-12 b_logo brn_pad b_widh sr_29_07_lgo_img">
                        <a href="<?php echo HTTP_ROOT;?>">
                          <img src="<?php echo HTTP_ROOT;?>/img/logo.jpg" class="blwdh">
                        </a>
                      </div>
                      <!-- ******************new alignment***************** -->
                      <div class="col-md-4 col-sm-3 col-xs-12 padd_l_r b_fcb1 b_pad1 sr_29_07_md_screen">
                        <center class="bl_cntr">
                         
                            <div class="col-md-9 col-sm-12 col-xs-12 bl_inpt">
                              <div>
                                <div id="b11"><a href="#" class="fun123" onclick="serch_cat('1');">Fun & Recreation</a></div>
                                <div id="b12"><a href="#" class="fun123" onclick="serch_cat('2');">Informative & Motivational</a></div>
                                <div id="b13"><a href="#" class="fun123" onclick="serch_cat('3');">Health & Fitness</a></div>
                                <div id="b14"><a href="#" class="fun123" onclick="serch_cat('4');">Kids & Teens</a></div>
                                <div id="b15"><a href="#" class="fun123" onclick="serch_cat('5');">Education & Skill Development</a></div>
                                <div id="b16"><a href="#" class="fun123" onclick="serch_cat('6');">Home Maintenance</a></div>
                              </div>
                            </div>    
                        </center>
                      </div>
                      <div class="col-md-5 col-sm-6 col-xs-12 padd_l_r b_fcb2 b_pad12 sr_15_07_connect_btn">
                          <div class="pull-right b_lft">
                             <a href="<?php echo HTTP_ROOT;?>">
                            <button class="btn btclassnt1  fbttp" style="padding:5px 10px;">
                              <i class="fa fa-home" aria-hidden="true"style="margin-right:5px;"></i>Home</button>
                             </a>
                            <button class="btn btclass1 fbttp" style="padding:5px 20px;"><img src="<?php echo HTTP_ROOT;?>/img/iconfind.png" />Find</button>
                            <a href="<?php echo HTTP_ROOT;?>/Homes/upcoming">
                            <button class="btn btclassnt1  fbttp" style="padding:5px 10px;">
                            <!--<img src="<?php echo HTTP_ROOT;?>/img/iconconnect1.png" />--> <i class="fa fa-group"></i> Connect</button>
                            </a>
                          </div>
                      </div>
                      <!-- ******************new alignment***************** -->
                  </div>
        </div>
  </div>
</div>


<script type="text/javascript">
function serch_cat(catid){
  $('#search_cat_id').val(catid);
}
</script>
<script>
  function get_city_value(id){
    if(id != 1 ){
       window.location.href = "<?php echo HTTP_ROOT;?>/homes/upcoming/"+btoa(id); 
    }
  }
</script>
