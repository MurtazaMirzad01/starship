<?php

namespace App\Models;

class Starship
{
    public function __construct(
        private int $id,
        private string $name,
        private string $class,
        private string $captan,
        private string $status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getCaptan(): string
    {
        return $this->captan;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
