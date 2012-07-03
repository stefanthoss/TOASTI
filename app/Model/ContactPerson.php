<?php
App::uses('AppModel', 'Model', 'Controller/Component');
class ContactPerson extends AppModel {
public $name = 'ContactPerson';
public $validate = array(
     'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Nachname wird benötigt.'
            )
        ),
    'email' => array(
        'rule' => array('email'),
        'allowEmpty' => true,
        'message' => 'Keine gültige E-Mail-Adresse eingegeben.'
    ),
    'zip' => array(
        'rule' => array('postal', null, 'de'),
	'allowEmpty' => true,
	'message' => 'Keine gültige PLZ eingegeben.'
    )
);

public $hasMany = array(
	'Contact' => array(
		'className' => 'Contact',
		'foreignKey' => 'contact_person_id',
		'dependent' => false
));

var $belongsTo = array(
    'Company' => array(
        'className'    => 'Company',
        'foreignKey'    => 'company_id'
));
}
