<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles =
    		[
    			['name' => 'Super Admin', 'created_at' => Carbon::now()],
    			['name' => 'Admin', 'created_at' => Carbon::now()],
	        	['name' => 'Data Collector', 'created_at' => Carbon::now()],
        	];
        DB::table('roles')->insert($roles);
    }
}
