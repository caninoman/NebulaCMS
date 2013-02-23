<?php

    // NovaScope
    
    // include class library
    
    include ('library/parse.class.php');
    include ('library/firefox.class.php');
    include ('library/chrome.class.php');
    include ('library/opera.class.php');
    include ('library/safari.class.php');
    include ('library/ie.class.php');

    function newScope($doctype, $doc) {
        
        // Parse the document (HTML, CSS, or JavaScript)
        $parse = new parse();
        $pdoc = return $parse->parse($doctype, $doc);
        
        // Validate the document based on W3C standards
        	
        // Check Browser Compatiblilty
            
            // Test for FireFox Compatibility
            $firefox = new firefox();
            $vff = return $firefox->firefox($doctype, $pdoc);
            
            // Test for Chrome Compatibility
            $chrome = new chrome();
            $vch = return $chrome->chrome($doctype, $pdoc);
            
            // Test for Opera Compatibility
            $opera = new opera();
            $vop = return $opera->opera($doctype, $pdoc);
            
            // Test for Safari Compatibility
            $safari = new safari();
            $vsa = return $safari->safari($doctype, $pdoc);
            
            // Test for IE Compatibility
            $ie = new ie();
            $vie = return $ie->ie($doctype, $pdoc);
        
        // Return Results and suggestions
        
    }

?>
