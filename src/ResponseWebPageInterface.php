<?php

namespace webignition\WebResourceInterfaces;

/**
 * Models a web page based on a ResponseInterface
 */
interface ResponseWebPageInterface extends WebPageInterface, ResponseResourceInterface
{
    /**
     * Returns the character set found in the ResponseInterface instance.
     *
     * @return string|null
     */
    public function getResponseCharacterSet(): ?string;
}
