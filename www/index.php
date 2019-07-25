<?php

declare(strict_types=1);

use App\Model\Group;
use App\Model\Genre;
use App\Model\Instrument;
use App\Model\Musician;
use App\Model\Concert;

require __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

$genreRandom = [
    new Genre("Salsa", [
        new Instrument("Trompette"),
        new Instrument("Saxophone"),
        new Instrument("Trombone"),
        new Instrument("Piano"),
        new Instrument("Basse")
    ]),
    new Genre("Alternative", [
        new Instrument("Guitare"),
        new Instrument("Basse"),
        new Instrument("Mic"),
        new Instrument("Battery")
    ]),
    new Genre("Modern", [
        new Instrument("Piano"),
        new Instrument("Flute"),
        new Instrument("Hautebois"),
        new Instrument("Triangle")
    ]),
    new Genre("Rap", [
        new Instrument("Mic"),
        new Instrument("Dj"),
        new Instrument("Drumpad")
    ]),
    new Genre("Reggae", [
        new Instrument("Basse"),
        new Instrument("Maracas"),
        new Instrument("Jumbee"),
        new Instrument("Flute")
    ])
];

$allConcert = [];

for ($i = 1; $i <= random_int(1, 25); $i++) {
    $concert = new Concert($faker->company());
    for ($j = 1; $j <= random_int(1, 4); $j++) {
        $group = new Group($faker->streetName(), $genreRandom[random_int(0, count($genreRandom) - 1)]);
        $concert->addGroup($group);
        for ($l = 1; $l <= random_int(2, 50); $l++) {
            $muscian = new Musician($faker->firstName(), $genreRandom[random_int(0, count($genreRandom) - 1)]);
            if ($group->getGenre() === $muscian->getGenre()) {
                $group->addMusician($muscian);
                continue;
            }

        }
    }

    $allConcert[] = $concert;
}

?>

<h1>All lives concerts :</h1>
<ul>
    <?php foreach ($allConcert as $concert) : ?>
        <li><h2> <?php echo $concert->getName() ?></h2>
            <?php foreach ($concert->getgroups() as $group) : ?>
            <h4>Group :  <?php echo $group->getName() ?></h4> Style : <?php echo $group->getGenre()->getName() ?>
            <br>Musiciens :
            <ul>
                <?php foreach ($group->getMusicians() as $muscian) : ?>
                    <?php echo $muscian->getFirstName() . ' - ' . $muscian->getInstrument()->getName() .  '<br>' ?>
                <?php endforeach; ?>
                <br>
            </ul>
        </li>
        <?php endforeach; ?>
    <?php endforeach; ?>
</ul>
