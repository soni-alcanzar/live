<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<?php 
  
    echo $this->Html->script('backend/datatable');
   
    echo $this->Html->script('backend/jquery.dataTables.min');
    echo $this->Html->script('backend/dataTables.buttons.min');
    echo $this->Html->script('backend/buttons.flash.min');
    echo $this->Html->script('backend/jszip.min');
    echo $this->Html->script('backend/pdfmake.min');
    echo $this->Html->script('backend/vfs_fonts');
    echo $this->Html->script('backend/buttons.html5.min');
    echo $this->Html->script('backend/buttons.print.min');
    echo $this->Html->css('backend/datatable');
    echo $this->Html->css('backend/jquery.dataTables.min');
    echo $this->Html->css('backend/buttons.dataTables.min');




?>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers",
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

    } );
} );
</script>
<?php //echo "<pre>"; print_r($trans_data);die; 
    $count = count($trans_data);
?>
<style type="text/css">
  .butt_dollar-br {
    position: relative;
    top: -171px;
    left: 31%;
    background: #30AFA8;
    color: #FFF !important;
    border-radius: 15px;
  }

  .flexible-fixed-fun {
    color: #FFF;
    background-color: #00CDC6;
    font-family: OS_regular;
    padding: 3px 6px;
    z-index: 1050;
    position: absolute;
    border-radius: 25px;
    top: 9px;
    left: 8px;
    width: 69px;
    height: 28px;
    text-align: center;
    font-size: 13px;
}

.image_price12-fun {
    background-color: #00CDC6;
    margin-top: 10px;
    padding: 3px 6px;
    z-index: 1050;
    text-align: center;
    position: absolute;
    float: right;
    margin-left: 174px;
}
.pull-right-fun {
    float: right !important;
}
.modal-footer{border-top: 0px solid none;}
</style>

