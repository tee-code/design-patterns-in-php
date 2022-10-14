<?php namespace Strategy;

class AutomatedNegotiation implements NegotiationInterface
{
    public function negotiate($bidPrice)
    {
        // TODO: Implement negotiate() method.
        var_dump('Automated Negotiation: ' . $bidPrice);

    }
}