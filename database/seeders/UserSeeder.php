<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $david = User::create(array(
            'name' => 'David M. Lavoie',
            'email' => 'davidmlavoie@gmail.com',
            'password' => Hash::make('Wh3n1wa5!'),
        ));
    }
}
