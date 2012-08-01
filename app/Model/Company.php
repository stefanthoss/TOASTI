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

public $hasMany = array(
	'Contact' => array(
		'className' => 'Contact',
		'foreignKey' => 'company_id',
		'dependent' => false
	)
);

var $belongsTo = array(
    'Sector' => array(
        'className'    => 'Sector',
        'foreignKey'    => 'sector_id'
));
}
