<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For cleaning and add Admin & user';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'RaheelAnwaar';
        $user->email = 'raheelanwaar0316@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'Hamza';
        $user->email = 'hamza@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();

    }
}
