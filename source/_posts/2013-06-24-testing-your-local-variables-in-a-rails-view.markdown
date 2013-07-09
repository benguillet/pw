---
layout: post
title: "Testing your local variables in a Rails view"
date: 2013-06-24 16:01
comments: true
categories: rails
---

Let's say you want to add a class to HTML tag, but not all the time.

You can check if the local variable is set in a view like this:
``` haml
.mobile-widget{ :class => (defined?(klass) ? klass : nil), 'data-view' => 'MobileWidget' }
```

But there is a much better way. Simply do this:
``` haml
.mobile-widget{ :class => local_assigns[:klass], 'data-view' => 'MobileWidget' }
```
