<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           =>'uom carrom',
            'email'          => 'uomcarrom@gmail.com',
            'password'       => Hash::make('password'),
            'remember_token' => str_random(10),
        ]);
    }
}
