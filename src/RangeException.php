<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use RangeException as StandardRangeException;

/**
 * Exception thrown to indicate range errors during program execution.
 *
 * @since 1.0.0
 */
class RangeException extends StandardRangeException implements Exception
{

    use ExceptionTrait;
}
