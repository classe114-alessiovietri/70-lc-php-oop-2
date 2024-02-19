<?php

require_once __DIR__.'/classes/HumanBeing.php';
require_once __DIR__.'/classes/User.php';
require_once __DIR__.'/classes/Student.php';

echo '<h3>';
echo HumanBeing::doSomething();
echo '</h3>';

$userOne = new User('Mario', 'Rossi', 'mario.rossi@boolean.careers');
// $userOne->firstName = 'Mario';
// $userOne->lastName = 'Rossi';
// $userOne->email = 'mario.rossi@boolean.careers';
$userOne->setRegistrationDate('19/02/2024');

var_dump($userOne);
var_dump($userOne->sayHi());
var_dump($userOne->getRegistrationDate());

$studentOne = new Student('Luigi', 'Verdi', 'luigi.verdi@boolean.careers', 114);
// $studentOne->firstName = 'Luigi';
// $studentOne->lastName = 'Verdi';
// $studentOne->email = 'luigi.verdi@boolean.careers';
$studentOne->classNumber = 114;

var_dump($studentOne);
var_dump($studentOne->sayHi());
// var_dump($studentOne->sayHiToClassMembers());
var_dump($studentOne->getRegistrationDate());
var_dump($studentOne->printRegistrationDate());