<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (isset($articles) && count($articles) > 0)
        <ul>
            {{-- iterasi melalui setiap artikel berita yang ada --}}
            @foreach ($articles as $article)
                <li class="mb-4">
                    {{-- judul artikel yang dapat di klik --}}
                    <h3 class="text-xl font-semibold">
                        <a href="{{ $article['url'] }}" target="_blank" class="text-blue-500 hover:underline">
                            {{ $article['title'] }}
                        </a>
                    </h3>
                    {{-- deskripsi singkat --}}
                    <p>{{ $article['description'] }}</p>
                </li>
            @endforeach
        </ul>
        @else
        {{-- pesan jika tidak ada bertita yang tidak ditemuakn --}}
        <p>No news found.</p>
    @endif
</body>
</html>