import RPi.GPIO as GPIO
import dht11
import time
import datetime
import MySQLdb



# initialize GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.cleanup()

# read data using pin 14
instance = dht11.DHT11(pin=6)

db = MySQLdb.connect("localhost","root","vslcreations.com","temperature")
curs = db.cursor()
tmp = 0
hum = 0
while True:
    result = instance.read()
    if result.is_valid():
        print("Last valid input: " + str(datetime.datetime.now()))
        print("Temperature: %d C" % result.temperature)
        print("Humidity: %d %%" % result.humidity)
        date = datetime.datetime.now().date()
        tme = datetime.datetime.now().time()
        zone = 'ROOM'
        tmp = int(result.temperature)
        hum= int(result.humidity)
        curs.execute("""INSERT INTO tempdata(tdate,ttime,zone,temperature,humidity)
            VALUES(%s,%s,%s,%s,%s)""",(date,tme,zone,tmp,hum))
        db.commit()
        print "Data Inserted"
        
    time.sleep(1)
    
