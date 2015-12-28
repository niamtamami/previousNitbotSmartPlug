debugMode=True 	#setting untuk menampilkan status eksekusi program

import httplib, urllib2
from os.path import exists
from sys import argv
from time import sleep
import json

APIkey=0	#deklarasi awal variabel APIKey sebelum ambil dari nitbot-iotConf.txt

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

def defineIO():
	from wiringx86 import GPIOGalileoGen2 as GPIO
	gpio = GPIO(debug=False)
	if debugMode: print 'setting up io pin'
	gpio.pinMode(13,gpio.OUTPUT)
	gpio.pinMode(2,gpio.OUTPUT)
	gpio.pinMode(3,gpio.OUTPUT)
	gpio.pinMode(4,gpio.OUTPUT)
	gpio.pinMode(5,gpio.OUTPUT)
	gpio.pinMode(6,gpio.OUTPUT)
	if debugMode: print 'successfull...'

#void function()

#fungsi setBit(datanya berapa, bit berapa yang diset, nilainya berapa 1 atau nol)
#misal setbit(128,6,1)=192
def setBit(var, nbit, value):
	if value == True:
		return var | (1 << nbit)
	else:
		return var & ~(1 << nbit)

#melihat nilai 1 bit data, jika 0 maka nilainya 0, jika lebih daripada 0 maka nilainya 1
def checkBit(var, nbit):
	return var & (1 << nbit)

#setdata, 8 bit data on off berdasarkan variabel dataVar, LSB first
def varSetByte(dataVar):
	for x in range(0,8):
		if checkBit(dataVar,x)>0:
			if debugMode:print("on")
		    #state = gpio.HIGH
		    #gpio.digitalWrite(x, state)
		else: 
			if debugMode:print("off")
		    #state = gpio.LOW
		    #gpio.digitalWrite(x, state)

#baca file, kedepannya digunakan untuk entri data konfigurasi API key
def readConf(file):
	if exists(file):
		with open(file) as f:
			for i, line in enumerate(f):
				if i == 1:
					APIKeyInLine = line.strip()
					if debugMode: print APIKeyInLine
		f.close()
		return APIKeyInLine
	else:
		if debugMode: print "no such file"

#request data status untuk melihat data perangkat yang on maupun yang off
def requestData(APIkey,attributeData): 
	urlKirim = 'http://api.geeknesia.com/api/attribute/rOn?api_key=' + APIkey
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varData = int(jsondata['output']['attribute'][attributeData])
	print ("sta : ")
	print (varData)
	return varData

#void setup()
#baca konfigurasi APIkey, dsb
if debugMode: print('mulai')
APIkey = readConf('nitbot-iotConf.txt')

#void loop()
while True :
	sleep(2)
	print ("??")
	urlKirim = 'http://api.geeknesia.com/api/data?api_key=' + APIkey + '&attributes={%22wSuhu%22:' + str(varSuhu) + ',%22wKelembapan%22:' + str(varKelembapan) + ',%22rOn%22:' + str(varStatus) + ',%22wOn%22:' + str(varReset) +'}'
	f=urllib2.urlopen(urlKirim)
	print f.read()
	datakuwh = requestData(APIkey,'rOn')
	varSetByte(datakuwh)
	print ("==")
