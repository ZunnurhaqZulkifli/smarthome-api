import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(18, GPIO.OUT)

def init():
    GPIO.output(18, GPIO.LOW)
    print("The Lights is on")

init()