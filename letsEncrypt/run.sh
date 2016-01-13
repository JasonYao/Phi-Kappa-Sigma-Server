#!/usr/bin/env bash

set -e

# Runs the program with the virtualenv
source /home/jason/Env/letsencrypt/bin/activate
python3 Emailer.py
deactivate
