# Deployment (Execute in Container)
- docker exec -it uts_php bash
- Run cp .env.example .env file to copy example file to .env
- Then edit your .env file with DB credentials and other settings.
- Run composer install command
- Run php artisan migrate --seed command.
Notice: seed is important, because it will create the first admin user for you.
- Run php artisan key:generate command.
- If you have file/photo fields, run php artisan storage:link command.

# Default credentials
- Username: admin@admin.com
- Password: password