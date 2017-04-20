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
        	'name' => 'Jess',
        	'type' => 'gorilla',
        	'age' => '14',
        	]);
        DB::table('animals')->insert([
        	'name' => 'Scar',
        	'type' => 'lion',
        	'age' => '13',
        	]);
        DB::table('animals')->insert([
            'name' => 'Clucky',
            'type' => 'chicken',
            'age' => '1',
            ]);
        DB::table('animals')->insert([
            'name' => 'Fluffy',
            'type' => 'crocodile',
            'age' => '4',
            ]);
        DB::table('animals')->insert([
            'name' => 'Simba',
            'type' => 'lion',
            'age' => '9',
            ]);
    }
}
