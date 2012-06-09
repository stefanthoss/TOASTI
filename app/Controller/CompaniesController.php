<?php
class CompaniesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('companies', $this->Company->find('all'));
    }

public function add() {
        if ($this->request->is('post')) {
            if ($this->Company->save($this->request->data)) {
                $this->Session->setFlash('Das Unternehmen wurde gespeichert.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Das Unternehmen konnte nicht gespeichert werden.');
            }
        }
    }
}
