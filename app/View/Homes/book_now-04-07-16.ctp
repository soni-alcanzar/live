<?php 
/*echo "<pre>";
print_r(@$view_fixed_class);
echo "</pre>";*/

$class_topic          = $view_class['VendorClasse']['class_topic'];
$class_type           = $view_class['VendorClasse']['class_timing_id'];
$class_duration       = $view_class['VendorClasse']['class_duration'];
$starting_month       = $view_class['VendorClasse']['starting_month'];
$location             = $view_class['VendorClasse']['location'];
$max_ticket_available = $view_class['VendorClasse']['max_ticket_available'];
$price_per_head       = $view_class['VendorClasse']['price_per_head'];
$time_of_day          = $view_class['VendorClasse']['time_of_day'];

if($class_type==1)
{
  $class_type='Flexible';
}
else
{
  $class_type='Fixed';

  $view_fixed_class['ClassSchedule']['id'];
  $starting_month = $view_fixed_class['ClassSchedule']['session_date'];
  $time_of_day    =$view_fixed_class['ClassSchedule']['session_time'];
}

//echo $class_topic;
?>
<?php //echo ($class_type==2)?'Fixed Class':'Flexible Class'; ?>
<?php if($user_view['UserMaster']['user_type_id']=='1'){?>
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
.input {
        padding-left:35px; 
        background: #E6E3E4;

    }
    .sprite:before{
        background: url('http://img45.imageshack.us/img45/4259/buildingssheet7dv.png');
        content: "\f145";
        position: absolute;
        height:32px;
        width:100%;
        margin: -10px 0 0 -10px;
        z-index:100;
        font-size: 20px;
    }
   .sprite:before {
        background-position: -32px 0;
    }
    .book-vd{
        padding: 10px;
    }
    .b_1_check {
    font-size: 14px;
}
@media (max-width: 1920px) and (min-width: 1366px){
    .b_1_check {font-size: 16px;}
}
@media (max-width: 1199px) and (min-width: 992px){
    .b_1_check {font-size: 14px;}
}
@media (max-width: 991px) and (min-width: 768px){
    .b_1_check {font-size: 12px;}
}
@media (max-width: 767px) and (min-width: 450px){
    .b_1_check {font-size: 11px;}
    .cust-xs-12{width: 50%!important;}
}
@media (max-width: 449px) and (min-width: 300px){
    .b_1_check {font-size: 11px;}
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
                       //echo $user_type_id;
                       //die;
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
          <div class="col-md-12 col-sm-12 col-xs-12 funmp1"> 
            <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8 starruth">
                  <div class="elemnt">
                   <?php if($user_view['UserMaster']['user_type_id']=='1'){?> 

                    <span><img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $user_view['UserMaster']['profile_image'];?>" class="rth321 prflimg" style="height:132px;border-radius:50%;border:2px solid white;"></span>
                    
                    <!-- file upload -->
                   
                    <?php }else if($user_view['UserMaster']['user_type_id']=='2'){?>
                     <span><img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $user_view['UserMaster']['profile_image'];?>" class="rth321" style="width:123px;height:132px;border-radius:50%;border:2px solid white;"></span>
                     
                    <!-- file upload -->
                    
                    <?php }else if($user_view['UserMaster']['user_type_id']==''){?>
                     <span><img src="<?php echo $user_view['UserMaster']['profile_image'];?>" class="rth321 prflimg" style="width:123px; height:132px;border-radius:50%;border:2px solid white;"></span>
                     <!-- file upload -->
                    
                    <?php }else{?>
                    <span><img src="<?php echo HTTP_ROOT;?>/img/profile_img/ruth_img.png" class="rth321 prflimg" style="width:123px; height:132px;border-radius:50%;border:2px solid white;"></span>
                    <!-- file upload -->
                    

                    <?php }?>

                    <span class="fa-camera-br" onclick="ClickUpload()">
                      
                        <i class="fa fa-camera " aria-hidden="true" type="button" value="Upload" class="camera" ></i>
                        <span class="edit-photo">Edit</span>
                    </span>
                    
                    <form action="#" method="post" name="pro_pic" id="pro_pic" enctype="multipart/form-data">
                      <div id="hideimge">
                      <input type="file" name="FileUpload" id="FileUpload" class="uploadbox"/>
                      <input type="hidden" class="customer" value="<?php echo $user_view['UserMaster']['id'];?>">
                      </div>
                    </form>

                    <span class="rth321 user765 elemnt">
                      <div class="grg321 elemnt"><?php echo $user_view['UserMaster']['first_name']; ?></div>
                      <div class="tnk321 elemnt"><?php echo $user_view['UserMaster']['email']?></div>
                    </span>
                  </div>
                  <div class="najm1 elemnt">
                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
                    <span><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star2.png" class="star321"></span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 mntop">
                    <div class="pull-right">
                        <img src="<?php echo HTTP_ROOT;?>/img/profile_img/notification.png" class="note321">
                        <img src="<?php echo HTTP_ROOT;?>/img/profile_img/message.png" class="msg543">
                    </div>
                </div>
              </div>  
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="pull-right">
                <span onclick="ClickUpload1()">
                  <i class="fa fa-camera edit-bg" aria-hidden="true"></i>
                  <span class="edit-photo">Edit</span>
                </span>  
              </div>
            </div>
            <form action="#" method="post" name="pro_pic1" id="pro_pic1" enctype="multipart/form-data">
                      <div id="hideimge">
                      <input type="file" name="FileUpload" id="FileUpload1" class="uploadbox1"/>
                      </div>
            </form>
          </div>
          <!-- ******************work ****************** -->
          <div class="col-md-12 col-sm-12 col-xs-12 book-brd padd_l_r">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 padd_l_r padd_l_r lglbrgroom brdash_naj">
                <div class="fixed-class"><?php echo $class_type; ?> Class Booking</div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 book-bg padd_l_r">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 padd_l_r padd_l_r lglbrgroom brdash_naj">
                <div class="booked-fix"><?php echo $class_topic; ?></div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 book-bg1 padd_l_r">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 padd_l_r padd_l_r lglbrgroom brdash_naj pad-book">
                <div class="col-md-3 col-sm-3 col-xs-12 cust-xs-2 padd_l_r booed-dur-pad">
                    <div class="col-md-5 col-sm-5 col-xs-7 padd_l_r booked-dur">Duration:</div>
                    <div class="col-md-7 col-sm-7 col-xs-5 padd_l_r booked-hrs"><?php echo $class_duration; ?></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 cust-xs-6 padd_l_r">
                    <div class="col-md-4 col-sm-4 col-xs-3 padd_l_r booked-dur">
                        Date:
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-9 padd_l_r booked-hrs">
                        <!-- Friday 11 June 2016, 9:00 AM to 11:00 AM -->
                        <?php echo $starting_month; ?> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 cust-xs-4 padd_l_r">
                    <div class="col-md-3 col-sm-3 col-xs-3 padd_l_r booked-dur">Address:</div>
                    <div class="col-md-9 col-sm-9 col-xs-9 padd_l_r booked-hrs"><?php echo $location; ?></div>
                </div>
            </div>
        </div>
        <?php 
        $PAYU_BASE_URL = "https://secure.payu.in";
        $pay_url = $PAYU_BASE_URL . '/_payment';  
        ?>
      
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
          <form action="<?php echo $pay_url; ?>" method="post" name="payuForm">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 padd_l_r padd_l_r lglbrgroom brdash_naj book-pad-form">
                <div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10 cust-xs-offset-2">
                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-form-line"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-form-ticket">
                        <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12 book-no">
                            <div class="col-md-7 col-sm-7 col-xs-7 padd_l_r">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 padd_l_r">
                                    <i class="fa fa-ticket book-fa-ticket" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-10 col-xs-11 padd_l_r">  
                                    <span class="book-avail">No. Of Tickets Available <?php echo $max_ticket_available; ?></span>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-5 padd_l_r">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 padd_l_r">
                                    <i class="fa fa-inr book-fa-inr" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-10 col-xs-11 padd_l_r">
                                   <input type="hidden" name="b_class_id" id="b_class_id" value="<?php echo $class_id; ?>">
                                  <input type="hidden" name="max_price" id="max_price" value="<?php echo $price_per_head; ?>">
                                    <span class="book-avail">Ticket Price Rs : <?php echo $price_per_head; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-form-field">
                        <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-10">
                            <div class="col-md-12 col-sm-12 col-xs-12 book-vd">
                                <div class="col-md-5 col-sm-6 col-xs-12 b_1_pd cust-xs-12">
                                     <input name="pay_type" class="radio-custom" id="radio-1" value="1" onchange="usertype_method(this.value)" type="radio">
                                     <label class="radio-custom-label" for="radio-1"><span class="b_1_check">By Coupon</span></label>
                                </div>
                                <div class="col-md-7 col-sm-6 col-xs-12 b_1_pd cust-xs-12">
                                    <input name="pay_type" class="radio-custom" id="radio-2" value="2" onchange="usertype_method(this.value)" type="radio" checked="checked">
                                    <label class="radio-custom-label" for="radio-2"><span class="b_1_check">By Credit/Debit Card</span></label>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 book-vd">
                              <input class="form-control book-input book-sprite" name="cn_id" id="cn_id" value="" type="text" placeholder="Please Enter Coupon Number" style="display:none;">
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 book-vd">
                              <input class="form-control book-input book-sprite" name="reg_t_id" id="reg_t_id" value="" type="text" placeholder="Enter Required Tickets" onkeyup="myFunction();">
                            </div>   
                           
                            <!-- <div class="form-group">
                              <input class="form-control book-input book-sprite" id="" type="text" value="Enter Coupon Code">
                            </div> -->
                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12 book-rupee">
                                <i class="fa fa-inr book-r" aria-hidden="true"></i>
                                <input type="hidden" name="key" id="key" value="hF6qmoBJ" />
                                <input type="hidden" name="hash" id="hash" value=""/>
                                <input type="hidden" name="txnid" id="txnid" value=""/>

                                <input type="hidden" name="total_price" id="total_price" value="">
                                 <input type="hidden" name="surl" id="surl" value="<?php echo HTTP_ROOT; ?>/Homes/paySuccess">
                                 <input type="hidden" name="furl" id="furl" value="<?php echo HTTP_ROOT; ?>/Homes/payFailure">
                                 <input type="hidden" name="service_provider" id="service_provider" value="payu_paisa"/>

                                
                                <span class="book-total" id="tp_rs">Total Price: 0.00/-</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8 book-proceed cust-xs-offset-2">
                    <center><input type="submit" name="payment" value="Proceed to payment" class="btn book-pr-pay">
                     <input type="button" name="payment" id="pay" value="Proceed to payment wirh Ajex" class="btn book-pr-pay">
                </div>
            </div>
          </form>
        </div>
          <!-- ******************work ****************** -->
</div>
<script type="text/javascript">
function myFunction() {

  var reg_id      = $('#reg_t_id').val();
  var maxprice    = $('#max_price').val();
  var total_price = maxprice*reg_id;
  
    //alert(reg_id);
    //$("#total_price").append("<b>Appended text</b>");
    $('#tp_rs').empty()
    $('#tp_rs').append('Total Price: '+total_price+'.00/-');
    $('#total_price').val(total_price);
    //$('#tp_rs').last().remove();
}
</script>
<script type="text/javascript">
$("#reg_t_id").keypress(function (e) {
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
    return false;
    }
   });
</script> 
<script type="text/javascript" >
$(function() {

$("#pay").click(function() {
  alert('h');
var b_class_id       = $("#b_class_id").val();
var max_price        = $("#max_price").val();
var reg_t_id         = $("#reg_t_id").val();
var key              = $("#key").val();
var hash             = $("#hash").val();
var txnid            = $("#txnid").val();
var total_price      = $("#total_price").val();
var surl             = $("#surl").val();
var furl             = $("#furl").val();
var service_provider = $("#service_provider").val();
var pay_type ='2';
  
$.ajax({  
    type: "POST",  
    url: "<?php echo HTTP_ROOT; ?>/Homes/saveBookclass",  
    data: 'b_class_id='+ b_class_id +'&max_price='+ max_price+'&pay_type='+pay_type+'&reg_t_id='+reg_t_id+'&key='+key+'&hash='+hash+'&txnid='+txnid+'&total_price='+total_price+'&surl='+surl+'&furl='+furl+'&service_provider='+service_provider,  
    success: function(loginmsg){  
        $("#status1").html('');
      alert(loginmsg);

      if(loginmsg==1)
      {
    //window.location = '<?php echo base_url; ?>Trainees/dashboard';
    }
    else{
        //$("#showmsg").html('Invalid username or password');
    }
    } 
   
  }); 
});
});
</script>

