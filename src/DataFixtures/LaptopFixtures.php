<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LaptopFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //tao 1 object laptop moi
        $laptop = new Laptop;
        $laptop->setName("Macbook");

        $manager->flush();
    }
}
