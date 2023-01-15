<?php

namespace Crawler;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class BlogHandler extends \Zeroplex\Crawler\Handler\AbstractHandler
{
    protected $count = 0;

    /**
     * @inheritDoc
     */
    public function getDomain(): string
    {
        return 'blog.zeroplex.tw';
    }

    /**
     * @inheritDoc
     */
    function shouldFetch(RequestInterface $request): bool
    {
        if (1 === preg_match('/\/feed/', $request->getUri())) {
            return false;
        }
        if (1 === preg_match('/\.(css|js|jpg|png|gif|webp|ico)/', $request->getUri())) {
            return false;
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    function handle(ResponseInterface $response, RequestInterface $request): void
    {
        $this->count++;
        echo sprintf(' %5s  ', $this->count)
            . urldecode($request->getUri()) . "\n";
    }
}
