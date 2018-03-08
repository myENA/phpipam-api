<?php namespace MyENA\PHPIPAMAPI\User;

use MyENA\PHPIPAMAPI\AbstractResponse;
use MyENA\PHPIPAMAPI\Models\UserSession;

/**
 * Class PATCHResponse
 * @package MyENA\PHPIPAMAPI\User
 */
class PATCHResponse extends AbstractResponse {
    /**
     * @param mixed $data
     */
    protected function parseData($data): void {
        $this->data = UserSession::fromArray($data);
    }

    /**
     * @return \MyENA\PHPIPAMAPI\Models\UserSession
     */
    public function getData(): UserSession {
        return $this->data;
    }
}