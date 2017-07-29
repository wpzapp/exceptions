<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use InvalidArgumentException as StandardInvalidArgumentException;

/**
 * Exception thrown if an argument is not of the expected type.
 *
 * @since 1.0.0
 */
class InvalidArgumentException extends StandardInvalidArgumentException implements Exception
{

    use ExceptionTrait;
}
