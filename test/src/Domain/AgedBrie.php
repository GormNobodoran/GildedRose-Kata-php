<?php


namespace GildedRose\Domain;


class AgedBrie extends Item
{
    public function update(): void
    {
        $this->increaseQuality();
        $this->decreaseSellIn();
        if($this->isBelowMinSellIn()){
            $this->increaseQuality();
        }
    }

}