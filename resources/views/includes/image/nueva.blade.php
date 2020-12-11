@include('layouts.app1')

<body>
    

<form action="{{route('image.store', ['usuario'=>Auth::user()->id])}}" method="POST">
@csrf
@method('POST')

<tr>
<td>
<?php echo($user) ?>
</td>
<br>
<br><br>
<td><label for="url">Introduce la URL</label>
<textarea name="url" id="url" cols="100" rows="2"></textarea>
</td>
<br>
<label for="contain">Introduce una descripcion de la foto</label>
<textarea name="contain" id="contain" cols="100" rows="2"></textarea>


<br><br><br>
<button type="submit" class="btn btn-info" >Subir nuva fotografia</button>

</form>
</body>
