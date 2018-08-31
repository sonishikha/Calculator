<?php
use PHPUnit\Framework\TestCase;

use App\Controller\Calculate;

class CalculateTest extends TestCase
{
    public $calc = null;
    
    /**
    * Setup the test environment
    */
    public function setUp()
    {
        $this->calc = new Calculate('add', '2,3');	
    }
    
    /**
    * Test operands of class calculate is not empty
    * @test
    */
    public function operandsIsNotEmpty()
    {
        $this->assertNotEmpty($this->calc->operands, 'Operands are empty.');
    }
    
    /**
    * Test operands of class calculate is set as an array
    * @test
    */
    public function operandsIsSetAsAnArray()
    {
        $this->assertInternalType('array', $this->calc->operands, 'Operands should be set as an array.');
    }
    
    /**
    * Test operation of class calculate is not empty
    * @test
    */
    public function operationIsNotEmpty()
    {
        $this->assertNotEmpty($this->calc->operation, 'Operation is empty.');
    }
    
    /**
    * Test Invalid operands
    *@test
    */
    public function invalidOperands()
    {
        $calc2 = new Calculate('add', '2,$');
        $this->expectException(InvalidOperandException::class);
    }
    
    /**
    * Test operands provided are less than or equal to two
    * @test
    */
    public function countNotMoreThanTwo()
    {
        $this->assertLessThanOrEqual(2, count($this->calc->operands), 'Upto two operands are expected.');
    }
    
    /**
    * Test invalid operation
    * @test
    */
    public function operationIsInvalid()
    {
        $calc1 = new Calculate('add1', '2,3');
        $calc1->perform();
        $this->expectException(InvalidOperationException::class);
    }
    
    /**
    * Test valid operation to perform Addition
    * @test
    */
    public function operationToAddORSum()
    {
        $this->assertEquals(5, $this->calc->perform());
    }
}
