<?php

namespace EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EventsBundle\Service\EventsManager;
use EventsBundle\Entity\Event;
use EventsBundle\Form\EventType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function editEventViewAction(Request $request, $id = null) {
        $eventsManager = new EventsManager();
        $eventInformation = $eventsManager->getEvent($id);

        $event = new Event();
        if ($id != null) {
            $event->setName($eventInformation['name']);
            $event->setDate($eventInformation['date']);
            $event->setStreets($eventInformation['streets']);
            $event->setDescription($eventInformation['description']);
            $editEvent = true;
        } else {
            $editEvent = false;
        }

        $form = $this->createForm(EventType::class, $event);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $event = $form->getData();
            $eventsManager->saveEvent($event);
            return $this->redirectToRoute('eventSuccess', array('status' => 1));
        }

        return $this->render('EventsBundle:Default:editEventView.html.twig', array('form' => $form->createView(), 'editEvent' => $editEvent, 'event' => $eventInformation));
    }

    public function deleteEventAction($eventId) {
        $eventsManager = new EventsManager();
        $eventsManager->deleteEvent($eventId);

        return $this->redirect($this->generateUrl('main_homepage'));
    }

}
