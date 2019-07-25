<?php

declare(strict_types=1);

namespace App\Model;

use App\Interfaces\MusicianInterface;

class Musician implements MusicianInterface
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var Genre
     */
    private $genre;

    /**
     * @var Instrument
     */
    private $instrument;

    /**
     * Musician constructor.
     * @param string $firstname
     * @param Genre $genre
     * @throws \Exception
     */
    public function __construct(string $firstname, Genre $genre)
    {
        $this->firstname = $firstname;
        $this->genre = $genre;
        $this->instrument = $genre->getRandomInstrument();
    }


    public function getGenre(): Genre
    {
        return $this->genre;
    }


    public function getFirstname(): string
    {
        return $this->firstname;
    }


    public function getInstrument(): Instrument
    {
        return $this->instrument;
    }
}
