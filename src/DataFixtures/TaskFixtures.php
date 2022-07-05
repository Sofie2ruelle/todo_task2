<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Task;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TaskFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $task = new Task();
        $task->setTitle("Faire les courses");
        $task->setDescription("Pain, lait, oeuf, yahourts...");
        $task->setCreatedAt(new DateTime('now'));
        $task->setDueTime(new DateTime('2022-07-10'));

        $manager->persist($task);

        // $task = new User();

        // $manager->persist($user);

        //$collection = new ArrayCollection();

        $manager->flush();
    }
}
