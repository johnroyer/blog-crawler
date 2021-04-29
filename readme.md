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