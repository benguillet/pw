---
layout: post
title: "Schedule rake tasks on Heroku"
date: 2013-04-11 00:02
comments: true
categories: [rake, heroku]
---

Heroku offers a very simple and free way to schedule any tasks. This is
basically an interface to cron.

To do so you first need to install the scheduler addon on Heroku:
``` sh
$ heroku addons:add scheduler:standard
```
Once this is done, you just need to go to your dashboard, click the app you
just add the addon and click on "Heroku Scheduler Standard":

<img alt="Heroku App Dashboard" src="../images/screenshot_shockapi_dashboard.png" width="400" height="252" />

Then, you can define with task to execute (rake earthquake:import in my case),
and the frequency:

<img alt="Heroku Sheduler Addon" src="../images/screenshot_heroku_scheduler.png" width="400" height="154" />

Note that the minimum frequency to execute a command in 10 minutes.

Source: [https://devcenter.heroku.com/articles/scheduler](https://devcenter.heroku.com/articles/scheduler)
