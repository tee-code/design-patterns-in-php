<?php

require '../vendor/autoload.php';

use Strategy\Negotiation;
use Strategy\ManualNegotiation;
use Strategy\AutomatedNegotiation;

$price = 5000;

$negotiation = new Negotiation;

$negotiation->negotiate($price, new ManualNegotiation);

$negotiation->negotiate($price, new AutomatedNegotiation);

