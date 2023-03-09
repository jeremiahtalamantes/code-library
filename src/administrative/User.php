<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * Users.php | OOP Class for Users for use in CI
 * 
 */

 /**
 * @property URI $uri
 * @property INPUT $input
 * @property AGENT $agent
 * @property Session $CI 
 */

    class User {

        /**
         * Properties 
         */
        private $uuid;
        private $username;
        private $password;
        private $first_name;
        private $last_name;

        public function __construct($username, $password, $first_name, $last_name, $uuid)
        {
            $this->username = $username;
            $this->password = $password;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->uuid = $uuid;            
        }


        private function _generateUUID()
        {

        }
    }