<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use LengthException as StandardLengthException;

/**
 * Exception thrown if a length is invalid.
 *
 * @since 1.0.0
 */
class LengthException extends StandardLengthException implements Exception
{

    use ExceptionTrait;
}
