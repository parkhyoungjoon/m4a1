<?php
    for ( $num = 3 ; $num <= 100 ; $num ++) {   
        if ( $num % 2 == 0 ) {    
            print ( $num . "는 소수가 없습니다 <br>" );
            continue ;
        }
        for ( $i = 3 ; $i < $num ; $i ++) {  
            if ( $num % $i == 0 ) {   
                print ( $num . "는 소수가 없습니다 <br>" );
                break ;
            }
        }
        if ( $i == $num ) { 
            print ( $num . "는 소수입니다. <br>" );
        }
    }
    print ( "소수 판정이 종료되었습니다." );
?>