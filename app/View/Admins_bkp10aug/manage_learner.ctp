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
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp; Manage Learner</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                
                                
                            </div>
                            <div id='success_msg'>
                            <?php echo $this->Session->flash();?>
                        </div>
                            <table id="example" class="table table-striped table-bordered" style="table-layout: fixed;width: 100%;">
                                <thead>
                                <tr>
                                    <th style="width:30px;">Sr. no.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    
                                    <th>City</th>
                                    
                                    <th>Locality</th>
                                    <th>Profile Image</th>                                  
                                    <th>status</th>
                                    <th style="width:185px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_Learner as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['UserMaster']['first_name'])?ucfirst($res['UserMaster']['first_name']):"N/A";?></td>
                                    <td><?php echo !empty($res['UserMaster']['email'])?$res['UserMaster']['email']:"N/A";?></td>
                                     <td><?php echo !empty($res['UserMaster']['mobile'])?$res['UserMaster']['mobile']:"N/A";?></td>

                                    
                                    <td>Chennai</td>

                                    <td><?php 
                                    echo !empty($locality[$res['UserMaster']['id']])?
                                    $locality[$res['UserMaster']['id']]:"N/A";?></td>
                                     <td style="word-wrap: break-word;"><?php if(!empty($res['UserMaster']['profile_image'])){
                                          $pic=substr($res['UserMaster']['profile_image'],0,4);
                                          if($pic=='http'){?>
                                            <img src="<?php echo $res['UserMaster']['profile_image'];?>" width="100" height="100">
                                          <?php }
                                          else if($pic!='http'){
                                        ?>
                                        <img src="<?php echo HTTP_ROOT."/img/Buyer/profile/".$res['UserMaster']['profile_image'];?>" width="60" height="60">
                                     <?php }}else{
                                       echo "N/A";
                                     }?></td> 


                                    
                                      
                                     
                                    <td><?php if($res['UserMaster']['status']==1){
                                      echo "Active";  
                                      }else if($res['UserMaster']['status']==2){
                                        echo "InActive";
                                    }else if($res['UserMaster']['status']==0){
                                        echo "Unverified";
                                    }
                                    ?></td>
                                    <td><?php echo $this->Html->link('View',array('controller'=>'Admins','action'=>'view/'.base64_encode($res['UserMaster']['id'])))."&nbsp;|&nbsp;";
                                       echo $this->Html->link('Edit',array('controller'=>'Admins','action'=>'editBuyer/'.base64_encode($res['UserMaster']['id'])))."&nbsp;|&nbsp;";
                                       
                                       if($res['UserMaster']['status']==1)
                                       {
                                        echo $this->Html->link('Deactivate',array('controller'=>'Admins','action'=>'ChangeStatus/'.base64_encode($res['UserMaster']['id'])))."&nbsp;|&nbsp;";
                                    }
                                    else{
                                        echo $this->Html->link('Activate',array('controller'=>'Admins','action'=>'ChangeStatus/'.base64_encode($res['UserMaster']['id'])))."&nbsp;|&nbsp;";
                                    }
                                    echo $this->Html->link('Delete',array('controller'=>'Admins','action'=>'Delete/'.base64_encode($res['UserMaster']['id'])));
                                    ?>
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
$(document).ready(function(){
$('#Manage_Learner').css('background-color','black');
});
</script>