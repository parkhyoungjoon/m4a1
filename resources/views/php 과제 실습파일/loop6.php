<?php
    $i = 1 ; 
    while ( $i <= 9 ) {  
        $j = 1 ; 
        while ( $j <= 9 ) {  
            $ans = $i * $j ;
            print ( "{$i} * {$j} = {$ans} <br>" );
            $j++;
        }
        $i++;
    }
?>