<?php


namespace GildedRose\Domain;


class BackstagePass extends Item
{
    public function update(): void
    {
        $this->increaseQuality();
        if($this->isBelowMaxSellIn()){
            $this->increaseQuality();;
        }
        if($this->isBelowMidSellIn()){
            $this->increaseQuality();
        }
        $this->decreaseSellIn();
        if($this->isBelowMinSellIn()){
            $this->resetQuality();
        }
    }

}