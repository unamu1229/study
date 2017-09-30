<?php


namespace Nyanko\Domain\Service;


use Nyanko\Domain\Model\Ami;
use Nyanko\Domain\Model\Yasuri;

class SoundFactory implements Factory
{
    static function make($interFaceName)
    {
        if($interFaceName == 'Karikari'){
            return new Ami();
            //return new Yasuri();
        }

        return null;
    }
}