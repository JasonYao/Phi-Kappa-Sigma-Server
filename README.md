# [Skullhouse NYU Website](https://www.skullhouse.nyc)
By Jason Yao

## Description

Updated at the start of: *Fall 2015*

Online site for Phi Kappa Sigma's Delta Phi (New York University) chapter at https://www.skullhouse.nyc.

### Technical shit

Ignore unless you want to understand the underlying architecture of the server. If just updating for a new semester, go here.



## What to edit every time

## [Specifically, what & how to edit every semester](#NewSemester)



## Technical shit

Ignore unless you want to understand the underlying architecture of the server. If just updating for a new semester, read the above sections.

### The overall stack

### The LEMP stack (part 1 of 3)

The underlying stack for the server is a LEMP (*L*inux *N*ginx *M*ySQL *P*HP).

Linux: Self-explainatory, it's an open sourced served running on an x86_64 Ubuntu server running 14.04 LTS. When the next version of the LTS is released by the Ubuntu Foundation (16.04), this server's stack
 will be migrated over to the new server.

Nginx: An exceedingly fast, robust, secure, scalable, and easy to use reverse proxy server. The magic happens in the [nginx folder](nginx/), inside which there is the [configuration file](nginx/nginx.conf),
 along with the [server file](nginx/skullhouseMaster). Both of these files are symlinked, with the conf file symlinked to `/etc/nginx`, and the server file symlinked to
 `/etc/nginx/sites-available`. This file is then symlinked to `/etc/nginx/sites-enabled`, thus activating the server file.

MySQL: A scalable database that gets shit on for not being bleeding edge, but is definitely more than enough for our simple use cases.

PHP: A shitty language that should die in the fire. Do not approach with a 10 foot pole. Chosen because of fast development time, and for no other reason.

### The Laravel application (part 2 of 3)

The application framework lying on top of the LEMP stack is the [laravel framework](http://laravel.com/), and as of 6th September 2015, that version of laravel is 5.1.

### The custom code on top (part 3 of 3)

The custom code is quite simple, and can be broken down into 4 sections: the database, the routes (i.e. any URI that we take in with a base URI of skullhouse.nyc), the controllers, and the views.
This application follows the [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) ideal.

#### The database

The database used in this application is a simple MySQL relational DB. Manual check ups on the DB can be made with `mysql -u root -p`, and then typing in the admin password.
myPhpAdmin was disallowed access to this application due to the inherent security risks in allowing access, even indirectly through MPA, to the outside world.

DO NOT under any circumstances change this, else I will shank you.

#### The routes

Routing is located in the `[/usr/share/nginx/html/SkullhouseNYU/skullhouse/app/Http/routes.php](skullhouse/app/Http/routes.php)` file. This gives you an overview of every single
URI that the application responds to, and is a great tool to check over in order to get a birds-eye-view of the application itself.

#### The controllers

This is where the magic happends for validations and any other backend logic. Normally controllers don't fill this niche, but I hate PHP, so I'm allowed to be lazy. Controllers
deal with validation and sanitation of any and all user input - *IF YOU ARE PLANNING ON ADDING MORE USER INPUT FORMS FOR THE LOVE OF ALL THAT IS HOLY SANITISE THAT SHIT*.

#### The views

This shows shit to the end user. Error messages can be flashed to the viewing by ```
	\Session::flash('flashMessage', 'Profile successfully updated!'); // Replace Profile successfully updated! with whatever message you'd like to flash to the user
	return redirect('dashboard'); // Replace dashboard with whatever page you'd like to redirect the user to
```

## Licensing

Licensing for this repo follows the GNU GPU license, as described [here](LICENSE.md).
