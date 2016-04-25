#!/usr/local/bin/python2.7
# -*- coding: utf-8 -*-
__author__ = 'https://github.com/password123456/'

import urllib
import urllib2

bot_id = 'Your Bot ID'
url = 'https://api.telegram.org/bot' + bot_id + '/sendMessage'

data = {}
data['chat_id'] = 'Your chat room number'
data['text'] = 'hello buddy'

request  = urllib2.Request(url, urllib.urlencode(data))
response = urllib2.urlopen(request)
res_data = response.read()

print res_data
