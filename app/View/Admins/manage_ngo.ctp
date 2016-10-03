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
                    <li class="active">Manage NGO Card</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-main">
                    <div class="panel panel-default panel-primary ">
                        <div class="panel-heading strip pannel-heading-strip"><i class="fa fa-gift"></i>&nbsp; Manage NGO Card</div>
                        <div class="panel-body">
                            <div class="table-top-action">
                                <div class="row">
                                    <div class="col-md-10">
                                        <?php echo $this->Html->link('Add NGO Card', array('controller'=>'Admins','action'=>'addNgoCard'), array('class'=>'btn btn-addnew','style'=>'background-color:#AB1A1F;color:#fff;'))  ?>
                                    </div>
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
                                    <th> Title</th>
                                    <th> Description</th> 
                                    <th> NGO Image</th>
                                    <th> NGO Link</th>
                                    <th> NGO Segment Link</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i=1;
                                foreach($view_ngo_card as $res){ ?>
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo !empty($res['GiftCard']['title'])?ucfirst($res['GiftCard']['title']):"N/A";?></td>
                                    <td><?php echo !empty($res['GiftCard']['description'])?ucfirst($res['GiftCard']['description']):"N/A";?></td>

                                   

                                   
                                     <td><?php if(!empty($res['GiftCard']['gift_image'])){?>
                                          
                            <img src="<?php echo HTTP_ROOT."/img/gift_image/".$res['GiftCard']['gift_image'];?>" width="60" height="60">
                                     <?php }else{
                                       echo "N/A";
                                     }?></td> 
                                    <td><?php echo $this->Html->link('Add NGO ',array('controller'=>'Admins','action'=>'addNgo/'.base64_encode($res['GiftCard']['id'])))."&nbsp;|&nbsp;";
                                          echo $this->Html->link('View NGO  ',array('controller'=>'Admins','action'=>'viewNgo/'.base64_encode($res['GiftCard']['id'])))
                                      ?></td>
                                       <td><?php echo $this->Html->link('Add Segment',array('controller'=>'Admins','action'=>'addGiftSegment/'.base64_encode($res['GiftCard']['id'])))."&nbsp;|&nbsp;";
                                          echo $this->Html->link('View Segment ',array('controller'=>'Admins','action'=>'viewSegment/'.base64_encode($res['GiftCard']['id'])))
                                      ?></td>
                                   
                                    
                                      
                                     
                                    <td><?php if($res['GiftCard']['status']==1){
                                      echo "Active";  
                                      }else if($res['GiftCard']['status']==2){
                                        echo "InActive";
                                    }else if($res['GiftCard']['status']==3){
                                        echo "Unverified";
                                    }
                                    ?></td>
                                    <td><?php 
                                       echo $this->Html->link('Edit',array('controller'=>'Admins','action'=>'editNgoCard/'.base64_encode($res['GiftCard']['id'])))."&nbsp;|&nbsp;";
                                       
                                       if($res['GiftCard']['status']==1)
                                       {
                                        echo $this->Html->link('Deactivate',array('controller'=>'Admins','action'=>'ChangeGiftStatus/'.base64_encode($res['GiftCard']['id'])));
                                    }
                                    else{
                                        echo $this->Html->link('Activate',array('controller'=>'Admins','action'=>'ChangeGiftStatus/'.base64_encode($res['GiftCard']['id'])));
                                    }
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
$('#Manage_Ngo_Card').css('background-color','black');
});
</script>