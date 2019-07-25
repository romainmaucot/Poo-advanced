<?php

declare(strict_types=1);

namespace App\Model;

use App\Interfaces\GenreInterface;

class Genre implements GenreInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $instruments;

    /**
     * Genre constructor.
     * @param string $name
     * @param array $instruments
     */
    public function __construct(string $name, array $instruments)
    {
        $this->name = $name;
        $this->instruments = $instruments;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Instrument
     * @throws \Exception
     */
    public function getRandomInstrument(): Instrument
    {
        return $this->instruments[random_int(0, count($this->instruments) - 1)];
    }
}
