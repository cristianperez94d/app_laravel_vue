<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'a@admin.com',
            'password' => password_hash('123456',PASSWORD_DEFAULT)
        ]);

        City::factory(50)->create();
        Client::factory(100)->create();
    }
}
