<?php namespace MyENA\PHPIPAMAPI;

use GuzzleHttp\ClientInterface;

/**
 * Interface ConfigProvider
 * @package MyENA\PHPIPAMAPI
 */
interface Config {
    /**
     * @return string
     */
    public function getHost(): string;

    /**
     * @return int
     */
    public function getPort(): int;

    /**
     * @return bool
     */
    public function useHTTPS(): bool;

    /**
     * @return string
     */
    public function getUsername(): string;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @return string
     */
    public function getAppID(): string;

    /**
     * @return string
     */
    public function getAppCode(): string;

    /**
     * @return \GuzzleHttp\ClientInterface
     */
    public function getClient(): ClientInterface;

    /**
     * Whether to silence all logging
     *
     * @return bool
     */
    public function silent(): bool;
}