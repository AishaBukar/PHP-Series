<?php
$name=" My name is";
$firstName= "12";
$lastName= "Bukar";

function someFunction() {
    //You can declare it like this too
    // global $firstName, $lastName;
    $GLOBALS['name'] = $GLOBALS['firstName'] . $GLOBALS['lastName'];

}
someFunction();
echo $name;




?>