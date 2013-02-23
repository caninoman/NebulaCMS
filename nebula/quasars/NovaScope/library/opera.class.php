<?php

    class opera {
        
        public function __construct($doctype, $pDoc) {
            
            // Test for broswer compatibility
            
            if ($doctype == 'HTML5') {
	            
            } elseif ($doctype == 'XHTML') {
	            
            } elseif ($doctype == 'HTML4') {
            
            } elseif ($doctype == 'CSS3') {
            
            } elseif ($doctype == 'CSS2') {
            
            } elseif ($doctype == 'JavaScript') {
            
            } elseif ($doctype == '') {
            	return $error = 'The document type was not specified.';
            } else {
	            return $error = 'NovaScope can not validate this type of document for Opera.';
            }      
            
        }
        
        // HTML5 Test
           
        function testHTML5($pDoc){
	        
        }
         
        // XHTML Test
          
        function testXHTML($pDoc){
	        
        }  
        
        // HTML4 Test
        
        function testHTML4($pDoc){
	        
        }  
        
        // CSS3 Test
        
        function testCSS3($pDoc){
	        
        }  
        
        // CSS2 Test
         
        function testCSS2($pDoc){
	        
        }  
        
        // JavaScript Test
        
        function testJavaScript($pDoc){
	        
        }

    }

?>

