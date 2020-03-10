<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteMapsElasticSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:prune';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prunes elasticsearch engine completely.';

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
        if (! $this->confirm('Are you sure you want to prune elasticsearch?')) {
            $this->info('Stopped, did not prune elasticsearch. Phew!');
            return;
        }

        \Elasticsearch::indices()->delete(['index' => strtolower(env('APP_NAME')) . '_event']);
        $this->info('Deleted event index successfully');

        \Elasticsearch::indices()->delete(['index' => strtolower(env('APP_NAME')) . '_college']);
        $this->info('Deleted college index successfully');
    }
}
