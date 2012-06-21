<?php
class ContactsController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->Contact->recursive = 0;
        $this->set('contacts', $this->paginate());
    }

    public function view($id = null) {
        $this->Contact->id = $id;
        if (!$this->Contact->exists()) {
            throw new NotFoundException('Ungültige Kontaktaufnahme');
        }
        $this->set('contact', $this->Contact->read(null, $id));
    }

	public function add() {
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash('Die Kontaktaufnahme wurde hinzugefügt.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Die Kontaktaufnahme konnte nicht hinzugefügt werden.');
			}
		}
		$contact_persons = $this->Contact->ContactPerson->find('list');
		$this->set(compact('contact_persons'));
		$users = $this->Contact->User->find('list');
		$this->set(compact('users'));
		$events = $this->Contact->Event->find('list');
		$this->set(compact('events'));
	}

public function delete($id = null) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	$this->Contact->id = $id;
	if (!$this->Contact->exists()) {
            throw new NotFoundException('Ungültige Kontaktaufnahme');
	}
	if ($this->Contact->delete()) {
		$this->Session->setFlash('Die Kontaktaufnahme wurde gelöscht.');
		$this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash('Die Kontaktaufnahme wurde nicht gelöscht.');
	$this->redirect(array('action' => 'index'));
}

	public function edit($id = null) {
    $this->Contact->id = $id;
    $this->set('contact', $this->Contact->read(null, $id));
		if (!$this->Contact->exists()) {
            throw new NotFoundException('Ungültige Kontaktaufnahme');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash('Die Kontaktaufnahme wurde gespeichert.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Die Kontaktaufnahme konnte nicht gespeichert werden.');
			}
		} else {
			$this->request->data = $this->Contact->read(null, $id);
		}
		$contact_persons = $this->Contact->ContactPerson->find('list');
		$this->set(compact('contact_persons'));
		$users = $this->Contact->User->find('list');
		$this->set(compact('users'));
		$events = $this->Contact->Event->find('list');
		$this->set(compact('events'));
	}
}
