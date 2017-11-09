<?php
/**
 * Created by PhpStorm.
 * User: devaraujo
 * Date: 22/01/17
 * Time: 22:00
 */


//Paradigma funcional

$input = array(22,34,17,18,14,13,22,25);
$filtro = function($age){
    return ($age >= 18);
};

$output = array_filter($input, $filtro = function($age){
    return ($age >= 18);
});

print_r($output);
