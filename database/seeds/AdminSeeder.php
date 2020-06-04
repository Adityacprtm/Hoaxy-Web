<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aditya',
            'email' => 'aditya@adityacprtm.com',
            'birth_date' => date("1997-06-21"),
            'admin' => 1,
            'password' => Hash::make('password'),
            'approved_at' => now(),
            'email_verified_at' => now(),
        ]);
    }
}
