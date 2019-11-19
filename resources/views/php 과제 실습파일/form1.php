<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" > 
        <title> 덧셈 입력 화면 </title>
    </head>
    <body>
        <p> get로 전송 </p>
        <form action = "getPlus.php" method = "get" >  
            <input type = "text" name = "num1" size = "4" > +   
            <input type = "text" name = "num2" size = "4" >   
            <input type = "submit" value = "=" >  
        </form>
        <p> post로 보내기 </p>
        <form action = "postPlus.php" method = "post" >  
            <input type = "text" name = "num1" size = "4" > +   
            <input type = "text" name = "num2" size = "4" >   
            <input type = "submit" value = "=" >  
        </form>
    </body>
</html>