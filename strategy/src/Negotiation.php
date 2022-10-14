<?php namespace Strategy;

class Negotiation
{
    public function negotiate($bidPrice, NegotiationInterface $negotiation)
    {
        return $negotiation->negotiate($bidPrice);
    }

}