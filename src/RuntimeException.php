<?php
/**
 * WP-ZAPP exceptions for modules and libraries.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use RuntimeException as StandardRuntimeException;

/**
 * Exception thrown if an error which can only be found on runtime occurs.
 *
 * @since 1.0.0
 */
class RuntimeException extends StandardRuntimeException implements Exception
{

    use ExceptionTrait;
}
