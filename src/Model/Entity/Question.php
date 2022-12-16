<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Question extends Entity
{
    protected $_accessible = [
        "survey_id" => true,
        "position" => true,
        "name" => true,
        "description" => true,
        "question_type" => true,
        "created" => true,
        "modified" => true
    ];
}
