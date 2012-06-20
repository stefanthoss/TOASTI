<?php
class ContactPersonsController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->ContactPerson->recursive = 0;
        $this->set('contact_persons', $this->paginate());
    }

    public function view($id = null) {
        $this->ContactPerson->id = $id;
        if (!$this->ContactPerson->exists()) {
            throw new NotFoundException('Ungültige Kontaktperson');
        }
        $this->set('contact_person', $this->ContactPerson->read(null, $id));
    }

public function add() {
        if ($this->request->is('post')) {
            if ($this->ContactPerson->save($this->request->data)) {
                $this->Session->setFlash('Die Kontaktperson wurde hinzugefügt.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Die Kontaktperson konnte nicht hinzugefügt werden.');
            }
        }
    }

public function delete($id = null) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	$this->ContactPerson->id = $id;
	if (!$this->ContactPerson->exists()) {
            throw new NotFoundException('Ungültige Kontaktperson');
	}
	if ($this->ContactPerson->delete()) {
		$this->Session->setFlash('Die Kontaktperson wurde gelöscht.');
		$this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash('Die Kontaktperson wurde nicht gelöscht.');
	$this->redirect(array('action' => 'index'));
}

public function edit($id = null) {
    $this->ContactPerson->id = $id;
    $this->set('contact_person', $this->ContactPerson->read(null, $id));
    if ($this->request->is('get')) {
        $this->request->data = $this->ContactPerson->read();
    } else {
        if ($this->ContactPerson->save($this->request->data)) {
            $this->Session->setFlash('Die Kontaktperson wurde gespeichert.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Die Kontaktperson konnte nicht gespeichert werden.');
        }
    }
}
}
