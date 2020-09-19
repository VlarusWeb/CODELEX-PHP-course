<?php declare(strict_types=1);


class PersonRequester
{
    private string $nameSurname;
    private array $licence;
    private int $cash;

    public function __construct($nameSurname, $licence, $cash)
    {
        $this->nameSurname = $nameSurname;
        $this->licence = $licence;
        $this->cash = $cash;
    }
    public function getName(): string
    {
        return $this->nameSurname;
    }
    public function getLicense(): array
    {
        return $this->licence;
    }
    public function getCash(): int
    {
        return $this->cash;
    }
}
