<?php


namespace GildedRose\Domain;


final class ItemFactory
{
    private const AGED_BRIE = 'Aged Brie';
    private const BACKSTAGE_PASS = 'Backstage passes to a TAFKAL80ETC concert';
    private const RAGNAROS = 'Sulfuras, Hand of Ragnaros';
    private function __construct(){}

    public static function createItem(string $name, int $sell_in, int $quality): Item
    {
        if(self::AGED_BRIE === $name){
            return new AgedBrie($name, $sell_in, $quality);
        }

        if(self::BACKSTAGE_PASS === $name){
            return new BackstagePass($name, $sell_in, $quality);
        }

        if(self::RAGNAROS === $name){
            return new HandOfRagnaros($name, $sell_in, $quality);
        }

        return new GenericItem($name, $sell_in, $quality);
    }
}