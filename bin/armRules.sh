#!/bin/bash
sudo sed -i 's/alert/reject/g' /etc/snort/rules/SecofThings.rules
sudo sed -i 's/noreject/noalert/g' /etc/snort/rules/SecofThings.rules

