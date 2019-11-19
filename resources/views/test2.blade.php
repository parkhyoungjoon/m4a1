<?php
    $collection = [ 'apple' => 'apple.png', 'banana' => 'banana.png', 'tomato' => 'tomato' ];
    foreach($collection as $alt => $src){
        echo "<img src='{$src}' alt='{$alt}' />";
    }
?>