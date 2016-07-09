<?php

namespace Larafast\Laraking\Console\Commands;

use Illuminate\Console\Command;

class LaraKingMainCrudGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larakingcrud:all {modulename : The Name of the Module}
                        {--tablename=default : Database Table Name for given Module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create All Codes including Model, Migration, Controller and View for given Module Name';

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
        $this->info('Hi,I am Laravel King');
        //$this->error('Something went wrong!');
        //$this->line('Display this on the screen');

        $moduleName = $this->argument('modulename');

        $this->line('<info>Creating Module :</info> '. $moduleName );

        // Retrieve a specific option...
        $tableName = $this->option('tablename');

        $this->line('<info>Creating Table Migration :</info> '. $tableName );

        //$this->comment('Authentication scaffolding generated successfully!');

        //$this->line('<info>Created View:</info> '. $moduleName);

    }
}
