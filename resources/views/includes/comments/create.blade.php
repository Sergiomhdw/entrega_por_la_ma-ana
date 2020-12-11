@include('layouts.app')

<div class="container">
<form action="{{route('comments.store',['image'=>$image, 'user'=>Auth::id()])}}" method="POST">
@csrf
@method('POST')
<table class='table table-dark'>
<tr>
<td>
<label for="comentario">Comentario:</label>
<textarea name="comentario" id="comentario" cols="100" rows="3"></textarea>
<button type="submit" value="Submit">Modificar</button> 
</td>
</form>
</div>