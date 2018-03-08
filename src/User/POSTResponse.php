<?php namespace MyENA\PHPIPAMAPI\User;

use MyENA\PHPIPAMAPI\AbstractResponse;

/**
 * Class POSTResponse
 * @package MyENA\PHPIPAMAPI\User
 */
class POSTResponse extends AbstractResponse {
    /**
     * @param array $data
     */
    protected function parseData($data): void {
        if (!is_array($data)) {
            throw new \DomainException(sprintf(
                'POST /users/ expected "data" property to be object, saw %s',
                gettype($data)
            ));
        }
        $this->data = new POSTResponseData($data);
    }

    /**
     * @return \MyENA\PHPIPAMAPI\User\POSTResponseData
     */
    public function getData(): ?POSTResponseData {
        return $this->data ?? null;
    }
}