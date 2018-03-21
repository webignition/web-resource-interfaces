<?php

namespace webignition\WebResourceInterfaces;

interface JsonDocumentInterface extends WebResourceInterface
{
    /**
     * Gets the data present in the body of the ResponseInterface instance.
     *
     * @return null|bool|string|int|array
     */
    public function getData();
}
