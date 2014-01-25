---
layout: post
title: "Work against local gems"
date: 2014-01-25 01:57
comments: true
categories: [ruby, bundler]
---

```bash
bundle config local.GEM_NAME /path/to/local/repo
```

To see all gems configured with local overrides:
```bash
bundle config
```

To remove a local setting, edit the ```~/.bundle/config``` file, or use:
```bash
bundle config --delete local.GEM_NAME
```
