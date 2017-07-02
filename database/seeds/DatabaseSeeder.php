<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PageSeeder::class);
         $this->call(PeopleSeeder::class);
         $this->call(PortfolioSeeder::class);
         $this->call(ServiceSeeder::class);
    }
}
