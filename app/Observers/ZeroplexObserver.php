<?php

namespace App\Observers;

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
        if ("200" != $response->getStatusCode()) {
            return;
        }
    }

    public function crawlFailed(
        UriInterface $url,
        RequestException $RequestException,
        ?UriInterface $foundOnUrl = null
    ) {
        if ('500' == $response->getStatusCode()) {
            return;
        }

        if ('404' == $response->getStatusCode()) {
            // delete DB record
            return;
        }
    }

    public function finishedCrawling()
    {
    }
}