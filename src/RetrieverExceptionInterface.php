<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\RequestInterface;

/**
 * Models an exception thrown by a RetrieverInterface instance.
 */
interface RetrieverExceptionInterface
{
    /**
     * @return RequestInterface
     */
    public function getRequest();
}
