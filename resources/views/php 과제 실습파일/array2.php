
<?php
    $colorMagenta [ "red" ] = 255 ;    
    $colorMagenta [ "green" ] = 0 ;    
    $colorMagenta [ "blue" ] = 255 ;    
    
    print ( "<pre>" );
    var_dump ( $colorMagenta );
    print ( "</pre>" );

    $colorMagenta = [ 
        "red" => 255 ,  
        "green" => 0 ,  
        "blue" => 255 ,  
    ]; // [1]  
    print ( "<pre>" );
    var_dump ( $colorMagenta );
    print ( "</ pre>" );
?>