<?php

namespace App\DataFixtures;

use App\Entity\WineType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class WineTypeFixtures extends Fixture
{
    public const TYPE_WHITE = 'TYPE_WHITE';
    public const TYPE_RED = 'TYPE_RED';
    public const TYPE_SPARKLING = 'TYPE_SPARKLING';
    public const TYPE_ROSE ='TYPE_ROSE';

    public function load(ObjectManager $manager): void
    {
        $white = new WineType();
        $white->setName('vin blanc');
        $manager->persist($white);
        $this->addReference(self::TYPE_WHITE, $white);

        $red = new WineType();
        $red->setName('vin rouge');
        $manager->persist($red);
        $this->addReference(self::TYPE_RED, $red);

        $sparkling = new WineType();
        $sparkling->setName('vin mousseux');
        $manager->persist($sparkling);
        $this->addReference(self::TYPE_SPARKLING, $sparkling);

        $rose = new WineType();
        $rose->setName('vin rosé');
        $manager->persist($rose);
        $this->addReference(self::TYPE_ROSE, $rose);

        $manager->flush();
    }
}
