<?php
    $num = 3 ; 
    while ( $num <= 100 ) {  
        if ( $num % 2 == 0 ) {    
            print ( $num . "는 소수가 없습니다 <br>" );
        } else {  
            $i = 3 ; 
            while ( $i < $num ) { 
                if ( $num % $i == 0 ) {   
                    print ( $num . "는 소수가 없습니다 <br>" );
                    break ;
                }
                $i++;
            }
            if ( $i == $num ) { 
                print ( $num . "는 소수입니다. <br>" );
            }
        }
        $num++;
    }
    print ( "소수 판정이 종료되었습니다." );
?>