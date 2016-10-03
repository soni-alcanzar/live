<?php

App::uses('AppHelper', 'View/Helper');

class LayoutHelper extends AppHelper{
	public function cat_segments(){
			$this->loadModel('VendorClasse');
			
			$result = $this->VendorClasse->find('all');
			return $result;
		}
		public function class_irregular($class_id,$class_no){
			App::import("Model", "ClassLrregular");  
			$model = new ClassLrregular(); 
			$result = $model->find('all', array('conditions'=> array('vendor_class_id'=>$class_id,'class_no' => $class_no)));
			return $result;
		}	
		public function class_regular($class_id,$class_no){
			App::import("Model", "RegularRecurringClasse");  
			$model = new RegularRecurringClasse(); 
			$result = $model->find('all', array(
				'conditions'=> array(
					'RegularRecurringClasse.vendor_class_id'=>$class_id,
					'RegularRecurringClasse.class_no' => $class_no
					),
				'contain' => array(
					'VendorClasseNotification'
				),
			));
			return $result;
		}	
		public function class_type($type){
			App::import("Model", "ClassType");  
			$model = new ClassType(); 
			$result = $model->find('first', array('conditions'=> array('ClassType.id'=>$type)));
			return $result;
		}
		public function get_community($type){
			App::import("Model", "Community");  
			$model = new Community(); 
			$result = $model->find('first', array('conditions'=> array('Community.id'=>$type)));
			return $result;
		}
		public function get_city($city){
			App::import("Model", "City");  
			$model = new City(); 
			$result = $model->find('first', array('conditions'=> array('City.id'=>$city)));
			return $result;
		}
		public function get_group($group){
			App::import("Model", "ConnectGroup");  
			$model = new ConnectGroup(); 
			$result = $model->find('first', array('conditions'=> array('ConnectGroup.id'=>$group)));
			return $result;
		}	
}