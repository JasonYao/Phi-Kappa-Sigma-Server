#!/usr/bin/env bash

set -e

# Write out current crontab
crontab -l > tempCron

echo "0 0 1 * * /server/letsEncrypt/run.sh" >> tempCron

# Adds a newline character
echo  >> tempCron;

# Installs new cron file
crontab tempCron
rm tempCron