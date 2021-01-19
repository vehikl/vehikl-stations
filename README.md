## Purpose 

The Vehikl stations web client provides a dashboard in which Vehikl Developers can see the statuses of all the anydesks.
It also provides api endpoints for the anydesks to communicate towards.

## Requirements

- Node version >= 14
- PHP 7.4
- Vagrant

## Setup Instructions

- `npm install && composer install`
- `npm run dev`

- Setup Homestead
  - `./vendor/bin/homestead make`
  - Update site mapping and database name
  
- Configure /etc/hosts to map out IP for site
    
- `vagrant up`
