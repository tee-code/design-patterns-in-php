<?php


namespace Adapter;

class Media
{

    protected $media;

    public function __construct(VideoInterface $media){
        $this->media = $media;
    }

    public function play()
    {
        $this->media->play();
    }

    public function forward()
    {
        $this->media->forward();
    }

    public function backward()
    {
        $this->media->backward();
    }

}