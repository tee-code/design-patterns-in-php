<?php

require '../vendor/autoload.php';

use Decorator\BasicSalary;
use Decorator\GrossPay;
use Decorator\TransportationAllowance;
use Decorator\HealthAllowance;
use Decorator\CupboardAllowance;


$salary = (new GrossPay(new CupboardAllowance(new HealthAllowance(new TransportationAllowance(new BasicSalary())))))->getCost();

$salary_description = (new GrossPay(new CupboardAllowance(new HealthAllowance(new TransportationAllowance(new BasicSalary())))))->getInformation();

echo $salary;

echo "<br>";

echo $salary_description;


