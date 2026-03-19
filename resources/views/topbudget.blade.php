<h1>Top 10 Movies có doanh thu cao nhất</h1>
@foreach($phim as $index => $row)
    <p>
    {{ $index + 1 }}.
    {{$row->movie_name}}<br>
    Ngày phát hành: {{$row->release_date}}<br>
    Doanh thu: {{$row->budget}}<br>
    </p>
@endforeach

