<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Models an exception thrown by a RetrieverInterface instance.
 *
 * The exception will make available the request responsible for initiating the exception and the response, if any.
 */
interface RetrieverExceptionInterface
{
    /**
     * @return RequestInterface
     */
    public function getRequest();

    /**
     * @return ResponseInterface|null
     */
    public function getResponse();
}
