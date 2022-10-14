<?php


namespace Template;


class CheckBalance extends ATM
{
    public function transact()
    {
        var_dump('Checking account balance.');
        return $this;
    }
}