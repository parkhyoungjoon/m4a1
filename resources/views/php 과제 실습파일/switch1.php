<?php
    $foo = rand ( 1 , 10 ); 
    switch ( $foo ) { 
        case 1 : 
            print ( "우선입니다 <br>" );
        break ;
        case 2 : 
            print ( "장점입니다 <br>" );
        break ;
        case 3 : 
            print ( "가능합니다 <br>" );
        break ;
        default :
            print ( "불가입니다 <br>" );
        break ;
    }
    print ( "foo의 값은 {$foo}했습니다" );
?>