<?php 

//echo '<pre>'; print_r($book); die;
	
if($class['VendorClasse']['class_timing_id']==1)
{
 // $class='Flexible';
}
else
{
  //$class='Fixed';
}

?>
<?php if($class['User']['user_type_id']){?>
<style>
.funmp1 {
    width: 100%;
  
    background-image: url("<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $class['User']['background_image'];?>");

    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-bottom:10px;
}
</style>
<?php }?>
<?php /*?><?php else{?>
<style>
.funmp1 {
    width: 100%;
  
    background-image: url("<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $class['User']['background_image'];?>");

    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-bottom:10px;
}
</style>
<?php }?><?php */?>
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
 <?php /*?>   <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
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
                       $profile_img=$class['User']['profile_image'];
                      
                       $user_type_id=$class['User']['user_type_id'];
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
                    <span class="dashbrd1 grg1"><?php echo $class['User']['first_name'];?></span>
                    <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
                    <div class="dropdown-content1 logout">
                        <p><a href="#" class="logout_a">Profile</a></p>
                        <p><a href="#" class="logout_a">Change Password</a></p>
                        <p><a href="<?php echo HTTP_ROOT;?>/homes/logout" class="logout_a">Logout</a></p>
                    </div>
                </span>
                <br>
            </div>
        </div>
    </div> <?php */?>
          <?php /*?><div class="col-md-12 col-sm-12 col-xs-12 funmp1"> 
            <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8 starruth">
                  <div class="elemnt">
                   <?php if($class['User']['user_type_id']=='1'){?> 

                    <span><img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $class['User']['profile_image'];?>" class="rth321 prflimg" style="height:132px;border-radius:50%;border:2px solid white;"></span>
                    
                    <!-- file upload -->
                   
                    <?php }else if($class['User']['user_type_id']=='2'){?>
                     <span><img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $class['User']['profile_image'];?>" class="rth321" style="width:123px;height:132px;border-radius:50%;border:2px solid white;"></span>
                     
                    <!-- file upload -->
                    
                    <?php }else if($class['User']['user_type_id']==''){?>
                     <span><img src="<?php echo $class['User']['profile_image'];?>" class="rth321 prflimg" style="width:123px; height:132px;border-radius:50%;border:2px solid white;"></span>
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
                      <input type="hidden" class="customer" value="<?php echo $class['User']['id'];?>">
                      </div>
                    </form>

                    <span class="rth321 user765 elemnt">
                      <div class="grg321 elemnt"><?php echo $class['User']['first_name']; ?></div>
                      <div class="tnk321 elemnt"><?php echo $class['User']['email']?></div>
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
          </div><?php */?>
          <!-- ******************work ****************** -->
          <div class="col-md-12 col-sm-12 col-xs-12 book-brd padd_l_r">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 padd_l_r padd_l_r lglbrgroom brdash_naj">
                <?php /*?><div class="fixed-class"><?php echo $class_type; ?> Class Booking</div><?php */?>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 book-bg padd_l_r">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 padd_l_r padd_l_r lglbrgroom brdash_naj">
                <div class="booked-fix"><?php echo $class['VendorClasse']['class_topic']; ?></div>
            </div>
        </div>
       <!-- <div class="col-md-12 col-sm-12 col-xs-12 book-bg1 padd_l_r">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 padd_l_r padd_l_r lglbrgroom brdash_naj pad-book">
                <div class="col-md-3 col-sm-3 col-xs-12 cust-xs-2 padd_l_r booed-dur-pad">
                    <div class="col-md-5 col-sm-5 col-xs-7 padd_l_r booked-dur">Duration:</div>
                    <div class="col-md-7 col-sm-7 col-xs-5 padd_l_r booked-hrs"><?php //echo $class_duration; ?></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 cust-xs-6 padd_l_r">
                    <div class="col-md-4 col-sm-4 col-xs-3 padd_l_r booked-dur">
                        Date:
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-9 padd_l_r booked-hrs">
                       Friday 11 June 2016, 9:00 AM to 11:00 AM
                        <?php //echo $starting_month; ?> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 cust-xs-4 padd_l_r">
                    <div class="col-md-3 col-sm-3 col-xs-3 padd_l_r booked-dur">Address:</div>
                    <div class="col-md-9 col-sm-9 col-xs-9 padd_l_r booked-hrs"><?php //echo $location; ?></div>
                </div>
            </div>
        </div>-->
		<!-- Peyment Page By Rohit-->
    <?php 
    $u_id = $class['User']['id']; 
    ?>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $class['User']['id']; ?>"/>
    <input type="hidden" name="as" id="as" value="kbnmbmnb"/>
    <input type="hidden" name="class_id" id="class_id" value="<?php echo $class['VendorClasse']['id']; ?>"/>
    <!-- <input type="hidden" name="class_id" id="class_id" value=""/> -->
    
		<div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-form-line"></div>
		<div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-form-ticket">
				<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12 book-no">
					<div class="col-md-7 col-sm-7 col-xs-7 padd_l_r">
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 padd_l_r">
							<i class="fa fa-ticket book-fa-ticket" aria-hidden="true"></i>
						</div>
						<div class="col-lg-11 col-md-11 col-sm-10 col-xs-11 padd_l_r">	
							<?php /*?><span class="book-avail">No. Of Tickets Available <?php echo $max_ticket_available; ?></span><?php */?>
						</div>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-5 padd_l_r">
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 padd_l_r">
							<i class="fa fa-inr book-fa-inr" aria-hidden="true"></i>
						</div>
						<div class="col-lg-11 col-md-11 col-sm-10 col-xs-11 padd_l_r">
						<?php //$price_per_head=1; ?>
						<input type="hidden" id="max_price" value="">
							<span class="book-avail">Ticket Price Rs : <?php echo $this->request->data['total_cost']; ?></span>
						</div>
					</div>
				</div>
			</div>
		<div class="col-md-12 col-sm-12 col-xs-12 padd_l_r book-form-field">
				<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
					<div class="col-md-12 col-sm-12 col-xs-12 book-vd">
						<div class="col-md-5 col-sm-6 col-xs-12 b_1_pd cust-xs-12">
						     <input name="user_type_id" class="radio-custom" id="radio-1" value="1" type="radio">
						     <label class="radio-custom-label" for="radio-1"><span class="b_1_check">By Coupon</span></label>
						</div>
						<div class="col-md-7 col-sm-6 col-xs-12 b_1_pd cust-xs-12">
						    <input name="user_type_id" class="radio-custom" id="radio-2" value="2" type="radio" checked="checked">
						    <label class="radio-custom-label" for="radio-2"><span class="b_1_check">By Credit/Debit Card</span></label>
					    </div>
					</div>
				     <div class="col-md-12 col-sm-12 col-xs-12 book-vd">					
							<div class="form-group">
							  <!--<input class="form-control book-input book-sprite" id="reg_t_id" type="text" value="" placeholder="Enter Required Tickets" onkeyup="myFunction();">-->
                              <input class="form-control book-input book-sprite" id="" type="text" value="<?php echo $class['VendorClasseLocationDetail']['0']['location']; ?>">
                              
                             <?php /*?> <input type="text" value="<?php echo $class['VendorClasseLocationDetail']['0']['location']; ?>" /><?php */?>
							</div>
					</div>
					
					<div class="form-group">
					  <div class="col-md-12 col-sm-12 col-xs-12 book-rupee">
					  	<i class="fa fa-inr book-r" aria-hidden="true"></i>
					  	<span class="book-total" id="tp_rs"> Total Price: Rs. <?php echo $this->request->data['total_cost']; ?>/- </span>
					  </div>
					</div>
					</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 book-proceed">
				<!-- Start For Pey -->
					<?php 
						$PAYU_BASE_URL = "https://secure.payu.in";
						//$PAYU_BASE_URL = "https://test.payu.in";
						$action = $PAYU_BASE_URL . '/_payment';  
					?>
						<form action="<?php echo $action; ?>" method="post" name="payuForm">
							  <input type="hidden" name="key" id="key" value="hF6qmoBJ" />
							  <input type="hidden" name="hash" id="hash" value=""/>
							  <input type="hidden" name="txnid" id="txnid" value="<?php echo $txnid; ?>" />
							  <input type="hidden" name="amount" id="amount" value="<?php echo $this->request->data['total_cost']; ?>"/>
							  <input type="hidden" name="firstname" id="firstname" value="<?php echo $class['User']['first_name']?>" />
							  <input type="hidden" name="email" id="email" value="<?php echo $email; ?>" />
							  <input type="hidden" name="phone" id="phone" value="<?php echo $mobile; ?>"/>
                             <textarea name="productinfo" id="productinfo" style="display:none;"><?php echo $class['VendorClasse']['class_topic'];?></textarea> 
                              <input type="hidden" name="udf1" id="udf1" value="<?php echo $user_id; ?>"/>
                             <input type="hidden" name="udf2" id="udf2" value="<?php echo $class_id; ?>"/>
                              <input type="hidden" name="udf3" id="udf3" value="<?php echo $locality_id; ?>"/>
							  <textarea name="udf4" id="udf4" style="display:none;"><?php echo $ticket; ?></textarea>
							  <input type="hidden" name="surl" id="surl" value="<?php echo HTTP_ROOT; ?>/vendor_classes/paySuccess" size="64" />
							  <input type="hidden" name="furl" id="furl" value="<?php echo HTTP_ROOT; ?>/Homes/payFailure" size="64" />
							  <input type="hidden" name="service_provider" id="service_provider" value="payu_paisa" size="64" />
                              
							  <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8  cust-xs-offset-2">
								<center><input type="submit" value="Proceed to payment" id="pay_submit" class="btn book-pr-pay" style="display:none;"/></center>
								</div>
              </form>
              <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8  cust-xs-offset-2">
                <center><button id="pay" class="btn book-pr-pay">Confirm</button>
                </center>
               </div>
						</div>
					<!-- End Pay -->
			<!-- End -->
        

          <!-- ******************work ****************** -->
