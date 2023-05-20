<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    
    public function testHasItemInBasket()
    {
    $basket = new Basket(['item_one', 'item_two', 'item_three']);
    $this->assertTrue($basket->has('item_one'));
    $this->assertFalse($basket->has('item_four'));
    }
}
