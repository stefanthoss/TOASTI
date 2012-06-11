<?php
class Company extends AppModel {
public $name = 'Company';
public $validate = array(
    'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Unternehmensname wird benötigt.'
            )
    ),
    'zip' => array(
        'rule' => array('postal', null, 'de'),
	'allowEmpty' => true,
	'message' => 'Keine gültige PLZ eingegeben.'
    )
);
}
