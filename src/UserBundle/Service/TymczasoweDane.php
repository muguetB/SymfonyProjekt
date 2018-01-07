<?php

namespace UserBundle\Service;

class TymczasoweDane {

    public function getUserArray($userId) {
        $user = array(
            'name' => 'Jacek Sienkiewicz',
            'companyName' => 'TreleMorele',
            'userId' => $userId,
            'email' => 'jacek.sienkiewicz@test.pl',
            'telephone' => '562-123-245'
        );

        return $user;
    }

}
