<?php

namespace EventsBundle\Manager;

class EventsManager {

    public function getUserEvents($userId) {
        $dane = new TymczasoweDane();
        $events = $dane->createEventsArray();
        return $events;
    }

    public function getMainEvent($userId) {
        $dane = new TymczasoweDane();
        $events = $dane->createEventsArray();
        return reset($events);
    }

    public function getEvent($eventId) {
        $dane = new TymczasoweDane();
        $event = $dane->getEvent($eventId);
        return $event;
    }

    public function saveEvent($event) {

    }

    public function deleteEvent($event) {
        
    }

}
