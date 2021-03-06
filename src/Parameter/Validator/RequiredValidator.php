<?php namespace MyENA\PHPIPAMAPI\Parameter\Validator;

use MyENA\PHPIPAMAPI\Parameter;
use MyENA\PHPIPAMAPI\Parameter\Validator;

/**
 * Class RequiredValidator
 * @package MyENA\PHPIPAMAPI\Parameter\Validator
 */
class RequiredValidator implements Validator {
    const NAME = 'required';

    /**
     * @return string
     */
    public function name(): string {
        return self::NAME;
    }

    /**
     * @param \MyENA\PHPIPAMAPI\Parameter $parameter
     * @return bool
     */
    public function test(Parameter $parameter): bool {
        return null !== $parameter->getValue();
    }
}