<?php


namespace Adapter;


interface eReaderInterface
{
    public function turnOn();

    public function pressNextButton();

    public function pressPrevButton();

}