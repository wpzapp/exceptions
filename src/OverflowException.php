<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use OverflowException as StandardOverflowException;

/**
 * Exception thrown when adding an element to a full container.
 *
 * @since 1.0.0
 */
class OverflowException extends StandardOverflowException implements Exception
{

    use ExceptionTrait;
}
