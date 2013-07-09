---
layout: post
title: "Fix SSL error with ruby 2.0 and Rails4 on OSX"
date: 2013-06-24 18:06
comments: true
categories: [ruby2.0, rails4, gem]
---

If you encounter this error when trying to bundle install:
``` sh
Gem::RemoteFetcher::FetchError: SSL_connect returned=1 errno=0 state=SSLv3 read server certificate B: certificate verify failed
```

Then it probably means than you need to upgrade your rubygem version.
Check the current version:
``` sh
$ gem -v
```

You need to use at least the 2.0.3. To upgrade, just run:
``` sh
$ gem update --system
```

