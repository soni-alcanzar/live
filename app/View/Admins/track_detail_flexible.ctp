<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<?php 
    echo $this->Html->css('backend/font-awesome');
    echo $this->Html->script('backend/datatable');
    echo $this->Html->script('backend/jquery-1.12.0.min');
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
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'index'), array('escape'=>false))?></li>
                    <li class="active"><?php echo $class_view['VendorClasse']['id']."-".$class_view['VendorClasse']['class_topic'];?></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp;Payment Tracking <?php echo $class_view['VendorClasse']['id']."-".$class_view['VendorClasse']['class_topic'];?></div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                <div class="row">
                                   
                                    <div class="spacer"></div>
                                </div>
                            </div>
                                
                            </div>
                            <div id='success_msg'>
                            <?php echo $this->Session->flash();?>
                        </div>
                         <table id="example" class="table table-striped table-bordered" style="table-layout: fixed;width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>User Id</th>
                                    <th>Booking Id</th>
                                    <th>Ticket Id</th>
                                    <th>Start Code</th>
                                    <th>End Code</th>
                                    <th>Class Status</th>
                                    <th>PayuMoney status</th>
                                    <th style="width:200px;">Braingroom Status</th>
                                     
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_detail as $res){ ?>
                                <tr>
                                  <td><?php echo $i; $i++;?></td>
                                    <td><a href="<?php echo HTTP_ROOT;?>/Admins/view/<?php echo base64_encode($res['Ticket']['user_id']);?>">
                                      <?php echo !empty($res['Ticket']['user_id'])?$res['Ticket']['user_id']:"N/A";?></a></td>
                                    <td><?php echo !empty($res['Ticket']['txn_id'])?ucfirst($res['Ticket']['txn_id']):"N/A";?></td>
                                    
                                    <td><?php echo !empty($res['Ticket']['ticket_id'])?ucfirst($res['Ticket']['ticket_id']):"N/A";?></td>
                                  
                                     <?php if($res['Ticket']['start_status']=='1'){?>                                     
                                      <td><?php echo !empty($res['Ticket']['start_code'])?ucfirst($res['Ticket']['start_code']):"N/A";?></td> 
                                      <?php }else{?>
                                      <td>N/A</td>
                                      <?php } ?>

                                       <?php if($res['Ticket']['end_status']=='1'){?>  
                                      <td><?php echo !empty($res['Ticket']['end_code'])?ucfirst($res['Ticket']['end_code']):"N/A";?></td>
                                        <?php }else{?>
                                      <td>N/A</td>
                                      <?php } ?> 
                                      <?php if($res['Ticket']['start_status']=='1'){?>  
                                   <td>Class Started</td> 
                                  
                                    <?php } if($res['Ticket']['end_status']=='1'){?>  
                                   <td>Class Ended</td> 
                                  
                                  <?php }elseif(($res['Ticket']['start_status']!='1')&&($res['Ticket']['end_status']!='1')){?>  
                                   <td>N/A</td> 
                                   <?php }?>
                                   <td><?php echo $res['Ticket']['status'];?></td>
                                  
                                   <td><select name="abc" id="<?php echo $res['Ticket']['id'];?>" class="brain_status">

                                   <?php if($res['Ticket']['payment_status']=='0'){?>
                                   <option value="0" selected>Pending with braingroom</option>
                                    <option value="1">Transferred to vendor</option>
                                     <option value="2">Return to user</option>
                                   <?php }else if($res['Ticket']['payment_status']=='1'){?>
                                   <option value="1" selected>Transferred to vendor</option>
                                     <option value="0">Pending with braingroom</option>
                                     <option value="2">Return to user</option>
                                   <?php }else if($res['Ticket']['payment_status']=='2'){?>
                                   <option value="2" selected>Return to user</option>
                                   <option value="0">Pending with braingroom</option>
                                     <option value="1">Transferred to vendor</option>
                                   <?php }?>
                                   
                                   </td> 
                                   
                                   
                                    
                                    

                                    
                                   
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>  
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</section>
<script>
$(document).ready(function(){
    
    $('#success_msg').delay(5000).fadeOut();
});
</script>
<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
$('#flexibleClass').click(function(){
$(this).hide();
});
$('#tracking_menu').toggle('slow'); 
$('#flexibleClass').css('background-color','black');
});

$(document).ready(function(){
 $('.brain_status').change(function(){
   var id=$(this).attr('id');

    var status=$('#'+id).val();
    $('.loader').show();
    var WEBURL ="<?php echo Router::url( '/', true )?>Admins/UpdateFlexibleTicket/"+btoa(id)+"/"+btoa(status);
         $('.loader').show();
          $.ajax({ 
            type: 'POST',
            url: WEBURL,
            success: function(res){ 
             $('.loader').hide();
               if(res==1){
            
            $('#success_msg').html('<div class="alert alert-success">Payment Transferred to Vendor Successfully</div>');

           }
           else if(res==2){
            
            $('#success_msg').html('<div class="alert alert-success">Payment Return to User Successfully</div>');

           }
           else if(res==0){
          
            $('#success_msg').html('<div class="alert alert-success">Payment Pending to braingroom</div>'); 
           }
           }
         });
 });
});

</script>