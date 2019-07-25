<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Model\Genre;
use App\Model\Instrument;

interface MusicianInterface
{
    public function getGenre(): Genre;

    public function getFirstname(): string;
    
    public function getInstrument(): Instrument;
}