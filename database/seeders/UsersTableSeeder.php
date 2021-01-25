<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Shahadat Hossen',
                'email' => 'shobuj@bansberrysg.com',
                'email_verified_at' => now(),
                'role_id' => 1,
                'password' => Hash::make('sdkShobuj91'),
                'created_at' => now(),
                'created_by' => 'Super Admin',
                'updated_at' => now()
            ],
        ];
        DB::table('users')->insert($users);
    }
}
