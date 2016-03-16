<?php

/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 16-3-16
 * Time: 21:30
 */
class Npc
{
    private $strength;
    private $dice;
    private $health;

    public function __construct(Dice $dice)
    {
        $this->dice = $dice;
        $this->health = 100;
        $this->strength = 15;
    }

    public function addToStrength($dice)
    {
        $this->strength += $dice;
    }

    public function setAttack($NpcAttack)
    {
        $this->NpcAttack = $NpcAttack;
    }

    public function getHealth()
    {
        return $this->health;
    }




}