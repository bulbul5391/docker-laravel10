<p align="center"> <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a> 
<a href="https://www.docker.com/" target="_blank"><img src="https://bdprescription.com/docker/docker-logo.png" width="400" alt="Docker Logo"></a>
<a href="https://packagist.org/packages/pusher/pusher-php-server" target="_blank"><img src="https://pusher.com/static/pusher-logo-0576fd4af5c38706f96f632235f3124a.svg" width="400" alt="Pusher Logo"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## What is Docker?

Docker is an open source platform for building, deploying, and managing containerized applications. Docker is an open source platform that enables developers to build, deploy, run, update and manage containers—standardized, executable components that combine application source code with the operating system (OS) libraries and dependencies required to run that code in any environment.

## Comparing Docker containers with virtual machines

Containers, or Linux Containers, are a technology that allows us to isolate certain kernel processes and trick them into thinking they're the only ones running in a completely new computer.

Different from Virtual Machines, a container can share the kernel of the operating system while only having their different binaries/libraries loaded with them.

In other words, you don't need to have whole different OS (called guest OS) installed inside your host OS. You can have several containers running within a single OS without having several different guest OS's installed.

<p align="center">
    <img src="https://bdprescription.com/docker/01.png">
</p>

## Broadcasting In Laravel / Push Notification
Run composer require pusher/pusher-php-server

Update in .env file

BROADCAST_DRIVER=pusher

PUSHER_APP_ID=1639448
PUSHER_APP_KEY=71f3c69486b58d4144f9
PUSHER_APP_SECRET=24781b35222b0fc5549d
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=ap2

Run php artisan make:event MessageNotification

Look app/Events/MessageNotification file

Enable App\Providers\BroadcastServiceProvider::class, from providers section of app.php file.

Or you can clone pusher branch for source code.
git clone --branch pusher --single-branch https://github.com/bulbul5391/docker-laravel10.git

## Install Laravel Echo

[Laravel Echo](https://laravel.com/docs/10.x/broadcasting#client-pusher-channels) is a JavaScript library that makes it painless to subscribe to channels and listen for events broadcast by your server-side broadcasting driver. You may install Echo via the NPM package manager. In this example, we will also install the pusher-js package.

If get bash: npm: command not found. Copy and past in your docker file.

#Install nodejs
RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y nodejs \
    npm
RUN echo "Node: " && node -v
RUN echo "NPM: " && npm -v

npm install pusher-js laravel-echo --save

composer require laravel/ui

php artisan ui vue


##  Test Push Notification

Run Command
docker-compose up


