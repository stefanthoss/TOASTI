<?php
class Event extends AppModel {
public $name = 'Event';
public $validate = array(
    'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ein Veranstaltungsname wird benötigt.'
            )
    )
);
}
