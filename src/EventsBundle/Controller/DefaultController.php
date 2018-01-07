<?php

namespace EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EventsBundle\Manager\EventsManager;
use EventsBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

        $form = $this->createFormBuilder($event)
                ->add('name', TextType::class, array('label' => 'Nazwa wydarzenia: '))
                ->add('date', DateType::class, array('widget' => 'single_text', 'label' => 'Data wydarzenia: '))
                ->add('streets', TextType::class, array('label' => 'Ulice objęte wydarzeniem: '))
                ->add('description', TextareaType::class, array('label' => 'Opis wydarzenia: '))
                ->add('save', SubmitType::class, array('label' => 'Zapisz'))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $event = $form->getData();
            $eventsManager->saveEvent($event);
            return $this->redirectToRoute('eventSuccess', array('status' => 1));
        }

        return $this->render('EventsBundle:Default:editEventView.html.twig', array('form' => $form->createView(), 'editEvent' => $editEvent));
    }

}
