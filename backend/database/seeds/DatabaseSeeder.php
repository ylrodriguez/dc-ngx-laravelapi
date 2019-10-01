<?php

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
        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(ImagesTableSeeder::class);
        // $this->call(CartsTableSeeder::class);
        // $this->call(ComputersProducts::class);
        // $this->call(ElectronicsProducts::class);
        // $this->call(CamerasProducts::class);
        // $this->call(VideoGamesProducts::class);
        $this->call(HeadphonesProducts::class);
    }
}
