<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use PHPUnit\Framework\TestCase;
use GildedRose\Domain\ItemFactory;

class GildedRoseTest extends TestCase
{
    public function testFoo(): void
    {
        $items = [ItemFactory::createItem('foo', 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame('foo', $items[0]->name);
    }
}
