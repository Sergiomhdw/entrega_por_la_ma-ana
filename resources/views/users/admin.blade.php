<form action="{{ route('image.destroy', $image->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger">Borrar</i>
</button>
</form>

<a href="{{ route('image.edit', $image->id) }}">
    <i class="fas fa-edit  fa-lg ">Editar</i></a>


