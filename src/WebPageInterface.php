<?php

namespace webignition\WebResourceInterfaces;

/**
 * Models a web page
 */
interface WebPageInterface extends WebResourceInterface
{
    /**
     * Returns, in order of preference, first found to be valid of:
     *  - document character set
     *  - http response character set
     *
     * @return string|null
     */
    public function getCharacterSet(): ?string;

    /**
     * Returns the character set found in the document i.e. the content of the WebResourceInterface instance.
     *
     * @return string
     */
    public function getDocumentCharacterSet(): string;
}
