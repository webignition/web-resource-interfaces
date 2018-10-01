<?php

namespace webignition\WebResourceInterfaces;

use webignition\InternetMediaTypeInterface\InternetMediaTypeInterface;

/**
 * Models an exception to be thrown when the content type of a resource does not match what is expected.
 *
 * The exception will make available to content type of the WebResourceInterface instance.
 */
interface InvalidContentTypeExceptionInterface
{
    public function getContentType(): InternetMediaTypeInterface;
}
