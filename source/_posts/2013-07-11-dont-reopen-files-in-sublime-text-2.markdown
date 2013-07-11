---
layout: post
title: "Don't reopen files in Sublime Text 2"
date: 2013-07-11 00:40
comments: true
categories: sublime
---
Just add this to your settings:

```
"hot_exit": false,
"remember_open_files": false # ignored if hot_exit is true.
```
