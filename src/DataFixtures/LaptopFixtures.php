<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Laptop;

class LaptopFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //tao 1 object laptop moi
        for ($i=1; $i<=20; $i++) {
            $laptop = new Laptop;
            $laptop->setName("Macbook $i");
            $laptop->setQuantity(rand(10,90));
            $laptop->setPrice((float)(rand(1000,1500)));
            $laptop->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpQj4F4SAk1-5BgzJhqpseDYIG9CjYXhUOlL7BShvkJJSpyMAxVyVnkKzeFB-Sm9K8Mr4&usqp=CAU");

        }

        $manager->flush();
    }
}
