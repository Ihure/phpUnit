<?php

class userTest extends \PHPUnit\Framework\TestCase
{
    protected $user;

    // runs before each test
    protected function setUp(): void
    {
        $this->user = new \App\Models\User();
    }

    public function testGetFirstName()
    {
        // $user = new \App\Models\User;

        $this->user->setFirstName( 'Bily' );

        $this->assertEquals( $this->user->getFirstName(), 'Bily' );
    }
}
