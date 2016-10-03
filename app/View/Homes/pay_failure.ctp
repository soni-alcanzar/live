<style type="text/css">

   
    /*created by sitaram*/
    .g_status_sr_03_08{
        font-family: "os_Regular";
        padding: 5px 0; 
        color: #333;
        text-transform: capitalize;
        font-size: 16px;
    }
    .sr_03_08_g_{border-bottom: 2px solid #00497b; border-top: 2px solid #00497b; padding :5px 0;}
    .sr_03_08_padding_git_s{padding-right: 0px !important; padding-left: 0px !important;}
    .success_sr_03_08{font-family: "os_Regular"; font-size: 20px; color: #fff; }
    .booking_id_sr_03_08{color: #2BCDC2; font-family: "os_Regular"; font-size: 14px; text-transform: capitalize; font-weight: bold;}
    .share_id_sr_03_08{
        background: #fff none repeat scroll 0 0;
        color: #2bcdc2;
        font-family: "os_Regular";
        font-size: 12px;
        padding: 0 20px;
        text-transform: capitalize;
    }
    .row__03_08_sr{width: 160px !important; border: 1px solid #2BCDC2;}
    .sr_03_08_d_div02{padding :10px 15px;}
    .booking_text_sr_03_08{color: #030102; font-family: "os_Regular"; font-size: 14px;}
    .booking_text_sr_03_08_mail{color: #030102; font-family: "os_Regular"; font-size: 18px;}
    .common_img_css{display: inline; width: 30px; padding-right: 5px;}

    @media (min-width: 200px) and (max-width: 499px){
         .sr_03_08_d_div01{padding :10px 15px;}
    }
    @media (min-width: 500px) and (max-width: 767px){
        .sr_03_08_d_div01{padding :10px 15px;}
    }
    @media (min-width: 768px) and (max-width: 991px){
         .sr_03_08_d_div01{padding :10px 15px; width: 36.667% !important; margin-left: 5%;}
    }
    @media (min-width: 992px) and (max-width: 1199px){
        .sr_03_08_d_div01{padding :10px 15px; width: 36.667% !important; margin-left: 5%;}
    }
    @media (min-width: 1200px) and (max-width: 1479px){
         .sr_03_08_d_div01{padding :10px 15px; width: 36.667% !important; margin-left: 5%;}
    }
    @media (min-width: 1480px) {
        .sr_03_08_d_div01{padding :10px 15px; width: 36.667% !important; margin-left: 5%;}
    }

</style>

<?php echo $this->Element('facebook');?>
<div class="container-fluid sr_03_08_padding_git_s">
    <div class="col-xs-12 col-sm-12 sr_03_08_padding_git_s sr_03_08_g_">
        <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 padd_l_r">
            <span class="g_status_sr_03_08"><b>Booking Status</b></span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    <div class="col-xs-12 col-sm-12 sr_03_08_padding_git_s">
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> 
        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6 ">

            <div class="col-xs-12 col-sm-12" style="z-index: 100; top: 10px;">
                <center>
                    <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_no.png" class="img-responsive" alt="img" style="width: 50px;">
                </center>                 
            </div>
            <div class="col-xs-12 col-sm-12 sr_03_08_padding_git_s" style="border: 1px solid rgb(150, 148, 149); box-shadow: 7px 12px 22px rgb(172, 170, 171);"> 
                <div class="col-xs-12 col-sm-12" style="background: red; padding: 15px 0px 10px;">
                   <span class="success_sr_03_08"><center>Booking Failed!</center></span>               
                </div> 
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> 
                <div class="col-xs-12 col-sm-12 " style="">
                    <div class="col-xs-12 col-sm-12">
                        <center><span class="booking_id_sr_03_08" style="color:red;">Your Transaction has been failed. Please Try Again</span></center>
                    </div>
                   <!--  <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08"><?php echo $txnid; ?></span>
                    </div> -->
                </div>
                 <!--<div class="col-xs-12 col-sm-12 " style="">
                    <div class="col-xs-12 col-sm-5 col-md-5 sr_03_08_d_div01">
                        <span class="booking_id_sr_03_08">Transaction id:</span>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08"><?php echo $txnid; ?></span>
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-12 " style="">
                    <div class="col-xs-12 col-sm-5 col-md-5 sr_03_08_d_div01">
                        <span class="booking_id_sr_03_08">Booking ID:</span>
                    </div>
                   <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08"><?php echo $booking_id;?></span>
                    </div> 
                </div>
                <div class="col-xs-12 col-sm-12 " style="">
                    <div class="col-xs-12 col-sm-5 col-md-5 sr_03_08_d_div01">
                        <span class="booking_id_sr_03_08">contact no.:</span>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08"><?php echo $mobile_no; ?></span>
                    </div> 
                </div>
                <div class="col-xs-12 col-sm-12 " style="">    
                    <div class="col-xs-12 col-sm-5 col-md-5 sr_03_08_d_div01">
                        <span class="booking_id_sr_03_08">validity period:</span>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08">From April, 2016 to July 2016</span>
                    </div> 
                </div>
                <div class="col-xs-12 col-sm-12 " style="">
                    <div class="col-xs-12 col-sm-5 col-md-5 sr_03_08_d_div01">
                        <span class="booking_id_sr_03_08">Location:</span>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08">Kanpur</span>
                    </div>        
                </div>  
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">
                    <div class=" row__03_08_sr" style="margin: 0px auto;"></div>
                    <div class="col-xs-12 col-sm-12" style="margin-top: -15px;">
                        <center>
                            <span class="share_id_sr_03_08">Share it</span>
                        </center>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">
                    <center>
                        <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_fb.png" class="common_img_css" alt="img" id="shareFacebook">
                        <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_tw.png" class="common_img_css" alt="img">
                        <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_ph.png" class="common_img_css" alt="img">
                    </center>    
                </div>
          
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    
            </div>
            <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
            <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> 
            <div class="col-xs-12 col-sm-12 sr_03_08_d_div02">
                <center><span class="booking_text_sr_03_08_mail">A Confirmation mail has been send to <span style="color:#0D447D;"><?php echo $email; ?></span></span></center>
            </div> 
            -->
             <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
            <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>         
        </div>
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    </div>
    
</div>
<script>
$(document).ready(function(){
        $('#shareFacebook').click(function(){
          var title="Your Transaction Failed!";
          var desc="Transaction ID :"+'<?php echo $txnid;?>';							
         
         postToFeed1(title,desc);
         });
});
</script>