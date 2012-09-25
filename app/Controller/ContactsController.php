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
            throw new NotFoundException('Ungültige Kontaktperson');
        }
        $this->set('contact', $this->Contact->read(null, $id));
    }

	public function add() {
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash('Die Kontaktperson wurde hinzugefügt.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Die Kontaktperson konnte nicht hinzugefügt werden.');
			}
		}
		$this->set('companies', $this->Contact->Company->find('list', array('order' => array('Company.name' => 'asc'))));
	}

public function delete($id = null) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	$this->Contact->id = $id;
	if (!$this->Contact->exists()) {
            throw new NotFoundException('Ungültige Kontaktperson');
	}
	if ($this->Contact->delete()) {
		$this->Session->setFlash('Die Kontaktperson wurde gelöscht.');
		$this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash('Die Kontaktperson wurde nicht gelöscht.');
	$this->redirect(array('action' => 'index'));
}

	public function edit($id = null) {
    $this->Contact->id = $id;
    $this->set('contact', $this->Contact->read(null, $id));
		if (!$this->Contact->exists()) {
            throw new NotFoundException('Ungültige Kontaktperson');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash('Die Kontaktperson wurde gespeichert.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Die Kontaktperson konnte nicht gespeichert werden.');
			}
		} else {
			$this->request->data = $this->Contact->read(null, $id);
		}
		$this->set('companies', $this->Contact->Company->find('list', array('order' => array('Company.name' => 'asc'))));
	}
}
