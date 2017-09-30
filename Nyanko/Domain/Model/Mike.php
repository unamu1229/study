<?php


namespace Nyanko\Domain\Model;


class Mike implements Cat
{
    public function goAway(Ore $owner)
    {
        if(!$owner->getNearPet()) return;

        $owner->setNearPet(false);
        echo "\n" . '猫は逃げ出しました。';
    }

    public function comeIn(Ore $owner)
    {
        if(mt_rand() % 3 == 0){
            $owner->setNearPet(true);
            echo "\n" . '猫が近づいてきました。';
            return;
        }
        echo "\n" . '猫は関心を示しませんでした。';
    }

    public function drink(Medicine $medicine)
    {
        if(mt_rand() % 3 == 0){
            echo "\n" . '猫は薬をのみました!';
            $medicine->setSwallowStatus(true);
            return;
        }
        echo "\n" . '猫は薬をのみませんでした。';
    }
}