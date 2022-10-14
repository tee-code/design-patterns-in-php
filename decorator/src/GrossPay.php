<?php


namespace Decorator;


class GrossPay implements SalaryInterface
{

    protected $salaryInterface;

    public function __construct(SalaryInterface $salaryInterface){
        $this->salaryInterface = $salaryInterface;
    }

    public function getCost()
    {
        // TODO: Implement getCost() method.

        return $this->salaryInterface->getCost();

    }

    public function getInformation()
    {
        // TODO: Implement getInformation() method.

        return $this->salaryInterface->getInformation();
    }
}