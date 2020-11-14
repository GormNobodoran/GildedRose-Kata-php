<?php


namespace GildedRose\Domain;


class Quality
{
    private const DECREASE_FACTOR = 1;
    private const INCREASE_FACTOR = 1;
    private const MAX_QUALITY = 50;
    private const MIN_QUALITY = 0;

    /** @var int */
    private $quality;

    public function __construct(int $quality)
    {
        $this->quality = $quality;
    }

    public function __toString()
    {
        return (string)$this->quality;
    }

    public function decrease(): void
    {
        if ($this->quality > self::MIN_QUALITY){
            $this->quality -= self::DECREASE_FACTOR;
        }
    }

    public function increase(): void
    {
        if($this->quality < self::MAX_QUALITY){
            $this->quality += self::INCREASE_FACTOR;
        }
    }

    public function setToMinimum(): void
    {
        $this->quality = self::MIN_QUALITY;
    }
}