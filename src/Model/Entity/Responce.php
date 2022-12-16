<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Responce extends Entity
{
    protected $_accessible = [
        "client_id" => true,
        "survey_id" => true,
        "question_id" => true,
        "answer" => true,
        "created" => true
    ];
}
