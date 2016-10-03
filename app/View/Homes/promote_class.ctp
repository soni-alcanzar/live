<?php 

// Merchant key here as provided by Payu
$MERCHANT_KEY = "hF6qmoBJ";

// Merchant Salt as provided by Payu
$SALT = "sBL86X9MpG";

 // Generate random transaction id
 $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

//$PAYU_BASE_URL = "https://test.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";

$failuri   = HTTP_ROOT."/Homes/promtclass_failure";
$succuri   = HTTP_ROOT."/Homes/promtclass_success";
  
$user_email = $user_view['UserMaster']['email'];
$user_first = $user_view['UserMaster']['first_name']; 
$user_phone = $user_view['UserMaster']['contact_no'];
$user_id    = $user_view['UserMaster']['id'];
  
if($user_view['UserMaster']['user_type_id']=='1'){

?>

<style>
.funmp1 {
    width: 100%;
  
    background-image: url("<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $user_view['UserMaster']['background_image'];?>");

    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-bottom:10px;
}
</style>
<?php } else{?>
<style>
.funmp1 {
    width: 100%;
  
    background-image: url("<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $user_view['UserMaster']['background_image'];?>");

    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-bottom:10px;
}
</style>
<?php }?>
<style>
.myprflbrd {
    border: 0px solid #00477B !important;
}
.snr {
    padding-top: 3px;
}
.edit-bg {
    color: rgb(255, 255, 255);
    font-size: 21px;
}
.edit-photo{
  color: #FFF;
  font-family: 'os_bold';
  font-size: 14px;
  cursor: pointer;
}
.image_price12{

   background-color: #54c0c1;
    border-radius: 40%;
    bottom: 239px;
    height: 48px;
    position: relative;
    width: 90px;
    margin-right:8px;
}
.ccc{
     bottom: -10px;
    font-size: 20px;
    padding-left: 32px;
    padding-top: 20px;
    position: relative; 
}
.fa-camera-br {
    color: white;
    font-size: 24px;
    position: relative;
    right: 21px;
    top: 57px;
}

#hideimge{
display:none;
}
.user765 {
    position: relative;
    bottom: 90px;
    left: 155px;
}
.najm1 {
    position: relative;
    bottom: 50px;
    right: -5px;
}
.pimgtop{padding: 5px;
}
.booking{
background-color:#00477B;
color:#fff;
border-radius:30%;
}
.clrdash123 {
    background-color: #2BCDC1;
    padding: 10px 0px;
}

.err_check{

  color: red;
   font-family: "os_Regular";
    font-size: 15px;

}

.err_check_cate{

  color: red;
  font-family: "os_Regular";
  font-size: 15px;

}

