<?php
/*Multiplication Class to perform Multiplication Operation*/
class Multiplication implements OperationInterface
{
    public function evaluate(array $operands = array())
    {
		return $this->array_mul($operands);
    }
		
	private function array_mul($operands)
	{
		return $operands[0] * $operands[1];
	}
}