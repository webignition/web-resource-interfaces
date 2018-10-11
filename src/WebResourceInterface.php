<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use webignition\InternetMediaTypeInterface\InternetMediaTypeInterface;
use webignition\StreamFactoryInterface\StreamFactoryInterface;

/**
 * Models a resource retrieved from a HTTP source.
 */
interface WebResourceInterface
{
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
    public function setUri(UriInterface $uri): WebResourceInterface;

    /**
     * Gets the uri of the resource.
     *
     * @return UriInterface
     */
    public function getUri(): ?UriInterface;

    /**
     * @param InternetMediaTypeInterface $internetMediaType
     *
     * @return WebResourceInterface
     */
    public function setContentType(InternetMediaTypeInterface $internetMediaType);

    /**
     * Gets the media type of the resource.
     *
     * @return InternetMediaTypeInterface
     */
    public function getContentType(): ?InternetMediaTypeInterface;

    /**
     * Does this resource have an invalid content type?
     *
     * @return bool
     */
    public function hasInvalidContentType(): bool;

    /**
     * Return an instance with the specified content.
     *
     * This method MUST be implemented in such a way as to retain the immutability of the resource,
     * and MUST return a new instance that has the new content.
     *
     * @param string $content
     * @param StreamFactoryInterface|null $streamFactory
     *
     * If setting the content of a resource without a response, only the first argument is required.
     *
     * If setting the content of a resource with a response, a StreamFactoryInterface implementation must be
     * passed as the second argument. The StreamFactoryInterface instance is responsible for creating a
     * StreamInterface instance to be set as the response body.
     *
     * @return WebResourceInterface
     */
    public function setContent(string $content, ?StreamFactoryInterface $streamFactory = null);

    /**
     * Gets the content of the resource.
     *
     * @return string
     */
    public function getContent(): ?string;

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
     * Does this instance provide a model for a given internet media type?
     *
     * @param InternetMediaTypeInterface $mediaType
     *
     * @return bool
     */
    public static function models(InternetMediaTypeInterface $mediaType): bool;

    /**
     * Gets a collection of content type strings that this implementation models
     *
     * Special cases:
     * - empty array: all
     *
     * @return string[]
     */
    public static function getModelledContentTypeStrings(): array;
}
