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
        // Chunk retrieve college data, insert it in bulk to elasticsearch
    }
}
