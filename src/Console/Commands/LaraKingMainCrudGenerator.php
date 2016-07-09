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
    protected $signature = 'larakingcrud:all {modulename}';

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
        //
    }
}
