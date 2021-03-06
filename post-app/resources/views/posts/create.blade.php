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
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
</head>
<body>

    <div class="container">

        <form action="/posts/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>

                @error('content')
                    <div>{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="file">File</label>
                <input type="file" id="file" name="imageFile">
                
                @error('imageFile')
                    <div>{{ $message }}</div>
                @enderror
                
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
    
</body>
</html>