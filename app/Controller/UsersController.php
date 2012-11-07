<?php
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
 	// $this->Auth->allow('*');
 	$this->Auth->allow('login', 'logout');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Ungültiger Nutzer');
        }
        $this->set('user', $this->User->read(null, $id));
    }

	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Der Nutzer wurde hinzugefügt.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Der Nutzer konnte nicht hinzugefügt werden.');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	public function edit($id = null) {
		$this->User->id = $id;
      		$this->set('user', $this->User->read(null, $id));
		if (!$this->User->exists()) {
          		  throw new NotFoundException('Ungültiger Nutzer');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Der Nutzer wurde gespeichert.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Der Nutzer konnte nicht gespeichert werden.');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
          		  throw new NotFoundException('Ungültiger Nutzer');
		}
		if ($this->User->delete()) {
			$this->Session->setFlash('Der Nutzer wurde gelöscht.');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Der Nutzer wurde nicht gelöscht.');
		$this->redirect(array('action' => 'index'));
	}

	public function profile() {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
      		$this->set('user', $this->User->read(null, $id));
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Das Profil wurde gespeichert.');
			} else {
				$this->Session->setFlash('Das Profil konnte nicht gespeichert werden.');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash('Nutzername oder Passwort sind falsch.');
        }
    }
}

public function logout() {
    $this->redirect($this->Auth->logout());
}

/**
 * initialize ACL table
 * @see http://book.cakephp.org/2.0/en/tutorials-and-examples/simple-acl-controlled-application/part-two.html
 */
public function initDB() {
    /* define group rights */
    echo "define group rights...<br />";
    $group = $this->User->Group;

    /* allow 'admin' (ID 1) to do everything */
    echo "allow admin<br />";
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    /* allow 'board' (ID 2) to do everything in companies */
    echo "allow board<br />";
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Companies');
    $this->Acl->allow($group, 'controllers/Contacts');
    $this->Acl->allow($group, 'controllers/Cooperations');
    $this->Acl->allow($group, 'controllers/Sectors');
    $this->Acl->allow($group, 'controllers/Events');
    $this->Acl->allow($group, 'controllers/Groups/index');
    $this->Acl->allow($group, 'controllers/Users');

    /* allow 'member' (ID 3) to do just certain things */
    echo "allow member<br />";
    $group->id = 3;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Companies/index');
    $this->Acl->allow($group, 'controllers/Companies/view');
    $this->Acl->allow($group, 'controllers/Contacts/index');
    $this->Acl->allow($group, 'controllers/Contacts/view');
    $this->Acl->allow($group, 'controllers/Cooperations/index');
    $this->Acl->allow($group, 'controllers/Cooperations/view');
    $this->Acl->allow($group, 'controllers/Events/index');
    $this->Acl->allow($group, 'controllers/Users/index');
    $this->Acl->allow($group, 'controllers/Users/view');
    $this->Acl->allow($group, 'controllers/Users/profile');

    /* allow 'crc' (ID 4) to do just certain things */
    echo "allow crc<br />";
    $group->id = 4;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Companies');
    $this->Acl->allow($group, 'controllers/Contacts');
    $this->Acl->allow($group, 'controllers/Cooperations');
    $this->Acl->allow($group, 'controllers/Sectors');
    $this->Acl->allow($group, 'controllers/Events/index');
    $this->Acl->allow($group, 'controllers/Events/edit');
    $this->Acl->allow($group, 'controllers/Users/index');
    $this->Acl->allow($group, 'controllers/Users/view');
    $this->Acl->allow($group, 'controllers/Users/profile');

    /* done message */
    echo "all done";
    exit;
}
}
?>
