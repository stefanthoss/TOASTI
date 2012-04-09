<?php
class CompaniesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('companies', $this->Company->find('all'));
    }
}
