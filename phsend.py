import requests #send data ke server
import serial #baca dari usb

url ="http://192.168.100.199/PH/RESTapi.php"
seru0 = serial.Serial('/dev/ttyUSB0')

i=1
while i<2:
    dataph = 'error'
    if(seru0.in_waiting > 0):
        dataph = seru0.readline().decode('utf-8')      
        i+=1
        respon=requests.post(url,data={'ph':dataph})   
print(respon.text)
