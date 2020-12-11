@extends('layouts.app')

@section('content')
@if(Session::has('success'))
        <div class="alert alert-success" role="alert"><p> <strong> {{ Session::get('success') }} </strong> </p></div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert"><p> <strong> {{ Session::get('error') }} </strong> </p></div>
        @endif
@foreach($images as $image)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
            <div class="card">
            
                <div class="card-header"><?php echo "<img src=".$image->user->image_varchar."> ".$image->user->name ?></div>
                <div class="card-body">
                
                <?php echo "<br><img src=".$image->image_path.">"; ?>
                
    <hr>
        @can('isAdmin')
            @include('users.user')
            @include('users.admin')
        @elsecan('isManager')
            @include('users.manager')
        @else
            @include('users.user')
        @endcan
        <br>
            <b>Descripcion:</b><?php echo $image->description."<br>"?>
            <b>Comentarios:</b> <form action="{{route('comments.store',['image'=>$image, 'user'=>Auth::id()])}}" method="POST">
                @csrf
                @method('POST')
            <tr>
            <td>
            <label for="comentario">Comentario:</label>
            <textarea name="comentario" id="comentario" cols="90" rows="3"></textarea>
            <button class="btn btn-info" type="submit" value="Submit"> <i>COMENTAR</i></button> 
            </td>
            </form>@foreach($image->comments as $comment)
            
            <?php echo "<br><b>".$comment->user->name.":</b>";
                echo $comment->content ;?>
                @endforeach
                <br>
                
            <?php echo "<br>" ;?>
            <b>Likes:</b>{{count($image->likes)}}
            

</div>
</div>
<br><br><br>
</div>
</div>
</div>

@endforeach
@endsection