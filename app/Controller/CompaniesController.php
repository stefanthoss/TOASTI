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

public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Company->delete($id)) {
        $this->Session->setFlash('Das Unternehmen (ID ' . $id . ') wurde gelöscht.');
        $this->redirect(array('action' => 'index'));
    }
}

public function edit($id = null) {
    $this->Company->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Company->read();
    } else {
        if ($this->Company->save($this->request->data)) {
            $this->Session->setFlash('Die Unternehmensdaten wurden gespeichert.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Die Unternehmensdaten konnten nicht gespeichert werden.');
        }
    }
}
}
