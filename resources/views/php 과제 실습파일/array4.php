<?php
    $colors = [ 
        "magenta" => [  
            "red" => 255 ,  
            "green" => 0 ,  
            "blue" => 255 ,  
        ,
        "black" => [  
            "red" => 0 ,  
            "green" => 0 ,  
            "blue" => 0 ,  
        ,
    ];
    print ( "<pre>" );
    var_dump ( $colors );
    print ( "</ pre>" );
    $oneElement = $colors [ "magenta" ] [ "blue" ]; // [2]  
    print ( "요소 하나만 표시 :" . $oneElement );
?>
