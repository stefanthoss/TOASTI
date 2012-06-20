<?php
App::uses('AppModel', 'Model', 'Controller/Component');
class ContactPerson extends AppModel {
public $name = 'ContactPerson';
public $belongsTo = array('Company');
public $validate = array(
     'surname' => array(
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
    'phone' => array(
        'rule' => array('phone', null, null),
        'allowEmpty' => true,
        'message' => 'Keine gültige Telefonnummer eingegeben.'
    ),
    'mobile' => array(
        'rule' => array('phone', null, null),
        'allowEmpty' => true,
        'message' => 'Keine gültige Handynummer eingegeben.'
    ),
    'fax' => array(
        'rule' => array('phone', null, null),
        'allowEmpty' => true,
        'message' => 'Keine gültige Faxnummer eingegeben.'
    ),
    'zip' => array(
        'rule' => array('postal', null, 'de'),
	'allowEmpty' => true,
	'message' => 'Keine gültige PLZ eingegeben.'
    )
);
}
