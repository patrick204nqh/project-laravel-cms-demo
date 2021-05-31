<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        \App\Models\User::create(['name'=>'patrick', 'email'=>'test@patrick.co.uk', 'password'=>Hash::make('patrick')]);
        \App\Models\User::create(['name'=>'james', 'email'=>'test@james.co.uk', 'password'=>Hash::make('patrick')]);
        \App\Models\User::create(['name'=>'kevin', 'email'=>'test@kevin.co.uk', 'password'=>Hash::make('patrick')]);
    }
}
