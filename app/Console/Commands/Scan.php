<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;
use App\Observers\ZeroplexObserver;
use App\BloggerProfile;

class Scan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:scan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('starting ....');

        Crawler::create()
            ->ignoreRobots()
            ->setConcurrency(1)
            ->setDelayBetweenRequests(1000) // in ms
            ->setCrawlProfile(new BloggerProfile())
            ->setParseableMimeTypes([
                'text/plain',
                'text/html',
            ])
            ->setCrawlObserver(new ZeroplexObserver())
            ->startCrawling('https://blog.zeroplex.tw');
    }
}
