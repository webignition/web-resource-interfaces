<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use webignition\InternetMediaTypeInterface\InternetMediaTypeInterface;

/**
 * Models a web-based resource by providing access to commonly-used aspects
 * of a PSR-7 HTTP response
 */
interface WebResourceInterface
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
    public function setResponse(ResponseInterface $response);

    /**
     * Gets the response of the resource.
     *
     * @return ResponseInterface
     */
    public function getResponse();

    /**
     * Return an instance with the specified uri.
     *
     * The uri MUST be a UriInterface object.
     *
     * This method MUST be implemented in such a way as to retain the immutability of the resource,
     * and MUST return a new instance that has the new uri.
     *
     * @param UriInterface $uri
     *
     * @return WebResourceInterface
     */
    public function setUri(UriInterface $uri);

    /**
     * Gets the uri of the resource.
     *
     * @return UriInterface
     */
    public function getUri();

    /**
     * Gets the media type of the resource.
     *
     * @return InternetMediaTypeInterface
     */
    public function getContentType();

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
    public function setBody(StreamInterface $body);

    /**
     * Gets the body of the resource.
     *
     * @return StreamInterface|null
     */
    public function getBody();

    /**
     * Gets the content of the body of the resource.
     *
     * @return string
     */
    public function getContent();

    /**
     * Does this instance provide a model for a given internet media type?
     *
     * @param InternetMediaTypeInterface $mediaType
     *
     * @return bool
     */
    public static function models(InternetMediaTypeInterface $mediaType);

    /**
     * Gets a collection of content type strings that this implementation models
     *
     * Special cases:
     * - empty array: all
     *
     * @return string[]
     */
    public static function getModelledContentTypeStrings();
}
