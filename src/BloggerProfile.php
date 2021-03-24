<?php

namespace Crawler;

use Spatie\Crawler\CrawlProfiles\CrawlProfile;
use Psr\Http\Message\UriInterface;

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

        return true;
    }
}
