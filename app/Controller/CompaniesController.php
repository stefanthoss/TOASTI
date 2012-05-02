<?php
class CompaniesController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('companies', $this->Company->find('all'));
    }
}
