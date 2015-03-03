<?php
/*Substraction Class to perform Substraction Operation*/
 
class Substraction implements OperationInterface
{
    public function evaluate(array $operands = array())
    {
		return $this->array_sub($operands);
    }
		
	private function array_sub($operands)
	{
		return $operands[0]-$operands[1];
	}
}