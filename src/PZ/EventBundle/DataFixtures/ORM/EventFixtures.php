<?php
/**
 * Created by PhpStorm.
 * User: Arak
 * Date: 09/08/2018
 * Time: 11:51
 */

namespace PZ\EventBundle\DataFixtures\ORM;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Pagerfanta\Adapter\FixedAdapter;
use PZ\EventBundle\Entity\Event;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 Events
        for ($i = 0; $i < 20; $i++) {
            $event = new Event();
            $event->setDate(new \DateTime());
            $event->setTitle('Event'.$i);
            $event->setAuthor('Boy'.$i);
            $event->setContent('Super apéro du mardi n° '.$i);
            $event->setPublished(true);
            $manager->persist($event);
        }

        $manager->flush();
    }

}