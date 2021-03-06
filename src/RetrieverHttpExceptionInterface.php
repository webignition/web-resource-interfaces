<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\ResponseInterface;

/**
 * Models an exception thrown by a RetrieverInterface instance when encountering a HTTP error.
 */
interface RetrieverHttpExceptionInterface extends RetrieverExceptionInterface
{
    public function getResponse(): ?ResponseInterface;
}
