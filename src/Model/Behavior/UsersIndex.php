<?php

use Cake\ElasticSearch\Index;

class UsersIndex extends Index
{
    /**
     * The name of index in Elasticsearch
     *
     * @return  string
     */
    public function getName()
    {
        return 'users';
    }

    /**
     * The name of mapping type in Elasticsearch
     *
     * @return  string
     */
    public function getType()
    {
        return 'users';
    }
}
