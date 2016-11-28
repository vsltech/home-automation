import RPi.GPIO as GPIO                    
import time,os
import picamera

GPIO.setmode(GPIO.BCM)                     
TRIG = 23                                
ECHO = 24                                 

print "Distance measurement in progress"

GPIO.setup(TRIG,GPIO.OUT)                  
GPIO.setup(ECHO,GPIO.IN)                   

while True:

  GPIO.output(TRIG, False)                 
  print "Waitng For Sensor To Settle"
  time.sleep(2)                           

  GPIO.output(TRIG, True)                  
  time.sleep(0.00001)                     
  GPIO.output(TRIG, False)                

  while GPIO.input(ECHO)==0:              
    pulse_start = time.time()             
  while GPIO.input(ECHO)==1:              
    pulse_end = time.time()              
  pulse_duration = pulse_end - pulse_start 
  distance = pulse_duration * 17150       
  distance = round(distance, 2)           

  if distance > 2 and distance <20:      
    print "Distance:",distance - 0.5,"cm"
    os.system('mpg321 horn.mp3 -q &')
    camera = picamera.PiCamera()
    camera.capture('image.jpg')
    #os.system("sendmail.py 1")
  else:
    print "Out Of Range"
    
