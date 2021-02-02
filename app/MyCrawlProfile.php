<?php

namespace App;

use Spatie\Crawler\CrawlProfiles\CrawlProfile;
use Psr\Http\Message\UriInterface;

class MyCrawlProfile extends CrawlProfile
{
    public function shouldCrawl(UriInterface $url): bool
    {
        if ('blog.zeroplex.tw' == $url->getHost()) {
            return true;
        }
        return false;
    }
}
