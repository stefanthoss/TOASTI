<?php
App::uses('AppModel', 'Model');
class Cooperation extends AppModel {
public $name = 'Cooperation';
         
var $belongsTo = array(
    'Contact' => array(
        'className'    => 'Contact',
        'foreignKey'    => 'contact_id'
    ),
    'User' => array(
        'className'    => 'User',
        'foreignKey'    => 'user_id'
    ),
    'Event' => array(
        'className'    => 'Event',
        'foreignKey'    => 'event_id'
    ),
);

public $validate = array(
    'date' => array(
        'rule' => array('date', 'ymd'),
        'message' => 'Kein gültiges Datum eingegeben.'
    )
);
}
