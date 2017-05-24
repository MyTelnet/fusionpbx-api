<?php

namespace Api\Extensions\Exceptions;

use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

use Infrastructure\Traits\BaseException;

class InvalidExtensionException extends UnprocessableEntityHttpException
{
  use BaseException;
}
