        @csrf


        <label for="title">Título:</label><br>
        <input type="text" name="title" id="title" value="{{ $post->title}}"><br><br>

        <label for="slug">Slug:</label><br>
        <input type="text" name="slug" id="slug" value="{{ $post->slug}}"><br><br>

        <label for="content">Contenido:</label><br>
        <textarea name="content" id="content" rows="5" value="{{ $post->content}}"></textarea><br><br>

        <label for="category_id">Categoría:</label><br>
        <select name="category_id" id="category_id" ">
            @foreach ($categories as $title => $id )
                <option  {{ $post->category_id == $id ? 'selected': '' }}  value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select><br><br>

            
        

        <label for="descripcion">Descripción:</label><br>
        <input type="text" name="descripcion" id="descripcion" value="{{ $post->descripcion}}"><br><br>

        <label for="posted">Publicado (sí/no):</label><br>
        <select name="posted" id="posted">
            <option   {{ $post->posted == 'yes' ? 'selected': '' }} value="yes">Sí</option>
            <option {{ $post->posted == 'not' ? 'selected': '' }} value="no">No</option>
        </select><br><br>

        <label for="image">Imagen:</label><br>
        <input type="file" name="image" id="image"><br><br>

        <button type="submit">send</button>
