<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Generous;

class GenerousTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Generous::truncate();

        Generous::create([
         'description'=>'Livro de ação'
        ]);
    }
}
// Rodar o seguinte comando para realizar a migration:
//php artisan db:seed --class=GenerousTableSeeder