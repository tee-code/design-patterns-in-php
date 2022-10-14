<?php

require '../vendor/autoload.php';

use Template\Deposit;
use Template\Withdraw;
use Template\Transfer;
use Template\CheckBalance;

$transfer = new Transfer();
$transfer->manage();

$withdraw = new Withdraw();
$withdraw->manage();

$deposit = new Deposit();
$deposit->manage();

$balance = new CheckBalance();
$balance->manage();

