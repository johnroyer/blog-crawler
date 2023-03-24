## Introduction

This is an simple demo, using [johnroyer/crawler-php](https://github.com/johnroyer/crawler-php) to get pages from my site.


## Usage

Steps to create a crawler using `johnroyer/crawler-php`:

1. `composer require johnroyer/crawler-php:^0.3`
1. implement `Crawler\Handler\AbstractHandler` for domain will be crawled
1. create crawler by `new Crawler()`
1. add handlers to crawler
1. `run()`
