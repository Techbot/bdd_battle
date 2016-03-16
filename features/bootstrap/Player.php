<?php

class Player
{
    private $strength;
    private $health;
    private $dice1;
    private $npc;
    private $npcAttack;

    public function __construct(Dice $dice1, $npc)
    {
        $this->npc      = $npc;
        $this->dice1    = $dice1;
        $this->health   = 100;
        $this->strenght = 15;

    }

    public function addToStrength($dice)
    {
        $this->strength += $dice;
    }

    public function setAttack($NpcAttack)
    {
        $this->npcAttack = $NpcAttack;
    }

    public function getHealth()
    {
        return $this->health;
    }



}