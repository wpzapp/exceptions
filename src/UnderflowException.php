<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use UnderflowException as StandardUnderflowException;

/**
 * Exception thrown when performing an invalid operation on an empty container.
 *
 * @since 1.0.0
 */
class UnderflowException extends StandardUnderflowException implements Exception
{

    use ExceptionTrait;
}
