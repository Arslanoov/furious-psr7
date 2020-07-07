<?php

declare(strict_types=1);

namespace Arslanoov\Psr7\Exception;

use Throwable;

class NotReadableStreamException extends RuntimeException
{
    public function __construct($message = 'Stream is not readable.', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}