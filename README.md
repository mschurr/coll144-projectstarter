coll144-projectstarter
===============

These are the starter files for the final project in COLL 144 Web Application Development.

To prepare your application using the virtual machine (in Terminal):

* `cd ~/Sites`
* `git clone https://github.com/mschurr/coll144-projectstarter.git`
* `mv coll144-projectstarter bookexchange`
* `cd bookexchange`
* `composer install`
* `sudo service mysql start`

You will want to create a new MySQL database for this project (you should name it `bookexchange`). You will need to import the provided schema in `project.sql` and `vendor/mschurr/framework/src/schema.sql`. You can do this graphically using the provided Navicat program.

* `mv config-template.php config.php`
* `subl .`

If you are not using the virtual machine, you may need to modify several configuration values in `config.php`. 

* `php -S local.dev:80 server.php`

You can now view your application online at `http://local.dev/` and make changes using Sublime.

All routes and the database structure have been provided for you. Furthermore, all of the files you will need (with the possible exception of those for helper classes) have been created for you; you simply need to modify them. You should review what you have been provided with before getting started.

This includes all of the files in:
	* `~/controllers/BookExchange`
	* `~/layouts/BookExchange`
	* `~/views/BookExchange`
	* `~/helpers/BookExchange`

You should place static files in the `~/static` folder.

To create your own helper classes, place them in `~/helpers`. You can import them by using `import('myfile')` to load the classes and functions from `~/helpers/myfile.php`.

Authentication and Sessions have been fully implemented for you; you only need to leverage existing APIs. You can refer the user to the login and logout pages by generating URLs to `BookExchange.Login` and `BookExchange.Logout`. Your Controllers will provide you with a unique integer that identifies the currently active user account: `$this->user->id`. The authentication service is integrated with Rice University's Network ID system; you can log in using your credentials (this will require an active internet connection).