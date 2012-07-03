<?php
class CompanySector extends AppModel {
public $name = 'CompanySector';
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
		'foreignKey' => 'company_sector_id',
		'dependent' => false
	)
);
}
