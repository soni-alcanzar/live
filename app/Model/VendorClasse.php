<?php



class VendorClasse extends AppModel{

	public $validate = array();

	public $actsAs = array('Containable');

   public $belongsTo = array(

			'Category'  => array('className' => 'Category')  ,

			'Segment'  => array('className' => 'ClassSegment') ,

			'Community'  => array('className' => 'Community') ,
			'Locality'  => array('className' => 'Locality') ,

			'User'  => array('className' => 'UserMaster','foreignkey' => 'user_id'),

			'ClassType'  => array('className' => 'ClassType','foreignkey'=>'class_type_id'),

			//'VendorClasseLevelDetail'  => array('className' => 'VendorClasseLevelDetail'),

			//'VendorClasseLevelDetail'  => array('className' => 'VendorClasseLevelDetail')

    );

	public $hasOne = array(

		//'ClassType'  => array('className' => 'ClassType')

	);

	public $hasMany = array(

		'VendorClasseLevelDetail'  => array(

			'className' => 'VendorClasseLevelDetail'

			),

		'VendorClasseLocationDetail'  => array('className' => 'VendorClasseLocationDetail'),

		'ClassLrregular'  => array('className' => 'ClassLrregular'),

		'ClassRegular'  => array('className' => 'ClassRegular'),

		'RegularRecurringClasse'  => array('className' => 'RegularRecurringClasse'),

		'ClassSchedule' => array('className' => 'ClassSchedule','foreignkey'=>'class_id')

	);

}

?>