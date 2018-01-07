<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Service\UserManager;

class UserController extends Controller {

    public function indexAction() {
        $userManager = new UserManager();

        return $this->render('UserBundle:Default:user.html.twig', array(
                    'user' => $userManager->getUserInformation(1)
        ));
    }

}
