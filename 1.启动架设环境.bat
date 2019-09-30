:######################################################################## 
:# File name: server_start.bat
:# Edited Last By: Mike Gleaves (ric) 
:# V 1.0 1-10-2008
:# Comment: Run multi-Apache servers on same PC. Apache 2.2.9 core
:# MODIFIED BY NOVO @takeoyasha.com (c)2009
:######################################################################## 

@echo off

rem ## Save return path
pushd %~dp0

rem ## Check to see if already stopped
if NOT exist ROEmulator\usr\local\apache2\logs\httpd.pid goto :NOTSTARTED

rem ## It exists is it running
SET /P pid=<ROEmulator\usr\local\apache2\logs\httpd.pid
netstat -anop tcp | FIND /I " %pid%" >NUL
IF ERRORLEVEL 1 goto :NOTRUNNING
IF ERRORLEVEL 0 goto :RUNNING

:NOTRUNNING
rem ## Not shutdown using server_stop.bat hence delete file
del ROEmulator\usr\local\apache2\logs\httpd.pid
del ROEmulator\usr\local\mysql\data\mysql_mini.pid 

:NOTSTARTED
set pass1=found
set pass2=found
rem ## Check for another server on this Apache port
netstat -anp tcp | FIND /I "0.0.0.0:8096" >NUL
IF ERRORLEVEL 1 set pass1=notfound

rem ## Check for another server on this MySQL port
netstat -anp tcp | FIND /I "0.0.0.0:3306" >NUL
IF ERRORLEVEL 1 set pass2=notfound

if %pass1%==notfound if %pass2%==notfound goto NOTFOUND
echo.
echo  Both ports need to be free in order to run the servers
if %pass1%==notfound echo  Port 8096 is free - OK to run Apache server
if %pass1%==found echo  Another server is running on port 8096 cannot run Apache server
if %pass2%==notfound echo  Port 3306 is free - OK to run MySQL server
if %pass2%==found echo  Another server is running on port 3306 cannot run MySQL server
echo.
goto END

:NOTFOUND
echo.
echo  Apache �˿� 8096 ���� - �����������з�����
echo  MySQL  �˿� 3306 ���� - �����������з�����
echo.
rem ## Find first free drive letter
for %%a in (C D E F G H I J K L M N O P Q R S T U V W X Y Z) do CD %%a: 1>> nul 2>&1 & if errorlevel 1 set freedrive=%%a

rem ## Use batch file drive parameter if included else use freedrive
set Disk=%1
if "%Disk%"=="" set Disk=%freedrive%

rem ## To force a drive letter, remove "rem" and change drive leter
rem set Disk=w

rem ## Having decided which drive letter to use create the disk
subst %Disk%: "ROEmulator"

rem ## Save drive letter to file. Used by stop bat 
(set /p dummy=%Disk%) >ROEmulator\usr\local\apache2\logs\drive.txt <nul

rem ## Set variable paths
set apachepath=\usr\local\apache2\
set apacheit=%Disk%:%apachepath%bin\Apache_16.exe -f %apachepath%conf\httpd.conf -d %apachepath%.

rem ## Start Apache server
%Disk%:
start %Disk%:\home\admin\program\uniserv.exe "%apacheit%" 

rem ## Start MySQL server
start /MIN \usr\local\mysql\bin\mysqld-opt.exe --defaults-file=/usr/local/mysql/my.cnf

rem ### Wait for Apache to start
echo  Apache ���������������� ...
:next
home\admin\program\unidelay.exe
if NOT exist usr\local\apache2\logs\httpd.pid goto :next

rem ### Wait for MySQL to start
echo  MySQL  ���������������� ...
:next2
home\admin\program\unidelay.exe
if NOT exist usr\local\mysql\data\mysql_mini.pid goto :next2

echo.
echo  Apache �������Ѿ������ڴ��� %Disk%:\  [�˿� 8096] [http://127.0.0.1:8096]
echo  MySQL  �������Ѿ������ڴ��� %Disk%:\  [�˿� 3306]
echo.
goto :END

:RUNNING
echo  ���軷���������������� ...
echo  ����ر���ʹ�á��رռ��軷��.bat��

echo.

:END
echo.
echo  ���軷���Ѿ�����������
ping 127.0.0.1 -n 5 >nul
rem ## Return to caller
popd