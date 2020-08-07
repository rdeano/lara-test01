<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adminuser')->insert(
        [
            [
                'username' => 'testuname',
                'password' => 'testpword',
                'name' => 'testname1',
                'isActive' => '1'
            ],
            [
                'username' => 'testuname2',
                'password' => 'testpword2',
                'name' => 'testname2',
                'isActive' => '1'
            ]
        ]
        );
    }
}
