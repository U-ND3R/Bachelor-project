<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Client extends Entity
{
    protected $_accessible = [
        "company_id" => true,
        "first_name" => true,
        "last_name" => true,
        "personal_number" => true,
        "email" => true,
        "survey_code" => true,
        "status" => true,
        "created" => true,
        "modified" => true
    ];
}
