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
                    <li class="active"> Payment Tracking Flexible Classes</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp;Payment Tracking Flexible Class Report</div>
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
                                    <th>Class Id</th>
                                    <th>Class Title</th>
                                    <th>Provided By</th>
                                    <th>Booking Detail</th>
                                     
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_detail as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['VendorClasse']['id'])?$res['VendorClasse']['id']:"N/A";?></td>
                                    <td><?php echo !empty($res['VendorClasse']['class_topic'])?ucfirst($res['VendorClasse']['class_topic']):"N/A";?></td>
                                    <?php if($res['UserMaster']['vendor_type_id']=='1'){
                                        ?>
                                    <td><?php echo !empty($res['UserMaster']['first_name'])?ucfirst($res['UserMaster']['first_name']):"N/A";?></td>
                                    <?php }else{?>
                                     <td><?php echo !empty($res['UserMaster']['institute_name'])?ucfirst($res['UserMaster']['institute_name']):"N/A";?></td>
                                    <?php }?>
                                    <td><a href="<?php echo HTTP_ROOT;?>/Admins/TrackDetailFlexible/<?php echo base64_encode($res['VendorClasse']['id']);?>">Booking Detail</a></td>
                                    
                                   
                                    
                                    

                                    
                                   
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
</script>