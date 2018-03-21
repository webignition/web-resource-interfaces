<?php

namespace webignition\WebResourceInterfaces;

/**
 * Models a web page
 */
interface WebPage extends WebResourceInterface
{
    /**
     * Returns, in order of preference, first found to be valid of:
     *  - document character set
     *  - http response character set
     *
     * @return string|null
     */
    public function getCharacterSet();

    /**
     * Returns the character set found in the document i.e. the body of the WebResourceInterface instance.
     *
     * @return string
     */
    public function getDocumentCharacterSet();

    /**
     * Returns the character set found in the ResponseInterface instance.
     *
     * @return string|null
     */
    public function getResponseCharacterSet();
}
