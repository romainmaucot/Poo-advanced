<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Model\Genre;
use App\Model\Musician;

interface GroupInterface
{
   public function getName(): string;

   public function getGenre(): Genre;

   public function addMusician(Musician $musician): void;
}