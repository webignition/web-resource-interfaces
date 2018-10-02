<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\UriInterface;
use webignition\InternetMediaTypeInterface\InternetMediaTypeInterface;

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
     * Return an instance with the specified content.
     *
     * This method MUST be implemented in such a way as to retain the immutability of the resource,
     * and MUST return a new instance that has the new content.
     *
     * @param string $content
     *
     * @return WebResourceInterface
     */
    public function setContent(string $content);

    /**
     * Gets the content of the resource.
     *
     * @return string
     */
    public function getContent(): string;

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
