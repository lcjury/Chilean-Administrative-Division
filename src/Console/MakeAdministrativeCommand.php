<?php

namespace Lcjury\Administrative\Console;

use Illuminate\Console\Command;

class MakeAdministrativeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:administrative';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold basic political administrative divisions like regions, provinces and communes';

    protected $migrations = [
        'create_regions_table.php',
        'create_provinces_table.php',
        'create_communes_table.php'
        ];
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
         $this->comment('Administrative scaffolding generated successfully!');
    }

    protected function exportMigrations()
    {
        foreach($this->migrations as $migration)
        {
            $path = base_path('database/migrations/'.$migration);
            $this->line('<info>Created migration:</info> '.$path);
            copy(__DIR__.'/stubs/make/migrations/'.$migration, $path);
        }
    }
}
