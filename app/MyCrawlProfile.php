<?php

namespace App;

use Spatie\Crawler\CrawlProfiles;
use Psr\Http\Message\UriInterface;

class MyCrawlProfile extends CrawlProfile
{
    public function shouldCrawl(UriInterface $url): bool
    {
    }
}
