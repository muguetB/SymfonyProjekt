<?php

namespace UserBundle\Service;

class UserManager {

    public function getUserInformation($userId) {
        $dane = new TymczasoweDane();
        $user = $dane->getUserArray($userId);
        return $user;
    }

}
