<?php
	/*
	**		NebulaCMS will process all of it's requests through the Wormhole.
	**		The goal is to connect the 'index.php' file in the site root to 
	**      the Wormhole, passing the site name through a function located in
	**      in the Wormhole. 
	**		
	**      IE - getSite($site); // Which is to be the only required call in 
	**		the index file. This will also allow for easy multi-site 
	**      functionality, as well as sharing content, user base, and other 
	**      resources.
	**  
	*/
	
	require ('config.php');
	
	function newWormhole($site) {
		// DETERMINE IF REQUEST IS SUPERNOVA OR NOVA
		if($site == 'SUPERNOVA'){
			include ('test/home.php');
		} else {
			
		}

	}
	
?>