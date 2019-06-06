<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class ShowUrlsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:urls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all urls';

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
        $users = User::all();

        foreach ($users as $user) {
            $this->comment(route('user.show', $user->slug));
        }
    }
}
