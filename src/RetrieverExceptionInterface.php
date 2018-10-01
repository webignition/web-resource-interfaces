<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\RequestInterface;

/**
 * Models an exception thrown by a RetrieverInterface instance.
 */
interface RetrieverExceptionInterface
{
    public function getRequest(): ?RequestInterface;
}
