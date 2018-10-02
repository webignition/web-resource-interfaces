<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Models a web-based resource by providing access to commonly-used aspects
 * of a PSR-7 HTTP response
 */
interface ResponseResourceInterface
{
    /**
     * Return an instance with the specified response.
     *
     * The response MUST be a ResponseInterface object.
     *
     * This method MUST be implemented in such a way as to retain the immutability of the resource,
     * and MUST return a new instance that has the new response.
     *
     * @param ResponseInterface $response
     *
     * @return WebResourceInterface
     */
    public function setResponse(ResponseInterface $response): WebResourceInterface;

    /**
     * Gets the response of the resource.
     *
     * @return ResponseInterface
     */
    public function getResponse(): ?ResponseInterface;

    /**
     * Return an instance with the specified body.
     *
     * The body MUST be a StreamInterface object.
     *
     * @param StreamInterface $body
     *
     * This method MUST be implemented in such a way as to retain the immutability of the resource,
     * and MUST return a new instance that has the new body.
     *
     * @return WebResourceInterface
     */
    public function setBody(StreamInterface $body): WebResourceInterface;

    /**
     * Gets the body of the resource.
     *
     * @return StreamInterface|null
     */
    public function getBody(): ?StreamInterface;
}
