<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;


    //Tabla que voy a estar modificando
    protected $table = 'images';
    protected $fillable=['id','user_id','image_id','description'];
    //Relacion One-To-Many - De uno a muchos:
    //Una imagen puede tener muchos comentarios
    public function comments(){
    return $this->hasMany('App\Models\Comment');
    }

    //Relación One-To-Many
    public function likes(){
    return $this->hasMany('App\Models\Like');
    }
    //Relaciónde Muchos a Uno
    public function user(){
    return $this->belongsTo('App\Models\User', 'user_id');
    }
    
}
