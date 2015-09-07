#!/bin/bash -e

# Goes into the folder
cd /usr/share/nginx/html/SkullhouseNYU/skullhouse/

# Runs the rollback for the last migration only (the reservation user one), and drops the reservation_users table
php artisan migrate:rollback

# Runs the migration again to set the table back up
php artisan migrate

# Posts a status message to the log file
cd /usr/share/nginx/html/SkullhouseNYU/log/

echo "User logins deleted: "$(date +"%d-%m-%y") > userLogins.status
