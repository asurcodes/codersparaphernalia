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
        $this->call(CategoriesTableSeeder::class);
        // Products
        $this->call(StickersSeeder::class);
        $this->call(PostersSeeder::class);
        $this->call(PeriferalsSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(GadgetsSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(MiscelaneousSeeder::class);
        $this->call(BagsSeeder::class);
        $this->call(MenApparelSeeder::class);
        $this->call(WomenApparelSeeder::class);
        $this->call(BabiesApparelSeeder::class);
        $this->call(PhoneCasesSeeder::class);
        $this->call(LaptopSleevesSeeder::class);
        $this->call(MugsSeeder::class);
        $this->call(ComputersSeeder::class);
    }
}
