Create new Project = composer create-project --prefer-dist laravel/laravel project_name

!------------------Change Hosts instruction---------------------!
->Run notepad as an admin
->Open file in Xampp/Apache/Conf/extra/vhosts(all files)
->add this,
<VirtualHost *:80>
   DocumentRoot "C:/xampp/htdocs/login/public"
    ServerName login.dev
</VirtualHost>


Next Step:
->open from notepad , system32/drivers/etc/hosts(all files)
->add this, 127.0.0.1 	login.test
!-------------------------Hosts Configuration is complete---------------------!


!---------Connecting to Database--------------!
In Laravel one have to create the DB manually and then we can call migration to copy all tables over to the DB

After creating the DB manually, follow the below steps,
->Go to .env and change DB params
->Run "php artisan migrate", This will copy over the tables to the DB
->If error for string occurs, go to AppServiceProvider.php and in boot function paste this
Schema::defaultStringLength(191);
->php artisan make:auth


!------------Installing node js--------------!
run -> npm install -global gulp
npm cache clean --force
npm install npm@latest -g



