<?php namespace MyENA\PHPIPAMAPI\Chain\Subnets\GET\ByID;

use MyENA\PHPIPAMAPI\AbstractPart;
use MyENA\PHPIPAMAPI\Part\ExecutablePart;
use MyENA\PHPIPAMAPI\Part\UriPart;

/**
 * Class Slaves
 * @package MyENA\PHPIPAMAPI\Chain\Subnets\GET\ByID
 */
class Slaves extends AbstractPart implements UriPart, ExecutablePart{
    const PATH = 'slaves/';

    /**
     * @return string
     */
    public function getUriPart(): string {
        return self::PATH;
    }

    /**
     * @return array(
     * @type \MyENA\PHPIPAMAPI\Chain\Subnets\GET\ByID\SlavesResponse|null
     * @type \MyENA\PHPIPAMAPI\Error|null
     * )
     */
    public function execute(): array {
        /** @var \Psr\Http\Message\ResponseInterface $resp */
        /** @var \MyENA\PHPIPAMAPI\Error $err */
        [$resp, $err] = $this->client->do($this->buildRequest());
        if (null !== $err) {
            return [null, $err];
        }
        return SlavesResponse::fromPSR7Response($resp, $this->logger);
    }
}