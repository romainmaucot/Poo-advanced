<?php

declare(strict_types=1);

namespace App\Model;

use App\Interfaces\InstrumentInterface;

class Instrument implements InstrumentInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * Instrument constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function getName(): string
    {
        return $this->name;
    }
}
