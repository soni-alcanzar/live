<?php  
//error_reporting(-1);
//error_reporting(E_ALL & ~E_NOTICE);
echo $this->Element('registration_header');
echo $this->fetch('content');
echo $this->Element('homes_footer');
?>