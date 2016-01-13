#!/usr/bin/env bash

set -e

# Goes into the folder
cd /usr/share/nginx/html/SkullhouseNYU/letsEncrypt/build/

# Runs the automatic TLS certification generation command
./letsencrypt-auto --config /etc/letsencrypt/cli.ini --agree-tos certonly > ../logs/letsEncrypt-$(date +"%d-%m-%y").log
