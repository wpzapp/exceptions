<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use Exception as StandardException;

/**
 * Base exception class for all user exceptions.
 *
 * @since 1.0.0
 */
class BaseException extends StandardException implements Exception
{

    use ExceptionTrait;
}
