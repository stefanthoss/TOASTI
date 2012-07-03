<?php
App::uses('AppModel', 'Model', 'AuthComponent', 'Controller/Component');
class User extends AppModel {
    public $name = 'User';
    public $belongsTo = array('Group');
    public $actsAs = array('Acl' => array('type' => 'requester'));

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('email'),
                'message' => 'Als Nutzername wird eine gültige E-Mail-Adresse benötigt.'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Passwort wird benötigt.'
            )
        ),
        'surname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Nachname wird benötigt.'
            )
        ),
        'role' => array(
            'valid' => array(
       		'rule'    => array('naturalNumber', true),
                'message' => 'Eine gültige Rolle wird benötigt.',
                'allowEmpty' => false
            )
        )
    );

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }

public function bindNode($user) {
    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
}

    public function beforeSave() {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }
}
?>
