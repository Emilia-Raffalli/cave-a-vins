<?php

namespace App\DataFixtures;

use App\Entity\DepartmentInStore;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class DepartmentInStoreFixtures extends Fixture
{
    public const DEPT_1 = 'DEPT_1';
    public const DEPT_2 = 'DEPT_2';
    public const DEPT_3 = 'DEPT_3';
    public const DEPT_4 = 'DEPT_4';

    public function load(ObjectManager $manager): void
    {
        $depart1 = new DepartmentInStore();
        $depart1->setNumber(1);
        $manager->persist($depart1);
        $this->addReference(self::DEPT_1,$depart1);

        $depart2 = new DepartmentInStore();
        $depart2->setNumber(2);
        $manager->persist($depart2);
        $this->addReference(self::DEPT_2,$depart2);


        $depart3 = new DepartmentInStore();
        $depart3->setNumber(3);
        $manager->persist($depart3);
        $this->addReference(self::DEPT_3,$depart3);


        $depart4 = new DepartmentInStore();
        $depart4->setNumber(4);
        $manager->persist($depart4);
        $this->addReference(self::DEPT_4,$depart4);


        $manager->flush();
    }
}
