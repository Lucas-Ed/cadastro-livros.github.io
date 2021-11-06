<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;


class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::truncate();

        Author::create([
         'nome'=>'Robert Solow',
        ]);//
    }
}
// Rodar o seguinte comando para realizar a migration:
//php artisan db:seed --class=AuthorsTableSeeder