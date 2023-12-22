<?php

namespace App\DataFixtures;

use App\Entity\Bottle;
use App\Entity\DepartmentInStore;
use App\Entity\Region;
use App\Entity\WineType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
;

class BottleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $bottle1 = new Bottle;
        $bottle1->setName('ALSACE PINOT NOIR ROUGE');
        $bottle1->setDescription('Des tanins fins et bien intégrés dans une chair de fruits rouges gourmande');
        $bottle1->setDate(2018);
        $bottle1->setWineType($this->getReference(WineTypeFixtures::TYPE_RED));
        $bottle1->setDepartmentInStore(($this->getReference((DepartmentInStoreFixtures::DEPT_1))));
        $bottle1->setRegion($this->getReference(RegionFixtures::ALSACE));

        $manager->persist($bottle1);

        $bottle2 = new Bottle;
        $bottle2->setName('PATRIMONIO PETTALE - DOMAINE LECCIA');
        $bottle2->setDescription('Bouche intense et énergique, fruits rouges et épices avec des notes torréfiées');
        $bottle2->setDate(2018);
        $bottle2->setWineType($this->getReference(WineTypeFixtures::TYPE_RED));
        $bottle2->setDepartmentInStore(($this->getReference((DepartmentInStoreFixtures::DEPT_1))));
        $bottle2->setRegion($this->getReference(RegionFixtures::CORSE));

        $manager->persist($bottle2);

        $bottle3 = new Bottle;
        $bottle3->setName('BOURGOGNE - DOMAINE CHARDIGNY 75CL');
        $bottle3->setDescription('Un côté frais et croquant en bouche avec des notes intenses de fruits mûrs et une impression tapissante.');
        $bottle3->setDate(2021);
        $bottle3->setWineType($this->getReference(WineTypeFixtures::TYPE_WHITE));
        $bottle3->setDepartmentInStore(($this->getReference((DepartmentInStoreFixtures::DEPT_2))));
        $bottle3->setRegion($this->getReference(RegionFixtures::BOURGOGNE));

        $manager->persist($bottle3);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            WineTypeFixtures::class,
            RegionFixtures::class,
            DepartmentInStoreFixtures::class
        ];
    }
}
