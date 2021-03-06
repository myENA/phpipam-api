<?php namespace MyENA\PHPIPAMAPI\Parameter;

use MyENA\PHPIPAMAPI\Parameter\Validator\IntegerValidator;
use MyENA\PHPIPAMAPI\Parameter\Validator\IPv4Validator;
use MyENA\PHPIPAMAPI\Parameter\Validator\MACValidator;
use MyENA\PHPIPAMAPI\Parameter\Validator\RequiredValidator;
use MyENA\PHPIPAMAPI\Parameter\Validator\StringValidator;

/**
 * Class Validators
 * @package MyENA\PHPIPAMAPI\Parameter
 */
abstract class Validators {
    /** @var \MyENA\PHPIPAMAPI\Parameter\Validator\RequiredValidator */
    private static $required;

    /** @var \MyENA\PHPIPAMAPI\Parameter\Validator\StringValidator */
    private static $string;
    /** @var \MyENA\PHPIPAMAPI\Parameter\Validator\IntegerValidator */
    private static $integer;

    /** @var \MyENA\PHPIPAMAPI\Parameter\Validator\IPv4Validator */
    private static $ipv4;
    /** @var \MyENA\PHPIPAMAPI\Parameter\Validator\MACValidator */
    private static $mac;

    /**
     * @return \MyENA\PHPIPAMAPI\Parameter\Validator\RequiredValidator
     */
    public static function Required(): RequiredValidator {
        if (!isset(self::$required)) {
            self::$required = new RequiredValidator();
        }
        return self::$required;
    }

    /**
     * @return \MyENA\PHPIPAMAPI\Parameter\Validator\StringValidator
     */
    public static function String(): StringValidator {
        if (!isset(self::$string)) {
            self::$string = new StringValidator();
        }
        return self::$string;
    }

    /**
     * @return \MyENA\PHPIPAMAPI\Parameter\Validator\IntegerValidator
     */
    public static function Integer(): IntegerValidator {
        if (!isset(self::$integer)) {
            self::$integer = new IntegerValidator();
        }
        return self::$integer;
    }

    /**
     * @return \MyENA\PHPIPAMAPI\Parameter\Validator\IPv4Validator
     */
    public static function IPv4(): IPv4Validator {
        if (!isset(self::$ipv4)) {
            self::$ipv4 = new IPv4Validator();
        }
        return self::$ipv4;
    }

    /**
     * @return \MyENA\PHPIPAMAPI\Parameter\Validator\MACValidator
     */
    public static function MAC(): MACValidator {
        if (!isset(self::$mac)) {
            self::$mac = new MACValidator();
        }
        return self::$mac;
    }
}