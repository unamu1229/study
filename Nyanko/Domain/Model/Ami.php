<?php


namespace Nyanko\Domain\Model;


class Ami implements  Karikari
{
    public function exec()
    {
        echo "\n" . '網を爪でカリカリかきます。';
    }
}