<?php

namespace WPZAPP\Exceptions\Tests;

use WPZAPP\Exceptions\Exception;
use WPZAPP\Exceptions\ExceptionTrait;
use stdClass;

class DummyPackageException implements Exception
{

    use ExceptionTrait;

    public function __construct(stdClass $package)
    {
        $this->package = $package;
    }
}
