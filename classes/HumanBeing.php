<?php

class HumanBeing {

    public $eyesColor;
    public $hairColor;

    public static $livesOnEarth = true;

    public function breath()
    {
    }

    public function walk()
    {
    }

    public function eat()
    {
    }

    public static function doSomething()
    {
        if (self::$livesOnEarth == true) {
            return 'Gli esseri umani vivono sulla terra!';
        }
        else {
            return 'Gli esseri umani NON vivono sulla terra...';
        }
    }

}