<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786">
    <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr" style="background:#fff;">
        <div class="col-md-12 col-sm-12 col-xs-12 fle_page_haedre ruth1">
            <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
                <div><i class="fa fa-bars dshclr12" style="display:none;"></i><img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432"><span class="dashbrd12 prf543">Flexible Class Attendance</span></div>
            </div>
            <!-- Start Top Right bar -->
            <?php echo $this->Element('mainpage_top_right_ber'); ?>
            
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
            <!-- <div class="col-md-4 col-sm-6 col-xs-6 padd_l_r inpt_adon pull-right"> 
                <div class="input-group srch_adon_brd padd_l_r">
                    <input type="hidden" value="1" name="search_cat_id" class="form-control br_inpt_radius">
                    <input type="text" placeholder="Search for classes " name="search_key" class="form-control br_inpt_radius">
                    <span class="input-group-btn">
                      <input type="submit" value="Search" name="search" class="btn btn-default br_inpt_radius srch_adon">
                    </span>
                </div>
            </div> -->
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
        </div>    
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r flex_page_tb">
            <div class="col-md-12 col-sm-12 col-xs-12 " style="overflow-x:auto;">
                <div id="msg1"></div>
                <table id="example" class="table flex_page_tb12 datatable">
                    <thead style="background-color:#00cdc6;">
                      <tr>
                        <th>Sr.No.</th>
                        <th>User Id</th>
                        
                        <th>User Name</th>
                        
                        <th>Ticket Id</th>
                        <th>Start Code</th>
                        <th>End Code</th>

                        <th>Class Status</th>
                         <th>Attendence</th>
                        <th>Payment Status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(!empty($view_ticket)){
                            $i=1; foreach ($view_ticket as $value) { ?>    
                            <tr>   
                                <td><?php  echo $i;?></td>
                                <td><?php echo $value['UserMaster']['id'];?></td>
                                <td ><?php echo $value['UserMaster']['first_name'];?></td>
                                <td><?php echo $value['Ticket']['ticket_id'];?></td>
                                <?php $start_code=$value['Ticket']['start_status'];
                                          $end_code=$value['Ticket']['end_status'];
                                 if($start_code=='0'){?>
                                <td>N/A</td>
                                <?php }else{?> 
                                <td class="start_code_value"><?php echo $value['Ticket']['start_code'];?></td>
                                <?php }?>
                                <?php  if($end_code=='0'){?>
                                <td>N/A</td>
                                <?php }else{?> 
                                <td class="end_code_value"><?php echo $value['Ticket']['end_code'];?></td>
                                <?php }?>
                                
                                <td><?php
                                    if($start_code == "0" && $end_code == "0"){ 
                                        echo "Yet to start ";
                                    } 
                                    if($start_code != "0" && $end_code == "0"){ 
                                        echo "Class has started on ",$value['Ticket']['start_code_date'];
                                    }                                     
                                    if($start_code != "0" && $end_code != "0"){ 
                                        echo "Class closed on ".$value['Ticket']['end_code_date']." Payment getting processed";
                                    } 
                                    ?>
                                </td> 
                                <td><button class="btn btn-info attendence" value="Enter Attendence" style="width:100px;height:30px;" id='<?php echo $value['UserMaster']['id'];?>'  data-toggle="modal" data-target="#myModal">Attendence</td>
                                <td><?php if($value['Ticket']['payment_status']=='0'){
                                    echo "Pending With Braingroom";
                                }
                                else if($value['Ticket']['payment_status']=='1'){
                                    echo "Transfer To Vendor";
                                }
                                else if($value['Ticket']['payment_status']=='2'){
                                   echo "Return To User";  
                                }
                                    ?></td> 
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"  style="background-color:#2bcdc1;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h4 class="modal-title cat_mod_title">Add Attendence</h4>
        </div>
        <div class="modal-body">
            <div class='msg'></div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 start_code" >
             <div class="col-xs-6 col-sm-6 col-md-6col-lg-6">         
                      <label>Start Code</label>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6col-lg-6">         
                     <input type="text" name="start_code" placeholder="Enter Start Code" id="start">
                     <input type="hidden" name="user_id" id="user_ide">
              </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">&nbsp;</div>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="col-xs-6 col-sm-6 col-md-6col-lg-6">         
                      <label>End Code</label>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6col-lg-6 end_code">         
                     <input type="text" name="end_code" placeholder="Enter End Code" id="end">
              </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">&nbsp;</div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <center>
            <input type="button" class="btn btn-info post_form" value="Submit">
         </center>     
        </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script type="text/javascript">
$(document).ready(function(){
     

    $('.attendence').click(function(){
     var id=$(this).attr('id');
     //var start=$('#'+id).closet('<td>').class('')
    var start=$('#'+id).parent().parent().find('.start_code_value').html();
    if(start!=''){
       $('#start').val(start); 
       
    }
    else{
        $('#start').val('');
    }
     $('.msg').html('');
     
     $('#end').val('');
      $('#user_ide').val(id);
      $('#category_id_bkp').modal('show');
    }); 

$('.post_form').click(function(){
  var start_code=$('#start').val();
  var end_code=$('#end').val();
  
  if(start_code==''){
   $('.msg').html('<div class="alert alert-danger"><center>Please Enter Start Code</center></div>');
   $('.msg').show();

  }
  else{
      $.ajax({  
            type: "POST",  
            url: "<?php echo HTTP_ROOT; ?>/Homes/Attendence",  
            data:  {
          start_code:start_code,
          end_code:end_code,
          user_id:$('#user_ide').val(),
          class_id:'<?php echo base64_decode($this->params->pass[0]);?>' ,       
        },  
            success: function(respons){ 
                respons=respons.trim();
                if(respons=='1'){
                    
                
                window.location.href ="<?php echo HTTP_ROOT;?>/Homes/flexibleclassattendance/"+
                '<?php echo $this->params->pass[0];?>';
                  
                }
                else if(respons=='2'){
                     $('.msg').html('<div class="alert alert-danger"><center>Start Code Is Not Valid!</center></div>');
                      $('.msg').show();
                }
                else if(respons=='3'){
                     window.location.href ="<?php echo HTTP_ROOT;?>/Homes/flexibleclassattendance/"+
                '<?php echo $this->params->pass[0];?>';
                }
                else if(respons=='4'){
                     $('.msg').html('<div class="alert alert-danger"><center>Start code Or End Code Does Not match!</center></div>');
                     $('.msg').show();
                }
              else if(respons=='5'){
                     $('.msg').html('<div class="alert alert-danger"><center>Class Ended Already!</center></div>');
                     $('.msg').show();
                }
            }
        });
  }
 
});

});
</script> 







