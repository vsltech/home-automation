#!/usr/bin/env python
from email.mime.text import MIMEText
from email.mime.application import MIMEApplication
from email.mime.multipart import MIMEMultipart
from smtplib import SMTP
import smtplib
import sys


recipients = ['vslcreations007@gmail.com','er.vishaladitya.tech@gmail.com'] 
emaillist = [elem.strip().split(',') for elem in recipients]
msg = MIMEMultipart()
msg['Subject'] = "IoT Security Breach"
msg['From'] = 'vslcreations007@gmail.com'
msg['Reply-to'] = 'er.vishaladitya@gmail.com'
 
msg.preamble = 'Multipart massage.\n'
 
part = MIMEText("Hi, please find the victim attached!")
msg.attach(part)
 
part = MIMEApplication(open(str("image.jpg"),"rb").read())
part.add_header('Content-Disposition', 'attachment', filename="image.jpg")
msg.attach(part)
 

server = smtplib.SMTP("smtp.gmail.com:587")
server.ehlo()
server.starttls()
server.login("vslcreations007@gmail.com", "hiiamcool9")
 
server.sendmail(msg['From'], emaillist , msg.as_string())
print "Mail Sent!"
