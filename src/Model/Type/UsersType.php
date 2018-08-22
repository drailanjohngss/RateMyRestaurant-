<?php
namespace App\Model\Type;

use Cake\ElasticSearch\Type;

class UsersType extends type
{
    public function initialize(array $config)
        {
        	parent::initialize($config);
    	}
}
