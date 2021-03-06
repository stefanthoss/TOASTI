<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 */
class GroupsController extends AppController {

public function beforeFilter() {
   	parent::beforeFilter();
	//$this->Auth->allow('*');
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException('Ungültige Gruppe');
		}
		$this->set('group', $this->Group->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash('Die Gruppe wurde hinzugefügt.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Die Gruppe konnte nicht hinzugefügt werden.');
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Group->id = $id;
      		$this->set('group', $this->Group->read(null, $id));
		if (!$this->Group->exists()) {
			throw new NotFoundException('Ungültige Gruppe');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash('Die Gruppe wurde gespeichert.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Die Gruppe konnte nicht gespeichert werden.');
			}
		} else {
			$this->request->data = $this->Group->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException('Ungültige Gruppe');
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash('Die Gruppe wurde gelöscht.');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(' Die Gruppe wurde nicht gelöscht.');
		$this->redirect(array('action' => 'index'));
	}
}
