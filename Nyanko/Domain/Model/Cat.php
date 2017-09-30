<?php


namespace Nyanko\Domain\Model;


interface Cat
{
    public function goAway(Ore $owner);

    public function comeIn(Ore $owner);

    public function drink(Medicine $medicine);

}