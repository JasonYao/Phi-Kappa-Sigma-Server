# Phi Kappa Sigma: Delta Phi Chapter Server
By Jason Yao

## Description
This repository is an umbrella repository for all services run on the on server for all member of
the Phi Kappa Sigma, Delta Phi Chapter at New York University.

The goal of this repository is the ability to quickly download and deploy on a fresh server, as all 
hard issues due to configuration have been dealt with, automated, and/or implemented folllowing 
current best practices.

## Setup
Create a directory to house all services, and download this file onto the fresh server

```sh
sudo mkdir /server
sudo chown -R YOUR_USERNAME_HERE:www-data # Must have installed nginx first
sudo chown -R 664 /server
cd /server
git clone --recursive https://github.com/JasonYao/Phi-Kappa-Sigma-Server.git .
git submodule update --remote
```

## What's in this repo

### [Automatic TLS certificate generation](letsEncrypt/)
This module will automatically generate a strong TLS certificate every 30 days, and automatically
deploy it live as well.

### [Webserver](nginx/)
This module contains the configurations and settinsg for [nginx](http://nginx.org/en/), a reverse 
proxy server. Specifically, this server will serve all static content that is cached to users when 
available, decreasing the number of requests that even reach the [application layer](skullhouse)

### [Website](skullhouse/)
This module contains the actual site itself, including all dependencies, static files, and configurations. 
The site currently runs off of the PHP-based laravel, though the roadmap is to migrate to [django](https://www.djangoproject.com/) 
for longer-term code stability and less code-staling.

### [Automatic Bobst Study Room Reservation](room_automator/)
This module contains the study room automator, to reserve rooms at Bobst Library at New York University
automatically for the chapter.

### [Automatic Chapter Minutes Emailer](minutes_emailer/)
This module contains the chapter minutes emailer, to automatically send an email to all active brothers 
a link to the current minutes.

## License
This repo is licensed under the GNU GPL v2 License, a copy of which may be found [here](LICENSE)
