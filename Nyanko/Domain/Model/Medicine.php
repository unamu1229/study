<?php


namespace Nyanko\Domain\Model;


abstract class Medicine
{
    public $swallowStatus = false;

    public function getSwallowStatus()
    {
        return $this->swallowStatus;
    }

    public function setSwallowStatus(bool $boolean)
    {
        $this->swallowStatus = $boolean;
    }

    abstract function done();
}