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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="mt-3">
            <a href="{{ route('posts.index', ['page'=>$page]) }}">목록</a>
        </div>
        
            <div class="form-group">
                <label for="title" class="form-label">title</label>
                <input type="text" readonly class="form-control" id="title" name="title" value="{{ $post->title }}">
                
            </div>

            <div class="form-group">
                <label for="content" class="form-label">Content</label>
                <div id="content" name="content" readonly>{!! $post->content !!}</div>

            </div>

            <div class="form-group">
                <label for="imageFile">Post Image</label>
                <div class="my-6 mx-3 w-3/12">
                    {{-- <img src="/storage/images/{{ $post->image ?? 'no_iamge_available.png'}}" width="20%" /> --}}
                    <img src="{{ $post->imagePath()}}" width="20%" />
                </div>
            </div>

            <div class="form-group mt-2">
                <label>등록일</label>
                <input type="text" readonly class="from-control" value="{{ $post->created_at->diffForHumans() }}">
            </div>
            
            <div class="form-group mt-2">
                <label>수정일</label>
                <input type="text" readonly class="from-control" value="{{ $post->updated_at }}">
            </div>

            <div class="form-group mt-2">
                <label>작성자</label>
                <input type="text" readonly class="from-control" value="{{ $post->user->name }}">
            </div>

            @auth
                {{-- @if(auth()->user()->id == $post->user_id) --}}
                @can('update', $post)
                    <div class="flex">
                        <a class="btn btn-warning" href="{{ route('post.edit', ['post'=>$post->id, 'page'=>$page]) }}">수정</a>
                        <form action="{{ route('post.delete', ['id'=>$post->id, 'page'=>$page]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">삭제</button>
                        </form>
                        
                    </div>
                {{-- @endif --}}
                @endcan
            @endauth
    </div>
    
</body>
</html>
    
</body>
</html>