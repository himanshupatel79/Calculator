<?php 
/*Addition Class to perform Addition Operation which implements OperationInterface interface*/
class Addition implements OperationInterface
{
    public function evaluate(array $operands = array())
    {
        return array_sum($operands);
    }
}