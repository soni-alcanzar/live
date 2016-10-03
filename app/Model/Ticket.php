<?php

class Ticket extends AppModel{
	public $validate = array();
	public $actsAs = array('Containable');
	 public $belongsTo	 = array(
			'VendorClasseLevelDetail'  => array('className' => 'VendorClasseLevelDetail')  ,
			'VendorClasse'  => array('className' => 'VendorClasse')  ,
    );

}
?>