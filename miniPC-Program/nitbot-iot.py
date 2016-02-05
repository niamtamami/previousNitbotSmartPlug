#nitbot-iot by nitbot team
#tuliskan penjelasan program yang di buat

debugMode=False	#setting untuk menampilkan status eksekusi program

import httplib, urllib2
from os.path import exists
from sys import argv
from time import sleep
import json
from wiringx86 import GPIOGalileoGen2 as GPIO

APIkey=0	#deklarasi awal variabel APIKey sebelum ambil dari nitbot-iotConf.txt

Suhu = int(argv[1])
Kelembapan = int(argv[2])
ReadON=0					#8bit coil

#tidak lagi digunakan, karena deklarasi output harus bersama setting logic pda pin
def defineIO():
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
def checkThenSetByte(dataVar):
	gpio = GPIO(debug=False)                                            
	for x in range(0,8):
		if x==0: 
			pin=2                                                 
		elif x==1: 
			pin=3
		elif x==2:
			pin=4
		elif x==3:                                                              
			pin=5
		elif x==4:                                                              
			pin=6
		elif x==5:                                                              
			pin=13
		else:
			break
		
		gpio.pinMode(pin,gpio.OUTPUT) 
		if checkBit(dataVar,x)>0:
			print("on")
			gpio.digitalWrite(pin, gpio.HIGH)
			if pin==13:
				print('indikator on')
		else: 	
			print("off")
			gpio.digitalWrite(pin, gpio.LOW)
			if pin==13:                                                                                   
				print('indikator off')
	if debugMode:print("seharusnya setelah di set, disini dicek lagi benar2 on apa tidak")	    


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

#welcome
def welcome2internet():
	urlKirim = 'http://api.geeknesia.com/api/hello?api_key=' + APIkey                                                                               
	f=urllib2.urlopen(urlKirim)                                                                                                                     
	print f.read()

#request data status untuk melihat data perangkat yang on maupun yang off
def requestDataFromServer(APIkey,attributeData): 
	urlKirim = 'http://api.geeknesia.com/api/attribute/'+attributeData+'?api_key=' + APIkey
	f = urllib2.urlopen(urlKirim)
	jsondata = json.loads(f.read())
	varData = int(jsondata['output']['attribute'][attributeData])
	print ('status on/off :')
	print (varData)
	return varData

def sendData2Server(APIkey, Suhu, Kelembapan, ReadON):
	urlKirim = 'http://api.geeknesia.com/api/data?api_key=' + APIkey + '&attributes={%22suhu%22:' + str(Suhu) + ',%22kelembapan%22:' + str(Kelembapan) + ',%22readon%22:' + str(ReadON) +'}'
	f=urllib2.urlopen(urlKirim)
	print f.read()

#void setup()
#baca konfigurasi APIkey, dsb
if debugMode: 
	print('mulai')

APIkey = readConf('/media/card/nitbot-iot/nitbot-iotConf.txt')                                                                                
welcome2internet()  
print('cek koneksi 1')
sendData2Server(APIkey, Suhu, Kelembapan, ReadON)
print('cek koneksi 2')
sendData2Server(APIkey, Suhu, Kelembapan, ReadON)
print('cek koneksi 3')
sendData2Server(APIkey, Suhu, Kelembapan, ReadON)
print('cek koneksi 4')
sendData2Server(APIkey, Suhu, Kelembapan, ReadON)
print('cek koneksi 5')
sendData2Server(APIkey, Suhu, Kelembapan, ReadON)
                                                                                                                                              
ReadON=requestDataFromServer(APIkey,'readon')
sendData2Server(APIkey, Suhu, Kelembapan, ReadON)

gpio = GPIO(debug=False) 
gpio.pinMode(2,gpio.OUTPUT) 
gpio.pinMode(3,gpio.OUTPUT) 
gpio.pinMode(4,gpio.OUTPUT) 
gpio.pinMode(5,gpio.OUTPUT) 
gpio.pinMode(6,gpio.OUTPUT) 
gpio.pinMode(13,gpio.OUTPUT) 

#void loop()
while True :
	sleep(2)
	print('??')
	ReadON=requestDataFromServer(APIkey,'readon')
	dataVar=ReadON                                                                                                                
        for x in range(0,8):                                                                                                                    
                if x==0:                                                                                                                        
                        pin=2                                                                                                                   
                elif x==1:                                                                                                                      
                        pin=3                                                                                                                   
                elif x==2:                                                                                                                      
                        pin=4                                                                                                                   
                elif x==3:                                                                                                                      
                        pin=5                                                                                                                   
                elif x==4:                                                                                                                      
                        pin=6                                                                                                                   
                elif x==5:                                                                                                                      
                        pin=13                                                                                                                  
                else:                                                                                                                           
                        break                                                                                                                   
                                                                                                                                                
                                                                                                  
                if checkBit(dataVar,x)>0:                                                                                                       
                        print("on")                                                                                                             
                        gpio.digitalWrite(pin, gpio.HIGH)                                                                                       
                        if pin==13:                                                                                                             
                                print('indikator on')                                                                                           
                else:                                                                                                                           
                        print("off")                                                                                                            
                        gpio.digitalWrite(pin, gpio.LOW)                                                                                        
                        if pin==13:                                                                                                             
                                print('indikator off')
	#checkThenSetByte(ReadON)
	sendData2Server(APIkey, Suhu, Kelembapan, ReadON)
	print('==')
