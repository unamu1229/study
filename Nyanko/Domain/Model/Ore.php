<?php


namespace Nyanko\Domain\Model;


interface Ore
{
    public function prepareMedicine();

    public function drinkTo(Cat $cat, $medicine);

    public function sound($soundType);

    public function getNearPet();

    public function setNearPet(bool $bool);
}