<?php


namespace Nyanko\Domain\Service;


interface Factory
{
    static function make($interFaceName);
}