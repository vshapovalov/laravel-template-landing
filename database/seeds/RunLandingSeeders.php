<?php

use Illuminate\Database\Seeder;

class RunLandingSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
	        LandingPagesTableSeeder::class,
	        LandingFormsTableSeeder::class,
	        LandingDataTableSeeder::class
        ]);
    }
}
