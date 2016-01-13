# NGINX Section
By Jason Yao

## Description
The nginx reverse proxy will serve the satic content from the site directly, without the need to reach the application layer unless the cache object is stale.

## Setup
The setup is broken into two parts: setting up the nginx server itself, and then symlinking all the configuration files into their proper place.

### Nginx server setup

1.) Go to your home directory

```sh
cd ~
```

2.) Update & upgrade aptitude & `wget`

```sh
sudo apt-get update
sudo apt-get dist-upgrade
sudo apt-get install wget -y
```

3.) Download & install nginx's [signing key](http://nginx.org/keys/nginx_signing.key)

```sh
wget http://nginx.org/keys/nginx_signing.key
sudo apt-key add nginx_signing.key
```

4.) Add the official nginx mainline repos, where [codename](http://nginx.org/en/linux_packages.html#distributions) is to be replaced by the version of ubuntu

```sh
sudo nano /etc/apt/sources.list # This wil open up the nano editor
# Scroll down to the very bottom (or hit CTRL + v a couple times)
deb http://nginx.org/packages/mainline/ubuntu/ codename nginx
deb-src http://nginx.org/packages/mainline/ubuntu/ codename nginx
CTRL + x # Saves the changes made, same with the next two lines
y
ENTER
```

NOTE: To find out which version of linux you are running, just type in `lsb_release -a`

E.g.: for Ubuntu 15.10, we go to the site [here](http://nginx.org/en/linux_packages.html#distributions), and see that we need to replace `codename` with `wily`

```sh
sudo nano /etc/apt/sources.list # This wil open up the nano editor
# Scroll down to the very bottom (or hit CTRL + v a couple times)
deb http://nginx.org/packages/mainline/ubuntu/ wily nginx
deb-src http://nginx.org/packages/mainline/ubuntu/ wily nginx
CTRL + x # Saves the changes made, same with the next two lines
y
ENTER
```

Update & install the latest nginx mainline version

```sh
sudo apt-get update
sudo apt-get dist-upgrade
sudo apt-get install nginx
```
 
### Setting up the configuration files
Make a backup:

```sh
sudo cp /etc/nginx/nginx.conf /etc/nginx/nginx.conf.backup
```

Symlink the [nginx configuration file](nginx.conf) to `/etc/nginx/nginx.conf`:

```sh
sudo ln -s /server/nginx/nginx.conf /etc/nginx/nginx.conf
```

Symlink the [server file](skullhouseMaster) to `/etc/nginx/sites-available`:

```sh
sudo ln -s /server/nginx/skullhouseMaster /etc/nginx/sites-available/skullhouseMaster
```

Symlink the symlink in `/etc/nginx/sites-available` to `/etc/nginx/sites-enabled`:

```sh
sudo ln -s /etc/nginx/sites-available/skullhouseMaster /etc/nginx/sites-enabled/skullhouseMaster
```

## Running

Start:

```sh
sudo service nginx start
```

Stop:

```sh
sudo service nginx stop
```

Restart:

```sh
sudo service nginx restart
```

## Checking log files
Access and error logs will be written to disk, respectively at `/var/log/nginx/access.log` and `/var/log/nginx/error.log`.
You'll need `sudo` privileges to go into the `/var/log/nginx` folder.

To check the last 10 entries quickly:

- The access log:

	- `sudo tail /var/log/nginx/access.log`

- The error log:

	- `sudo tail /var/log/nginx/error.log`

To check the last k entries, where k is a positive integer value:

- The access log:

	- `sudo tail -n k /var/log/nginx/access.log`

	- E.g.: `sudo tail -n 50 /var/log/nginx/access.log` # Will print the last 50 entries in the access log file

- The error log:

	- `sudo tail -n k /var/log/nginx/error.log`

	- E.g.: `sudo tail -n 50 /var/log/nginx/error.log` # Will print the last 50 entries in the error log file
