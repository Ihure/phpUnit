
<?php
class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function can_set_single_operation()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands( [5, 10] );

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation( $addition );

        $this->assertCount( 1, $calculator->getOperations() );
    }

    /** @test */

    public function can_set_multiple_operations()
    {

        $addition = new \App\Calculator\Addition;
        $addition->setOperands( [5, 10] );

        $addition2 = new \App\Calculator\Addition;
        $addition2->setOperands( [5, 10] );

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations( [$addition, $addition2] );

        $this->assertCount( 2, $calculator->getOperations() );

    }

    /** @test  */
    public function operations_ignored_if_not_instance_of_operationinterface()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands( [5, 10] );

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations( [$addition, 'cats', 'dogs'] );

        $this->assertCount( 1, $calculator->getOperations() );
    }

    /** @test */
    public function can_calculate_result()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands( [5, 10] );

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation( $addition );

        $this->assertEquals( 15, $calculator->calculate() );
    }

    /** @test */
    public function can_calculate_multiple_results()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands( [5, 10] );

        $division = new \App\Calculator\Division;
        $division->setOperands( [10, 0, 0, 2, 0] );

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations( [$addition, $division] );

        $this->assertIsArray( $calculator->calculate() );

        $this->assertEquals( 15, $calculator->calculate()[0] );
        $this->assertEquals( 5, $calculator->calculate()[1] );
    }
}