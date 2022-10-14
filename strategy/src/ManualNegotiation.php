<?php namespace Strategy;


class ManualNegotiation implements NegotiationInterface
{

    public function negotiate($bidPrice)
    {
        // TODO: Implement negotiate() method.
        var_dump('Manual negotiation: ' . $bidPrice);

    }

}