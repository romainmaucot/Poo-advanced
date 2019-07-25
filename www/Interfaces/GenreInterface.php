<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Model\Instrument;

interface GenreInterface
{
    public function getName(): string;

    public function getRandomInstrument(): Instrument;
}