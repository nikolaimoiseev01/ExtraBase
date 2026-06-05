<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'user',
        ]);
        $role_id = DB::table('roles')->first()->id;
        \App\Models\User::firstOrCreate([
            'name' => 'Admin Name',
            'email' => config('app.admin.email'),
            'email_verified_at' => now(),
            'password' => Hash::make(config('app.admin.password'))
        ]);
        $user_id = DB::table('users')->first()->id;
        DB::table('model_has_roles')->insert([
            'role_id' => $role_id,
            'model_type' => 'User',
            'model_id' => $user_id
        ]);
    }
}
