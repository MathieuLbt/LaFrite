<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $i = 1;

        while ($i <= 100) {
            $post = new Post();
            $post->setTitle("Titre de l'article n°" . $i);
            $post->setBody("Contenu de l'article n°" . $i);
            $post->setIsPublished($i%2);

            $manager->persist($post);
            $i++;
        }

        $manager->flush();
    }
}
