<?php

namespace webignition\WebResourceInterfaces;

interface SitemapInterface extends WebResourceInterface
{
    const TYPE_ATOM = 'application/atom+xml';
    const TYPE_RSS = 'application/rss+xml';
    const TYPE_SITEMAPS_ORG_XML = 'sitemaps.org.xml';
    const TYPE_SITEMAPS_ORG_TXT = 'sitemaps.org.txt';
    const TYPE_SITEMAPS_ORG_XML_INDEX = 'sitemaps.org.xml.index';

    /**
     * Gets the type of this instance. One of TYPE_* constants.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Is this instance an index sitemap?
     *
     * @return bool
     */
    public function isIndex(): bool;

    /**
     * Is this instance a sitemap?
     *
     * @return bool
     */
    public function isSitemap(): bool;

    /**
     * Returns an interable collection of urls found within this instance.
     *
     * @return string[]
     */
    public function getUrls(): array;

    /**
     * Adds a child sitemap to an index sitemap.
     *
     * Returns a bool to indicate success.
     *
     * @param SitemapInterface $sitemap
     *
     * @return bool
     */
    public function addChild(SitemapInterface $sitemap): bool;

    /**
     * Gets an interable collection of SitemapInterface objects that are child sitemaps of an index sitemap.
     *
     * A non-index instance MUST always return an empty collection.
     *
     * @return SitemapInterface[]
     */
    public function getChildren(): array;
}
