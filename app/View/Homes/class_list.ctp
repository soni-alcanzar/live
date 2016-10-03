
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

</style>
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
                <table id="example" class="table flex_page_tb12 datatable">
                    <thead style="background-color:#00cdc6;">
                      <tr>
                        <th>Sr.No.</th>
                        <th>Class Name </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(!empty($view_class)){
                            $i=1; foreach ($view_class as $value) { ?>    
                            <tr>   
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>><?php  echo $i;?></td>
                                <td style=<?php echo ($i%2 ==1)?"color:#434343;":"background-color:white;color:#434343;"; ?>><?php echo $value['VendorClasse']['class_topic'] ?></td>
                               <td><a  style="color:blue;" href="<?php echo HTTP_ROOT;?>/Homes/flexibleclassattendance/<?php echo base64_encode($value['VendorClasse']['id']) ?>">Click here For Attendence</a></td>
                                 
                               
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

 







