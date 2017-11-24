<?php

namespace MinhD;


class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
    public function test_that_it_returns_1_for_1()
    {
        $this->assertEquals(PrimeFactors::generate(1), []);
    }

    public function test_that_it_returns_2_for_2()
    {
        $this->assertEquals(PrimeFactors::generate(2), [2]);
    }

    public function test_that_it_returns_3_for_3()
    {
        $this->assertEquals(PrimeFactors::generate(3), [3]);
    }

    public function test_that_it_returns_2_2_for_4()
    {
        $this->assertEquals(PrimeFactors::generate(4), [2, 2]);
    }

    public function test_that_it_returns_5_for_4()
    {
        $this->assertEquals(PrimeFactors::generate(5), [5]);
    }

    public function test_that_it_returns_2_3_for_6()
    {
        $this->assertEquals(PrimeFactors::generate(6), [2,3]);
    }

    public function test_that_it_returns_2_2_2_for_8()
    {
        $this->assertEquals(PrimeFactors::generate(8), [2,2,2]);
    }

    public function test_that_it_returns_3_3_for_9()
    {
        $this->assertEquals(PrimeFactors::generate(9), [3,3]);
    }

    public function test_that_it_returns_2_2_5_5_for_100()
    {
        $this->assertEquals(PrimeFactors::generate(100), [2,2,5,5]);
    }
}
