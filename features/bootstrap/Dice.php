<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 16-3-16
 * Time: 21:16
 */

class Dice
{
    private $diceValue;

    public function __construct(){

        $this->diceValue = rand(1,6);

    }

    public function getDiceValue()
    {
        return $this->diceValue ;

    }

}