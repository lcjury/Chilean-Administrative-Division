<?php

namespace Administrative\Console;

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
        echo "haciendo cosas por command";
    }
}
