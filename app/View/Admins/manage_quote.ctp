<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<style type="text/css">
    @media screen and (min-width:768px){
        .qoute-popup{left: 0px;}
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'manageVendor'), array('escape'=>false))?></li>
                    <li class="active"><?php echo $this->Html->link('<li class="active">ManageQuote</li>', array('controller'=>'Admins','action'=>'manageCatalog'), array('escape'=>false))?></li>
                    
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp; Manage Quote</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                
                                
                            </div>
                             <div id='success_msg'>
                            <?php echo $this->Session->flash();?>
                             </div>
                            <table id="example" class="table table-striped table-bordered" style="table-layout: fixed;width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Request Date</th>
                                    <th>Quote Id</th>
                                    <th>Class Title</th>
                                    
                                    <th>User Name</th>
                                    <th>Vendor Name</th>
                                    <th>Catalogue Group</th>
                                    <th>Booking Link</th>
                                   <th>Get Quote Form(Admin To Vendor)</th>
                                    
                                    <th>Reply form Vendor(Admin To User)</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach($view_quote as $result){?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo !empty($result['GetQuote']['add_date'])?date('Y-m-d h:i:s A',$result['GetQuote']['add_date']):"N/A";?></td>
                                    <td><?php echo !empty($result['GetQuote']['id'])?$result['GetQuote']['id']:"N/A"?></td>
                                     <td><a href='<?php echo HTTP_ROOT;?>/Homes/viewclassDetail/<?php echo base64_encode($result['VendorClasse']['id']);?>'><?php echo !empty($result['VendorClasse']['class_topic'])?$result['VendorClasse']['class_topic']:"N/A"?></a></td>
                                    <td><a href='<?php echo HTTP_ROOT;?>/Homes/profile/<?php echo base64_encode($result['UserMaster']['id']);?>'><?php echo !empty($result['UserMaster']['first_name'])?$result['UserMaster']['first_name']:"N/A"?></a></td>
                                    <td><a href='<?php echo HTTP_ROOT;?>/Homes/profile/<?php echo base64_encode($result['VendorUser']['id']);?>'><?php echo !empty($result['VendorUser']['first_name'])?$result['VendorUser']['first_name']:"N/A"?></a></td>
                                    <td><?php echo !empty($result['ConnectGroup']['group_name'])?$result['ConnectGroup']['group_name']:"N/A"?></td>
                                    <?php if(($result['GetQuote']['admin_to_Vendor_status']=='1')&&($result['GetQuote']['admin_to_user_status']=='1')){
                                     $link='<a href='.HTTP_ROOT.'/Homes/catalogBook/'.base64_encode($result['GetQuote']['id']).'/'.base64_encode($result['GetQuote']['price']).'>Click here For Booking Catalog Quote </a>';
       
                                      ?>
                                    <td><?php echo $link; ?></td>
                                    <?php }else{?>
                                    <td>N/A</td>
                                    <?php }?>
                                    <?php if($result['GetQuote']['admin_to_Vendor_status']=='1'){?>
                                     <td><button  id="<?php echo $result['GetQuote']['id'];?>" class="already_send" style="background-color: red;border-radius: 16px;color: #fff;height: 37px;width: 146px;">Already Send</button></td>
                                     <?php }else{?>
                                    <td><button  id="<?php echo $result['GetQuote']['id'];?>" class="send_vendor" style="background-color: green;border-radius: 16px;color: #fff;height: 37px;width: 146px;">Send To Vendor</button></td>
                                    <?php }?>
                                    <?php if($result['GetQuote']['admin_to_user_status']=='1'){?>
                                     <td><button  id="<?php echo $result['GetQuote']['id'];?>" class="already_send" style="background-color: red;border-radius: 16px;color: #fff;height: 37px;width: 146px;">Already Send </button></td>
                                     <?php }else{?>
                                    <td><button  id="<?php echo $result['GetQuote']['id'];?>" class="send_user" style="background-color: green;border-radius: 16px;color: #fff;height: 37px;width: 146px;">Send To User</button></td>
                                    <?php }?>
                                </tr>
                               
                            </tbody>
                            <?php $i++;}?>
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
  $('.already_send').attr('disabled',true);
  $('.send_vendor').click(function(){
  var quote_id=$(this).attr('id');
   window.location.href='<?php echo HTTP_ROOT;?>/Admins/sendMessageVendor/'+btoa(quote_id);
});
  $('.send_user').click(function(){
  var quote_id=$(this).attr('id');
   window.location.href='<?php echo HTTP_ROOT;?>/Admins/sendMessageUser/'+btoa(quote_id);
});
  
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
    $('#quote_btn').click(function(){

          $("#myModal").modal('show');
    });
$('#Manage_quote').css('background-color','black');

});
</script>