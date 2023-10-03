<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:viewdbname';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to view db';

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
     * @return int
     */
    public function handle()
    {
        // Get the default database connection
        $defaultConnection = config('database.default');

        // Get the database name
        $databaseName = DB::connection($defaultConnection)->getDatabaseName();

        // Output the database name
        $this->info("The current database name is: $databaseName");
    }
}
