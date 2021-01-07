
# To Do List  
  
This project is simple CRUD actions on Symfony 4.4 with running on Docker, so after cloning it, you should run this command to start server :  
  
	 docker-compose up -d  

In order to import database, you should run these commands :  
  
	 docker-compose exec app bin/console doctrine:database:create  
	 docker-compose exec app bin/console doctrine:migrations:migrate  
	 
Now, you can access the project via this link: [http://localhost:8080]( http://localhost:8080 )