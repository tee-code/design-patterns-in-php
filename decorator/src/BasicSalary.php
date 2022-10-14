<?php namespace Decorator;


class BasicSalary implements SalaryInterface
{

    public function getCost()
    {
        // TODO: Implement getCost() method.

        return 1000;
    }

    public function getInformation()
    {
        // TODO: Implement getInformation() method.
        return 'Basic Salary ' . $this->getCost();
    }


}