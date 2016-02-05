import httplib, urllib2
from sys import argv
from time import sleep
import json

while True :
	print ("??")

	urlKirim = 'http://api.geeknesia.com/api/data?api_key=005d9063bc2a1cb4999ef67391f2ba42&attributes={"suhu":34,"kelembapan":22,"readon":256}'
	print urlKirim
	f=urllib2.urlopen(urlKirim)
	print f.read()
	sleep(2)

	urlKirim = 'http://niam.lecturer.pens.ac.id'
	print urlKirim
	f=urllib2.urlopen(urlKirim)
	print f.read()

	print ("==")	
	sleep(2)

