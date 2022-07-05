<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setLastname("De Funes");
        $user->setName("Louis");
        $user->setEmail("louisdefufu@youhou.fr");
        // $user->addRole(self::ROLE_ADMIN);
        /*$user->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user,
                "hibernatus"
            )
        );*/

        $user->setPassword('test');

        $manager->persist($user);

        // $task = new Task();

        // $manager->persist($task);

        //$collection = new ArrayCollection();
        $manager->flush();
    }
}
