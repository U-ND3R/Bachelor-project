<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Report extends Entity
{
    protected $_accessible = [
        "client_id" => true,
        "survey_id" => true,
        "question_id" => true,
        "responce_id" => true,
        "status" => true,
        "created" => true
    ];
}
