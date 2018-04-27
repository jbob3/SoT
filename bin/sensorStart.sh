#!/bin/bash
#Startup script for snort
sudo snort -s -D -c /etc/snort/snort.conf -i eth0
                   
