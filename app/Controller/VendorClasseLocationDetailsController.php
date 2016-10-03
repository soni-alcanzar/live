<?php
class VendorClasseLocationDetailsController extends AppController {
	//var $uses = array(VendorClasseLocationDetail);
	
	public function details($class_id = NULL){
		$this->layout=false;
			$desc = $this->VendorClasseLocationDetail->find('all',
				array('conditions' => array('VendorClasseLocationDetail.vendor_class_id' => $class_id))
			); 
			$this->set('desc',$desc);
	}
		public function get_address($id = NULL){
			$address = $this->VendorClasseLocationDetail->find('first',
				array('conditions' => array('VendorClasseLocationDetail.id' => $id))
			);
			echo $address['VendorClasseLocationDetail']['location']; die;
	}
}