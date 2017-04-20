<?php

use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
        	'name' => 'jess',
        	'type' => 'gorilla',
        	'age' => '14',
        	]);
        DB::table('animals')->insert([
        	'name' => 'bob',
        	'type' => 'lion',
        	'age' => '5',
        	]);
    }
}
