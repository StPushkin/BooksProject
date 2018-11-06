<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'firstname'=> 'Herbert',
            'lastname'=> 'Schildt'
        ]);
        DB::table('authors')->insert([
            'firstname'=> 'Greg',
            'lastname'=> 'Lim'
        ]);
        DB::table('authors')->insert([
            'firstname'=> 'Luke',
            'lastname'=> 'Welling'
        ]);
        DB::table('authors')->insert([
            'firstname'=> 'Laura',
            'lastname'=> 'Thomson'
        ]);
    }
}
