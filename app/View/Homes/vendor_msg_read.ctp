<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786" style="">
    <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr" style="background:#fff;">
        <div class="col-md-12 col-sm-12 col-xs-12 fle_page_haedre ruth1">
            <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
                <div><i class="fa fa-bars dshclr12" style="display:none;"></i><img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432"><span class="dashbrd12 prf543">Inbox</span></div>
            </div>
            <?php echo $this->Element('mainpage_top_right_ber'); ?>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
        </div>    
        <div class="box box-primary flex_page_tb" style="padding:20px;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Read Mail</h3>
                    </div>
                    <div class="box-body no-padding">
                      <div class="mailbox-read-info">
                        <h3>
                          <?php 

                            if($ven_msg['ChatMessage']['message_type'] == 1){ 
                              echo "Quote Request";
                            }else{
                              echo "Catalog Request"; }
                          ?>

                        </h3>
                        <h5>From: help@admin.com
                          <b><span class="mailbox-read-time pull-right"><?php echo date('d M y h:i a',$ven_msg['ChatMessage']['add_date']); ?></span></b></h5>
                      </div>
                      <!-- /.mailbox-read-info -->
                      <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
                      <!-- /.mailbox-controls -->
                      <div class="mailbox-read-message">
                        <?php echo $ven_msg['ChatMessage']['message'];?>   
                      </div>
                      <!-- /.mailbox-read-message -->
                    </div>  
                    <!-- /.box-footer -->
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div> 
                    <div class="box-footer">
                      <div class="pull-right">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/vendorMsgReply/<?php echo base64_encode($ven_msg['ChatMessage']['id']); ?>"> 
                            <button class="btn btn-default" type="button" style="background-color:#2bcdc1">
                            <i class="fa fa-reply"></i> Reply</button>
                        </a>    
                       </div>
                        <a href="<?php echo HTTP_ROOT;?>/Homes/msgInboxVendor"> 
                          <button class="btn btn-default" type="button" style="background-color:#2bcdc1">
                           <i class="fa fa-reply"></i> Back
                          </button>
                        </a>   
                      <button class="btn btn-default" type="button" style="background-color:#2bcdc1"><i class="fa fa-trash-o"></i> Delete</button>
                    </div>
                    <!-- /.box-footer -->
        </div>   
    </div>
</div>
