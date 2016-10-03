<?php 

$count = $res[0][0]['total_ticket'];

?>


<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786">
    <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr" style="background:#fff;padding-bottom:30px;">
       
         <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
            <div class="col-md-5 col-sm-5 col-xs-12 bar321 bar786">
                <div>
                    <i class="fa fa-bars dshclr12" style="display:none;"></i>
                    <img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432 dummy_user">
                    <span class="dashbrd12 prf543">Payment Tracking Fixed Classes details</span>
                </div>
            </div>
            <?php echo $this->Element('mainpage_top_right_ber1'); ?>
        </div>  
        <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr_f"> 
            <?php echo $this->Session->flash();?>
            <!-- class code -->
            <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 2px solid #043D7B">
                <div class="col-xs-12 col-sm-12" style="margin-top: 10px; margin-bottom: 10px;">
                    <span class="faq_home01">
                        <span class="faq_home01">Vendors/Organisation</span>
                    </span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 tab_head padd_l_r">
              <a href="<?php echo HTTP_ROOT;?>/Homes/paymentAccount"> 
                <div class="col-md-4 col-sm-3 col-xs-4 seg profile-segg" id="">Account Details</div>
              </a>
              <a href="<?php echo HTTP_ROOT;?>/Homes/payTrackFiexible">
                <div class="col-md-4 col-sm-3 col-xs-4 seg" id="">Payment Tracking Flexible Classes</div>
              </a>
              <a href="<?php echo HTTP_ROOT;?>/Homes/payTrackFixed">
                <div class="col-md-4 col-sm-3 col-xs-4 seg seg786 " id="">Payment Tracking Fixed Classes </div>
              </a>
            </div> 
             <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
        </div>    
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r flex_page_tb">
            <div class="col-md-12 col-sm-12 col-xs-12 " style="overflow-x:auto;">
                <table class="table flex_page_tb12 datatable">
                    <thead style="background-color:#00cdc6";>
                        <tr>
                            <th style="align:left !important;" colspan="2">
                                <?php echo "Class ID - ".$class_data['VendorClasse']['id'];?>
                            </th>
                            <th style="align:left !important;" colspan="2">
                                <?php echo "Class Name -".$class_data['VendorClasse']['class_topic'];?>
                            </th>
                            <th style="align:left !important;" colspan="2">
                                <?php echo "Total Booked Ticket - ".$count;?>
                            </th>
                        </tr>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Booking ID </th>
                            <th>Booking Date</th>
                            <th>Number Of Ticket</th>
                            <th>Total Price</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                     <tbody>
                        <?php 
                            if($count > 0){
                            $i=1; foreach ($res as $value) { ?>    
                            <tr>   
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php  echo $i;?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php echo $value['bg_tickets']['txn_id'] ?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php echo $value['bg_tickets']['created'];?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php echo $value[0]['total_ticket'];?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                   <?php echo $value['bg_payu_transactions']['amount'];?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    
                                    <?php if($value['Ticket']['payment_status'] = 0){

                                         echo "Pending with Braingroom";

                                    }elseif($value['Ticket']['status'] == 1 ){

                                         echo "Transferred to vendor"; 
                                   
                                    }else{
                                          echo "Return to user";
                                    } ?>
                                </td>  
                            </tr>
                       <?php $i++; } }else{?>
                            <tr>   
                                <td align="center" colspan="7"> Record Does Not Exist!</td>
                            </tr>
                       <?php } ?>  
                    </tbody>
                </table>
            </div>    
        </div> 
           
        </div>
    </div>
</div>
