<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Sales', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Purchasing', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Warehouse', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Route', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
