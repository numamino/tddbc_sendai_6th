<?php
/**
 * Created by IntelliJ IDEA.
 * User: numamino
 * Date: 2016/11/26
 * Time: 16:02
 */

namespace Tddbc;


class Addition
{
    private $leftPart;
    private $rightPart;

    /**
     * Addition constructor.
     * @param $leftPart Fraction
     * @param $rightPart Fraction
     */
    public function __construct(Fraction $leftPart, Fraction $rightPart)
    {
        $this->leftPart = $leftPart;
        $this->rightPart = $rightPart;
    }

    public function leftPart() :string
    {
        return $this->leftPart->notation();
    }

    public function rightPart() : string
    {
        return $this->rightPart->notation();
    }

    public function numerator() : string
    {
        return $this->leftPart->numerator() . " " . $this->rightPart->numerator();
    }
}
