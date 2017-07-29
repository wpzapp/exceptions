<?php
/**
 * Tests for the WP-ZAPP installer class.
 *
 * @package WPZAPP\Exceptions
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Exceptions\Tests;

use PHPUnit\Framework\TestCase;

class ExceptionTraitTest extends TestCase
{

    public function testGetPackageName()
    {
        $package = new \stdClass();
        $package->name = 'test/my-package';

        $exception = new DummyPackageException($package);

        $this->assertSame($package->name, $exception->getPackageName());
    }

    public function testGetPackageNameNoPackage()
    {
        $exception = new DummyPackageException(new \stdClass());

        $this->assertEmpty($exception->getPackageName());
    }

    public function testIsModule()
    {
        $package = new \stdClass();
        $package->type = 'wpzapp-module';

        $exception = new DummyPackageException($package);

        $this->assertTrue($exception->isModule());
    }

    public function testIsModuleWrongType()
    {
        $package = new \stdClass();
        $package->type = 'wordpress-plugin';

        $exception = new DummyPackageException($package);

        $this->assertFalse($exception->isModule());
    }

    public function testIsModuleNoType()
    {
        $exception = new DummyPackageException(new \stdClass());

        $this->assertFalse($exception->isModule());
    }

    public function testIsLibrary()
    {
        $package = new \stdClass();
        $package->type = 'wpzapp-lib';

        $exception = new DummyPackageException($package);

        $this->assertTrue($exception->isLibrary());
    }

    public function testIsLibraryWrongType()
    {
        $package = new \stdClass();
        $package->type = 'wordpress-plugin';

        $exception = new DummyPackageException($package);

        $this->assertFalse($exception->isLibrary());
    }

    public function testIsLibraryNoType()
    {
        $exception = new DummyPackageException(new \stdClass());

        $this->assertFalse($exception->isLibrary());
    }

    /**
     * @dataProvider dataFindPackage
     */
    public function testFindPackage(string $file, string $packageName)
    {
        $exception = new DummyFileException($file);

        $package = $exception->getPackage();
        if ($packageName === '') {
            $this->assertEmpty(get_object_vars($package));
        } else {
            $this->assertSame($packageName, $package->name);
        }
    }

    public function dataFindPackage()
    {
        return array(
            array(__DIR__.'/data/multiple-src/src/file.php', 'test/topdir-package'),
            array(__DIR__.'/data/multiple-src/src/subdir/src/file.php', 'test/subdir-package'),
            array(__DIR__.'/data/invalid-composer/src/file.php', ''),
            array(__DIR__.'/data/no-composer/src/file.php', ''),
            array(__DIR__.'/data/no-src/whatever/file.php', ''),
        );
    }
}
