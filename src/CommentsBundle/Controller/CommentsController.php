<?php

namespace CommentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CommentsBundle\Manager\CommentsManager;

class CommentsController extends Controller {

    public function showCommentsAction($eventId) {
        $comments = new CommentsManager();

        return $this->render('CommentsBundle:Default:comments.html.twig', array(
                    'comments' => $comments->getEventsComments($eventId),
                    'eventId' => $eventId)
        );
    }

}
