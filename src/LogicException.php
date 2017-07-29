<?php
/**
 * WP-ZAPP exceptions for modules and libraries.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use LogicException as StandardLogicException;

/**
 * Exception that represents error in the program logic.
 *
 * @since 1.0.0
 */
class LogicException extends StandardLogicException implements Exception
{

    use ExceptionTrait;
}
