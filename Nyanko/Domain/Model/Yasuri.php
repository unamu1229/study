<?php


namespace Nyanko\Domain\Model;


class Yasuri implements  Karikari
{
    public function exec()
    {
        echo "\n" . 'ヤスリを爪でカリカリかきます。';
    }
}