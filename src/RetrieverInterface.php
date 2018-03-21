<?php

namespace webignition\WebResourceInterfaces;

use Psr\Http\Message\RequestInterface;

/**
 * Models a service for retrieving a WebResourceInterface given a RequestInterface instance.
 *
 * This adds a reliability layer on top of an http client providing:
 * - content-type verification
 * - additional retry mechanisms based on observed real-world web page issues
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
    public function setAllowedContentTypes($allowedContentTypes);

    /**
     * Whether to allow resources of unknown content types to be retrieved.
     *
     * An implementation MUST default this to true.
     *
     * @return bool
     */
    public function setAllowUnknownResourceTypes();

    /**
     * Whether to retry a failed request with an equivalent URL that is not encoded.
     *
     * @return bool
     */
    public function setRetryWithUrlEncodingDisabled();

    /**
     * @param RequestInterface $request
     *
     * @return WebResourceInterface
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
    public function retrieve(RequestInterface $request);
}
