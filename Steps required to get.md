# Steps required to get your application up and running
$ sudo apt install composer php php-sqlite3 sqlite3

setting php.ini timezone extension langage

$ rm composer.lock
$ composer update
$ php artisan serve --port=8005
