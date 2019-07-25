<?php

declare(strict_types=1);

namespace App\Model;

use App\Interfaces\GroupInterface;

class Group implements GroupInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Genre
     */
    private $genre;

    /**
     * @var array
     */
    private $musicians = [];

    /**
     * Group constructor.
     * @param string $name
     * @param Genre $genre
     */
    public function __construct(string $name, Genre $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getGenre(): Genre
    {
        return $this->genre;
    }

    public function getMusicians(): array
    {
        return $this->musicians;
    }

    /**
     * @param Musician $musician
     */
    public function addMusician(Musician $musician): void
    {
        $this->musicians[] = $musician;
    }
}
