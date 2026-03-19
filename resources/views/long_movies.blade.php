<h1> 10 bộ phim có thời lượng (runtime) lớn hơn 120 phút </h1>

@foreach($movies as $movie)
    <p>
        {{ $loop->iteration }}.
        {{ $movie->movie_name }} - 
        {{ $movie->release_date }} - 
        {{ $movie->runtime }} minutes
    </p>
@endforeach