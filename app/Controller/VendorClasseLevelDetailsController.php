<?php
class VendorClasseLevelDetailsController extends AppController {
	//var $uses = array(VendorClasseLocationDetail);
	
	public function description($id = NULL){
			$this->layout=false;
			$desc = $this->VendorClasseLevelDetail->find('first',
				array('conditions' => array('VendorClasseLevelDetail.id' => $id))
			); //echo '<pre>'; print_r($desc); die;
			$this->set('desc',$desc);
	}

}