</div>
<script type="text/javascript">
function myFunction() {

  var reg_id      = $('#reg_t_id').val();
  var maxprice    = $('#max_price').val();
  var total_price = maxprice*reg_id;
  
    //alert(total_price);
    //$("#total_price").append("<b>Appended text</b>");
    $('#tp_rs').empty()
    $('#tp_rs').append('Total Price: '+total_price+'.00/-');
    $('#amount').val(total_price);
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
$('#pay').on('click',function(){
var amount          = $("#amount").val();
var firstname       = $("#firstname").val();
var email           = $("#email").val();
var phone           = $("#phone").val();
var productinfo     = $("#productinfo").val();
var key             = $("#key").val();
var hash           = $("#hash").val();
var txnid           = $("#txnid").val();
var surl            = $("#surl").val();
var furl             = $("#furl").val();
var service_provider = $("#service_provider").val();
var udf1 = $("#udf1").val();
var udf2 = $("#udf2").val();
var udf3 = $("#udf3").val();
var udf4 = $("#udf4").val();
//var pay_type ='2';
//var pay_type ='2';
var user_id    =  $("#user_id").val();
var class_id   =  $("#class_id").val();
var radioValue =  $("input[name='user_type_id']:checked").val();
var tran_id = 1;


  
$.ajax({  
    type: "POST",  
    url: "<?php echo HTTP_ROOT; ?>/vendor_classes/save_book",  
    data: 'key='+ key+'&amount='+ amount +'&firstname='+firstname+'&email='+email+'&phone='+phone+'&productinfo='+productinfo+'&txnid='+txnid+'&hash='+hash+'&surl='+surl+'&furl='+furl+'&service_provider='+service_provider+'&user_id='+user_id+'&class_id='+class_id+'&user_type_id='+radioValue+'&tran_id='+tran_id+'&udf1='+udf1+'&udf2='+udf2+'&udf3='+udf3+'&udf4='+udf4,  
    success: function(loginmsg){  
        //$("#status1").html('');
      //alert(loginmsg);
      if(!loginmsg==''){
        $('#pay').hide();
        $('#pay_submit').show();
        var l = loginmsg.split("*");
    var txnid = l[0];
    var hash = l[1];
	 $('#txnid').val(txnid);
    $('#hash').val(hash);
      }
    
   }
  }); 
});
});
</script>
<script type="text/javascript">
$(window).load(function() {
//alert('h');
var amount          = '';
var firstname       = '';
var email           = '';
var phone           = '';
var productinfo     = '';
var key             = '';
var hash           = '';
var txnid           = '';
var surl            = '';
var furl             = '';
var service_provider = '';
//var pay_type ='2';
var user_id    =  $("#user_id").val();
var class_id   =  $("#class_id").val();
var radioValue =  $("input[name='user_type_id']:checked").val();
var tran_id = 0;
  
$.ajax({  
    type: "POST",  
    url: "<?php echo HTTP_ROOT; ?>/Homes/saveBookclass",  
    data: 'key='+ key+'&amount='+ amount +'&firstname='+firstname+'&email='+email+'&phone='+phone+'&productinfo='+productinfo+'&txnid='+txnid+'&hash='+hash+'&surl='+surl+'&furl='+furl+'&service_provider='+service_provider+'&user_id='+user_id+'&class_id='+class_id+'&user_type_id='+radioValue+'&tran_id='+tran_id,  
    success: function(pey_respon){  
        //$("#status1").html('');
      //alert(pey_respon);
	  var q = pey_respon;
    var l = q.split("*");
    var txnid = l[0];
    var txnid1 = l[1];
    $('#txnid').val(txnid);
	
	if(txnid!=''){
			//pey();
	}
   // $('#hash').val(txnid1);

     // alert(txnid1);
    } 
   
  });
  
 });
</script>