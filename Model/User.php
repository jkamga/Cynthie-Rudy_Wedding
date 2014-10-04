<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author justink
 */
class User {
    //put your code here
    protected $_username;
    protected $_password;
    protected $_email;
    protected $_level;
    
    function __construct() {
        
    }
    function get_username() {
        return $this->_username;
    }

    function get_password() {
        return $this->_password;
    }

    function get_email() {
        return $this->_email;
    }

    function get_level() {
        return $this->_level;
    }

    function set_username($_username) {
        $this->_username = $_username;
    }

    function set_password($_password) {
        $this->_password = $_password;
    }

    function set_email($_email) {
        $this->_email = $_email;
    }

    function set_level($_level) {
        $this->_level = $_level;
    }


}
