<?php
class EventsController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('events', $this->Event->find('all'));
    }

public function add() {
        if ($this->request->is('post')) {
            if ($this->Event->save($this->request->data)) {
                $this->Session->setFlash('Die Veranstaltung wurde hinzugefügt.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Die Veranstaltung konnte nicht hinzugefügt werden.');
            }
        }
    }

public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Event->delete($id)) {
        $this->Session->setFlash('Die Veranstaltung wurde gelöscht.');
        $this->redirect(array('action' => 'index'));
    }
}

public function edit($id = null) {
    $this->Event->id = $id;
    $this->set('event', $this->Event->read(null, $id));
    if ($this->request->is('get')) {
        $this->request->data = $this->Event->read();
    } else {
        if ($this->Event->save($this->request->data)) {
            $this->Session->setFlash('Die Veranstaltung wurde gespeichert.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Die Veranstaltung konnte nicht gespeichert werden.');
        }
    }
}
}
