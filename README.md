# Home/Office Automation- IoT Project
# Demo: https://youtu.be/bAPScgdsz3g
# Features:
</br>
1. Display Door Status over web-interface.</br>
2. Turn Lights/Fans on whenever human enters in room.</br>
3. Capture image & mail to registered email whenever someone breaks into house.</br>
4. Trigger alarm whenever smoke/gas leak is sensed.</br>
5. Sends signal whenever garden/plant is dry to web-interface.</br>
6. Count number of person enter/exit in the room.

# Modules: </br>
Relay Switch to control AC appliances using web-interface or python</br>
H.O.D.O.R- Web Interface</br>
security- Capture image and send mail whenever Ultrasonic Sensor is triggered</br>
tempgraph- updatetemperature.py updates database using cron-job for a time-interval & index.html shows the plot</br>
doorstatus.py- Displays the status of door OPEN/CLOSE</br>
ldrcount.py- Finds total count whenever person cross the LASER-LDR connection</br>
ultrasonic.py- Returns distance in real-time</br>
smoke.py- Detects smoke</br>

Read full tutorial here:https://vslcreations.blogspot.in/2016/11/hodor-homeoffice-automation-raspberry.html
</br></br>
Source Code: Inspired & Coded from various sites! Credits given in the comments of source code!</br>
Web Design/UI Credits: https://github.com/reeversedev/H.O.D.O.R