</style>
<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786 cstm_md9">
  <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
        <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
          <div><i class="fa fa-bars dshclr12" style="display:none;"></i><img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432 dummy_user"><span class="dashbrd12 prf543">Provider Profile</span></div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 bar321 bar876 snr">
            <div class="pull-right setnote">
                <i class="fa fa-cog dshclr1"></i>
                <span class="dashbrd1 grg">Settings</span>
                <i class="fa fa-bell dshclr1" aria-hidden="true"></i>
                <span class="dashbrd1 grg">Notification</span>
                 <?php 
                       $profile_img=$user_view['UserMaster']['profile_image'];
                      
                       $user_type_id=$user_view['UserMaster']['user_type_id'];
                    
                       if($profile_img!='' and $user_type_id==1)
                       {
                        ?>
                         <img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
                         <?php
                     }
                     elseif($profile_img!='' and $user_type_id==2)
                     {
                        ?>
                        <img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
                        <?php
                    }
                    elseif($profile_img!='' and $user_type_id=='')
                     {
                        ?>
                        <img src="<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
                        <?php
                    }
                 ?>
                <span class="dropdown1">
                    <span class="dashbrd1 grg1"><?php echo $user_view['UserMaster']['first_name'];?></span>
                    <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
                    <div class="dropdown-content1 logout">
                        <p><a href="#" class="logout_a">Profile</a></p>
                        <p><a href="#" class="logout_a">Change Password</a></p>
                        <p><a href="<?php echo HTTP_ROOT;?>/homes/logout" class="logout_a">Logout</a></p>
                    </div>
                </span>
                <br>
                <!--<span class="vendor">Vendor</span>-->
            </div>
        </div>
    </div>
   
        
    <!-- work of this page start -->
    <div class="col-md-12 col-sm-12 col-xs-12 prmt-featured">
      Get Featured in Home Page
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 prmpt-bg">
      <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r  slct-class">
        Select a Class
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 prmpt-hatha">
      <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-weight">
        <span class="err_check"></span>
        <?php $i=1; foreach ($promt_data as $data) { 

          $class_type_id = $data['VendorClasse']['class_timing_id']; 

         ?>
            <?php if($class_type_id == 1 ){ ?>

            <div class="col-md-12 col-sm-12 col-xs-12 book-cal">
                <div class="col-md-11 col-sm-11 col-xs-11 padd_l_r checkbox">
                    <div class="col-md-5 col-sm-12 col-xs-12 book-hatha" style="padding-left: 0px;">
                        <?php echo $data['VendorClasse']['class_topic']; ?>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 padd_l_r sr_12_08_pclass_cal">
                        <i class="fa fa-calendar book-fa-cal" aria-hidden="true"></i>
                        <span class="book-friday"><?php echo $data['VendorClasse']['starting_month']; ?></span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 padd_l_r sr_12_08_pclass_cal">
                        <i class="fa fa-calendar book-fa-cal" aria-hidden="true"></i>
                        <span class="book-friday"><?php echo $data['VendorClasse']['end_month']; ?></span>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 padd_l_r">
                    <div class="checkbox">
                        <label>
                            <input id="cb_<?php echo $data['VendorClasse']['id']; ?>" type="checkbox" class="cb12" name="cb[]" value="<?php echo $data['VendorClasse']['id']; ?>" onclick="handleClick(this.id);">
                        </label>
                    </div>
                </div>    
            </div>

            <?php }else{ ?> 

              <div class="col-md-12 col-sm-12 col-xs-12 book-cal">
                <div class="col-md-11 col-sm-11 col-xs-11 padd_l_r checkbox">
                  <div class="col-md-5 col-sm-12 col-xs-12 book-hatha" style="padding-left: 0px;">
                    <?php echo $data['VendorClasse']['class_topic']; ?>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 padd_l_r sr_12_08_pclass_cal">
                    <i class="fa fa-calendar book-fa-cal"></i>
                    <span class="book-friday"><?php echo $flxied_data; ?></span>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 padd_l_r sr_12_08_pclass_cal">
                    <?php echo $this->Html->image('sideicon3.png', array('alt' => 'CakePHP','class'=>'book-clock'));?>
                    <span class="book-friday"><?php echo $flxied_time; ?></span>
                  </div>
                </div>
                <div class="cairo_pattern_add_color_stop_rgb(pattern, offset, red, green, blue)">
                  <div class="checkbox">
                      <label>
                          <input id="cb_<?php echo $data['VendorClasse']['id']; ?>" name="cb1"  class="cb12" type="checkbox" value="<?php echo $data['VendorClasse']['id']; ?>" onclick="handleClick(this.id);">
                      </label>
                    </div>
                </div>    
              </div>

            <?php } ?>  

        <?php $i++; } ?>

      </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-weekpad">
        <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r book-cust">
            <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r">
                <a href="#" class="btn book-weekly-pricing">Weekday Pricing</a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 book-regular">
                Rs.<?php echo $price_data[0]['FeaturedPrice']['home_weekday_price'];?>/
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r book-cust1"> 
            <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r">
                <a href="#" class="btn book-weekend-pricing">Weekend Pricing</a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 book-regular">
                Rs.<?php echo $price_data[0]['FeaturedPrice']['home_weekend_price'];?>/
            </div>
        </div>
    </div>

  <div class="col-md-12 col-sm-12 col-xs-12 book-cal sr_12_08_cdate">
    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r checkbox">
      <div class="col-md-7 col-sm-12 col-xs-12 padd_l_r">
        <div class="col-md-3 col-sm-3 col-xs-12 padd_l_r book-friday">
          Choose Date
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 padd_l_r sr_12_08_from_choose">
          <span class="book-hatha">From:</span>

          <input type="text" id="TextBox1" />
          
        </div>
      </div>  
      <div class="col-md-5 col-sm-12 col-xs-12 padd_l_r  sr_12_08_m_choose">
        <span class="book-hatha">To:</span>
        <!-- <span class="book-friday" id="shodate1">Friday, 11jan 2016</span> -->
        <input type="text" id="TextBox2" />
        
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12 book-cal">
    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r checkbox" style="margin-top:10px;">
      <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r book-friday">
        Total Cost:
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r book-hath" id="totat_money">
        Rs.0
      </div>
    </div>
  </div>
    
  <input type="hidden" id="hidden_list">

   <?php 
      $PAYU_BASE_URL = "https://secure.payu.in";
      $action = $PAYU_BASE_URL . '/_payment';  
  ?>

  <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" id="key"   name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" id="hash"  name="hash" value=""/>
      <input type="hidden" id="txnid" name="txnid" value="<?php echo $txnid ?>" />
      <input name="amount" id="amt" value="" type="hidden"/>
      <input name="firstname" id="firstname" value="" type="hidden"/>
      <input name="email" id="email12" value="" type="hidden" />
      <input name="phone" id="phone" value="" type="hidden" />
      <input type="hidden" name="productinfo" id="productinfo">
      <input type="hidden" name="surl"  id="surl" value="" size="64" />
      <input type="hidden" name="furl"  id="furl" value="" size="64" />
      <input type="hidden" name="service_provider" id="service_provider" value="payu_paisa" size="64" />
   
     <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r" >
      <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-3 col-xs-6 book-weekpad">
        <input  class="btn book-weekend-pricing" input style="display:none;background-color:red ! important;" type="submit" value="Proceed to payment" id="pay_submit">
      </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r" style="margin-bottom: 15px;">
      <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-3 col-xs-6 book-weekpad">
        <span id="pay" class="btn book-weekend-pricing">Confirm</span>
      </div>
    </div>

   </table>
    </form>
    <!-- work of this page start -->
    <div class="col-md-12 col-sm-12 col-xs-12 prmt-featured">
      Get Featured in Category Page
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 prmpt-bg">
      <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r  slct-class">
        Select a Class
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 prmpt-hatha">
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-weight">
            <span class="err_check_cate"></span>
            <?php $i=1; foreach ($promt_data as $data) { 
                $class_type_id = $data['VendorClasse']['class_timing_id']; 
            ?>
            <?php if($class_type_id == 1 ){ ?>
            <div class="col-md-12 col-sm-12 col-xs-12 book-cal">
                <div class="col-md-11 col-sm-11 col-xs-11 padd_l_r checkbox">

                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 book-hatha" style="padding-left:0px;">
                        <?php echo $data['VendorClasse']['class_topic']; ?>
                    </div>
                  
                    <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r col-lg-2 sr_12_08_sevect_div_m">
                        <i class="fa fa-calendar book-fa-cal" aria-hidden="true"></i>
                        <span class="book-friday"><?php echo $data['VendorClasse']['starting_month']; ?></span>
                    </div>
                  
                    <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r col-lg-2 sr_12_08_sevect_div_m">
                        <i class="fa fa-calendar book-fa-cal" aria-hidden="true"></i>
                        <span class="book-friday"><?php echo $data['VendorClasse']['end_month']; ?></span>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 sr_12_08_select_box_h col-lg-3 padd_l_r " id="select_cat<?php echo $data['VendorClasse']['id']; ?>">
                        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r" >

                            <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r pull-right">  
                                <select class="input_login1 form-control cat_ids" name="category" id="cat<?php echo $data['VendorClasse']['id'];?>" onchange="get_select_dropdown_value(this.value,'<?php echo $data['VendorClasse']['id']; ?>')"/>
                                    <option value="-1" >Select Category</option>
                                    <?php foreach($category_data as $category_datas) { ?>
                                        <option value="<?php echo $category_datas['Category']['id']; ?>">
                                          <?php  echo $category_datas['Category']['category_name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <input type="hidden" id="select_cat_dd<?php echo $data['VendorClasse']['id']; ?>"/>
                            </div>
                            <i class="fa fa-caret-down prmt_icon_down" aria-hidden="true" style=""></i>
                            
                        </div>
                       
                        
                    </div>   
                </div>

                <div class="col-md-1 col-sm-1 col-xs-1 sr_12_08_pad_checkbox">
                    <div class="checkbox ">
                        <label>
                            <input id="catcb_<?php echo $data['VendorClasse']['id']; ?>" type="checkbox" class="catcb12" name="cb[]" value="<?php echo $data['VendorClasse']['id']; ?>" onclick="handleClick_cate(this.value)">
                        </label>
                    </div>
                </div>    
            </div>

            <?php }else{ ?> 

              <div class="col-md-12 col-sm-12 col-xs-12 book-cal">
                <div class="col-md-11 col-sm-11 col-xs-11 padd_l_r checkbox">

                  <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 book-hatha" style="padding-left:0px;"> 
                    <?php echo $data['VendorClasse']['class_topic']; ?>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r col-lg-2 sr_12_08_sevect_div_m">
                    <i class="fa fa-calendar book-fa-cal" aria-hidden="true"></i>
                    <span class="book-friday"><?php echo $flxied_data; ?></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r col-lg-2 sr_12_08_sevect_div_m">
                    <?php echo $this->Html->image('sideicon3.png', array('alt' => 'CakePHP','class'=>'book-clock'));?>
                    <span class="book-friday"><?php echo $flxied_time; ?></span>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12 sr_12_08_select_box_h col-lg-3 padd_l_r " id="select_cat<?php echo $data['VendorClasse']['id']; ?>" >
                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r"  >
                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r pull-right">  
                      <select class="input_login1 form-control cat_ids" name="category" 
                            id="cat<?php echo $data['VendorClasse']['id']; ?>" onchange="get_select_dropdown_value(this.value,'<?php echo $data['VendorClasse']['id']; ?>')"/>
                             
                              <option value="-1" >Select Category</option>
                             <?php foreach($category_data as $category_datas) { ?>
                          
                                <option value="<?php echo $category_datas['Category']['id']; ?>">
                                    <?php  echo $category_datas['Category']['category_name']; ?>
                                </option>

                             <?php } ?>
                      </select>
                      <i class="fa fa-caret-down prmt_icon_down" aria-hidden="true" style=""></i>
                       <input type="hidden" id="select_cat_dd<?php echo $data['VendorClasse']['id']; ?>"/>
                    </div>   
                    </div>

                    
                   
                  </div>
                </div>

                <div class="col-md-1 col-sm-1 col-xs-1 padd_l_r">
                  <div class="checkbox">
                      <label>
                           <input id="catcb_<?php echo $data['VendorClasse']['id']; ?>" type="checkbox" class="catcb12" name="cb[]" value="<?php echo $data['VendorClasse']['id']; ?>" onclick="handleClick_cate(this.value)">
                      </label>
                    </div>
                </div>

              </div>

            <?php } ?>  


        <?php $i++; } ?>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-weekpad">
      <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r book-cust">
      <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r">
        <a href="#" class="btn book-weekly-pricing">Weekday Pricing</a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 book-regular">
        Rs.<?php echo $price_data[0]['FeaturedPrice']['category_weekday_price'];?>/
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 padd_l_r book-cust1"> 
      <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r">
        <a href="#" class="btn book-weekend-pricing">Weekend Pricing</a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 book-regular">
        Rs.<?php echo $price_data[0]['FeaturedPrice']['category_weekend_price'];?>/
      </div>
    </div>  
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12 book-cal sr_12_08_cdate">
    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r checkbox">
      <div class="col-md-7 col-sm-12 col-xs-12 padd_l_r ">
        <div class="col-md-3 col-sm-3 col-xs-12 padd_l_r book-friday">
          Choose Date
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 padd_l_r sr_12_08_from_choose">
          <span class="book-hatha">From:</span>
          
          <input type="text" id="TextBox1_cate" />
          
        </div>
      </div>  
      
      <div class="col-md-5 col-sm-12 col-xs-12 padd_l_r sr_12_08_m_choose">
        <span class="book-hatha">To:</span>
        
        <input type="text" id="TextBox2_cate" />
        
      </div>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12 book-cal">
    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r checkbox" style="margin-top:10px;">
      <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r book-friday">
        Total Cost:
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 padd_l_r book-hath" id="totat_money_cate">
        Rs.0
      </div>
    </div>
  </div>
  
  <?php 
      $PAYU_BASE_URL = "https://secure.payu.in";
      $action1 = $PAYU_BASE_URL . '/_payment';  
  ?>

  <form action="<?php echo $action1; ?>" method="post" name="payuForm">
       
        <input type="hidden" id="key_cate"   name="key" value="<?php echo $MERCHANT_KEY ?>" />
        <input type="hidden" id="hash_cate"  name="hash" value=""/>
        <input type="hidden" id="txnid_cate" name="txnid" value="<?php echo $txnid ?>" />
        <input name="amount" id="amt_cate" value="" type="hidden"/>
       
        <input name="firstname" id="firstname_cate" value="" type="hidden"/>
        <input name="email" id="email12_cate" value="" type="hidden" />
        <input name="phone" id="phone_cate" value="" type="hidden" />
        
        <input type="hidden" name="productinfo" id="productinfo_cate">
        <input type="hidden" name="surl"  id="surl_cate" value="" size="64" />
        <input type="hidden" name="furl"  id="furl_cate" value="" size="64" />
        <input type="hidden" name="service_provider" id="service_provider_cate" value="payu_paisa" size="64" />
     
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r" >
          <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-3 col-xs-6 book-weekpad">
            <input  class="btn book-weekend-pricing" input style="display:none;background-color:red !important;" type="submit" value="Proceed to payment" id="pay_submit_cate">
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
          <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-3 col-xs-6 book-weekpad">
            <span id="pay_cate" class="btn book-weekend-pricing">Confirm</span>
          </div>
        </div>

   </table>
 
  </form>

    <!-- work of this page end -->
  <input type="hidden" id="hidden_list">
  <input type="hidden" id="weekdays">
  <input type="hidden" id="weekends">
  <input type="hidden" id="weekdays_cate">
  <input type="hidden" id="weekends_cate">
  <input type="hidden"   id="hidden_list_cate">
  <input type="hidden"   id="hidden_list_cate12">
</div>


<script>

  $("#TextBox1").datepicker({
      minDate: 0,
      dateFormat: 'D d M yy',
      showOn: "both", 
      buttonText: "<i class='fa fa-calendar book-fa-cal'></i>", 
      maxDate: '+1Y+6M',

      onSelect: function (dateStr) {
         
          var min = $(this).datepicker('getDate'); // Get selected date
          $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today

      } 

  });

  $("#TextBox2").datepicker({
      minDate: '0',
      dateFormat: 'D d M yy',
      showOn: "both", 
      buttonText: "<i class='fa fa-calendar book-fa-cal'></i>", 
      maxDate: '+1Y+6M',
      onSelect: function (dateStr) {
          var max = $(this).datepicker('getDate'); // Get selected date
          $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
          var start = $("#TextBox1").datepicker("getDate");
          var end = $("#TextBox2").datepicker("getDate");
          var days = (end - start) / (1000 * 60 * 60 * 24);
          $("#TextBox3").val(days);

      var startDate = new Date(start);
      var endDate = new Date(end);
      var totalSundays = 0;

      for (var i = startDate; i <= endDate; ){
          if (i.getDay() == 0){
              totalSundays++;
          }
          i.setTime(i.getTime() + 1000*60*60*24);
      }

      number_of_days(totalSundays,days);
     
      }
});

</script>

<script>
  
  function handleClick(id) {

   // alert(id);

  var sList = "";

  var i = 0;

    $('input[type=checkbox]').each(function () {
        
        var sThisVal = (this.checked ? + $(this).val() : "");

        if(sList=="")
          sList += sThisVal;

        else
          sList += (sThisVal=="" ? sThisVal : ",")+sThisVal;

        i++;
      
    });
    
    $('#hidden_list').val(sList);   
    
  }

</script>


<script>
    
    function number_of_days(totalSundays,days){

      var sList        =  $('#hidden_list').val();    
      var res          =  sList.split(","); 
      var no_of_class  =  res.length;

      var Weekdayprice = "<?php echo $price_data[0]['FeaturedPrice']['home_weekday_price']; ?>";    
      var Weekendprice = "<?php echo $price_data[0]['FeaturedPrice']['home_weekend_price']; ?>";
      var no_sundays   = totalSundays;
      var total_days   = days;
      var left_days    = total_days - no_sundays + 1; 

      var total_money  = ((Weekdayprice * left_days) + (Weekendprice * no_sundays))*no_of_class;
      var total_money1 = "Rs."+total_money;
      
      var total_money  = ((Weekdayprice * left_days) + (Weekendprice * no_sundays))*no_of_class;
      var total_money1 = "Rs."+total_money;

      var frt_name     = "<?php echo $user_first; ?>";
      var user_no      = "<?php echo $user_phone; ?>";
      var uer_mail     = "<?php echo $user_email; ?>";
      var succuri      = "<?php echo $succuri; ?>";
      var failuri      = "<?php echo $failuri; ?>";
      var prd_info     = "Home_featues_"+sList;

      $('#totat_money').text(total_money1);
      $('#amt').val(total_money);
      $('#firstname').val(frt_name);
      $('#email12').val(uer_mail);
      $('#phone').val(user_no);
      $('#surl').val(succuri);
      $('#furl').val(failuri);
      $('#productinfo').val(prd_info);
      $('#weekdays').val(left_days);
      $('#weekends').val(no_sundays);

        
    }

    $("#pay").click(function() {

      var user_id          = "<?php echo $user_id; ?>"
      var fromdate         = $('#TextBox1').val();
      var todates          = $('#TextBox2').val();
      var sList            = $('#hidden_list').val();
      var amount           = $("#amt").val();
      var firstname        = $("#firstname").val();
      var email            = $("#email12").val();
      var phone            = $("#phone").val();
      var productinfo      = $('#productinfo').val();
      var surl             = $("#surl").val();
      var furl             = $("#furl").val();
      var key              = $("#key").val();
      var hash             = $("#hash").val();
      var txnid            = $("#txnid").val();
      var service_provider = $("#service_provider").val();
      var key              = $("#key").val();
      var hash             = $("#hash").val();
      var weekdays         = $("#weekdays").val();
      var weekends         = $("#weekends").val();   
      var tran_id          = 1;
      
      if(sList == ""){

              $('.err_check').html('Please Select any class.');             
              $('.cb12').focus();
              
              return false;
          
          }else{

              $('.err_check').html('&nbsp;');             
          
          } 

      if(fromdate == ""){

              $('.err_check').html('Please Select Date.');             
              $("#TextBox1").focus();
              return false;
          }else{
              $('.err_check').html('&nbsp;');             
          }

          if(todates == ""){

              $('.err_check').html('Please Select Second Date.');            
              $("#TextBox2").focus();
              
              return false;
          }else{
              
              $('.err_check').html('&nbsp;');             
          
          }
      
          $.ajax({  

              type: "POST",  
              url: "<?php echo HTTP_ROOT; ?>/Homes/savePromtclass",  
             
              data: 'key='+ key+'&amount='+ amount +'&firstname='+firstname+'&email='+email+'&phone='+phone+'&productinfo='+productinfo+'&txnid='+txnid+'&hash='+hash+'&surl='+surl+'&furl='+furl+'&service_provider='+service_provider+'&fromdate='+fromdate+'&todates='+todates+'&sList='+sList+'&tran_id='+tran_id+'&weekdays='+weekdays+'&weekends='+weekends+'&user_id='+user_id,  
           
              success: function(loginmsg){  
                
                if(!loginmsg==''){
                  $('#pay').hide();
                  $('#pay_submit').show();
                 
                  var l = loginmsg.split("*");
                  var txnid = l[0];
                  var hash = l[1];
                  $('#hash').val(hash);
               
                }
             }
        }); 

    }); 

</script>
    
<script>

  $("#TextBox1_cate").datepicker({
      minDate: 0,
      dateFormat: 'D d M yy',
      showOn: "both", 
      buttonText: "<i class='fa fa-calendar book-fa-cal'></i>", 
      maxDate: '+1Y+6M',

      onSelect: function (dateStr) {
         
          var min = $(this).datepicker('getDate'); // Get selected date
          $("#TextBox2_cate").datepicker('option', 'minDate', min || '0'); // Set other min, default to today

      } 

  });

  $("#TextBox2_cate").datepicker({
      minDate: '0',
      dateFormat: 'D d M yy',
      showOn: "both", 
      buttonText: "<i class='fa fa-calendar book-fa-cal'></i>", 
      maxDate: '+1Y+6M',
      onSelect: function (dateStr) {
          var max = $(this).datepicker('getDate'); // Get selected date
          $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
          var start = $("#TextBox1_cate").datepicker("getDate");
          var end = $("#TextBox2_cate").datepicker("getDate");
          var days = (end - start) / (1000 * 60 * 60 * 24);
          $("#TextBox3").val(days);

      var startDate = new Date(start);
      var endDate = new Date(end);
      var totalSundays = 0;

      for (var i = startDate; i <= endDate; ){
          
          if (i.getDay() == 0){
              totalSundays++;
          }

          i.setTime(i.getTime() + 1000*60*60*24);
      }

       number_of_days_cate(totalSundays,days);
     
      }
  });

</script>

<script>
  
  var seg_ids = new Array();

  function handleClick_cate(id) {

         var sList = "";
         var i = 0;

        $('input[type=checkbox]').each(function () {

            var sThisVal = (this.checked ? + $(this).val() : "");

            if(sList=="")
              sList += sThisVal;

            else
              sList += (sThisVal=="" ? sThisVal : ",")+sThisVal;

            i++;
          
        });

        $('#hidden_list_cate').val(sList); 
  
  }

  

  function get_select_dropdown_value(catid,id){

    if(catid != -1){

       $('#select_cat_dd'+id).val(catid);

    }else{

       $('#select_cat_dd'+id).val("");
    }
   
  }

</script>

<script>
      
    var seg_ids = new Array();

    function number_of_days_cate(totalSundays,days){

      var cat_ids      =  $('#cat1123').val();
      var sList        =  $('#hidden_list_cate').val();    
      var res          =  sList.split(","); 
      var no_of_class  =  res.length;

      var Weekdayprice = "<?php echo $price_data[0]['FeaturedPrice']['category_weekday_price']; ?>";    
      var Weekendprice = "<?php echo $price_data[0]['FeaturedPrice']['category_weekend_price']; ?>";
      var no_sundays   = totalSundays;
      var total_days   = days;
      var left_days    = total_days - no_sundays + 1; 

      var total_money  = ((Weekdayprice * left_days) + (Weekendprice * no_sundays))*no_of_class;
      var total_money1 = "Rs."+total_money;
      
      var total_money  = ((Weekdayprice * left_days) + (Weekendprice * no_sundays))*no_of_class;
      var total_money1 = "Rs."+total_money;

      var frt_name     = "<?php echo $user_first; ?>";
      var user_no      = "<?php echo $user_phone; ?>";
      var uer_mail     = "<?php echo $user_email; ?>";
      var succuri      = "<?php echo $succuri; ?>";
      var failuri      = "<?php echo $failuri; ?>";
      var prd_info     = "Category_featues_"+sList;

      $('#totat_money_cate').text(total_money1);
      $('#amt_cate').val(total_money);
      $('#firstname_cate').val(frt_name);
      $('#email12_cate').val(uer_mail);
      $('#phone_cate').val(user_no);
      $('#surl_cate').val(succuri);
      $('#furl_cate').val(failuri);
      $('#productinfo_cate').val(prd_info);
      $('#weekdays_cate').val(left_days);
      $('#weekends_cate').val(no_sundays);
        
    }

    $("#pay_cate").click(function() {

      var user_id          = "<?php echo $user_id; ?>"
      var fromdate         = $('#TextBox1_cate').val();
      var todates          = $('#TextBox2_cate').val();
      var sList            = $('#hidden_list_cate').val();
      var cat_ids          = $('#cat1123').val();
      var amount           = $("#amt_cate").val();
      var firstname        = $("#firstname_cate").val();
      var email            = $("#email12_cate").val();
      var phone            = $("#phone_cate").val();
      var productinfo      = $('#productinfo_cate').val();
      var surl             = $("#surl_cate").val();
      var furl             = $("#furl_cate").val();
      var key              = $("#key_cate").val();
      var hash             = $("#hash_cate").val();
      var txnid            = $("#txnid_cate").val();
      var service_provider = $("#service_provider_cate").val();
      var weekdays         = $("#weekdays_cate").val();
      var weekends         = $("#weekends_cate").val();   
      var tran_id          = 1;
      
      var sListarray       = sList.split(",");  
      var checkedcount     = sListarray.length;  
     
      seg_ids = [];  

      if(sList == ""){

              $('.err_check_cate').html('Please Select Class.');             
              $('.catcb12').focus();
              
              return false;
          
          }else{

              $('.err_check_cate').html('&nbsp;');             
          
      }

      for(var i=0; i<checkedcount;i++){

          var selected_dropdown = $('#select_cat_dd'+sListarray[i]).val();

          if(selected_dropdown == ""){

              alert("Please Select category.");

              $('#cat'+sListarray[i]).focus();
              $('#hidden_list_cate12').val("");   
              return false;
          
          }else{

              seg_ids.push(selected_dropdown);
              $('#hidden_list_cate12').val(seg_ids); 
          }

      }     

      if(fromdate == ""){

              $('.err_check_cate').html('Please Select Date.');             
              $("#TextBox1_cate").focus();
              return false;
          }else{
              $('.err_check').html('&nbsp;');             
          }

          if(todates == ""){

              $('.err_check_cate').html('Please Select Second Date.');            
              $("#TextBox2_cate").focus();
              
              return false;
          }else{
              
              $('.err_check_cate').html('&nbsp;');             
          
          }
          
          var cat_ids =  $('#hidden_list_cate12').val();

          $.ajax({  

              type: "POST",  
              url: "<?php echo HTTP_ROOT; ?>/Homes/savePromtclass",  
             
              data: 'key='+ key+'&amount='+ amount +'&firstname='+firstname+'&email='+email+'&phone='+phone+'&productinfo='+productinfo+'&txnid='+txnid+'&hash='+hash+'&surl='+surl+'&furl='+furl+'&service_provider='+service_provider+'&fromdate='+fromdate+'&todates='+todates+'&sList='+sList+'&cat_ids='+cat_ids+'&tran_id='+tran_id+'&weekdays='+weekdays+'&weekends='+weekends+'&user_id='+user_id,  
           
              success: function(loginmsg){  
                
                if(!loginmsg==''){
                  $('#pay_cate').hide();
                  $('#pay_submit_cate').show();
                 
                  var l = loginmsg.split("*");
                  var txnid = l[0];
                  var hash = l[1];
                  $('#hash_cate').val(hash);
               
                }
             }
        }); 

    }); 

</script>
