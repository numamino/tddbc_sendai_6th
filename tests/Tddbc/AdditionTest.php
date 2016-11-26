<?php
namespace Tddbc;

ini_set('assert.exception', 1);

use AssertionError;
use Exception;
use Tddbc\Example;

class AdditionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 分数7分の4と分数5分の3が設定されていること()
    {
        $addition = new Addition(new Fraction(4, 7),new Fraction(3,5));
        $this->assertEquals("4\n-\n7", $addition->leftPart());
        $this->assertEquals("3\n-\n5", $addition->rightPart());
    }

    /**
     * @test
     */
    public function 分数8分の3と分数9分の1の加算式が文字列表記できること()
    {
        $addition = new Addition(new Fraction(3,8), new Fraction(1,9));
        $this->assertEquals("3 1", $addition->numerator());
    }

}
