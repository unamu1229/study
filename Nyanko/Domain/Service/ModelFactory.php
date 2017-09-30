<?php


namespace Nyanko\Domain\Service;


use Nyanko\Domain\Model\Capsule;
use Nyanko\Domain\Model\Mike;
use Nyanko\Domain\Model\Yoneda;

class ModelFactory implements Factory
{
    static function make($interFaceName)
    {
        $model = null;

        if($interFaceName == 'Ore'){
            return new Yoneda();
        }

        if($interFaceName == 'Cat'){
            return new Mike();
        }

        if($interFaceName == 'Medicine')
        {
            return new Capsule();
        }

        return $model;
    }
}