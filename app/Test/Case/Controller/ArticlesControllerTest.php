<?php
class ArticlesControllerTest extends ControllerTestCase {
    public $fixtures = array('app.article');

    public function testIndex() {
        $result = $this->testAction('/articles/index');
        debug($result);
    }

    public function testIndexShort() {
        $result = $this->testAction('/articles/index/short');
        debug($result);
    }

    public function testIndexShortGetRenderedHtml() {
        $result = $this->testAction(
            '/articles/index/short',
            array('return' => 'contents')
        );
        debug($result);
    }

    public function testIndexShortGetViewVars() {
        $result = $this->testAction(
            '/articles/index/short',
            array('return' => 'vars')
        );
        debug($result);
    }

    public function testIndexPostData() {
        $data = array(
            'Article' => array(
                'user_id' => 1,
                'published' => 1,
                'slug' => 'new-article',
                'title' => 'New Article',
                'body' => 'New Body'
            )
        );
        $result = $this->testAction(
            '/articles/index',
            array('data' => $data, 'method' => 'post')
        );
        debug($result);
    }
}
?>