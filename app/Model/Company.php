<?php
class Company extends AppModel {
public $validate = array(
    'name' => array(
        'rule' => 'notEmpty',
	'message' => 'Der Unternehmensname darf nicht leer sein.'
    ),
    'zip' => array(
        'rule' => array('postal', null, 'de'),
	'allowEmpty' => true,
	'message' => 'Keine gültige PLZ eingegeben.'
    )
);
}
