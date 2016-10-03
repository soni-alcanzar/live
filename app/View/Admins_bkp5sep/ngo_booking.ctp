



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
                    <li class="active"> Payment Tracking NGO Booking</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp;Payment Tracking NGO Booking</div>
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
                                <thead style="font-weight:16px;">
                                <tr>
                                    <th style="width:60px;">Sr.no.</th>
                                    <th>NGO gift booking id</th>
                                    <th>Organisation/Individual name</th>
                                    <th>email id.</th>
                                    <th>phone. No.</th>
                                    <th>Date of booking</th>
                                    
                                    <th>NGO name</th> 
                                    <th>Segment</th>
                                    <th>Gift Amount</th>
                                    <th>Deadline days left</th>
                                    
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                               foreach($ngo_booking as $res){ 
                                   

                                     $now = time(); // or your date as well
                                     $your_date = $res['GiftCupan']['exp_date'];

                                     $datediff = $your_date - $now;
                                    
                                    ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['TransactionHistorie']['booking_id'])?$res['TransactionHistorie']['booking_id']:"N/A";?></td>
                                    <td><?php echo !empty($res['GiftCupan']['reciepent_name'])?$res['GiftCupan']['reciepent_name']:"N/A";?></td>
                                    <td><?php echo !empty($res['GiftCupan']['email'])?$res['GiftCupan']['email']:"N/A";?></td>
                                    <td><?php echo !empty($res['GiftCupan']['mobile'])?$res['GiftCupan']['mobile']:"N/A";?></td>

                                    <td><?php echo !empty($res['TransactionHistorie']['transaction_date'])?date('Y-m-d h:i:s A',$res['TransactionHistorie']['transaction_date']):"N/A";?></td>
                                    <td><?php echo !empty($res['Ngo']['ngo_name'])?$res['Ngo']['ngo_name']:"N/A";?></td>

                                    
                                     <td><?php echo !empty($res['ClassSegment']['segment_name'])?$res['ClassSegment']['segment_name']:"N/A";?></td>
                                     <td><?php echo !empty($res['GiftCupan']['rupees'])?$res['GiftCupan']['rupees']." Rs.":"N/A";?></td>
                                     <td style="font-weight:bold">

                                         <?php  
                                         $rem_date=floor($datediff/(60*60*24));
                                         if($rem_date<0){
                                            echo "Cupan Expaired";
                                         }
                                         else{
                                         echo floor($datediff/(60*60*24))." Days Left";
                                         }?>
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
$('#fixedClass').click(function(){
$(this).hide();
});
$('#tracking_menu').toggle('slow'); 
$('#ngo_booking').css('background-color','black');
});
</script>