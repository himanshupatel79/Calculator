<?php
/* OperationInterface interface which force implemented classed to define evaluate method*/
interface OperationInterface
{
    public function evaluate(array $operands = array());
}