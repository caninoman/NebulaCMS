<?php
		
	// Path from the SUPERNOVA to the Nebula Directory
	
		$nebulaPath = 'nebula/';
	
	// Database Variables
		
		class db extends PDO {
			
			private $host = 'localhost';
			private $user = 'root';
			private $pass = 'root';
			private $db   = 'nebula';
			private $eng  = 'mysql';
			
			public function __construct(){ 
				
				$dns = $this->engine.':dbname='.$this->db.";host=".$this->host; 
		        parent::__construct( $dns, $this->user, $this->pass ); 
		    
		    } 
			
		}
		
	// Other Settings
	
?>