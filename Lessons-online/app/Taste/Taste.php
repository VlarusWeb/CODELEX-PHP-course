<?php

namespace TasteApp;

abstract class Taste
{
    private string $name;
    private bool $like;

    public function __construct($name, $like) {
        $this->name = $name;
        $this->like = $like;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}