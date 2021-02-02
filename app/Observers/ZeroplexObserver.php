<?php

namespace App\Observers;

use Spatie\Crawler\CrawlObservers\CrawlObserver;

class ZeroplexObserver extends CrawlObserver
{
    public function willCrawl(UriInterface $url)
    {
        var_dump( strval($url) );
        exit;
    }

    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null
    ) {
        echo strval($url);
        sleep(15);
    }

    public function crawlFailed(
        UriInterface $url,
        RequestException $RequestException,
        ?UriInterface $foundOnUrl = null
    ) {
        echo 'Failed:  ' . $strval($url);
    }

    public function finishedCrawling()
    {
    }
}
