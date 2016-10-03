<?php $count = count($ven_msg); ?>
<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786">
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
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
        </div>    
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r flex_page_tb">
            <div class="col-md-12 col-sm-12 col-xs-12 " style="overflow-x:auto;">
                <table class="table flex_page_tb12 datatable">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Message From</th>
                        <th>Message</th>
                        <th>Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                            if($count > 0){
                            $i=1; foreach ($ven_msg as $value) { ?>    
                            <tr>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php if($value['ChatMessage']['status'] == 1){ ?>
                                         <b><?php echo $i;?></b>
                                    <?php }else{ ?>
                                          <?php echo $i;?>  
                                    <?php } ?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php if($value['ChatMessage']['status'] == 1){ ?>
                                         <b><?php echo "Admin"; ?></b>
                                    <?php }else{ ?>
                                         <?php echo "Admin"; ?>
                                    <?php } ?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php if($value['ChatMessage']['status'] == 1){ ?>
                                        <b>
                                            <a href="<?php echo HTTP_ROOT;?>/Homes/vendorMsgRead/<?php echo base64_encode($value['ChatMessage']['id']) ?>">    
                                              <?php if(strlen($value['ChatMessage']['message']) < 61 ){ 
                                                            echo $value['ChatMessage']['message'];
                                                           }else{  
                                                            echo ''.substr($value['ChatMessage']['message'],0,60 ).'....';  
                                                } ?>
                                            </a>
                                        </b>  
                                   
                                    <?php }else{ ?>
                                        <a href="<?php echo HTTP_ROOT;?>/Homes/vendorMsgRead/<?php echo base64_encode($value['ChatMessage']['id']) ?>">    
                                              <?php if(strlen($value['ChatMessage']['message']) < 26 ){ 
                                                            echo $value['ChatMessage']['message'];
                                                           }else{  
                                                            echo ''.substr($value['ChatMessage']['message'],0,25 ).'....';  
                                                } ?>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <?php if($value['ChatMessage']['status'] == 1){ ?>
                                        <b> <?php echo date('d M y h:i a',$value['ChatMessage']['add_date']);?> </b>   
                                    <?php }else{ ?>
                                        <?php echo date('d M y h:i a',$value['ChatMessage']['add_date']);?>
                                    <?php } ?>
                                </td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>>
                                    <a href="<?php echo HTTP_ROOT;?>/Homes/vendorMsgRead/<?php echo base64_encode($value['ChatMessage']['id']) ?>">    
                                        <button class="btn btn-default"  type="button" style="background-color:#2bcdc1;color:white;">
                                       <i class="fa fa-eye"></i> View</button>
                                    </a>    
                                </td>
                            </tr>
                       <?php $i++; } }else{ ?>
                            <tr>   
                                <td align="center" colspan="8"> Record Does Not Exist!</td>
                            </tr>
                       <?php } ?> 
                    </tbody>
                </table>
            </div>    
        </div>    
    </div>
</div>
<script>
$(document).ready(function(){
  $("#vndr").hide();
            $("#buyer").show();
            $('#buyer1').css('font-family','os_bold');
            $('#.g_vendor1').css('background','#fff');
            $('#vndr1').css('background','#fff !important');
            $('#buyer1').css('background','fff !important');
});
</script>