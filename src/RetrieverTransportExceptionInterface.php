<?php

namespace webignition\WebResourceInterfaces;

/**
 * Models an exception thrown by a RetrieverInterface instance when encountering a transport-level error.
 * cURL error 28 is an example of a transport error.
 */
interface RetrieverTransportExceptionInterface extends RetrieverExceptionInterface
{
    public function getTransportErrorCode(): int;
}
