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
                    <li class="active">Transaction Details by Class</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp;Transaction Details by Class</div>
                        <div class="panel-body">
                            <div class="table-top-action" style="margin-left:300px;">
                                
                              
                                
                            </div>
                            <?php echo $this->Session->flash();?>
                            <table id="example" class="table table-striped table-bordered" style="table-layout: fixed;width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Class_name</th>
                                    <th>Transaction By</th>
                                    <th>Contact No</th>

                                    <th>Amount</th>
                                    <th>Booking Id</th>
                                    <th>Total Ticket</th>
                                    
                                    <th>Transaction Id</th>
                                    
                                    <th>Payment Mode</th>
                                    <th>Transaction Date</th>                                  
                                    <th>Transaction status</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_transaction as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['bg_vendor_classes']['class_topic'])?$res['bg_vendor_classes']['class_topic']:"N/A";?></td>
                                    <?php if($res['bg_user_masters']['user_type_id']=='1'){?>
                                    <td><?php echo !empty($res['bg_user_masters']['institute_name'])?$res['bg_user_masters']['institute_name']:"N/A";?></td>
                                    <?php }else{?>
                                    <td><?php echo !empty($res['bg_user_masters']['first_name'])?$res['bg_user_masters']['first_name']:"N/A";?></td>
                                    <?php }?>
                                     <td><?php echo !empty($res['bg_user_masters']['mobile'])?$res['bg_user_masters']['mobile']:"N/A";?></td>

                                   

                                    <td><?php echo !empty($res['bg_transaction_histories']['payment_amt'])?$res['bg_transaction_histories']['payment_amt']:"N/A";?></td>
                                    <td><?php echo !empty($res['bg_transaction_histories']['booking_id'])?$res['bg_transaction_histories']['booking_id']:"N/A";?></td>
                                    <td><?php echo !empty($res['bg_transaction_histories']['no_of_ticket'])?$res['bg_transaction_histories']['no_of_ticket']:"N/A";?></td>
                                    
                                     <td><?php echo !empty($res['bg_transaction_histories']['transaction_id'])?$res['bg_transaction_histories']['transaction_id']:"N/A";?></td>

                                      <td><?php if($res['bg_transaction_histories']['payment_type']=='1'){
                                        echo "By Coupan";}
                                        else if($res['bg_transaction_histories']['payment_type']=='2'){
                                        echo "By Credit/Debid Card";}
                                        else{
                                            echo "N/A";
                                        }?>
                                        </td>
                                      <td><?php echo !empty($res['bg_transaction_histories']['transaction_date'])?date('Y-m-d h:i:s A',$res['bg_transaction_histories']['transaction_date']):"N/A";?></td>


                                    
                                      
                                     
                                    <td><?php if($res['bg_transaction_histories']['status']==1){
                                      echo "Fail";  
                                      }else if($res['bg_transaction_histories']['status']==0){
                                        echo "Pending";
                                    }else if($res['bg_transaction_histories']['status']==2){
                                        echo "Success";
                                    }
                                    else{
                                        echo "N/A";
                                    }
                                    ?></td>
                                   
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
$('#drop_menu').toggle('slow'); 
$('#postClass').css('background-color','black');
});
</script>