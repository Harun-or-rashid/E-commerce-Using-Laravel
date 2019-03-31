<?php

use Illuminate\Database\Seeder;

class catagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\catagory::class,10)->create();
    }
}
