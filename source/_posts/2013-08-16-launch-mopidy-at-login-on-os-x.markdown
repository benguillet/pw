---
layout: post
title: "Daemonize Mopidy and launch it at login on OS X"
date: 2013-08-16 17:45
comments: true
categories: music, it, mopidy, osx
---

To Daemonize [Mopidy](http://www.mopidy.com "Mopidy") and launch it at login on OS X, you need to create a launchd Property List File (plist) and put it into the ```~/Library/LaunchAgents``` folder. Create the file ```~/Library/LaunchAgents/cx.mopidy.plist```:

``` xml
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
  <key>Label</key>
  <string>cx.mopidy</string>
  <key>ProgramArguments</key>
  <array>
    <string>/usr/local/bin/mopidy</string>
  </array>
  <key>EnvironmentVariables</key>
  <dict>
    <key>PYTHONPATH</key>
    <string>/usr/local/lib/python2.7/site-packages</string>
  </dict>
  <key>RunAtLoad</key>
  <true/>
  <key>KeepAlive</key>
  <true/>
  <key>WorkingDirectory</key>
  <string>/usr/local</string>
</dict>
</plist>
```
That's it! Mopidy should be launched automatically at each startup.
