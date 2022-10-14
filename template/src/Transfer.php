<?php


namespace Template;


class Transfer extends ATM
{
    public function transact()
    {
        var_dump('Transferring funds.');
        return $this;
    }
}