<?php

namespace App\Console\Commands;

use App\College;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;

class IndexElasticSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Indexes everything from database to elasticsearch instance';

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
        College::select(['id', 'name', 'city', 'state'])->chunk(500, function ($colleges) {
            $data = [
                'index' => 'college',
                'type' => 'college',
                'body' => []
            ];

            /**
             * @var \App\College $college
             */
            foreach ($colleges as $college) {
                $data['body'][] = [
                    'index' => [
                        '_index' => 'college',
                        '_type' => 'college',
                        '_id' => $college->toArray()['id']
                    ]
                ];

                $data['body'][] = $college->toArray();
            }

            \Elasticsearch::bulk($data);
        });
    }
}
