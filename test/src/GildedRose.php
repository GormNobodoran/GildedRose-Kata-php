<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\Domain\Item;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        /** @var Item $item */
        foreach ($this->items as $item) {
            $item->update();
        }
    }
}
