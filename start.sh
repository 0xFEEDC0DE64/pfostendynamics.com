#!/bin/bash
#1=localhost, 2=local ip, so you can open on smartphone to test
MODE=$1
USERNAME="ccomm"
if [ -z "$MODE" ]
then
echo "Error: Pass argument"
exit
fi
GETIP=$(ip addr | grep 'state UP' -A2 | tail -n1 | awk '{print $2}' | cut -f1  -d'/')
if [[ "$MODE" -eq 1 ]]
then
    IP="localhost:80"
    TAB="http://localhost/"
    fi

if [[ "$MODE" -eq 2 ]]
then
    IP="$GETIP:80"
    TAB="http://$GETIP"
    fi

printf 'Starting webserver for ' 
printf "${PWD##*/}"
printf ' ...\n'
echo $GETIP
su "$USERNAME" -c "firefox --new-tab $TAB"
sudo php -S $IP:80
cd ~
