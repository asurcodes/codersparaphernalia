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
        $this->call(AccessoriesSeeder::class);
        $this->call(PeriferalsSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(GadgetsSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(MiscelaneousSeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(MenApparelSeeder::class);
        $this->call(WomenApparelSeeder::class);
        $this->call(PhoneCasesSeeder::class);
        $this->call(LaptopCasesSeeder::class);
        $this->call(MugsSeeder::class);
        $this->call(ComputersSeeder::class);
    }
}
