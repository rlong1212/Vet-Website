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
            'username' => 'Ahmed_Adoudi',
            'password' => bcrypt('ahmedadoudipass'),
            ]);   
        DB::table('consultants')->insert([
            'username' => 'John_Smith',
            'password' => bcrypt('johnsmithpass'),
            ]);
        DB::table('consultants')->insert([
            'username' => 'Jeffrey_Hill',
            'password' => bcrypt('jeffreyhillpass'),
            ]);
        DB::table('consultants')->insert([
            'username' => 'Al_Coholic',
            'password' => bcrypt('alcololicpass'),
            ]);
        DB::table('consultants')->insert([
            'username' => 'Hugh_Jass',
            'password' => bcrypt('hughjasspass'),
            ]);
    }
}
