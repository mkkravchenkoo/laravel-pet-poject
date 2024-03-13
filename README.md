## create admin:  
```bash
./vendor/bin/sail artisan app:create-admin
```
## Domains  
http://localhost:8080/  
http://localhost:8025/  
http://localhost:8080/

## Items to review
- **config fields** - admin
- **menu** - admin, db, backend
- mailPit


## features:  
#### Independent main slider component

Agenda
- html/css get from here https://www.free-css.com/free-css-templates/page291/carserv

- laravel
  - website and admin part

First part - website
1 - pages
    - home page
        -header
            - texts, menu
        - slider
        - services
        - info
        - experts
        - booking form - 
        - text block
        - footer
    - all services
    - simple pages (about)

Second part - Admin
- auth - breeze (refactor, remove register) .  cli - ./vendor/bin/sail artisan app:create-admin
- dahsboard - header is from breeze (refactored)
- nested menu - JSON - CRUD
- slider - separate entity
- here is CRUD - page - just page with simple fields - added TINY MC
- services - CRUD
- team - reference to service
- config


Code
I use laravel sail
cli command - CreateAdmin.php
send email - BookingController.php
email template - booking.blade.php
AppServiceProvider.php
Independent components - example MainSlider.php
helper - helpers.php
routes - web.php
