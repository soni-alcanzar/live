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
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'manageVendor'), array('escape'=>false))?></li>
                    <li class="active"><?php echo $this->Html->link('<li class="active">ManageCatalog Request</li>', array('controller'=>'Admins','action'=>'manageCatalog'), array('escape'=>false))?></li>
                    
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp; Manage Catalog Request</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                
                                
                            </div>
                             <div id='success_msg'>
                            <?php echo $this->Session->flash();?>
                             </div>
                            <table id="example" class="table table-striped table-bordered" style="table-layout: fixed;width: 100%;">
                                <thead>
                                <tr>
                                    <th style="width:20px;">Sr. no.</th>
                                    <th style="width:150px;">Class Title</th>
                                    <th>Description</th>
                                    <th style="width:80px;">Class_Image</th>
                                    <th style="width:80px;">Created By</th>
                                    <th style="width:80px;">Request Date</th>
                                    <th style="width:60px;">Request</th>
                                    <th style="width:150px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($show_catalog as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['bg_vendor_classes']['class_topic'])?$res['bg_vendor_classes']['class_topic']:"N/A";?></td>
                                    <td><?php echo !empty($res['bg_vendor_classes']['class_summary'])?$res['bg_vendor_classes']['class_summary']:"N/A";?></td>
                                     <td><?php if(!empty($res['bg_vendor_classes']['upload_class_photo'])){?>
                                        <img src="<?php echo HTTP_ROOT."/img/Vendor/class_image/".$res['bg_vendor_classes']['upload_class_photo'];?>" width="60" height="60">
                                     <?php }else{
                                       echo "N/A";
                                     }?></td>
                                     <?php if($res['bg_user_masters']['user_type_id']=='1'){?>
                                     <td><?php echo !empty($res['bg_user_masters']['institute_name'])?$res['bg_user_masters']['institute_name']:"N/A";?></td>
                                     <?php }else{?>
                                     <td><?php echo !empty($res['bg_user_masters']['first_name'])?$res['bg_user_masters']['first_name']:"N/A";?></td>
                                     <?php }?>
                                     <td><?php echo !empty($res['bg_request_catalogs']['add_date'])?date('d/m/Y h:i:s A',$res['bg_request_catalogs']['add_date']):"N/A";?></td>
                                    


                                    
                                      
                                     
                                    <td style="font-weight:bold";><?php if($res['bg_request_catalogs']['status']==1){
                                      echo "Approved";  
                                      }else if($res['bg_request_catalogs']['status']==2){
                                        echo "Rejected";
                                    }else if($res['UserMaster']['status']==0){
                                        echo "Pending";
                                    }
                                    ?></td>
                                    <td>
                                        <?php 
                                        if($res['bg_request_catalogs']['status']=='0')
                                       {
                                        echo $this->Html->link('Accepted',array('controller'=>'Admins','action'=>'addCatalogGroup/'.base64_encode($res['bg_request_catalogs']['id'])))."&nbsp;|&nbsp;";
                                       echo $this->Html->link('Rejected',array('controller'=>'Admins','action'=>'requestStatus/'.base64_encode($res['bg_request_catalogs']['id'])))."&nbsp;";
                                      }
                                       
                                       if($res['bg_request_catalogs']['status']=='1')
                                       {
                                        echo $this->Html->link('Rejected',array('controller'=>'Admins','action'=>'requestStatus/'.base64_encode($res['bg_request_catalogs']['id'])));
                                       }
                                   if($res['bg_request_catalogs']['status']=='2'){
                                        echo $this->Html->link('Accepted',array('controller'=>'Admins','action'=>'addCatalogGroup/'.base64_encode($res['bg_request_catalogs']['id'])));
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>


<!-- Modal -->

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trigger the modal with a button -->

</section>
</section>
<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#Manage_Catalogs').css('background-color','black');
});
</script>