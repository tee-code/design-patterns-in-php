<?php


namespace Decorator;

class CupboardAllowance implements SalaryInterface
{

    protected $salaryInterface;
    protected $amount = 300;
    protected $desc = ", and cupboard allowance ";

    public function __construct(SalaryInterface $salaryInterface)
    {
        $this->salaryInterface = $salaryInterface;
    }

    public function getCost()
    {
        // TODO: Implement getCost() method.
        return $this->amount + $this->salaryInterface->getCost();
    }

    public function getInformation()
    {
        // TODO: Implement getInformation() method.
        return $this->salaryInterface->getInformation() . $this->desc . $this->amount;
    }
}