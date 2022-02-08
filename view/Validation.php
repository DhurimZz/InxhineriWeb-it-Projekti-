<?php
class Validation {

    function __construct() {}
    
    function validate_gender( $gender ){
        if( $gender !== 'm' | $gender !==  'f'){
            return false;
        } else {
            return true;
        }
    }
  
    function is_email( $val ){
            
    }
    
    function email_exists( $email ){
        //...
    }
}  
?>