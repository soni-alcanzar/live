<?php ?> 
<!-- left menu starts -->
<div class="span2 main-menu-span">
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">Main</li>
            
            <li>
                <?php echo $this->Html->link('<i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span>', array('controller' => 'Admins', 'action'=> 'dashboard'), array('escape' => false))?>
            </li>
            
<!-- Customer Complain Menu    -->  
            <?php if(($this->params->controller == 'Admins' || $this->params->controller == 'admins') && ($this->params->action == 'manageShirt' || $this->params->action == 'ManageShirt' )){ ?> <li class='active' ><?php }else{ ?> <li class='' > <?php } 
            ?>
            
                <?php echo $this->Html->link('<span class="hidden-tablet"> Manage Bodice</span>', array('controller' => 'Admins', 'action'=> 'manageShirt'), array('escape' => false))?>
            </li> 

            <?php if(($this->params->controller == 'Admins' || $this->params->controller == 'admins') && ($this->params->action == 'manageLower' || $this->params->action == 'ManageLower' )){ ?> <li class='active' ><?php }else{ ?> <li class='' > <?php } 
            ?>
            
                <?php echo $this->Html->link('<span class="hidden-tablet"> Manage Skirt</span>', array('controller' => 'Admins', 'action'=> 'manageLower'), array('escape' => false))?>
            </li>       

            <?php if(($this->params->controller == 'Admins' || $this->params->controller == 'admins') && ($this->params->action == 'manageDiamond' || $this->params->action == 'ManageDiamond' )){ ?> <li class='active' ><?php }else{ ?> <li class='' > <?php } 
            ?>
            
                <?php echo $this->Html->link('<span class="hidden-tablet"> Manage Accessories</span>', array('controller' => 'Admins', 'action'=> 'manageDiamond'), array('escape' => false))?>
            </li> 

            <?php if(($this->params->controller == 'Admins' || $this->params->controller == 'admins') && ($this->params->action == 'manageHair' || $this->params->action == 'ManageHair' )){ ?> <li class='active' ><?php }else{ ?> <li class='' > <?php } 
            ?>
            
                <?php echo $this->Html->link('<span class="hidden-tablet"> Manage Hair</span>', array('controller' => 'Admins', 'action'=> 'manageHair'), array('escape' => false))?>
            </li> 
                   
           
<!-- Members Menu -->            
          
        </ul>
   </div><!--/.well -->
</div><!--/span-->
<!-- left menu ends -->
