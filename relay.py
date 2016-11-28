import RPi.GPIO as GPIO                    
import time,os

GPIO.setmode(GPIO.BCM)                     
l1=26
f2=5
f1=19
l2=6

GPIO.setup(l1,GPIO.OUT)
GPIO.output(l1,True)
GPIO.setup(f1,GPIO.OUT)
GPIO.output(f1,True)
GPIO.setup(l2,GPIO.OUT)
GPIO.output(l2,True)
GPIO.setup(f2,GPIO.OUT)
GPIO.output(f2,True)
