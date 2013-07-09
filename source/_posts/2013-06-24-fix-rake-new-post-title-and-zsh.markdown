---
layout: post
title: "Fix rake new_post['title'] and Zsh"
date: 2013-06-24 16:09
comments: true
categories: [octopress, rake, zsh, bug]
---
There is a bug with Zsh and the Octopress rake new_post command.

Everytime you try to create a new post using this command, you get this:
``` sh
$ rake new_post["My new post"]
zsh: no matches found: new_post[My new post]
```

The only workaround so far is:
``` sh
rake new_post\["My new post"\]
```
