<?php namespace MyENA\PHPIPAMAPI\Chain\Addresses\GET;

use MyENA\PHPIPAMAPI\Chain\Addresses\GET;
use MyENA\PHPIPAMAPI\Client;

/**
 * Class ByID
 * @package MyENA\PHPIPAMAPI\Request\Addresses\GET
 */
class ByID {
    /** @var \MyENA\PHPIPAMAPI\Client */
    private $client;

    /** @var \MyENA\PHPIPAMAPI\Chain\Addresses\GET */
    private $get;

    /** @var string */
    private $id;

    /**
     * ByID constructor.
     * @param \MyENA\PHPIPAMAPI\Client $client
     * @param \MyENA\PHPIPAMAPI\Chain\Addresses\GET $GET
     * @param string $id
     */
    public function __construct(Client $client, GET $GET, string $id) {
        $this->client = $client;
        $this->get = $GET;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function id(): string {
        return $this->id;
    }

    public function execute() {

    }
}