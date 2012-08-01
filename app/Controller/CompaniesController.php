<?php
class CompaniesController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->Company->recursive = 0;
        $this->set('companies', $this->paginate());
    }

    public function view($id = null) {
        $this->Company->id = $id;
        if (!$this->Company->exists()) {
            throw new NotFoundException('Ungültiges Unternehmen');
        }
        $this->set('company', $this->Company->read(null, $id));
    }

public function add() {
        if ($this->request->is('post')) {
            if ($this->Company->save($this->request->data)) {
                $this->Session->setFlash('Das Unternehmen wurde hinzugefügt.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Das Unternehmen konnte nicht hinzugefügt werden.');
            }
        }
	$sectors = $this->Company->Sector->find('list');
	$this->set(compact('sectors'));
    }

public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Company->delete($id)) {
        $this->Session->setFlash('Das Unternehmen wurde gelöscht.');
        $this->redirect(array('action' => 'index'));
    }
}

public function edit($id = null) {
    $this->Company->id = $id;
    $this->set('company', $this->Company->read(null, $id));
    if ($this->request->is('get')) {
        $this->request->data = $this->Company->read();
    } else {
        if ($this->Company->save($this->request->data)) {
            $this->Session->setFlash('Das Unternehmen wurde gespeichert.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Das Unternehmen konnte nicht gespeichert werden.');
        }
    }
	$sectors = $this->Company->Sector->find('list');
	$this->set(compact('sectors'));
}
}
