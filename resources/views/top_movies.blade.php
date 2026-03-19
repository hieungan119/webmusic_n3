<h1>Top 10 Movies</h1>
@foreach($movies as $index => $movie)
    <p>
        {{ $index + 1 }}. 
        {{ $movie->movie_name }} - 
        {{ $movie->release_date }} - 
        {{ $movie->vote_average }}
    </p>
@endforeach