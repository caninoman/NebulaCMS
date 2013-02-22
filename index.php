<?php

	// This is the SuperNova (main site). It will give you access to the Nebula (Network) Admin Panel.
	// All sub-sites will be called Novas and will only be able to access the Nova (Site) Admin Panel.
	
	// Establish the Wormhole
	include ('nebula/wormhole.php');
	
	// Create new Wormhole to the SuperNova
	newWormhole('SUPERNOVA');
	
?>