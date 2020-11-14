<?php

declare(strict_types=1);

namespace GildedRose\Domain;

abstract class Item
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    private $sell_in;

    /**
     * @var int
     */
    private $quality;

    public function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = new SellIn($sell_in);
        $this->quality = new Quality($quality);
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    public function decreaseQuality(): void
    {
        $this->quality->decrease();
    }

    public function increaseQuality(): void
    {
        $this->quality->increase();
    }

    public function decreaseSellIn(): void
    {
        $this->sell_in->decrease();
    }

    public function increaseSellIn(): void
    {
        $this->sell_in->increase();
    }

    public function resetQuality(): void
    {
        $this->quality->setToMinimum();
    }

    public function isBelowMaxSellIn(): bool
    {
        return $this->sell_in->isBelowMax();
    }

    public function isBelowMidSellIn(): bool
    {
        return $this->sell_in->isBelowMid();
    }

    public function isBelowMinSellIn(): bool
    {
        return $this->sell_in->isBelowMin();
    }

    public abstract function update(): void;
}
