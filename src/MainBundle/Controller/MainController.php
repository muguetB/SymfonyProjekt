<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EventsBundle\Manager\EventsManager;

class MainController extends Controller {

    public function indexAction($status) {
        $eventsManager = new EventsManager();

        return $this->render('MainBundle:Default:index.html.twig', array(
                    'events' => $eventsManager->getUserEvents(1),
                    'mainEvent' => $eventsManager->getMainEvent(1),
                    'status' => $status
                        )
        );
    }

    public function changeEventAction($eventId) {
        $eventsManager = new EventsManager();

        return $this->render('MainBundle:Default:index.html.twig', array(
                    'events' => $eventsManager->getUserEvents(1),
                    'mainEvent' => $eventsManager->getEvent($eventId),
                    'status' => 0
                        )
        );
    }

}
