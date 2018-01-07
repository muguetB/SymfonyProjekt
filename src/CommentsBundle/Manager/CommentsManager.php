<?php

namespace CommentsBundle\Manager;

class CommentsManager {

    public function getEventsComments($eventId) {
        $dane = new TymczasoweDane();
        $comments = $dane->getCommentsArray($eventId);
        return $comments;
    }

}
