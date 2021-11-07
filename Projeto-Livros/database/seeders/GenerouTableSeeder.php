<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GenerouTable;

class GenerouTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GenerouTable::truncate();

        GenerouTable::create([
         'description'=>'Livro de ação'
        ]);
    }
}
// Rodar o seguinte comando para realizar a migration:
// php artisan db:seed --class=GenerouTableSeeder
// cria isa seeder igual essa php artisan make:seeder GenerouTableSeeder
