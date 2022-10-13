<?php

//require ('/vendor/autoload.php');
require_once __DIR__ . '/vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
//$output = $bessie->say();
//echo $output;

// tongue 
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');


// or just echo the object for direct output
echo $bessie;