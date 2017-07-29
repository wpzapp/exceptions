<?php

namespace WPZAPP\Exceptions\Tests;

use WPZAPP\Exceptions\Exception;
use WPZAPP\Exceptions\ExceptionTrait;
use stdClass;

class DummyFileException implements Exception
{

    use ExceptionTrait;

    private $file = '';

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getPackage(): stdClass
    {
        $this->findPackage();

        return $this->package;
    }
}
