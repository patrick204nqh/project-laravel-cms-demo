<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        \App\Models\Permission::create(['user_id'=>1, 'role_id'=>1]);
        \App\Models\Permission::create(['user_id'=>2, 'role_id'=>2]);
        \App\Models\Permission::create(['user_id'=>3, 'role_id'=>3]);
    }
}
