<ul>
    @foreach($genres as $genre)
        <li>
            <strong>EN:</strong> {{ $genre->genre_name }} - 
            <strong>VN:</strong> {{ $genre->genre_name_vn }}
        </li>
    @endforeach
</ul>