<?php
class ArticleTest extends CakeTestCase {
    public $fixtures = array('app.article');
    public $autoFixtures = false;

    public function testMyFunction() {
        $this->loadFixtures('Article');
    }
}
?>