# Simple-Twitch-Followers-Counter
![Build](https://www.travis-ci.com/EddyDevProject/Simple-Twitch-Followers-Counter.svg?branch=main)
![PHP](https://img.shields.io/badge/php-%3E%3D5.3-8892bf.svg)


Simple script to check the number of followers of your Twitch channel.

Example https://api.eddydev.xyz/twitchapi

# Requirements
- Twitch Client ID.
- Twitch Client Secret.

# Setup

Go on [Twitch Dev Console](https://dev.twitch.tv/console/apps) and create a new application.
Enter an app name and set `OAuth redirect URI` like this:

 ```
https://your_url.com/counter.php
```
Save `Client ID` and `Client Secret`.

Go to `index.php` file and change `client_id` and `redirect_uri` (OAuth redirect URI) with with those just generated.

Go to `counter.php` file and chenge `$client_id`, `client_secret` and `redirect_uri` with with those just generated like this:

 ```
$client_id = "Yaoc1s7kqselhtj5g03qiyw5dh76zfr";
$client_secret = "ab8ge2x8b9i6pvrvr5n8oywkirr8h4";
$redirect_uri = " https://api.eddydev.xyz/twitchapi/counter.php";
```
# How to use

Go to index page, click on `Login` button and and you will be redirected to the page that will show you your followers.
An example https://api.eddydev.xyz/twitchapi
