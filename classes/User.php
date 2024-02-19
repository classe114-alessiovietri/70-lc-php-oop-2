<?php

class User {

    public $firstName;
    public $lastName;
    public $email;              // Visibile sia dall'esterno della classe, sia nelle sotto-classi
    private $registrationDate;  // Nascosta sia all'esterno, sia per le sotto-classi
    protected $loggedIn;        // Nascosta all'esterno, MA ereditata/visibile nelle sotto-classi

    public function __construct(
        $firstName,
        $lastName,
        $email,
        $registrationDate = null
    )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->setRegistrationDate($registrationDate);
    }

    public function sayHi()
    {
        return $this->firstName.' ti saluta!';
    }

    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate($date)
    {
        // EVENTUALI CONTROLLI
        $this->registrationDate = $date;
    }

}