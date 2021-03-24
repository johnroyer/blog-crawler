<?php

namespace Crawler;

use Spatie\Crawler\CrawlProfiles\CrawlProfile;
use Psr\Http\Message\UriInterface;
use Crawler\Cache;

class BloggerProfile extends CrawlProfile
{
    public function shouldCrawl(UriInterface $url): bool
    {
        if ('blog.zeroplex.tw' != $url->getHost()) {
            return false;
        }

        if (1 == preg_match('/\/search/', $url->getPath())) {
            return false;
        }

        if (1 == preg_match('/\/feeds/', $url->getPath())) {
            return false;
        }

        // check if duplicated
        if (true == Cache::has(strval($url))) {
            return false;
        }
        echo strval($url) . "\n";
        return true;
    }
}
