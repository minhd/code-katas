<?php

namespace MinhD;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{
    public function test_1_to_I()
    {
        $this->assertEquals(RomanNumerals::generate(1), 'I');
    }

    public function test_2_to_II()
    {
        $this->assertEquals(RomanNumerals::generate(2), 'II');
    }

    public function test_5_to_V()
    {
        $this->assertEquals(RomanNumerals::generate(5), 'V');
    }

    public function test_6_to_VI()
    {
        $this->assertEquals(RomanNumerals::generate(6), 'VI');
    }

    public function test_10_to_X()
    {
        $this->assertEquals(RomanNumerals::generate(10), 'X');
    }

    public function test_11_to_XI()
    {
        $this->assertEquals(RomanNumerals::generate(11), 'XI');
    }

    public function test_20_to_XX()
    {
        $this->assertEquals(RomanNumerals::generate(20), 'XX');
    }

    public function test_30_to_XXX()
    {
        $this->assertEquals(RomanNumerals::generate(30), 'XXX');
    }

    public function test_50_to_L()
    {
        $this->assertEquals(RomanNumerals::generate(50), 'L');
    }

    public function test_4_to_IV()
    {
        $this->assertEquals(RomanNumerals::generate(4), 'IV');
    }

    public function test_9_to_IX()
    {
        $this->assertEquals(RomanNumerals::generate(9), 'IX');
    }

    public function test_100_to_C()
    {
        $this->assertEquals(RomanNumerals::generate(100), 'C');
    }

    public function test_500_to_D()
    {
        $this->assertEquals(RomanNumerals::generate(500), 'D');
    }

    public function test_100_to_M()
    {
        $this->assertEquals(RomanNumerals::generate(1000), 'M');
    }

    public function test_999_to_CMXCIX()
    {
        $this->assertEquals(RomanNumerals::generate(999), 'CMXCIX');
    }

    public function test_4990_to_MMMMCMXC()
    {
        $this->assertEquals(RomanNumerals::generate(4990), 'MMMMCMXC');
    }
}
