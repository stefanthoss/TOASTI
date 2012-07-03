<?php
class SectorsController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('sectors', $this->Sector->find('all'));
    }

public function add() {
        if ($this->request->is('post')) {
            if ($this->Sector->save($this->request->data)) {
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
    if ($this->Sector->delete($id)) {
        $this->Session->setFlash('Die Unternehmensbranche wurde gelöscht.');
        $this->redirect(array('action' => 'index'));
    }
}

public function edit($id = null) {
    $this->Sector->id = $id;
    $this->set('sector', $this->Sector->read(null, $id));
    if ($this->request->is('get')) {
        $this->request->data = $this->Sector->read();
    } else {
        if ($this->Sector->save($this->request->data)) {
            $this->Session->setFlash('Die Unternehmensbranche wurde gespeichert.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Die Unternehmensbranche konnte nicht gespeichert werden.');
        }
    }
}
}
