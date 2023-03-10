<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * Users.php | OOP Class for Users for use in CI 3
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

        /**
         * Setters & Getters
         */
        public function setUsername($username)
        {
            $this->username = $username;
        }

        public function getUsername()
        {
            return $this->username;
        }

        public function setFirstName($first_name)
        {
            $this->first_name = $first_name;
        }

        public function getFirstName()
        {
            return $this->first_name;
        }

        public function setLastName($last_name)
        {
            $this->last_name = $last_name;
        }

        public function getLastName()
        {
            return $this->last_name;
        }

        public function setUUID($uuid)
        {
            $this->uuid = $uuid;
        }

        public function getUUID()
        {
            return $this->uuid;
        }

        /**
         * Member Functions
         */

        public function createUser()
        {
            
        }

        private function _generateUUID()
        {
            /**
             * Similar to UUID v4
             */

            $data = $data ?? random_bytes(16);
            assert(strlen($data) == 16);        
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        
            // Return UUID
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }
    }