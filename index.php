<?php
  
  // Initialize a Wormhole
  
    // Extract the page request
      
      /* NEED TO MOVE BELOW CODE INTO CLASS LIBRARY. */
      
        $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
        
        if ($_SERVER["SERVER_PORT"] != "80") {
          
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  
        } else {
          
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        
        }
  
        return $pageURL;

      /* NEED TO MOVE ABOVE CODE INTO CLASS LIBRARY. */
    
    
    
    
    // Pass request to the StarMap for guidance
    
    
    
    
    // Transport user to requested location
    
    
    
    
    // Wait for next voyage
  
  
  
  
?>
