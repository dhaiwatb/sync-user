<?php

namespace App\Console\Commands;

use App\Models\SyncUser as SyncUserModel;
use App\Models\User;
use Illuminate\Console\Command;

class SyncUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Users with User Table!';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::get()->toArray();

        if(SyncUserModel::get()->count() > 0){

            SyncUserModel::truncate();
        }

        
        SyncUserModel::insert($users);
    }
}
