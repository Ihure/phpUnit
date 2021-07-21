<?php

class DivisionTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function divides_operands()
    {
        $division = new \App\Calculator\Division;
        $division->setOperands( [100, 2] );

        $this->assertEquals( 50, $division->calculate() );
    }

    /** @test */
    public function removes_zeroes_operands()
    {
        $division = new \App\Calculator\Division;
        $division->setOperands( [10, 0, 0, 2, 0] );

        $this->assertEquals( 5, $division->calculate() );
    }

    /** @test */
    public function no_operand_exception()
    {
        $this->expectException( \App\Calculator\Exceptions\NoOperandsException::class );

        $addition = new \App\Calculator\Division;

        $addition->calculate();
    }
}
