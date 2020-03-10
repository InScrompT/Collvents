<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BootstrapElasticSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize elasticsearch with indices and their mappings.';

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
        $this->line('Creating index into elasticsearch engine');

        \Elasticsearch::indices()->create([
            'index' => strtolower(env('APP_NAME')) . '_college',
            'body' => [
                'mappings' => [
                    'properties' => [
                        'id' => ['type' => 'integer'],
                        'name' => ['type' => 'text'],
                        'city' => ['type' => 'text'],
                        'state' => ['type' => 'text'],
                    ]
                ]
            ]
        ]);
        $this->info('Mapped college structure to elasticsearch engine');

        \Elasticsearch::indices()->create([
            'index' => strtolower(env('APP_NAME')) . '_event',
            'body' => [
                'mappings' => [
                    'properties' => [
                        'id' => ['type' => 'integer'],
                        'name' => ['type' => 'text'],
                    ]
                ]
            ]
        ]);
        $this->info('Mapped event structure to elasticsearch engine');
    }
}
