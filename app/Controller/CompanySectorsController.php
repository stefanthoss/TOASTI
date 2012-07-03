<?php
class CompanySectorsController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('company_sectors', $this->CompanySector->find('all'));
    }

public function add() {
        if ($this->request->is('post')) {
            if ($this->CompanySector->save($this->request->data)) {
                $this->Session->setFlash('Die Unternehmensbranche wurde hinzugefügt.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Die Unternehmensbranche konnte nicht hinzugefügt werden.');
            }
        }
    }

public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->CompanySector->delete($id)) {
        $this->Session->setFlash('Die Unternehmensbranche wurde gelöscht.');
        $this->redirect(array('action' => 'index'));
    }
}

public function edit($id = null) {
    $this->CompanySector->id = $id;
    $this->set('company_sector', $this->CompanySector->read(null, $id));
    if ($this->request->is('get')) {
        $this->request->data = $this->CompanySector->read();
    } else {
        if ($this->CompanySector->save($this->request->data)) {
            $this->Session->setFlash('Die Unternehmensbranche wurde gespeichert.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Die Unternehmensbranche konnte nicht gespeichert werden.');
        }
    }
}
}
