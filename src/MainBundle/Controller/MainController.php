<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EventsBundle\Service\EventsManager;
use UserBundle\Service\UserManager;

class MainController extends Controller {

    public function indexAction($status) {
        $eventsManager = new EventsManager();
        $userManager = new UserManager();

        return $this->render('MainBundle:Default:index.html.twig', array(
                    'events' => $eventsManager->getUserEvents(1),
                    'mainEvent' => $eventsManager->getMainEvent(1),
                    'status' => $status,
                    'user' => $userManager->getUserInformation(1)
                        )
        );
    }

    public function changeEventAction($eventId) {
        $eventsManager = new EventsManager();
        $userManager = new UserManager();

        return $this->render('MainBundle:Default:index.html.twig', array(
                    'events' => $eventsManager->getUserEvents(1),
                    'mainEvent' => $eventsManager->getEvent($eventId),
                    'status' => 0,
                    'user' => $userManager->getUserInformation(1)
                        )
        );
    }

}
