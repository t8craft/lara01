<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Str;

class CronJob extends Command
{
  /**
       * The name and signature of the console command.
       *
       * @var string
       */
      protected $signature = 'CronJob:cronjob';

      /**
       * The console command description.
       *
       * @var string
       */
      protected $description = 'User Name Change Successfully';

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
          Post::where('id', 1)
              ->update(['title' => Str::random(40)]);

      	$this->info('User Name Change Successfully!');
      }
}
