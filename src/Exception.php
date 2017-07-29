<?php
/**
 * WP-ZAPP exceptions for libraries and modules.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions;

/**
 * Interface for a WP-ZAPP exception.
 *
 * @since 1.0.0
 */
interface Exception
{

    /**
     * Get the name of the package in which the exception was created.
     *
     * @since 1.0.0
     *
     * @return string Package name, or empty string if not part of a package.
     */
    public function getPackageName(): string;

    /**
     * Check whether the exception was created in a WP-ZAPP module.
     *
     * @since 1.0.0
     *
     * @return bool Whether the exception was created in a WP-ZAPP module.
     */
    public function isModule(): bool;

    /**
     * Check whether the exception was created in a WP-ZAPP library.
     *
     * @since 1.0.0
     *
     * @return bool Whether the exception was created in a WP-ZAPP library.
     */
    public function isLibrary(): bool;
}
