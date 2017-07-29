<?php
/**
 * WP-ZAPP exceptions for modules and libraries.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use BadMethodCallException as StandardBadMethodCallException;

/**
 * Exception thrown if a callback refers to an undefined method or if some arguments are missing.
 *
 * @since 1.0.0
 */
class BadMethodCallException extends StandardBadMethodCallException implements Exception
{

    use ExceptionTrait;
}
