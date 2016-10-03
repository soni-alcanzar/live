<?php

class Category extends AppModel{
	
	public $hasMany = array(

		'ClassSegment'  => array('className' => 'ClassSegment'),
	);
}
?>