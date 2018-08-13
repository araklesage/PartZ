<?php

namespace PZ\EventBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use PZ\EventBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EventController extends Controller
{
    /**
     * @Route("/event", name="event")
     */
    public function indexAction()
    {

        $events = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Event::class)->findAll();

        return $this->render('event/index.html.twig', array(
            'events' => $events,
        ));
    }


    /**
     * @param Event $event
     * @return \Symfony\Component\HttpFoundation\Response@
     *
     * @Route("/view/{id}",requirements={"id" = "\d+"}, name="viewEvent")
     */
    public function showAction(Event $event)
    {
        $event = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findBy(array('event' => $event));

        if (!$event) {
            throw $this->createNotFoundException(
                'Pas d\'événement correspondant '
            );
        }

        return $this->render('event/view.html.twig', array(
            'event' => $event
        ));
    }
}
