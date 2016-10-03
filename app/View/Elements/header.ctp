<?php 
     //$this->Session->read('admin_login', $adminLogin);
    $adminLogin = $this->Session->read('admin_login');
?> 
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            
            <?php echo $this->Html->link('<span>Fashion :: APP </span>', array('controller' => 'Admins', 'action' => 'dashboard'), array('escape' => false, 'class' => 'brand', 'style'=>'width:480px')); ?>
           
            <!-- user dropdown starts -->
            <div class="btn-group pull-right" >
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user"></i><span class="hidden-phone"><?php echo $adminLogin['username']; ?></span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                   <!--  <li><a href="#">Profile</a></li>
                    <li class="divider"></li> -->
                    <li><?php echo $this->Html->link('Logout', array('controller' => 'Cpanels', 'action' => 'logout')); ?></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

<!--             <div class="top-nav nav-collapse">
                <ul class="nav">
                    <li><a href="#">Visit Site</a></li>
                </ul>
            </div> --><!--/.nav-collapse -->
        </div>
    </div>
</div>
