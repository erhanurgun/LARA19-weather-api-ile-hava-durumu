<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelperCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:helper {name} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new helper';

    protected function makeDirectory($path): void
    {
        if (!is_dir(dirname($path))) {
            @mkdir(dirname($path), 0777, true);
        }
    }

    protected function buildClass($name): string
    {
        return <<<PHP
        <?php

        declare(strict_types=1);

        namespace App\Helpers;

        class {$name} extends BaseHelper
        {
            //
        }
        PHP;
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->argument('name');
        $force = $this->option('force');
        $path = app_path("Helpers/{$name}.php");

        if (file_exists($path) && !$force) {
            $this->error("Helper already exists!");
            return;
        }

        $this->makeDirectory($path);
        file_put_contents($path, $this->buildClass($name));
        $this->info("Helper [{$path}] created successfully.");
    }
}
