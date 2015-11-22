import httplib, urllib2
from sys import argv
from time import sleep
import json
from wiringx86 import GPIOGalileoGen2 as GPIO

varSuhu = int(argv[1])
varKelembapan = int(argv[2])
varStatus=192
varReset=1
varon1=0
varon2=0
varon3=0
varon4=0
varon5=0
varon6=0

gpio = GPIO(debug=False)
pin = 13
state = gpio.HIGH

print 'setting up pin %d' % pin

gpio.pinMode(pin,gpio.OUTPUT)
gpio.pinMode(2,gpio.OUTPUT)
gpio.pinMode(3,gpio.OUTPUT)
gpio.pinMode(4,gpio.OUTPUT)
gpio.pinMode(5,gpio.OUTPUT)
gpio.pinMode(6,gpio.OUTPUT)


print 'coba mengendalikan pin %d sekarang...' % pin

while True :
	print ("??")

	#urlKirim = 'http://api.geeknesia.com/api/data?api_key=005d9063bc2a1cb4999ef67391f2ba42&attributes={%22suhu%22:' + str(varSuhu) + ',%22kelembapan%22:' + str(varKelembapan) + ',%22status%22:' + str(varStatus) + ',%22reset%22:' + str(varReset)+ ',%22on1%22:' + str(varon1)+ ',%22on2%22:' + str(varon2)+ ',%22on3%22:' + str(varon3)+ ',%22on4%22:' + str(varon4)+ ',%22on5%22:' + str(varon5)+ ',%22on6%22:' + str(varon6) + '}'
	#f=urllib2.urlopen(urlKirim)
	#print f.read()


	urlKirim = 'http://api.geeknesia.com/api/attribute/status?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varStatus = int(jsondata['output']['attribute']['status'])
	print ("sta : ")
	print (varStatus)
	print (" ")

	urlKirim = 'http://api.geeknesia.com/api/attribute/reset?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varReset = int(jsondata['output']['attribute']['reset'])
	print ("rst : ")
	print (varReset)
	print (" ")
	
	urlKirim = 'http://api.geeknesia.com/api/attribute/on1?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varOn1 = int(jsondata['output']['attribute']['on1'])
	print ("on1 : ")
	print (varOn1)
	print (" ")

	if varOn1:
		state = gpio.HIGH
		gpio.digitalWrite(2, state)
	else:
		state = gpio.LOW
		gpio.digitalWrite(2, state)

	urlKirim = 'http://api.geeknesia.com/api/attribute/on2?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varOn2 = int(jsondata['output']['attribute']['on2'])
	print ("on2 : ")
	print (varOn2)
	print (" ")

	if varOn2:
		state = gpio.HIGH
		gpio.digitalWrite(3, state)
	else:
		state = gpio.LOW
		gpio.digitalWrite(3, state)
	
	urlKirim = 'http://api.geeknesia.com/api/attribute/on3?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varOn3 = int(jsondata['output']['attribute']['on3'])
	print ("on3 : ")
	print (varOn3)
	print (" ")

	if varOn3:
		state = gpio.HIGH
		gpio.digitalWrite(4, state)
	else: 
		state = gpio.LOW
		gpio.digitalWrite(4, state)
	
	urlKirim = 'http://api.geeknesia.com/api/attribute/on4?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varOn4 = int(jsondata['output']['attribute']['on4'])
	print ("on4 : ")
	print (varOn4)
	print (" ")

	if varOn4:
		state = gpio.HIGH
		gpio.digitalWrite(5, state)
	else: 
		state = gpio.LOW
		gpio.digitalWrite(5, state)
	
	urlKirim = 'http://api.geeknesia.com/api/attribute/on5?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varOn5 = int(jsondata['output']['attribute']['on5'])
	print ("on5 : ")
	print (varOn5)
	print (" ")

	if varOn5: 
		state = gpio.HIGH
		gpio.digitalWrite(6, state)
	else: 
		state = gpio.LOW
		gpio.digitalWrite(6, state)
	
	urlKirim = 'http://api.geeknesia.com/api/attribute/on6?api_key=005d9063bc2a1cb4999ef67391f2ba42'
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varOn6 = int(jsondata['output']['attribute']['on6'])
	print ("on6 : ")
	print (varOn6)
	print (" ")

	if varOn6: 
		state = gpio.HIGH
		gpio.digitalWrite(pin, state)
	else:
		state = gpio.LOW
		gpio.digitalWrite(pin, state)	

	print ("==")

	
	
	#sleep(2)	

