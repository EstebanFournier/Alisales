<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'usersio',
            'email'=>'usersio@test.com',
            'password'=>Hash::make('pwsiopwsio')
        ]);
        \App\Models\User::factory(10)->create();
        $this->call([
            CustomerSeeder::class,
        ]);
    }
}
