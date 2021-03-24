<?php

namespace Crawler;

use Spatie\Crawler\CrawlObservers\CrawlObserver;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class ZeroplexObserver extends CrawlObserver
{
    public function willCrawl(UriInterface $url)
    {
        var_dump( strval($url)) ;
    }

    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null
    ) {
    }

    public function crawlFailed(
        UriInterface $url,
        RequestException $RequestException,
        ?UriInterface $foundOnUrl = null
    ) {
    }

    public function finishedCrawling()
    {
    }
}
