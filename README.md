<div class="text-center">
    <svg width="250" heigh="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 147.952 22.096">
        <path fill="#293fdf" transform="translate(-3.078 21.094)"  d="M5.922,0h0l4.125-16.281H3.078l1.172-4.8H22.906l-1.187,4.8h-6.75L10.906,0ZM22.3-1.625h0A3.978,3.978,0,0,0,25.641,0h1.781V-.016h1.75l.719-3.062A4.06,4.06,0,0,0,33.969,0h3.5V-.016h4.656l3.844-15.875H40.75L38.031-4.375H35.844a.789.789,0,0,1-.672-.312.862.862,0,0,1-.187-.7l2.563-10.5H32.422l-2.562,10.5a4.771,4.771,0,0,0-.141,1.016H27.5a.789.789,0,0,1-.672-.312.944.944,0,0,1-.187-.7l2.563-10.5H24.078l-2.562,10.5A4.344,4.344,0,0,0,22.3-1.625ZM44.141,0h0l3.938-15.969h5.156L49.359,0Zm4.266-17.344h0l.969-3.75h5.141l-.969,3.75Z"/>
        <path transform="translate(49.250 21.094)" d="M.906-1.625h0A3.978,3.978,0,0,0,4.25,0H6.031V-.016h1.75L8.5-3.078A4.06,4.06,0,0,0,12.578,0h3.5V-.016h4.656l3.844-15.875H19.359L16.641-4.375H14.453a.789.789,0,0,1-.672-.312.862.862,0,0,1-.187-.7l2.563-10.5H11.031L8.469-5.391a4.771,4.771,0,0,0-.141,1.016H6.109a.789.789,0,0,1-.672-.312.944.944,0,0,1-.187-.7l2.563-10.5H2.688L.125-5.391A4.344,4.344,0,0,0,.906-1.625ZM29.719-.078h0a18.239,18.239,0,0,0,2.688.047q5.828-.234,8.344-4.844a9.219,9.219,0,0,0,.563-7.453,5.75,5.75,0,0,0-1.8-2.461,6.568,6.568,0,0,0-3.5-1.133,20.944,20.944,0,0,0-2.8-.031,9.054,9.054,0,0,0-8.187,4.8A9.223,9.223,0,0,0,24.469-3.7a5.419,5.419,0,0,0,1.766,2.422A7.406,7.406,0,0,0,29.719-.078Zm5.406-5.312h0a6.185,6.185,0,0,1-3.812.8q-3.281-.266-2.2-3.812a4.235,4.235,0,0,1,1.547-2.234,6.044,6.044,0,0,1,3.813-.8q1.781.156,2.234,1.094a4.007,4.007,0,0,1-.031,2.719A4.157,4.157,0,0,1,35.125-5.391ZM44.609-11.5h0a5.629,5.629,0,0,1,5-4.391h5.047L53.5-11.359H50.75a1.306,1.306,0,0,0-.859.328,1.583,1.583,0,0,0-.5.828L46.906,0H41.844l2.766-11.5ZM57.891,0h0l1.563-7.187L62.172,0h4.656L63.719-8.094l7-7.844H65.125l-4.75,5.328,2.734-10.484H57.984L52.766,0ZM82.938,0h0l1.094-4.531H75.047q-3.062-.109-2.156-3.687a4.254,4.254,0,0,1,1.516-2.25,4.772,4.772,0,0,1,3.031-1.047h3.234L80.344-10.2H76.859a2.445,2.445,0,0,0-1.953,1.156,3.669,3.669,0,0,0-.648,2.078q.023,1.031.789,1.141h9.281l1.391-5.687h0l.031-.156a3.5,3.5,0,0,0-.367-2.789q-.758-1.242-3.148-1.4H77.063a9.237,9.237,0,0,0-8.156,5.047q-1.859,4.125-.562,7.359A5.358,5.358,0,0,0,70.1-1.078a6.333,6.333,0,0,0,3.43,1.016ZM87.7-11.5h0a5.629,5.629,0,0,1,5-4.391H97.75l-1.156,4.531h-2.75a1.306,1.306,0,0,0-.859.328,1.583,1.583,0,0,0-.5.828L90,0H84.938L87.7-11.5Z"/>      
    </svg>
