@extends('layouts.app')

@section('section')
    <section class="w-2/3 mx-auto">
        <div class="w-full text-2xl text-green-500 mt-8">자동차 등록</div>
        <form action="/boards" method="post" class="mt-8 w-full" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="name" class="text-xl">자동차명</label>
                <input type="text" id="name" name="name"
                       class="outline-none border border-blue-400 w-1/2 pl-1 py-1 rounded-lg">
            </p>
            <p>
                <label for="company" class="text-xl">제조회사</label>
                <input type="text" id="company" name="company"
                       class="outline-none border border-blue-400 w-1/2 pl-1 py-1 rounded-lg">
            </p>
            <p>
                <label for="year" class="text-xl">제조년도</label>
                <input type="text" id="year" name="year"
                       class="outline-none border border-blue-400 w-1/2 pl-1 py-1 rounded-lg">
            </p>

            <p>
                <label for="price" class="text-xl">가격</label>
                <input type="text" id="price" name="price"
                       class="outline-none border border-blue-400 w-1/2 pl-1 py-1 rounded-lg">
            </p>

            <p>
                <label for="model" class="text-xl">차종</label>
                <input type="text" id="model" name="model"
                       class="outline-none border border-blue-400 w-1/2 pl-1 py-1 rounded-lg">
            </p>

            <p>
                <label for="appearance" class="text-xl">외형</label>
                <input type="text" id="appearance" name="appearance"
                       class="outline-none border border-blue-400 w-1/2 pl-1 py-1 rounded-lg">
            </p>

            <p class="mt-2">
                <label for="picture">자동차 사진</label><br>
                <input type="file" id="picture" name="picture">
            </p>

            <p class="mt-8">
                <input type="submit" value="작성"
                       class="px-4 py-1 bg-green-500 hover:bg-green-700 text-lg text-white">
                <input type="button" value="취소" onclick="history.back()"
                       class="px-4 py-1 ml-6 bg-red-500 hover:bg-red-700 text-lg text-white">
            </p>
        </form>
    </section>
@stop