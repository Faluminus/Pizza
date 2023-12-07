<?php
if($_SERVER["REQUEST_METHOD"] =="POST" ){
    $array = array("salami"=>TestMe("salami"),"mozarela"=>TestMe("mozarela"),"basil"=>TestMe("basil"),"tomato"=>TestMe("tomato"),"spinach"=>TestMe("spinach"),"ananas"=>TestMe("ananas"),"carolina_reaper"=>TestMe("carolina_reaper"),"marinera_sauce"=>TestMe("marinera_sauce"));
    var_dump($array);
}

function TestMe($input){
    if($_POST[$input] == "on"){
        return "on";
    }else{
        return "off";
    }
}