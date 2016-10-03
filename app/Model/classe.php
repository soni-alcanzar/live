<?php

class VendorClasse extends AppModel{
   public $belongsTo = array(
        'Category'  => array('className' => 'Category')      
    );


}
?>