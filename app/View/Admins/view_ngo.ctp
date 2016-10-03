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
                    <li class="active">View NGO Names</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-pencil-square-o"></i>&nbsp; View NGO Names</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                
                                
                            </div>
                            <?php echo $this->Session->flash();?>
                            <table id="example" class="table table-striped table-bordered" style="table-layout: fixed;width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>NGO Name</th>
                                    <th>NGO Email</th>
                                    <th>Status</th>
                                    
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($all_ngo as $res){
                                ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['Ngo']['ngo_name'])?$res['Ngo']['ngo_name']:"N/A";?></td>
                                    <td><?php echo !empty($res['Ngo']['ngo_name'])?$res['Ngo']['email']:"N/A";?></td>
                                    <td><?php if($res['Ngo']['status']=='1'){
                                        echo "Active";
                                        }
                                        else if($res['Ngo']['status']=='2'){
                                            echo "InActive";
                                        }?></td>
                                    <td><?php 
                                       echo $this->Html->link('Edit',array('controller'=>'Admins','action'=>'editNgo/'.base64_encode($res['Ngo']['id'])))."&nbsp;|&nbsp;";
                                       
                                       if($res['Ngo']['status']==1)
                                       {
                                        echo $this->Html->link('Deactivate',array('controller'=>'Admins','action'=>'ChangeNgoStatus/'.base64_encode($res['Ngo']['id'])));
                                    }
                                    else{
                                        echo $this->Html->link('Activate',array('controller'=>'Admins','action'=>'ChangeNgoStatus/'.base64_encode($res['Ngo']['id'])));
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <?php  } ?>
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
$('#Manage_Segement').css('background-color','black');
}); 
 </script>