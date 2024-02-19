<?php

require_once __DIR__.'/User.php';

class Student extends User {

    public $classNumber;

    public function __construct(
        $firstName,
        $lastName,
        $email,
        $classNumber = null
    )
    {
        parent::__construct($firstName, $lastName, $email);
        $this->classNumber = $classNumber;
    }

    public function printRegistrationDate()
    {
        echo $this->registrationDate;
    }

    public function sayHi()
    {
        return parent::sayHi().' E saluta anche gli altri studenti di classe '.$this->classNumber;
    }

}