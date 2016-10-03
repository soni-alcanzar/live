<?php

class Localitie extends AppModel{
	
	 public $belongsTo = array(

			'VendorClasseLocationDetail'  => array('className' => 'VendorClasseLocationDetail'),
    );
}
?>