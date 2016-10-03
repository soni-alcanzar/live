<?php

class VendorClasseLocationDetail extends AppModel{
	public $actsAs = array('Containable');
	 public $belongsTo = array(

			//'VendorClasses'  => array('className' => 'VendorClasses'),
			'Locality'  => array('className' => 'Locality','foreignkey' => 'locality_id')
    );
	public $hasOne = array(

			//'Localitie'  => array('className' => 'Localitie'),
			//'Locality'  => array('className' => 'Locality','foreignkey' => 'locality_id')
    );
}
?>