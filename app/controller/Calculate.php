<?php

namespace App\Controller;

require_once('vendor/autoload.php');

use CustomeException\InvalidOperationException;

use CustomeException\InvalidOperandException;

class Calculate
{
    public $operands;
    public $operation;

    /**
    * Set operation and operands variables
    * @var string operands
    */
    public function __construct($operation, $operands = 0)
    {
        $this->setOperands((string)$operands);
        $this->setOperation((string)$operation);
    }

    /**
    * Sets value of operands
    * @var string operands
    */
    public function setOperands($operands)
    {
        $this->operands = explode(',', trim($operands));
        $bool = ctype_digit(implode('', $this->operands));
        if (!$bool) {
            throw new InvalidOperandException("Operands should be numbers.");
        }
    }

    /**
    * Sets value of operation
    * @var string operation
    */
    public function setOperation($operation)
    {
        $this->operation = trim($operation);
    }

    /**
    * Perform operation on numbers
    * @return int or false
    */
    public function perform()
    {
        switch (strtolower($this->operation)) {
            case 'sum':
            case 'add':
                return $this->add($this->operands);
            default:
                throw new InvalidOperationException("Not a valid operation. Valid operations are sum, add.");
                break;
        }
    }

    /**
    * Perform addition operation
    * @var array numbers
    * @return int
    */
    public function add($numbers)
    {
        return array_sum($numbers);
    }
}
