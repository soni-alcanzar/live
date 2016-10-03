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
                    <li class="active">Transaction Details by Gift</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp;Transaction Details by Gift</div>
                        <div class="panel-body">
                            <div class="table-top-action" style="margin-left:300px;">
                                
                              
                                
                            </div>
                            <?php echo $this->Session->flash();?>
                            <table id="example" class="table table-striped table-bordered" style="table-layout: fixed;width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Gift Type</th>
                                    <th>Gift By</th>
                                    <th>Coupon code</th>
                                    <th style="text-align:center;">Amount</th>
                                    
                                    <th>Email</th>
                                    <th>Transaction Id</th>
                                    <th>Booking Id</th>
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
                                    <td><?php if($res['bg_gift_cupans']['gift_type']=='1'){
                                        echo "Gift Card";
                                    }elseif($res['bg_gift_cupans']['gift_type']=='2'){
                                        echo "Gift Coupon";
                                    }
                                    else{
                                        echo "N/A";
                                    }?>
                                    </td>
                                    <td><?php if($res['bg_gift_cupans']['gift_by']=='1'){
                                        echo "Individual";
                                        }
                                        else if($res['bg_gift_cupans']['gift_by']=='2'){
                                        echo "Corporate";
                                        }
                                    else if($res['bg_gift_cupans']['gift_by']=='3'){
                                        echo "NGO";
                                        }
                                        else{
                                            echo "N/A";
                                        }?></td>
                                            
                                    
                                     <td><?php echo !empty($res['bg_gift_cupans']['no_of_coupons'])?$res['bg_gift_cupans']['no_of_coupons']:"N/A";?></td>

                                   <td style="text-align:center;"><?php echo !empty($res['bg_gift_cupans']['rupees'])?$res['bg_gift_cupans']['rupees']." Rs":"N/A";?></td>

                                    <td><?php echo !empty($res['bg_gift_cupans']['email'])?$res['bg_gift_cupans']['email']:"N/A";?></td>
                                    <td><?php echo !empty($res['bg_transaction_histories']['transaction_id'])?$res['bg_transaction_histories']['transaction_id']:"N/A";?></td>
                                     <td><?php echo !empty($res['bg_transaction_histories']['booking_id'])?$res['bg_transaction_histories']['booking_id']:"N/A";?></td>

                                      
                                      <td><?php echo !empty($res['bg_transaction_histories']['transaction_date'])?date('Y-m-d h:i:s',$res['bg_transaction_histories']['transaction_date']):"N/A";?></td>


                                    
                                      
                                     
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
$('#giftClass').css('background-color','black');
});
</script>