<?php //echo "<pre>";print_r($booking_status);//die;?>
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
</style>
<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786 cstm_md9">
  
        
    
    <!-- work of this page start -->
    <div class="col-md-12 col-sm-12 col-xs-12 status-book ">
      <div class="col-md-12 col-sm-12 col-xs-12 book_status">
        Class Booking Status
      </div>
      <?php if(!empty($booking_status)){
        $total_sold = 0;
        foreach ($booking_status as $res) {
          //echo "<pre>";print_r($res);
      ?>

      <div class="col-md-12 col-sm-12 col-xs-12 booking-sttate">
        <div class="col-md-12 col-sm-12 col-xs-12 name-pad12">
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Class Name
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
              <?php echo $res['bg_vendor_classes']['class_topic'];?>
              <!-- Hath Yoga for Weight Loss in 10 Days  -->
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Class Type
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
              <?php echo ($res['bg_vendor_classes']['class_timing_id'] == 2)?'Fixed':'Flexible';?>
              <!-- Hath Yoga for Weight Loss in 10 Days  -->
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Booking Id
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath1">
              <!-- 123456 -->
              <?php echo $res['bg_tickets']['txn_id'];?>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Booking Date & Time:
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
              <!-- 12 April 2016 to 1 April 2016 -->
              <?php //$date = date('m/d/Y');
             // print_r()
              ?>
              <?php 
                
                  //echo  $transaction_date;
                echo $res['bg_tickets']['created'];
                ?> 
            </div>
          </div>
          <!-- <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Ticket Price
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath1"> -->
              <!-- Rs.200/ -->
               <?php //echo $res['bg_vendor_classes']['price_per_head'];?>
           <!--  </div>
          </div> -->
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Attende Name
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
             <?php echo $res['bg_user_masters']['first_name'];?>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              No of tickets bought
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
             <?php echo $res[0]['total_ticket'];
                $total_sold = $total_sold + $res[0]['total_ticket'];
             ?>

            </div>
          </div>
         <!--  <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Total Seats
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
             <?php echo $res['bg_vendor_classes']['max_ticket_available'];?>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Booked Seats
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath1">
              <?php echo (intval($res['bg_vendor_classes']['max_ticket_available'])-intval($res['bg_vendor_classes']['total_ticket']));?>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-4 col-sm-4 col-xs-12 name-class">
              Free Seats
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
              <?php echo (intval($res['bg_vendor_classes']['max_ticket_available'])-intval($res['bg_vendor_classes']['total_ticket']));?>
            </div>
          </div> -->
        </div>  
      </div>
      <?php }}else{?>
        <p class="empty-review"> There are no booking status exists</p>
      <?php }?>
       <?php if(!empty($booking_status)){?>
      <div class="col-md-12 col-sm-12 col-xs-12 name-pad12 booking-status">
        <div class="col-md-8 col-sm-8 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
              Total Tickets
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 name-hath">
              <!-- 123456 -->
              
              <?php 
                $total_ticket = $res['bg_vendor_classes']['max_ticket_available'];
                echo $total_ticket;
              ?>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath1">
              Total Sold
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 name-hath1">
              <!-- 123456 -->
              <?php 
              echo  $total_sold;
              ?>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath">
              Amount Collected
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 name-hath">
              <!-- 123456 -->
              Rs.
              <?php 
                $amount_collected = 0;
                foreach($booking_status as $res){
                  $amount_collected = $total_sold * $res['bg_payu_transactions']['amount'];
                }
                echo $amount_collected;
              ?>
            </div>
          </div>
           <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r name-brd">
            <div class="col-md-8 col-sm-8 col-xs-12 name-hath1">
              Tickets Pending
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 name-hath1">
              <!-- 123456 -->
              <?php 
                 $ticket_pending = $total_ticket - $total_sold;
                  echo $ticket_pending;
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>

    <!-- work of this page end -->


</div>
<?php if(empty($booking_status)){?>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.status-book').css('height','75px');
  });
  </script>
<?php }?>