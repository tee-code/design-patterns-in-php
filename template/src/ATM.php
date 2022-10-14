<?php namespace Template;


abstract class ATM
{

    public function manage(){

        return $this->insertCard()
            ->validateCard()
            ->inputPin()
            ->validatePin()
            ->selectTransaction()
            ->transact();

    }

    protected function insertCard(){
        var_dump('Inserting ATM card');
        return $this;
    }

    protected function validateCard(){
        var_dump('Validating ATM card');
        return $this;
    }

    protected function inputPin(){
        var_dump('Input Card PIN');
        return $this;
    }

    protected function validatePin(){
        var_dump('Validating PIN');
        return $this;
    }

    protected function selectTransaction(){
        var_dump('Selecting transaction form menu.');
        return $this;
    }

    protected abstract function transact();

}