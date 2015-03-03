<?php 
/*Division Class to perform Division Operation which implements OperationInterface interface*/

class Division implements OperationInterface
{
    public function evaluate(array $operands = array())
    {
		return $this->array_div($operands);
    }
		
	private function array_div($operands)
	{
		return ($operands[0]/$operands[1]);
	}
}