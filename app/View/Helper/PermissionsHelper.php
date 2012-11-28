<?php
App::uses('AppHelper', 'View/Helper');

/** @see http://bakery.cakephp.org/articles/thanos/2011/01/17/acl_checking_permissions_in_views */
class PermissionsHelper extends AppHelper {
    
    var $helpers = array('Session');

    function check($path){
        if($this->Session->check('Auth.Permissions.controllers') 
        && $this->Session->read('Auth.Permissions.controllers') === true){
            return true;
        }
        if($this->Session->check('Auth.Permissions.'.$path)
        && $this->Session->read('Auth.Permissions.'.$path) === true){
            return true;
        }
        return false;
    }
}
