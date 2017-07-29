<?php
/**
 * WP-ZAPP exceptions for modules and libraries.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

use DomainException as StandardDomainException;

/**
 * Exception thrown if a value does not adhere to a defined valid data domain.
 *
 * @since 1.0.0
 */
class DomainException extends StandardDomainException implements Exception
{

    use ExceptionTrait;
}
