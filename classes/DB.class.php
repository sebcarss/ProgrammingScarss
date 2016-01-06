<?php
    class DB {
        private $db;
		private $postsCollection;
        
        function __construct($databaseName) {
			$server = "mongodb://localhost:27017/";
			$m = new MongoClient($server);
			$this->db = $m->selectDB($databaseName);
			$this->postsCollection = $this->db->selectCollection('testposts');
        }
		
		public function getLatestPosts() {
			$cursor = $this->postsCollection->find();
			$cursor->limit(10);
			return $cursor;
		}
		
		public function getPostByPermalink($permalink) {
			// TODO Get the post based on the permalink and return it
		}
        
        public function findUser($username, $password) {
            // Find the user in the database from the unique username
			$usernameQuery = array('$and' => array(array('username' => $username), array('password' => $password)));
			return $this->usersCollection->findOne($usernameQuery);
        }
    }
?>