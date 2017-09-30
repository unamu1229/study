<?php


namespace Tests;

use Nyanko\Domain\Service\ModelFactory;
use PHPUnit\Framework\TestCase;

class NyankoTest extends TestCase
{
    public function testDrinkTo()
    {
        $ore = ModelFactory::make('Ore');
        $cat = ModelFactory::make('Cat');
        $medicine = $ore->prepareMedicine();
        while(!$medicine->done()){
            $ore->drinkTo($cat, $medicine);
            $cat->goAway($ore);
            $ore->sound('Karikari');
            $cat->comeIn($ore);
        }
        $this->assertEquals($medicine->getSwallowStatus(), true);
    }

}