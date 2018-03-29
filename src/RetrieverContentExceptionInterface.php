<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\ResponseInterface;

/**
 * Models an exception thrown by a RetrieverInterface instance when encountering an error condition with the
 * content (header, body or both) of a retrieved resource.
 */
interface RetrieverContentExceptionInterface extends RetrieverExceptionInterface
{
    /**
     * @return ResponseInterface|null
     */
    public function getResponse();
}
