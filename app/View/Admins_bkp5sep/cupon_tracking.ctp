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
                    <li class="active">Manage Cupon Tracking</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-gift"></i>&nbsp; Manage Cupon Tracking</div>
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
                                    <th style="width:30px;">Sr. no.</th>
                                    <th> Cupon_id</th>
                                    <th> Start Value</th> 
                                    <th> End Value</th>
                                    <th>Cupon Detail</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_cupon as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['GiftCupan']['no_of_coupons'])?ucfirst($res['GiftCupan']['no_of_coupons']):"N/A";?></td>
                                    <td><?php echo !empty($res['GiftCupan']['rupees'])?
                                    ucfirst($res['GiftCupan']['rupees']." Rs"):"N/A";?></td>
                                    <td><?php echo !empty($res['GiftCupan']['available_amt'])?ucfirst($res['GiftCupan']['available_amt']." Rs"):"N/A";?></td>
                                       <td><?php echo $this->Html->link('Track Cupan Booking',array('controller'=>'Admins','action'=>'trackClassBookingCupon/'.base64_encode($res['GiftCupan']['id'])));
                                         
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
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#cuponTracking').toggle('slow'); 
$('#cuponTracking').css('background-color','black');
});
</script>