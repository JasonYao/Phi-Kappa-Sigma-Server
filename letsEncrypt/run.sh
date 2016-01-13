#!/bin/bash -e

# Goes into the folder
cd /usr/share/nginx/html/SkullhouseNYU/letsEncrypt/build/

# Runs the automatic TLS certification generation command
./letsencrypt-auto --config /etc/letsencrypt/cli.ini --agree-tos certonly > ../logs/letsEncrypt-$(date +"%d-%m-%y").log

# Sends an email to the omega about the status of the certificate update