</div>

<br>

# Twiworker official repository

## This repository contains the official source code of the marketplace, Twiworker.

## Dependencies required

To use this repository, you must first ensure that
these dependencies below are already installed.
Make sure your server meets the following requirements:

- [Node.js](https://nodejs.org/)
- [yarn](https://yarnpkg.com)
- [maildev](https://danfarrelly.nyc/MailDev/)
- [Laravel Requirements](https://laravel.com/docs/7.x/installation#server-requirements)
- [make](http://www.gnu.org/software/make/) - (Already installed on Linux)
- [composer](https://getcomposer.org/download/)
- [redis-server](https://redis.io/download)
- [laravel-echo-server](https://github.com/tlaverdure/laravel-echo-server)
- Database (Mysql/Others)

## Options

laravel-echo-server must be installed globally with npm or yarn.
It's a NodeJs server for Laravel Echo broadcasting with Socket.io.

``` bash
$ npm install -g laravel-echo-server
```

After installing laravel-echo-server, initialize it by running the command below. 
Otherwise, use the laravel-echo-server.json.example file and rename it to laravel-echo-server.json.

``` bash
$ laravel-echo-server init
```

Then you can install redis-server with this command below for ubuntu.

``` bash
$ sudo apt-get install redis-server
```

For archlinux proceeds as follows.

``` bash
$ sudo pacman -S redis-server
```

## Usage

Clone the repository first.

``` bash
$ git clone https://github.com/Moussa-Ball/Twiworker.git
```

Copy the .env.example file to .env and configure the environment variables 
by adding also the values of these variables below.

```
FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
```

AWS S3 is also used in the project. You must specify the environment variables for Amazon S3.

```
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
AWS_BUCKET=
```

Do not forget to configure the variables for the database and the email.
After configuring the environment variables, proceed as follows in the terminal.

``` bash
$ composer install
$ yarn install
$ php artisan passport:install
$ php artisan migrate
$ make dev
```

:warning Do not make `make dev` on windows if you dont have installed `make` and `tmux`.
Use [cmder](https://cmder.net/) and launch on each tab the commands below.
Do the above steps without make dev then do what is mentioned below.

``` bash
$ php artisan serve
$ yarn hot or npm run hot
$ maildev --ip 127.0.0.1
$ laravel-echo-server start
$ redis-server
```

### To install the CRM ([Laravel Voyager](https://laravelvoyager.com/))

``` bash
$ php artisan voyager:install
```

### Add an administrator on the crm 
``` bash
$ php artisan voyager:admin your_existing_email
```

The email must be an email from a user already registering in database.

### Laravel Passport ([Laravel Passport](https://laravel.com/docs/5.8/passport))

``` bash
$ php artisan passport:keys
```

This command generates the encryption keys Passport needs in order to generate access token.
Otherwise the ajax part will not work with `Vue.js`.


To run the linter tests in php for the code format, run the command below.

``` bash
$ ./vendor/bin/phpcs
```

To fix code formatting errors, run the command below:

``` bash
$ ./vendor/bin/phpcbf
```

To launch the javascript eslint, run the command below:

``` bash
$ npm run lint
```

To launch unit tests for vue.js, run the command below:

``` bash
$ npm run test
```

If you have a 404 problem or 500 with apache. Refer to this link below to solve the problem.

### [404 Error | Laravel - Apache](https://stackoverflow.com/questions/22757749/laravel-redirects-to-a-route-but-then-apache-gives-404-error)

### [500 Error | Laravel - Apache](https://stackoverflow.com/questions/31543175/getting-a-500-internal-server-error-on-laravel-5-ubuntu-14-04)
