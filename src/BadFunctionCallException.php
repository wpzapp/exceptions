<?php
/**
 * WP-ZAPP exceptions for modules and libraries.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use BadFunctionCallException as StandardBadFunctionCallException;

/**
 * Exception thrown if a callback refers to an undefined function or if some arguments are missing.
 *
 * @since 1.0.0
 */
class BadFunctionCallException extends StandardBadFunctionCallException implements Exception
{

    use ExceptionTrait;
}
