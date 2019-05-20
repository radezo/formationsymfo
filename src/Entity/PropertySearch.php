<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class PropertySearch
{
    /** @var int|null */
    private $maxPrice;

    /** @var int|null */
    private $minPrice;

    /** @var ArrayCollection */
    private $options;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinPrice(): ?int
    {
        return $this->minPrice;
    }

    /**
     * @param int|null $minPrice
     * @return PropertySearch
     */
    public function setMinPrice(int $minPrice): PropertySearch
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getOptions(): ArrayCollection
    {
        return $this->options;
    }

    /**
     * @param ArrayCollection $option
     * @return PropertySearch
     */
    public function setOptions(ArrayCollection $options): PropertySearch
    {
        $this->options = $options;

        return $this;
    }

}