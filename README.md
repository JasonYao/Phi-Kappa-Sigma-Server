# Phi Kappa Sigma: Delta Phi Chapter Server
By Jason Yao

## Description
This repository is an umbrella repository for all services run on the on server for all member of
the Phi Kappa Sigma, Delta Phi Chapter at New York University.

The goal of this repository is the ability to quickly download and deploy, given pre-configured
configurations of services following best practices.

## What in this repo

### [Automatic TLS certificate generation](letsEncrypt/)
This portion will automatically generate a strong TLS certificate every 30 days, and automatically
deploy it live as well.

### [Webserver](nginx/)
This portion relates to the setup of a reverse proxy server known as [nginx](http://nginx.org/en/).
Specifically, this server will serve all static content that is cached to users when available, 
decreasing the amount of hit to the application layer.

### [Website](skullhouse/)
This portion relates to the actual site itself, containing everything related to the website and its 
upkeep. The site currently runs off of the PHP-based laravel, though the roadmap is to migrate to
django for longer-term stability in the long run.

## License
This repo is licensed under the GNU GPL v2 License, a copy of which may be found [here](LICENSE)
