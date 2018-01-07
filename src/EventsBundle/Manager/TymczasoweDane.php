<?php

namespace EventsBundle\Manager;

class TymczasoweDane {

    public function createEventsArray(): Array {
        $events = array(
            '0' => array(
                'name' => 'Bieg Firmowy',
                'date' => date_create("2017-09-17"),
                'description' => 'duże wydarzenie coś tam coś tam',
                'streets' => 'ul.Kościuszki; ul.Kołątaja; ul.Pierwszego Maja',
                'id' => 1
            ),
            '1' => array(
                'name' => 'Urodziny',
                'date' => date_create("2017-10-21"),
                'description' => 'Moje Fajne urodziny',
                'streets' => 'ul.Kościuszki; ul.Kołątaja; ul.Pierwszego Maja',
                'id' => 2
            ),
            '2' => array(
                'name' => 'Marsz',
                'date' => date_create("2017-12-17"),
                'description' => 'duże wydarzenie coś tam coś tam',
                'streets' => 'ul.Kościuszki; ul.Kołątaja; ul.Pierwszego Maja',
                'id' => 3
            ),
            '3' => array(
                'name' => 'Barburka',
                'date' => date_create("2017-12-04"),
                'description' => 'duże wydarzenie coś tam coś tam',
                'streets' => 'ul.Kościuszki; ul.Kołątaja; ul.Pierwszego Maja',
                'id' => 4
            ),
        );

        return $events;
    }

    public function getEvent($id) {
        $events = $this->createEventsArray();
        $key = array_search($id, array_column($events, 'id'));
        return $events[$key];
    }

}
