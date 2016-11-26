<?php
/**
 * Created by IntelliJ IDEA.
 * User: numamino
 * Date: 2016/11/26
 * Time: 13:17
 */

namespace Tddbc;


class Fraction
{
    private $denominator;
    private $numerator;
    private $vinculum = "-";

    /**
     * Fraction constructor.
     */
    public function __construct(int $numerator, int $denominator)
    {
        // 事前条件としてありえる事象なら例外
        // そもそも発生しない事象なら表明
        assert($denominator != 0); // TODO 今回のケースは例外の選択が正しい
        $this->denominator = $denominator;
        $this->numerator = $numerator;
    }

    public function numerator() : int
    {
        return $this->numerator;
    }

    public function denominator() : int
    {
        return $this->denominator;
    }

    public function notation() : string
    {
        return $this->numerator . "\n" . $this->vinculum . "\n" . $this->denominator;
    }
}
