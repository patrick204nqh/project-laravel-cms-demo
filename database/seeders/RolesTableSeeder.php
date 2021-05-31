<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        \App\Models\Role::create(['alias'=>'Manager', 'type'=>'MANAGER', 'description'=>'Manager of application']);
        \App\Models\Role::create(['alias'=>'Adminitrator', 'type'=>'ADMIN', 'description'=>'Admin of application']);
        \App\Models\Role::create(['alias'=>'Default', 'type'=>'DEFAULT', 'description'=>'Default permission for all users']);
    }
}
