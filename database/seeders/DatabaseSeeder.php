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
        \App\Models\User::factory(10)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\Like::factory(100)->create();
        
        //$this->call(LikesSeeder::class);
        // $this->call(UsuariosSeeder::class);
        //$this->call(ImagenesSeeder::class);
        $this->call(ComentariosSeeder::class);
    }
}
