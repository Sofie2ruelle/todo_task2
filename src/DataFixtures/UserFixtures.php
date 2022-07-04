<?php

namespace App\DataFixtures;

use App\Entity\Task;
//use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Interfaces\IRole;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserFixture extends Fixture implements IRole
{
    private $userPasswordHasher;
    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setLastName("De Funès");
        $user->setName("Louis");
        $user->setEmail("louisdefufu@youhou.fr");
        $user->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user,
                "hibernatus"
            )
        );
        $user->setPassword("hibernatus");
        $user->setCreatedAt(new DateTime("now"));
        $manager->persist($user);

        // $task = new Task();

        // $manager->persist($task);

        //$collection = new ArrayCollection();

        $manager->flush();
    }
}
