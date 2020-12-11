<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $administrador=\App\Models\User::create(['name' => "Rosario",'nick'=>'ADMIN','surname'=>'López','image_varchar'=>'/','email' =>'admin@rrss.es', 'password' => Hash::make('1234'), 'role' => 'admin']);
        $manager=\App\Models\User::create(['name' => "Teresa",'nick'=>'MANAGER','surname'=>'Gonzalez','image_varchar'=>'/','email' =>'manager@rrss.es', 'password' => Hash::make('1234'), 'role' => 'manager']);
        $user=\App\Models\User::create(['name' => "Carmen",'nick'=>'USUARIO','surname'=>'Perez','image_varchar'=>'/','email' =>'user@rrss.es', 'password' => Hash::make('1234'), 'role' => 'user']);
    }
}
