---
layout: post
title: "HAML Helpers"
date: 2013-07-09 16:01
comments: true
categories: [haml, rails]
---
Haml comes with some very sweet helpers.

For instance, by default, **link_to** and haml will add an extra whitespace after the link.

To prevent that with Haml, you can use the **succeed** helper, which appends a string to the end of a Haml block, with no whitespace between.
``` haml
= succeed '. ' do
 = link_to 'Google', 'https://www.google.com'
```
The **surround** and **precede** helpers follow the same pattern.
[More info](http://haml.info/docs/yardoc/Haml/Helpers.html)
