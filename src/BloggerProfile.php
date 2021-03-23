<?php

namespace Crawler;

use Spatie\Crawler\CrawlProfiles\CrawlProfile;
use Psr\Http\Message\UriInterface;

class BloggerProfile extends CrawlProfile
{
    public function shouldCrawl(UriInterface $url): bool
    {
        if ('blog.zeroplex.tw' != $url->getHost()) {
            echo $url->getHost() . " ... passed\n";
            return false;
        }

        if (1 == preg_match('/\/search/', $url->getPath())) {
            echo $url->getPath() . " ... passed\n";
            return false;
        }

        if (1 == preg_match('/\/feeds/', $url->getPath())) {
            echo $url->getPath() . " ... passed\n";
            return false;
        }

        echo $url->getHost() . $url->getPath() . " ... ok\n";
        return true;
    }
}
