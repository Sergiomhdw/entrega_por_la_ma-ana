<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Image;

class imagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image1=Image::create(['user_id'=>1,'image_path' => 'https://ep01.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572453030_noticia_normal.jpg','description'=>'descripcion de Anoat']);
        $image2=Image::create(['user_id'=>1,'image_path' => 'https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1','description'=>'dscripcion de imagen Iego']);
        $image3=Image::create(['user_id'=>2,'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt84QlVS9_PyeDKJxgwh9KL_2gW0MxngEJ8g&usqp=CAU','description'=>'Minas de Kessel']);
        $image4=Image::create(['user_id'=>2,'image_path' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg','description'=>'Minafdas de Kessel']);
    }
}
