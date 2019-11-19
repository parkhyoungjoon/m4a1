<?php

    $greek = [ "alpha" , "beta" , "gamma" ]; // [1]     
    
    print ( "<pre>" );
    var_dump ( $greek );
    print ( "</ pre>" );
    
    $greek [] = "delta" ; // [2]    
    
    print ( "<pre>" );
    var_dump ( $greek );
    print ( "</ pre>" );
    
?>