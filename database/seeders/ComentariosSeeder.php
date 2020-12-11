<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1=Comment::create(['user_id'=>1,'image_id' =>1, 'content'=>'esto es uncomentario']);
        $c2=Comment::create(['user_id'=>2,'image_id' =>1, 'content'=>'increible,que envidia!']);
        $c3=Comment::create(['user_id'=>2,'image_id' =>3, 'content'=>'quebueno!']);
    }
}
