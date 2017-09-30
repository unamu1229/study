<?php


namespace Nyanko\Domain\Model;


class Capsule extends Medicine
{
    public function done()
    {
        return $this->getSwallowStatus();
    }
}