<?php

namespace Aspiration\Etlprocess\Console\Commands;
use Illuminate\Console\Command;

class FooBar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foobar:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync data from other system';

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
        echo "doing something here\n";
        //EmpDataSync::dispatch()->allOnConnection('redis')->allOnQueue('podcasts');;
        echo "done!!\n";
    }
}
