#!/bin/bash -e

# Goes into the folder
cd /usr/share/nginx/html/SkullhouseNYU/skullhouse/

# Runs the rollback for the last migration only (the reservation user one), and drops the reservation_users table
php artisan migrate:rollback

# Runs the migration again to set the table back up
php artisan migrate
