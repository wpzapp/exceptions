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
 * Trait for a WP-ZAPP exception.
 *
 * @since 1.0.0
 */
trait ExceptionTrait
{

    /** @var object|null Package data, or null if not set yet. */
    protected $package = null;

    /**
     * Get the name of the package in which the exception was created.
     *
     * @since 1.0.0
     *
     * @return string Package name, or empty string if not part of a package.
     */
    public function getPackageName(): string
    {
        $this->findPackage();

        if (!isset($this->package->name)) {
            return '';
        }

        return $this->package->name;
    }

    /**
     * Check whether the exception was created in a WP-ZAPP module.
     *
     * @since 1.0.0
     *
     * @return bool Whether the exception was created in a WP-ZAPP module.
     */
    public function isModule(): bool
    {
        $this->findPackage();

        if (!isset($this->package->type) || $this->package->type !== 'wpzapp-module') {
            return false;
        }

        return true;
    }

    /**
     * Check whether the exception was created in a WP-ZAPP library.
     *
     * @since 1.0.0
     *
     * @return bool Whether the exception was created in a WP-ZAPP library.
     */
    public function isLibrary(): bool
    {
        $this->findPackage();

        if (!isset($this->package->type) || $this->package->type !== 'wpzapp-lib') {
            return false;
        }

        return true;
    }

    /**
     * Find the composer file for the package in which the exception was created.
     *
     * The lookup only happens once. If the data has already been detected locally
     * or if a previous lookup has already failed, it is not executed again.
     *
     * @since 1.0.0
     */
    protected function findPackage()
    {
        if ($this->package !== null) {
            return;
        }

        $file = $this->getFile();

        $parts = explode(DIRECTORY_SEPARATOR, $file);

        $key = array_search('src', array_reverse($parts, true), true);
        if ($key === false) {
            $this->package = new \stdClass();
            return;
        }

        $composerFile = implode(DIRECTORY_SEPARATOR, array_slice($parts, 0, $key)).DIRECTORY_SEPARATOR.'composer.json';
        if (!file_exists($composerFile)) {
            $this->package = new \stdClass();
            return;
        }

        $composerContent = file_get_contents($composerFile);
        if ($composerContent === false) {
            $this->package = new \stdClass();
            return;
        }

        $this->package = json_decode($composerContent);
        if ($this->package === null) {
            $this->package = new \stdClass();
        }
    }
}
