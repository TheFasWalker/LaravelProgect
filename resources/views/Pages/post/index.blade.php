@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">PostsPage</h1>
  <div class="ml-auto py-5">
    <x-ui.button-link
    title='Создать Пост'
    link='/data/post/create'/></div>
<div class="grid grid-cols-2 w-full gap-5 xl:grid-cols-3">
    @foreach ($posts as $post)
    <x-postPreview
        :title='$post->title'
        :description='$post->content'/>
    @endforeach

</div>
        </div>


@endsection