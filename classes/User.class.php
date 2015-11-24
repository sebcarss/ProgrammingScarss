<?php
    class User {
        private $db;
        
        function __construct($db) {
            $this->db = $db;
        }
        
        public function is_logged_in() {
            if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                return true;
            }
        }
        
        public function login($username, $password) {
            $foundUser = $this->db->findUser($username, $password);
            
            if ($foundUser != null) {
				$_SESSION['username'] = $foundUser['username'];
				$_SESSION['loggedIn'] = true;
				$_SESSION['name'] = $foundUser['firstName'] . ' ' . $foundUser['lastName'];
                return true;
            }	
        }
        
        public function logout() {
            session_destroy();
        }
    }
    
?>