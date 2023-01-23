<?php
$name= " ";
$firstName= "Aisha ";
$lastName= "Bukar Awobadejo";

function someFunction() {
    //You can declare it like this too
    // global $firstName, $lastName;
    $GLOBALS['name'] = $GLOBALS['firstName'] . $GLOBALS['lastName'];

}
someFunction();
echo $name;




?>