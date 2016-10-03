<?php

class PayuTransaction extends AppModel{
	public $validate = array();
	public $actsAs = array('Containable');
	  public $hasMany = array(
			'Ticket'  => array('className' => 'Ticket')  ,
    );

}
?>