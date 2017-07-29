<?php
/**
 * WP-ZAPP exceptions for modules and libraries.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use OutOfRangeException as StandardOutOfRangeException;

/**
 * Exception thrown when an illegal index was requested.
 *
 * @since 1.0.0
 */
class OutOfRangeException extends StandardOutOfRangeException implements Exception
{

    use ExceptionTrait;
}
