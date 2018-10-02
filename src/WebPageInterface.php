<?php

namespace webignition\WebResourceInterfaces;

/**
 * Models a web page
 */
interface WebPageInterface extends WebResourceInterface
{
    /**
     * Returns the character set found in the document i.e. the content of the WebResourceInterface instance.
     *
     * @return string
     */
    public function getCharacterSet(): string;
}
