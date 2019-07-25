<?php

declare(strict_types=1);

namespace App\Model;

use App\Interfaces\ConcertInterface;

class Concert implements ConcertInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $groups = [];

    /**
     * Concert constructor.
     * @param string $name
     * @param Genre $genre
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getgroups(): array
    {
        return $this->groups;
    }

    /**
     * @param Musician $musician
     */
    public function addGroup(Group $group): void
    {
        $this->groups[] = $group;
    }
}
