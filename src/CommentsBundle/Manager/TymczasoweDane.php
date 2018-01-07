<?php

namespace CommentsBundle\Manager;

class TymczasoweDane {

    public function getCommentsArray($eventId) {
        $comments = array(
            '0' => array(
                'id' => 1,
                'commentText' => 'komentarz 1, fajne wydarzenie',
                'userName' => "Jan Kowalski",
                'eventId' => $eventId,
            ),
            '1' => array(
                'id' => 2,
                'commentText' => 'komentarz, fajne wydarzenie elo morelo',
                'userName' => "Jan Kulka",
                'eventId' => $eventId
            ),
            '2' => array(
                'id' => 3,
                'commentText' => 'fatalne wydarzenie',
                'userName' => "Anna Kulka",
                'eventId' => $eventId
            ),
            '3' => array(
                'id' => 4,
                'commentText' => 'mało ciekawe wydarzenie',
                'userName' => "Aleksandra Noga",
                'eventId' => $eventId
            ),
            '4' => array(
                'id' => 5,
                'commentText' => 'brakowało lepszej informacji',
                'userName' => "Tomasz Rydz",
                'eventId' => $eventId
            ),
        );

        return $comments;
    }

}
