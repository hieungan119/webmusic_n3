<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phim của Canada</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        div { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>Danh sách phim của Canada</h1>

    @if($phim->isEmpty())
        <p>Không có phim nào từ Canada trong database.</p>
    @else
        @foreach($phim as $p)
            <div>
                <p><strong>Tên phim:</strong> {{ $p->movie_name }}</p>
                <p><strong>Ngày phát hành:</strong> {{ $p->release_date }}</p>
                <p><strong>Thời lượng:</strong> {{ $p->runtime }} phút</p>
            </div>
        @endforeach
    @endif
</body>
</html>