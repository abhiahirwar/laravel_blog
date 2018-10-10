<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        $this->call(PageSeeder::class);
        $this->call(PageSectionSeeder::class);
        Model::reguard();
    }
}
