<?php

namespace App\DataFixtures;

use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class RegionFixtures extends Fixture
{
    public const ALSACE = 'ALSACE';
    public const AQUITAINE = 'AQUITAINE';
    public const AUVERGNE_RHONE_ALPES = 'AUVERGNE_RHONE_ALPES';
    public const BOURGOGNE = 'BOURGOGNE';
    public const CHAMPAGNE_ARDENNE = 'CHAMPAGNE_ARDENNE';
    public const CORSE = 'CORSE';
    public const PAYS_DE_LOIRE = 'PAYS_DE_LOIRE';
    public const LORRAINE = 'LORRAINE';

    public function load(ObjectManager $manager): void
    {
        $alsace = new Region();
        $alsace->setName('Alsace');
        $manager->persist($alsace);
        $this->addreference(self::ALSACE, $alsace);

        $aquitaine = new Region();
        $aquitaine->setName('aquitaine');
        $manager->persist($aquitaine);
        $this->addreference(self::AQUITAINE, $aquitaine);


        $AuvergneRhôneAlpes = new Region();
        $AuvergneRhôneAlpes->setName('Auvergne-Rhône-Alpes');
        $manager->persist($AuvergneRhôneAlpes);
        $this->addreference(self::AUVERGNE_RHONE_ALPES, $AuvergneRhôneAlpes);


        $bourgogne = new Region();
        $bourgogne->setName('Bourgogne');
        $manager->persist($bourgogne);
        $this->addreference(self::BOURGOGNE, $bourgogne);


        $champagneArdenne = new Region();
        $champagneArdenne->setName('Champagne-Ardenne');
        $manager->persist($champagneArdenne);
        $this->addreference(self::CHAMPAGNE_ARDENNE, $champagneArdenne);


        $corse = new Region();
        $corse->setName('Corse');
        $manager->persist($corse);
        $this->addreference(self::CORSE, $corse);


        $paysDeLoire = new Region();
        $paysDeLoire->setName('Pays de la Loire');
        $manager->persist($paysDeLoire);
        $this->addreference(self::PAYS_DE_LOIRE, $paysDeLoire);


        $lorraine = new Region();
        $lorraine->setName('Lorraine');
        $manager->persist($lorraine);
        $this->addreference(self::LORRAINE, $lorraine);

        

        $manager->flush();
    }
}
