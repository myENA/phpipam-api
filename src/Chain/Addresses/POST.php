<?php namespace MyENA\PHPIPAMAPI\Chain\Addresses;

use MyENA\PHPIPAMAPI\AbstractPart;
use MyENA\PHPIPAMAPI\Part\MethodPart;

/**
 * Class POST
 * @package MyENA\PHPIPAMAPI\Request\Addresses
 */
class POST extends AbstractPart implements MethodPart {
    const METHOD = 'POST';

    /**
     * @return string
     */
    public function getRequestMethod(): string {
        return self::METHOD;
    }
}