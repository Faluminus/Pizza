<?php
if($_SERVER["REQUEST_METHOD"] =="POST" ){
    $array = array();
    array_push($array,TestMe("salami"));
    array_push($array,TestMe("mozarela"));
    array_push($array,TestMe("basil"));
    array_push($array,TestMe("tomato"));
    array_push($array,TestMe("spinach"));
    array_push($array,TestMe("ananas"));
    array_push($array,TestMe("carolina_reaper"));
    array_push($array,TestMe("marinera_sauce"));
    var_dump($array);
}

function TestMe(input){
    if($_POST[input] == "on"){
        return "on";
    }else{
        return "off";
    }
}