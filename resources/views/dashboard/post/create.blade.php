@extends('dashboard.master')

@section('content')
    <form action="{{ route('post.store') }}" method="post">

        @csrf


        <label for="title">Título:</label><br>
        <input type="text" name="title" id="title"><br><br>

        <label for="slug">Slug:</label><br>
        <input type="text" name="slug" id="slug"><br><br>

        <label for="content">Contenido:</label><br>
        <textarea name="content" id="content" rows="5"></textarea><br><br>

        <label for="category_id">Categoría:</label><br>
        <select name="category_id" id="category_id">
            @foreach ($categories as $title => $id )
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select><br><br>

            
        

        <label for="descripcion">Descripción:</label><br>
        <input type="text" name="descripcion" id="descripcion"><br><br>

        <label for="posted">Publicado (sí/no):</label><br>
        <select name="posted" id="posted">
            <option value="yes">Sí</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="image">Imagen:</label><br>
        <input type="file" name="image" id="image"><br><br>

        <button type="submit">send</button>


    </form>
@endsection