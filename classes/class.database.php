<?php
    class database {
        private $db;
        private $usersCollection;
        
        function __construct($databaseName) {
            $m = new MongoClient();
            $this->db = $m->selectDB($databaseName);
            $this->usersCollection = new MongoCollection($this->db, 'users');
        }
        
        public function findUser($username, $password) {
            // Find the user in the database from the unique username
			$usernameQuery = array('$and' => array(array('username' => $username), array('password' => $password)));
			return $this->usersCollection->findOne($usernameQuery);
        }
        
        public function registerNewUserFromPost() {
            // use the $_POST object to create the new unique user
            // Make sure the passwords match
            //if ($_POST['username'] != $_POST['confirm_password']) {
               // return false is at the bottom
            //}
            
            // Does this username already exist?
            $query = array('username' => $_POST['username']);
            $numberOfUsers = $this->usersCollection->find($query)->count();
            if ($numberOfUsers >= 1) {
                // return false is at the bottom
            } else {
                try {
                    // create user
                    if (isset($_POST['email'])) {
                        $document = array('username' => $_POST['username'],
                                      'password' => $_POST['password'],
                                      'firstName' => $_POST['firstname'],
                                      'lastName' => $_POST['surname'],
                                      'email' => $_POST['email']);
                        $this->usersCollection->insert($document);
                    } else {
                        $document = array('username' => $_POST['username'],
                                      'password' => $_POST['password'],
                                      'firstName' => $_POST['firstname'],
                                      'lastName' => $_POST['surname']);
                        $this->usersCollection->insert($document);
                    }
                
                    return true;
                } catch(MongoCursorException $e) {
                    echo "Can't save the same person twice!\n";
                }
            }
            
            return false;
        }
        
        public function listCollections() {
            return $this->db->listCollections();
        }
    }
?>