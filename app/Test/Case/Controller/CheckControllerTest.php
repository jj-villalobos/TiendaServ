<?php
/**
 * Created by PhpStorm.
 * User: MariaJose
 * Date: 13/11/2014
 * Time: 09:18 PM
 */
class CheckControllerTest extends ControllerTestCase
{
    public $fixtures = array('app.check','app.checkproduct');

    public function testCheck() {
        $result = $this->testAction('checks/check');
        debug($result);
    }
	
	public function testReceipt(){
		$result = $this->testAction('checks/receipt');
		debug($result);
	}
}
?>