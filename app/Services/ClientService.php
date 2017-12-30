<?php

namespace App\Services;
use App\Client;

/**
 * Created by PhpStorm.
 * User: fakhar
 * Date: 30/12/2017
 * Time: 1:10 PM
 */
class ClientService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client= $client;
    }

    public function getLastClient()
    {
        return $this->client->latest()->first();
    }


    public function __call($method, $args) {

        return call_user_func_array(array($this->client, $method), $args);

        throw new BadMethodCallException(sprintf('Call to undefined method %s::%s', get_class($model), $method));
    }

}