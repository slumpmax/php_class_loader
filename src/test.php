<?php
include 'modules/module.php';

// static function "greet" in class "hello"
hello::greet('Hello, world!');

// object function "move" of class "universe\planet"
$venus = new universe\planet('Venus');
$venus->move(30);

// static function "information" in class "universe\planet"
universe\planet::information();

// static function "save" in class "universe"
universe::save($venus);
?>