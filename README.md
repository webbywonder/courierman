# Courier Management Portal [Laravel]
<img src="http://unmaintained.tech/badge.svg">

## Prerequisites
* Git (Others) or GitBash (Windows)
* PHP > 7.1.3
* PHP Extensions [OPENSSL, PDO, MBSTRING, TOKENIZER, JSON, CURL, XML, FILEINFO]
* [Composer](https://getcomposer.org/)
* [NodeJS](https://nodejs.org/en/)
* [Visual Studio Code](https://code.visualstudio.com/)

## Cloning
```
git clone https://github.com/webgeeks-in/courierman.git
cd courierman
```

## Set Environment Variables
```bash
cp .env.example .env

# Update following variables in .env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=courierman
DB_USERNAME=root
DB_PASSWORD=
```

## Directory Permissions (Except Windows)
* `bootstrap/cache/` Required permission: 0775
* `storage/` Required permission: 0775
* `storage/app/` Required permission: 0775
* `storage/framework/` Required permission: 0775
* `storage/logs/` Required permission: 0775
```bash
chmod -R 0777 storage/
chmod -R 0777 bootstrap/cache
```

## Installing Composer & Node Dependencies
```
composer install
npm i
```

## Run Migration & Seeder
```bash
php artisan migrate
php artisan db:seed
```
Specific migration and seeder
```bash
php artisan migrate:refresh --path=/database/migrations/file_name
php artisan db:seed --class=UsersTableSeeder
```

## Generate APP Key & Link Storage
```bash
php artisan key:generate
php artisan storage:link
```

## Compile Assets
```bash
npm run dev
```

## Start the Engine
Tighten up the seatbelt and You're ready to ride...
```
php artisan serve
```

## Docker Fans
This application can be also run on docker
-- Development Friendly <br/>
-- Not for Production

### PreRequisites
* [Docker Desktop](https://www.docker.com/products/docker-desktop)
* MySQL Workbench or Any Native MYSQL Tools except PHPMYADMIN

### Play Commands
```bash
# Start containers in background
$ docker-compose up -d

# Stop containers
$ docker-compose kill

# Force rebuild of Dockerfiles
$ docker-compose up -d --build

# See list of running containers
$ docker ps

# Dive inside container (Example : cms_app)
$ docker exec -ti [CONTAINER ID] bash

# Remove dangling/untagged images
$ docker images -q --filter dangling=true | xargs docker rmi

# Remove stopped containers
$ docker ps -aq --no-trunc -f status=exited | xargs docker rm
```

### Access App
http://127.0.0.1:8080/admin/login

### Access DB
```
Server : 127.0.0.1
User : root
Password : mysql
Port : 33061
```

## Screenshots
<img src="files/media/screenshot-3.png">
<img src="files/media/screenshot.png">
<img src="files/media/screenshot-2.png">

That's all Folks. Enjoy.
