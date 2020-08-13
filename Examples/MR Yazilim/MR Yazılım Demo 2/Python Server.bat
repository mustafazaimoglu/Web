ECHO OFF
cls

ECHO **** MKZ PYTHON SERVER ****
ipconfig

ECHO.
SET /P IP= Please Enter Your Local IP Address :
cls


ECHO **** MKZ PYTHON SERVER ****
python -m http.server 8000 --bind %IP%


