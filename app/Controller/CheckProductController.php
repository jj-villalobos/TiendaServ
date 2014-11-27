<?php

App::uses('AppController', 'Controller');

class CheckProductController extends AppController
{
    var $uses = array('Check', 'Product','CheckProduct');
    /*public $helpers = array('Html', 'Form');
	var $components = array('Session');
	var $uses = array('Product', 'Platform', 'Category', 'CategoryProduct', 'Stock','Wishlist','ProductWishlist');
    */


    public function sales(){

        $options=
                array(
                    array(
                        'table' => 'products',
                        'alias' => 'Product',
                        'type' => 'left',
                        'foreignKey' => false,
                        'conditions'=> array('Product.id = CheckProduct.product_id')
                    ),
                    array(
                        'table' => 'checks',
                        'alias' => 'Check',
                        'type' => 'left',
                        'foreignKey' => false,
                        'conditions'=> array('Check.id = CheckProduct.check_id')
                    )
                );
        $this->set('sale',$this->CheckProduct->find('all',array('fields' => array('Check.*','Product.*','CheckProduct.*'),'joins'=>$options)));
    }
}

?>