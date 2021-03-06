<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $this->call([ServiceCategorySeeder::class]);
        $this->command->info('service_categories table seeded!');

        $this->call([ServiceSeeder::class]);
        $this->command->info('services table seeded!');
    }
}
