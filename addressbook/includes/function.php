<?php 

// FUNCTION.PHP

// clean the form data to prevent injections

/* built in function used:
   trim()
   stripcslashes()
   htmlspecialchars()
   strip_tags()
   str_replace()
*/

function validateFormData($formData) {
    $formData = trim( stripcslashes( htmlspecialchars( strip_tags( str_replace( array(  '(', ')' ), '', $formData ) ), ENT_QUOTES ) ) );
    
    return $formData;
}



?>