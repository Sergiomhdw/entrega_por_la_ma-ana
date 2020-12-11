<!-- IMPORTO LA BASE -->
@extends('layouts.base')
<!-- Sustituyo el YIELD 'titulo' -->
@section('titulo',"RED SOCIAL")
<!-- Sustituyo el YIELD 'content' -->
@section('content')
<div class="jumbotron">
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
<p> <strong> {{ Session::get('success') }} </strong> </p>
</div>
@endif
<h1> RED SOCIAL</h1>
<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As
you scroll, this navbar remains in its original position and moves with the rest of the page.</p>

<?

Route::get('/cosas', function () {
    $images = Image::all();
    foreach($images as $image){
    echo "<br><img widt='600' height='400' src=".$image->image_path.">";
    echo "<br>".$image->description;
    echo "<br>".$image->user->name." ".$image->user->surname;
    //Si la imagen tiene asociado algun comentario
    if(count($image->comments) >= 1){
        echo '<h4>Comentarios:</h4>';
    foreach($image->comments as $comment){
    echo "#>".$comment->user->name.' '.$comment->user->surname.":";
    echo $comment->content."<br>";
    }
    }
    echo "<br>@>LIKES: ". count($image->likes);
    echo "<hr>";
    }
});



?>
<img src="{{ asset('images/fruteria.jpg') }}" class="img-fluid" alt="fruteria">
</div>
<br>
@endsection