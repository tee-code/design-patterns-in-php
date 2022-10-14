<?php


namespace Adapter;

class eReaderAdapter implements MediaInterface
{
    protected eReaderInterface $eReader;

    public function __construct(eReaderInterface $eReader)
    {
        $this->eReader = $eReader;
    }

    public function play()
    {
        // TODO: Implement play() method.
        $this->eReader->turnOn();

    }

    public function forward()
    {
        // TODO: Implement forward() method.
        $this->eReader->pressNextButton();
    }

    public function backward()
    {
        // TODO: Implement backward() method.
        $this->eReader->pressPrevButton();
    }
}