# LATIHAN PERT 3


# 1. CREATE PROJECT 
- composer create-project laravel/laravel . "8.*"

# 2. CREATE MODEL SEEDER MIGRATION CONTROLLER FACTORY
- php artisan make:model NamaModelnya -mcfs --resource
- example = php artisan make:model Mahasiswa -mcfs --resource

# 3. CREATE VIEW
- php artisan make:command MakeViewCommand
- Pastekan codingan dibawah ini ke dalam folder app/Console/Commands/MakeViewCommand.php dan simpan

```
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $view = $this->argument('view');

        $path = $this->viewPath($view);

        $this->createDir($path);

        if (File::exists($path))
        {
            $this->error("File {$path} already exists!");
            return;
        }

        File::put($path, $path);

        $this->info("File {$path} created.");
    }

     /**
     * Get the view full path.
     *
     * @param string $view
     *
     * @return string
     */
    public function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';

        $path = "resources/views/{$view}";

        return $path;
    }

    /**
     * Create view directory if not exists.
     *
     * @param $path
     */
    public function createDir($path)
    {
        $dir = dirname($path);

        if (!file_exists($dir))
        {
            mkdir($dir, 0777, true);
        }
    }

}
```

- php artisan make:view NamaViewnya
- example = php artisan make:view Home


# 4. UNTUK MIGRATE DATABASE
- php artisan migrate

# 5. UNTUK ROLLBACK DATABASE
- php artisan migrate:rollback


##### REFERENSI BISA DIAMBIL 
```
https://shared.djambred.my.id/Laravel/
```