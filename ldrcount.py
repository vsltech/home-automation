#!/usr/local/bin/python

import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)
pin_to_circuit = 12
def rc_time (pin_to_circuit):
    count = 0
  
    #Output on the pin for 
    GPIO.setup(pin_to_circuit, GPIO.OUT)
    GPIO.output(pin_to_circuit, GPIO.LOW)
    time.sleep(0.1)

    #Change the pin back to input
    GPIO.setup(pin_to_circuit, GPIO.IN)
  
    #Count until the pin goes high
    while (GPIO.input(pin_to_circuit) == GPIO.LOW):
        count += 1

    return count

#Catch when script is interrupted, cleanup correctly
counter = 0
try:
    # Main loop
    while True:
        if(rc_time(pin_to_circuit) > 200):
            while True: #locking!
                if(rc_time(pin_to_circuit)<200):
                    break
                else:
                    pass    
            print "MOTION!"
            counter = counter + 1
except KeyboardInterrupt:
    pass
finally:
    print "\nTotal Count",counter
    GPIO.cleanup()
