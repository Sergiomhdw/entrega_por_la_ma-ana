@include('layouts.app')

<div class="container">
<form action="{{route('image.update', $image)}}" method="POST">
@csrf
@method('PUT')
<table class='table table-dark'>
<img src="{{$image->image_path}}" alt="">
<input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}"><br><br>
<tr>
<td>
<label for="fname">Enlace:</label>
</td>
<td>
<input type="text" id="image_path" name="image_path" disabled="true" value="{{$image->image_path}}"><br><br>
</td>
<tr>
<td>
<label for="lname">Descripción:</label>
</td>
<td>
<textarea id="description" name="description" cols="50" rows="10">{{$image->description}}</textarea>
</td>
</tr>
<td>
<button type="submit" value="Submit">Modificar</button> 
</td>
</form>
</div>