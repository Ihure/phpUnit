<?php

class AdditionTest extends \PHPUnit\Framework\TestCase
{
    // tests can't run if not preappended with test name unless you use docblock above
    /** @test */
    public function adds_up_operands()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands( [5, 10] );

        $this->assertEquals( 15, $addition->calculate() );
    }

    /** @test */
    public function no_operand_exception()
    {
        $this->expectException( \App\Calculator\Exceptions\NoOperandsException::class );

        $addition = new \App\Calculator\Addition;

        $addition->calculate();
    }
}
