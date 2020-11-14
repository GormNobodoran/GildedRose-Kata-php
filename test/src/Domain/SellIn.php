<?php


namespace GildedRose\Domain;


class SellIn
{
    private const INCREASE_FACTOR = 1;
    private const DECREASE_FACTOR = 1;
    private const MAX_SELL_IN = 11;
    private const MID_SELL_IN = 6;
    private const MIN_SELL_IN = 0;

    /** @var int */
    private $sell_in;

    public function __construct(int $sell_in)
    {
        $this->sell_in = $sell_in;
    }

    public function __toString()
    {
        return (string)$this->sell_in;
    }

    public function decrease(): void
    {
        $this->sell_in -= self::DECREASE_FACTOR;
    }

    public function increase(): void
    {
        $this->sell_in += self::INCREASE_FACTOR;
    }

    public function isBelowMax(): bool
    {
        return $this->sell_in < self::MAX_SELL_IN;
    }

    public function isBelowMid(): bool
    {
        return $this->sell_in < self::MID_SELL_IN;
    }

    public function isBelowMin(): bool
    {
        return $this->sell_in < self::MIN_SELL_IN;
    }
}