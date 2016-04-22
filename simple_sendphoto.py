#!/usr/local/bin/python2.7
# -*- coding: utf-8 -*-
__author__ = https://github.com/password123456/

import MultipartPostHandler
import cookielib
import urllib2

bot_id = 'Your Bot ID'
url = 'https://api.telegram.org/bot' + bot_id + '/sendPhoto'
chat_room = 'Your chat room number'

cookies = cookielib.CookieJar()
opener = urllib2.build_opener(urllib2.HTTPCookieProcessor(cookies),
                              MultipartPostHandler.MultipartPostHandler)

params = { 'chat_id' : chat_room,
           'caption' : 'send photo to mybot',
           'photo' : open('./image.gif', 'rb') }

print opener.open(url, params).read()
