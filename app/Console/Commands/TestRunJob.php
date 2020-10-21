<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class TestRunJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'work:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Added user';

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
        User::where('updated_at', '<', date('Y-m-d'))
            ->get()
            ->each
            ->delete();
        \DB::table('users')->insert([
            'name' => 'Nguyen A' .  str_random('60'),
            'email' => str_random('5') . 'abc@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
        $this->info('Added user');
    }
}
