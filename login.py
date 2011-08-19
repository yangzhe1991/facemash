import urllib
import urllib2
import cookielib
import sys
from StringIO import StringIO
def login(s):
	xn={}
	xn['email']=''
	xn['password']=''
	cookie=cookielib.CookieJar()
	opener=urllib2.build_opener(urllib2.HTTPCookieProcessor(cookie))
	urllib2.install_opener(opener)
	zhanghao = urllib.urlencode(xn)
	req=urllib2.Request('http://3g.renren.com/lo
gin.do?fx=0&autoLogin=true',zhanghao)
	resp=urllib2.urlopen(

req)
	html=urllib2.urlopen(s)
	return html.read()
