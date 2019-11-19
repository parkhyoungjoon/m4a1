<?php
    $num = 15 ;
    $i = 2 ; 
    while ( $i < $num ) { 
        if ( $num % $i == 0 ) {   
            print ( $num . "는 소수가 없습니다 <br>" );
            break;
        }
        $i ++;
    }
    print ( "소수 판정이 종료되었습니다." );
?>