<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Image;
use App\Models\Like;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l1=Like::create(['user_id'=>1,'image_id'=>1]);
        $l2=Like::create(['user_id'=>2,'image_id'=>1]);
        $l3=Like::create(['user_id'=>2,'image_id'=>2]);
        $l4=Like::create(['user_id'=>1,'image_id'=>2]);

    }
}
