<?php
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
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
                $this->Session->setFlash('Der Nutzer wurde erstellt.');
                $this->redirect(array('controller' => 'pages', 'action' => 'home'));
            } else {
                $this->Session->setFlash('Der Nutzer konnte nicht erstellt werden. Versuche es erneut.');
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Ungültiger Nutzer');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Der Nutzer wurde gespeichert.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Der Nutzer konnte nicht gespeichert werden. Versuche es erneut.');
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
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

public function login() {
        if ($this->Auth->login()) {
		/* check if account is active */
		if($this->Auth->user('active') == 1) {
			$this->redirect($this->Auth->redirect());
		} else {
                        $this->Auth->logout();
			$this->redirect(array('action' => 'login'));
                        $this->Session->setFlash('Der Account wurde noch nicht aktiviert.');
		}
        } else {
            $this->Session->setFlash('Nutzername oder Passwort sind falsch.');
        }
}

public function logout() {
    $this->redirect($this->Auth->logout());
}
}
?>
