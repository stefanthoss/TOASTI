<?php
class User extends AppModel {
    public $name = 'User';
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Nutzername wird benötigt.'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Passwort wird benötigt.'
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

public function beforeSave() {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}
}
?>
