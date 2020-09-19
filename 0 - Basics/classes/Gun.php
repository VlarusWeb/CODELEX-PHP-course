<?php declare(strict_types=1);


class Gun
{
    private string $gunName;
    private float $price;
    private string $licence;

    public function __construct($gunName, $price, $licence)
    {
        $this->gunName = $gunName;
        $this->price = $price;
        $this->licence = $licence;
    }
    public function getGunName(): string
    {
        return $this->gunName;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getLicense(): string
    {
        return $this->licence;
    }
}