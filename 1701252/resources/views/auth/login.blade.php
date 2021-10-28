@extends('layouts.app')

@section('section')
    <div class="w-2/3 mx-auto mt-16">
        <form action="/auth/login" method="post" class="w-1/2 mx-auto">
            @csrf
            <p>
                <label for="email" class="pr-2">이메일</label>
                <input type="email" id="email" name="email"
                       class="outline-none border border-blue-400 rounded-lg pl-1 w-1/3">
            </p>
            <p class="mt-4">
                <label for="password" class="pr-2">비밀번호</label>
                <input type="password" id="password" name="password"
                       class="outline-none border border-blue-400 rounded-lg pl-1 w-1/3">
            </p>
            <p class="mt-8">
                <input type="submit" value="로그인"
                       class="bg-blue-500 hover:bg-blue-700 px-4 py-1 text-lg text-white rounded-lg outline-none">
                <input type="button" class="bg-red-500 hover:bg-red-700 px-4 py-1 ml-4 text-lg text-white rounded-lg outline-none"
                       value="취소" onclick="window.location.href ='{{route('home')}}'">
            </p>
        </form>
    </div>
@stop