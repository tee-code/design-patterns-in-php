<?php


namespace Template;


class Deposit extends ATM
{
    public function transact()
    {
        var_dump('Deposit Transaction');
        return $this;
    }
}