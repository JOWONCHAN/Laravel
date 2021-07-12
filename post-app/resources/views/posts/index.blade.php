<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .ans{
            background-color: blue;
            font-size: 1.5em;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <h1>게시글 리스트</h1>
        @auth
        <a href="/posts/create" class="btn btn-primary">게시글 작성</a>
        @endauth
        <ul class="list-group mt-3">
            @foreach ($posts as $post)
            <li class="list-group-item">
                <span>
                    <a href="{{ route('post.show', ['id'=>$post->id,  'page'=>$posts->currentPage()]) }}">
                    Title : {{ $post->title }}
                    </a>
                </span>
                {{-- <div>
                    content: {{ $post->content }}
                </div> --}}
                <span>written on {{ $post->created_at->diffForHumans() }}
                    {{ $post->viewers->count() }}
                    {{  $post->viewers->count() > 0 ? Str::plural('view', $post->viewers->count()) : 'view'}} {{-- plural()은 첫번째인자에 지정한 이름으로 단위를 잡아주고 복수형이면 자동으로 s를 붙여준다  --}}
                </span>
                <hr>
            </li>
            @endforeach
          </ul>
          <div class="mt-5">
              {{ $posts->links() }}
          </div>
    </div>
</body>
</html>