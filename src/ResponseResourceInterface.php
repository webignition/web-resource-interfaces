<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Models a web-based resource by providing access to commonly-used aspects
 * of a PSR-7 HTTP response
 */
interface ResponseResourceInterface extends WebResourceInterface
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
     * @return ResponseResourceInterface
     */
    public function setResponse(ResponseInterface $response): ResponseResourceInterface;

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
     * @return ResponseResourceInterface
     */
    public function setBody(StreamInterface $body): ResponseResourceInterface;

    /**
     * Gets the body of the resource.
     *
     * @return StreamInterface|null
     */
    public function getBody(): ?StreamInterface;
}
