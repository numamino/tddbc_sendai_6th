<?php
namespace Tddbc;

ini_set('assert.exception', 1);

use AssertionError;
use Exception;
use Tddbc\Example;

class FractionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 分母に設定した値が一致している()
    {
        $fraction = new Fraction(4, 7);
        $this->assertEquals(7, $fraction->denominator());
    }

    /**
     * @test
     */
    public function 分母に0を設定するとエラーになる()
    {
        try {
            new Fraction(7, 0);
            $this->fail("assertエラーにならない");
        } catch (AssertionError $e) {
        }
    }

    /**
     * @test
     */
    public function 分子に設定した値が一致している()
    {
        $fraction = new Fraction(2, 9);
        $this->assertEquals(2, $fraction->numerator());
    }

    /**
     * @test
     */
    public function 生成した分数から文字列表記を取得できる()
    {
        $fraction = new Fraction(3, 5);
        $this->assertEquals("3\n-\n5", $fraction->notation());
    }
}
