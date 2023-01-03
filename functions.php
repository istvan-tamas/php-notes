<?php
function dd($array){
    echo "<pre>";
        var_dump($array);
    echo "</pre>";
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] == $value;
}

?>
