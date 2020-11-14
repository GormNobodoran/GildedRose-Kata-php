<?php


namespace GildedRose\Domain;


class GenericItem extends Item
{
    public function update(): void
    {
        $this->decreaseQuality();
        $this->decreaseSellIn();
        if($this->isBelowMinSellIn()){
            $this->decreaseQuality();
        }
    }

}