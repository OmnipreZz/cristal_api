<?php

use Illuminate\Database\Seeder;

class MenucategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Menucategory::class, 9)->create();
    }
}
