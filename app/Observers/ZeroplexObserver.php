<?php

namespace App\Observers;

use Spatie\Crawler\CrawlObservers;

class ZeroplexObserver extends CrawlObserver
{
    public function willCrawl(UriInterface $url)
    {
    }

    public function crawler(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null
    )
    {
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
