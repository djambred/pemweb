# Deployment 
- Run docker-compose up -d --build wait for finish.
- Run docker exec -it uts_php bash
- Run cp .env.example .env file to copy example file to .env
- Then edit your .env file with DB credentials and other settings.
- Run composer install command
- Run php artisan migrate --seed command.
Notice: seed is important, because it will create the first admin user for you.
- Run php artisan key:generate command.
- If you have file/photo fields, run php artisan storage:link command.
- If you have error storage just Run command in exec container chmod 777 -R storage/*

# Default credentials
- Username: admin@admin.com
- Password: password

# All Execute
- git clone 
- cd folder
- docker-compose up -d --build
- docker exec -it uts_php bash
- composer install
- mv .env.example .env
- goto your editor code in folder src change config .env with you database config
- php artisan key:generate
- php artisan migrate --seed
- chmod 777 -R storage/*
- php artisan key:generate
- exit
- goto your browser and croscheck everything what you have done

### happy coding