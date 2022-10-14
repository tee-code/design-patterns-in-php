<?php


namespace Template;


class Withdraw extends ATM
{
    public function transact()
    {
        var_dump('Withdraw funds');
        return $this;
    }
}