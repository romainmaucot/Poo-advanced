<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Model\Group;

interface ConcertInterface
{
    public function getName(): string;

    public function addGroup(Group $group): void;
}
