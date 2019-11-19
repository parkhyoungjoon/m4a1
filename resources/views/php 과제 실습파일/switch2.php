<?php
    $foo = rand ( 1 , 12 ); 
    switch ( $foo ) { 
        case 3 : 
        case 4 : 
        case 5 : 
            print ( "봄 <br>" );
            break ;
        case 6 : 
            print ( "장마입니다 <br>" );
            break ;
        case 7 : 
        case 8 : 
        case 9 : 
            print ( "여름입니다 <br>" );
            break ;
        case 10 : 
        case 11 : 
            print ( "가을입니다 <br>" );
            break ;
        case 12 : 
        case 1 : 
        case 2 : 
            print ( "겨울입니다 <br>" );
            break ;
        default :
            print ( "나타나면 이상합니다 <br>" );
            break ;
    }
    print ( "foo의 값은 {$foo}했습니다" ); 
?>