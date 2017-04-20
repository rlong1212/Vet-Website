<?php

use Illuminate\Database\Seeder;

class ConsultantLoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultants')->insert([
        	'username' => 'con12',
        	'password' => bcrypt('password'),
        	]);
    }
}
