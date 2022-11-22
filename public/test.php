<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $clean = array();
    
    if( $data ) {
        foreach( $data as $key => $value ) {
    
            $clean[$key] = array();
    
            foreach( $value as $c_key => $c_value ) {
                $clean[$key][$c_key] = htmlspecialchars( $c_value, ENT_QUOTES);
            }
        }
    };
    
    var_dump($clean);
    return;
?>
