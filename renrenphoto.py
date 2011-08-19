#!/usr/bin/python
# coding=utf-8
import urllib
import urllib2
import cookielib
import sys
from time import sleep
from login import *

html=login('http://3g.renren.com/myfriendlist.do')
html=html[html.find('全部'):]
last='123'
total=0
n=0
i=0
while html.find('下一页')>=0:
	html=html[html.find('全部'):html.find('下一页')]
	j=0
	while html.find('profile.do?h')>=0 and j<5:
		#urllib.urlretrieve(url)
		#print html
		html=html[html.find('<img'):]
		html=html[html.find('src'):]
		temp=html[html.find('http'):html.find('" />')]
		n+=1
		print temp
		print urllib.urlretrieve(temp,'/home/godfather/code/python/photo/'+str(n)+'.jpg')
		#sleep(0.5)
`		j+=1
		#print temp

	html=login('http://3g.renren.com/myfriendlist.do?curpage='+str(i))
