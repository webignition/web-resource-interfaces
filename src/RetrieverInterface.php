<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\RequestInterface;

/**
 * Models a service for retrieving a ResponseResourceInterface given a RequestInterface instance.
 */
interface RetrieverInterface
{
    /**
     * Sets an interable collection of content types that are allowed.
     *
     * An implementation MUST default this to an empty collection.
     *
     * @param string[] $allowedContentTypes
     */
    public function setAllowedContentTypes(array $allowedContentTypes = []);

    /**
     * Whether to allow resources of unknown content types to be retrieved.
     *
     * An implementation MUST default this to true.
     *
     * @param bool $allowUnknownResourceTypes
     */
    public function setAllowUnknownResourceTypes(bool $allowUnknownResourceTypes = true);

    /**
     * @param RequestInterface $request
     *
     * @return ResponseResourceInterface
     *
     * A RetrieverExceptionInterface instance MUST be thrown when a resource
     * is retrieved with a status code other than 200.
     *
     * An InvalidContentTypeExceptionInterface instance MUST  be thrown when the content type of a resource
     * does not match one of those provided by setAllowedContentTypes() and when unknown resource types are not allowed.
     *
     * @throws RetrieverExceptionInterface for cases where a resource could not be retrieved
     * @throws InvalidContentTypeExceptionInterface for cases where the retrieved resource content type is not allowed
     */
    public function retrieve(RequestInterface $request): ResponseResourceInterface;
}
