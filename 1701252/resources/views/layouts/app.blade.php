<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title', '자동차정보')</title>
</head>
<body>
@section('header')
    <header class="w-2/3 mx-auto mt-16 text-right">
        <a href="{{route('boards.index')}}" class="text-xl">자동차 목록보기</a>
        @guest()
            <a href="{{route('auth.register.index')}}" class="text-xl">회원가입</a>
            <a href="{{route('auth.login.index')}}" class="text-xl">로그인</a>
        @endguest

        @auth()
            <span class="text-xl text-blue-500">{{auth() -> user() -> name}}</span>
            <form action="/auth/logout" method="post" class="inline-block">
                @csrf
                <a href="{{route('auth.logout')}}"><button class="text-xl">로그아웃</button></a>
            </form>
        @endauth
    </header>
@show

@section('section')
@show
</body>
</html>