<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Post;
use Carbon\Carbon;

class DeleteOldPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteoldpost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        // $post = Post::whereDate('created_at', '<', Carbon::now()->subMinutes(10))->delete();
        $post = Post::oldest()->first()->delete();

        echo "delete post\n";

    }
}
