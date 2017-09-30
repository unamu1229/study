<?php


namespace Nyanko\Domain\Model;

use Nyanko\Domain\Service\ModelFactory;
use Nyanko\Domain\Service\SoundFactory;

class Yoneda implements Ore
{
    public $nearPet = false;

    public function prepareMedicine()
    {
        return ModelFactory::make('Medicine');
    }

    public function drinkTo(Cat $cat, $medicine)
    {
        if(!$this->nearPet) return;

        $cat->drink($medicine);
    }

    public function sound($soundType)
    {
        $sound = SoundFactory::make('Karikari');
        $sound->exec();
    }

    public function getNearPet()
    {
        return $this->nearPet;
    }

    public function setNearPet(bool $bool)
    {
        $this->nearPet = $bool;
    }
}