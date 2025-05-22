@extends('dashboard.master')

@section('content')
<a href="{{ route('post.create') }}" class="btn btn-primary" target="blank">Crear nuevo post</a>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #ddd;
    }
 
    th {
        background-color: #4CAF50;
        color: white;
    }
    .btn-primary {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: 3cm;
        border-radius: 100px;
        cursor: pointer;
    }




</style>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Contenido</th>
                <th>Categoría</th>
                <th>Descripción</th>
         
                <th>Imagen</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->descripcion }}</td>
                    <td>options</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">edit</a>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">show</a>
                        <a href="{{ route('post.destroy', $post->id) }}" class="btn btn-primary">destroy</a>


                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <tr>
        <td class="text-center">
            <button>
            <a href="{{ $posts->links() }}" class="btn btn-primary">edit</a>
            </button>
        </td>
    </tr>
@endsection