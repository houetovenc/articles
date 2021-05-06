<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         // create 20 articless! Bam!
        for ($i = 0; $i < 20; $i++) {
            $articles = new articles();
            $articles->setName('nom '.$i);
            $articles->setPrice('prix');
            $articles->setDecription('Description de l\'articles'.$i);
            $articles->setPicture('...');
            $articles->setCreatedAt(new \DateTime());
            $articles->setPath('image'.$i);
            
            $manager->persist($articles);

        $manager->flush();
        }
    }
}