<?php
App::uses('AppController', 'Controller');

class ArticlesController extends AppController {
    public $helpers = array('Form', 'Html');

    public function index($short = null) {
        if (!empty($this->request->data)) {
            $this->Article->save($this->request->data);
        }
        if (!empty($short)) {
            $result = $this->Article->find('all', array('id', 'title'));
        } else {
            $result = $this->Article->find('all');
        }

        if (isset($this->params['requested'])) {
            return $result;
        }

        $this->set('title', 'Articles');
        $this->set('articles', $result);
    }
}
?>