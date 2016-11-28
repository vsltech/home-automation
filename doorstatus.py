import RPi.GPIO as GPIO                    
import time

GPIO.cleanup()
GPIO.setmode(GPIO.BCM)                     
pin = 4
GPIO.setup(pin,GPIO.IN)
prev_input=0
try:
    while True:
        inp = GPIO.input(pin)
        if((not prev_input) and inp):
            print "DOOR CLOSED"
        else:
            print "DOOR OPEN"
        prev_input = inp
        time.sleep(1)
finally:
    GPIO.cleanup()
