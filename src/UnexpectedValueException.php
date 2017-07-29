<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use UnexpectedValueException as StandardUnexpectedValueException;

/**
 * Exception thrown if a value does not match with a set of values.
 *
 * @since 1.0.0
 */
class UnexpectedValueException extends StandardUnexpectedValueException implements Exception
{

    use ExceptionTrait;
}
