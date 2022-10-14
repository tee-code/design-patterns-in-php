<?php


namespace Adapter;


class Video implements MediaInterface
{

    public function play()
    {
        // TODO: Implement play() method.
        var_dump('Playing');
    }

    public function forward()
    {
        // TODO: Implement forward() method.
        var_dump('Forward');
    }

    public function backward()
    {
        // TODO: Implement backward() method.
        var_dump('Backward');
    }
}