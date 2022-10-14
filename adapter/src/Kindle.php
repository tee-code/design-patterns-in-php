<?php


namespace Adapter;


class Kindle implements eReaderInterface
{

    public function turnOn()
    {
        // TODO: Implement turnOn() method.
        var_dump('Turn on');
    }

    public function pressNextButton()
    {
        // TODO: Implement turnNextButton() method.
        var_dump('Press Next Button ');
    }

    public function pressPrevButton()
    {
        // TODO: Implement turnPrevButton() method.
        var_dump('Press Previous Button');
    }
}