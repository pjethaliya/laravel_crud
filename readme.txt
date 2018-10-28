!-----------------------Create new project using composer command-------------------!
	composer create-project --prefer-dist laravel/laravel name_of_project
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
!-----------------------Manually create the Database not the tables-----------------!	
		->Edit the .env file to read the Database credentials
		
!-------------Create the migration file--------------------!
			Run: php artisan migrate
			->This will create users tables
			
			->Additional steps - Extend the fillable property of User model
			
!-----------------------------Make the AdminUsersController--------------------!
				->php artisan make:controller --resource
				->--resource flag will create CRUD automatically in controller
!--------To make a login automatically--------------------!		
				->php artisan make:auth					
				
				
		
	
	
	
	
	
	
	
