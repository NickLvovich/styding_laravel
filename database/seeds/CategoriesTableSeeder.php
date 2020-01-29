<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Мобильные телефоны', 'code' => 'mobiles', 'description' => 'прекрасный выбор телефонов'],
            ['name' => 'Портативная техника', 'code' => 'portable', 'description' => 'портитивная техника'],
            ['name' => 'Бытовая техника', 'code' => 'appliance', 'description' => 'надежная бытовая техника']
        ]);
    }
}
