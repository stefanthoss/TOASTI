<?php
class Sector extends AppModel {
public $name = 'Sector';
public $validate = array(
    'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Branchenname wird benötigt.'
            )
    )
);

public $hasMany = array(
	'Company' => array(
		'className' => 'Company',
		'foreignKey' => 'sector_id',
		'dependent' => false
	)
);
}
