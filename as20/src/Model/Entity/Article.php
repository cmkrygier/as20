<?php

use Cake\ORM\Entity;

class Articles extends Entity{
    protected $_accessible = [
        '*'=>true,
        'id'=>false,
        'slug'=>false,
    ];
}