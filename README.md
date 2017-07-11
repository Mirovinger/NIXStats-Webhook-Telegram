# Nixstats-Webhook-Telegram/SMS

## Description

A Webhook to get your servers/monitors notifications on Telegram or/and SMS with Nixstats

## Screenshots

![screenshot](http://i.imgur.com/sKdIplO.png)

## Installation

### Pre-requisites

- NIXStats account
- NIXStats agent installed on your server
- Telegram Bot (see [here](https://core.telegram.org/bots#creating-a-new-bot) how to create a new Telegram bot)
- Your Telegram user ID (you can get it [here](https://telegram.me/myidbot))
- Turbosms [account](https://turbosms.ua/gateway.html)

### On your server

- Download the Webhook

```shell
cd /var/www/html/

mkdir NIXStats && cd NIXStats/

wget https://raw.githubusercontent.com/ealebed/NIXStats-Webhook-Telegram/master/webhook.php

mkdir functions && cd functions/

wget https://raw.githubusercontent.com/ealebed/NIXStats-Webhook-Telegram/master/functions/telegram.php
wget https://raw.githubusercontent.com/ealebed/NIXStats-Webhook-Telegram/master/functions/sms.php
```

- Edit variables ```$telegrambot```, ```$telegramchatid```, ```$turbosmslogin```, ```$turbosmspassword```, ```$turbosmssender``` and ```$turbosmsrecipient``` in webhook.php

### On NIXStats

- On your account go to "Settings" and in "NOTIFICATION CONTACTS" tab add the URL of your Webhook in "Webhook URI" field

![Webhook_URI](http://i.imgur.com/4kQd93E.png)

- On your server in "NOTIFICATIONS" tab and "Manage Notifications" click on "recipients" and check "Webhook"

![Notification](http://i.imgur.com/VWvJehU.png)

## Special thanks

[![Twitter](https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-24.png)](https://twitter.com/Bilyb0y) [![GitHub](https://cdn0.iconfinder.com/data/icons/octicons/1024/mark-github-24.png)](https://github.com/bilyboy785/) Martin Bouillaud and his [NIXStats-Webhook-Telegram](https://github.com/bilyboy785/nixstats-webhook-telegram) version

[![Twitter](https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-24.png)](https://twitter.com/nixstats) [![GitHub](https://cdn0.iconfinder.com/data/icons/octicons/1024/mark-github-24.png)](https://github.com/NIXStats) Vincent from [NIXStats](https://nixstats.com) for json samples
