<?php
require "vendor/autoload.php"; //Require composer's autoload

//Custom options can be set. All are optional.
$options = [
    "report" => dirname(__FILE__) . "/reports/" . "report.xml", //Report file name. Set to false to disable generation fully.
];

//Intialize the Sido class and pass the options defined into it.
//The options array is not required and you may pass in nothing.
$sido = new \eddiejibson\Sido($options);

//Set the test you're currently running
$sido->setTest("Array test");

//Test array we will be using
$array = ["hello" => true];
//Add testcases to the test
$sido->should(is_array($array), "Be an array");
$sido->should(count($array) > 0, "Have a length greater than 0");
