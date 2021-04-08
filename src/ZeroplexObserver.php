<?php

namespace Crawler;

use Spatie\Crawler\CrawlObservers\CrawlObserver;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Crawler\Cache;

class ZeroplexObserver extends CrawlObserver
{
    private $counter = 0;

    public function willCrawl(UriInterface $url)
    {
    }

    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null
    ) {
        Cache::set(strval($url));

        $url = urldecode(strval($url));
        $url = mb_substr($url, -60, null, 'utf8');
        echo sprintf("%6s - %-60s\n", ++$this->counter, $url);
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
