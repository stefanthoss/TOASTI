<?php
class CooperationsController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form', 'Time');

    public function index() {
        $this->Cooperation->recursive = 0;
        $this->set('cooperations', $this->paginate());
    }

    public function view($id = null) {
        $this->Cooperation->id = $id;
        if (!$this->Cooperation->exists()) {
            throw new NotFoundException('Ungültige Kontaktaufnahme');
        }
        $this->set('cooperation', $this->Cooperation->read(null, $id));
    }

	public function add() {
		if ($this->request->is('post')) {
			$this->Cooperation->create();
			if ($this->Cooperation->save($this->request->data)) {
				$this->Session->setFlash('Die Kontaktaufnahme wurde hinzugefügt.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Die Kontaktaufnahme konnte nicht hinzugefügt werden.');
			}
		}
		$this->set('contacts', $this->Cooperation->Contact->find('list', array('order' => array('Contact.name' => 'asc'))));
		$this->set('users', $this->Cooperation->User->find('list', array('order' => array('User.name' => 'asc'))));
		$this->set('events', $this->Cooperation->Event->find('list', array('order' => array('Event.name' => 'asc'))));
	}

public function delete($id = null) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	$this->Cooperation->id = $id;
	if (!$this->Cooperation->exists()) {
            throw new NotFoundException('Ungültige Kontaktaufnahme');
	}
	if ($this->Cooperation->delete()) {
		$this->Session->setFlash('Die Kontaktaufnahme wurde gelöscht.');
		$this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash('Die Kontaktaufnahme wurde nicht gelöscht.');
	$this->redirect(array('action' => 'index'));
}

	public function edit($id = null) {
    $this->Cooperation->id = $id;
    $this->set('cooperation', $this->Cooperation->read(null, $id));
		    if ($this->request->is('get')) {
        $this->request->data = $this->Cooperation->read();
    } else {
        if ($this->Cooperation->save($this->request->data)) {
            $this->Session->setFlash('Die Kontaktaufnahme wurden gespeichert.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Die Kontaktaufnahme konnten nicht gespeichert werden.');
        }
    }
		$this->set('contacts', $this->Cooperation->Contact->find('list', array('order' => array('Contact.name' => 'asc'))));
		$this->set('users', $this->Cooperation->User->find('list', array('order' => array('User.name' => 'asc'))));
		$this->set('events', $this->Cooperation->Event->find('list', array('order' => array('Event.name' => 'asc'))));
	}
}
