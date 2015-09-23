# [Skullhouse NYU Website](https://www.skullhouse.nyc)
By Jason Yao

## Description

Updated at the start of: *Fall 2015*

Online site for Phi Kappa Sigma's Delta Phi (New York University) chapter at https://www.skullhouse.nyc.

## What to edit every time

Go to `/usr/share/nginx/html/SkullhouseNYU/skullhouse` using the command `cd /usr/share/nginx/html/SkullhouseNYU/skullhouse`

Update shit with these two commands

```
sudo composer self-update # Will update the composer version
sudo composer update # Will update the package dependencies, flush caches, recompile routes, and cache everything again
```

## Specifically, what & how to edit every semester

1.) Update the events page.

All commands below assume you are in the skullhouse subfolder from the commands above
```
cd resources/views/public/events # Moves you into the events directory
nano events.blade.php # Or whatever editor you'd like, vim is good if you know how to use it
# Replace fall2015 in the include line with whatever semester it is.
# CTRL + x + y to save your changes
cp fall2015.blade.php YOUR_SEMESTER_HERE.blade.php # Copies boiler plate of events for you to edit
nano YOUR_SEMESTER_HERE.blade.php
# Your events here
# CTRL + x + y to save your changes
```

2.) Update the options available for initiation class

```
cd /usr/share/nginx/html/SkullhouseNYU/skullhouse/resources/views/private/ # To reset from wherever the hell you are
nano profileUpdate.blade.php # Again, doesn't matter which editor you use
# Scroll down until you get to the initiation class options, and then add the option
# e.g. currently latest initation class will be lambda, so scroll until lambda class option, and press enter for a new line
# Add the latest initiation class (e.g. after lambda it's Mu class)
# CTRL + x + y to save your changes
```

3.) Update the brothers page with the current initiation class

```
cd /usr/share/nginx/html/SkullhouseNYU/skullhouse/resources/views/public/brothers
nano dynamic.blade.php
# At the end, before the `</div>` tag, add underneath the other classes `@include('public.brothers.classes.CURRENT_INITIATION_CLASS_HERE')`
CTRL + x + y # Save your changes
cd classes
cp kappa.blade.php CURRENT_INITIATION_CLASS_HERE.blade.php
nano CURRENT_INITIATION_CLASS_HERE.blade.php
# Make your roster changes here, the template is pretty easy to follow and change
CTRL + x + y # Save your changes
```

## Technical stuff

### The overall stack

Ignore unless you want to understand the underlying architecture of the server. If just updating for a new semester, go to the above sections.

### The LEMP stack (part 1 of 3)

The underlying stack for the server is a LEMP (*L*inux *N*ginx *M*ySQL *P*HP).

Linux: Self-explanatory, it's an open sourced server running on an x86_64 Ubuntu server running 14.04 LTS. When the next version of the LTS is released by the Ubuntu Foundation (16.04), this server's stack
 will be migrated over to the new server.

Nginx: An exceedingly fast, robust, secure, scalable, and easy to use reverse proxy server. The magic happens in the [nginx folder](nginx/), inside which there is the [configuration file](nginx/nginx.conf),
 along with the [server file](nginx/skullhouseMaster). Both of these files are symlinked, with the conf file symlinked to `/etc/nginx`, and the server file symlinked to
 `/etc/nginx/sites-available`. This file is then symlinked to `/etc/nginx/sites-enabled`, thus activating the server file.

MySQL: A scalable database that gets shit on for not being bleeding edge, but is definitely more than enough for our simple use cases.

PHP: A terrible language that should die in the fire. Do not approach with a 10 foot pole. Chosen because of fast development time, and for no other reason.

### The Laravel application (part 2 of 3)

The application framework lying on top of the LEMP stack is the [laravel framework](http://laravel.com/), and as of 6th September 2015, that version of laravel is 5.1.

### The custom code on top (part 3 of 3)

The custom code is quite simple, and can be broken down into 4 sections: the database, the routes (i.e. any URI that we take in with a base URI of skullhouse.nyc), the controllers, and the views.
This application follows the [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) ideal.

#### The database

The database used in this application is a simple MySQL relational DB. Manual check ups on the DB can be made with `mysql -u root -p`, and then typing in the admin password.
myPhpAdmin was disallowed access to this application due to the inherent security risks in allowing access, even indirectly through MPA, to the outside world.

DO NOT under any circumstances change this, without considering the security ramifications of opening a public access to the database.

#### The routes

Routing is located in the [/usr/share/nginx/html/SkullhouseNYU/skullhouse/app/Http/routes.php](skullhouse/app/Http/routes.php) file. This gives you an overview of every single
URI that the application responds to, and is a great tool to check over in order to get a birds-eye-view of the application itself.

#### The controllers

This is where the magic happends for validations and any other backend logic. Controllers deal with validation and sanitation of any and all user input - 
*IF YOU ARE PLANNING ON ADDING MORE USER INPUT FORMS FOR THE LOVE OF ALL THAT IS HOLY SANITISE IT*.

#### The views

This shows stuff to the end user. Error messages can be flashed to the viewing by

```
	\Session::flash('flashMessage', 'Profile successfully updated!'); // Replace Profile successfully updated! with whatever message you'd like to flash to the user
	return redirect('dashboard'); // Replace dashboard with whatever page you'd like to redirect the user to
```

#### The Model

Data storage, can be thought of as an object bank that you retrieve data and attributes from.

## Licensing

Licensing for this repo follows the GNU GPU license, as described [here](LICENSE).
