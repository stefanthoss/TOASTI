<?php
App::uses('AppModel', 'Model');
class Contact extends AppModel {
public $name = 'Contact';
         
var $belongsTo = array(
    'ContactPerson' => array(
        'className'    => 'ContactPerson',
        'foreignKey'    => 'contact_person_id'
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
        'rule' => array('date'),
        'message' => 'Kein (gültiges) Datum eingegeben eingegeben.'
    )
);
}
