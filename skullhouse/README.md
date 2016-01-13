# [Skullhouse NYU Website](https://www.skullhouse.nyc)
By Jason Yao

## Description
Updated at the start of: *Spring 2016*

Online site for Phi Kappa Sigma's Delta Phi (New York University) chapter at https://www.skullhouse.nyc.

This site utilises the [Laravel framework](https://laravel.com/) as the underlying backend server.

## Dependency installations

```sh
sudo composer install
```

## Upkeep
This section is for the future omegas from Delta Phi, who would need to update the site later on.

### Initial housecleaning
Updates composer, update & upgrade package dependencies, flush caches, recompile routes, and cache everything again

```sh
sudo composer self-update
sudo composer update
```

### Updating Events
Retains modularity by allowing quick "hot-swapping" of events
```sh
cd resources/views/public/events
nano events.blade.php
# Replace fall2015 in the include line with whatever semester it is.
# CTRL + x + y to save your changes
```

Copies boiler plate of events for you to edit (replace YOUR_SEMESTER_HERE with whichever semester's events it is)
```sh
cp fall2015.blade.php YOUR_SEMESTER_HERE.blade.php
nano YOUR_SEMESTER_HERE.blade.php
# Your events here
# CTRL + x + y to save your changes
```

### Updating the initiation class options

```sh
cd resources/views/private
nano profileUpdate.blade.php # Again, doesn't matter which editor you use
# Scroll down until you get to the initiation class options, and then add the option
# e.g. currently latest initation class will be lambda, so scroll until lambda class option, and press enter for a new line
# Add the latest initiation class (e.g. after lambda it's Mu class)
# CTRL + x + y to save your changes
```

### Updating the brothers page

```sh
cd resources/views/public/brothers
nano dynamic.blade.php
# At the end, before the `</div>` tag, add underneath the other classes `@include('public.brothers.classes.CURRENT_INITIATION_CLASS_HERE')`
CTRL + x + y # Save your changes
cd classes
cp kappa.blade.php CURRENT_INITIATION_CLASS_HERE.blade.php
nano CURRENT_INITIATION_CLASS_HERE.blade.php
# Make your roster changes here, the template is pretty easy to follow and change
CTRL + x + y # Save your changes
```
