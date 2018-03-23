<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager )
    {
        $i = 1;
        while ($i <=30){
            $user = new User();
            $user->setUsername('Username'.$i);
            $user->setPassword('mdp'.$i);
            $user->setMail('user@user.com'.$i);
            $user->setPhotoUser('photo'.$i);
            $user->setSubscribeDate('');
            $user->setProfilState($profilState);
            $manager->persist($user);
            $i++;
        }
        $manager->flush();
    }


}