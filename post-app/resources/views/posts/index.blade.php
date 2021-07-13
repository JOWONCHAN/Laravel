<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('목록 리스트') }}
        </h2>
        
    </x-slot>

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
</x-app-layout>