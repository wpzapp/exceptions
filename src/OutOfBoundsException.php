<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use OutOfBoundsException as StandardOutOfBoundsException;

/**
 * Exception thrown if a value is not a valid key.
 *
 * @since 1.0.0
 */
class OutOfBoundsException extends StandardOutOfBoundsException implements Exception
{

    use ExceptionTrait;
}
