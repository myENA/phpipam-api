<?php namespace MyENA\PHPIPAMAPI\Chain\Addresses\GET\ByID;

use MyENA\PHPIPAMAPI\Chain\Addresses\GET\ByID;
use MyENA\PHPIPAMAPI\Client;

/**
 * Class Ping
 * @package MyENA\PHPIPAMAPI\Request\Addresses\GET\ByID
 */
class Ping {
    /** @var \MyENA\PHPIPAMAPI\Client */
    private $client;

    /** @var \MyENA\PHPIPAMAPI\Chain\Addresses\GET\ByID */
    private $byID;

    /**
     * Ping constructor.
     * @param \MyENA\PHPIPAMAPI\Client $client
     * @param \MyENA\PHPIPAMAPI\Chain\Addresses\GET\ByID $byID
     */
    public function __construct(Client $client, ByID $byID) {
        $this->client = $client;
        $this->byID = $byID;
    }
}