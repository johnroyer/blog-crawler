## Introduction

This is an simple demo, using `spatie/crawler` to get pages from my site.


## Usage

`spatie/crawler` has many useful feature that can make crawling web page become very easy. Such as:

- Custom filters
- Actions hook



### Custom Filters

Filter is setting in `src/BloggerProfile`. You can set as many filters as you want in method `shouldCrawl()`.

In this demo, my filters are:

- crawls
  - domain `blog.zeroplex.tw` only
  - home page
  - first page of tag list
  - first page of artcles list
- ignores
  - sites which is not my
  - search result
  - RSS feeds
  - additional pages of tags and articals
  - articals that is older then year 2021


### Action Hooks

My hooks sets in `src/ZeroplexObserver`.

- `willCrawl()`: actions before crawler starting fetch web page.
- `crawled()`: action after crawler successfully get data from web page.
- `crawlFailed()`: actions when crawler failed to get data from web page. You can save URL to an retry list or something else.


## More

I implement an simple cache function in `src/Cache`. It is used to save URLs which has crawled. Make crawler not to fetch the same URL again.
