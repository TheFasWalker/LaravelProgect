@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">PostsPage</h1>
  @if(!count($posts))
  <div class=" w-[500px] pt-7 flex flex-col gap-10 text-center">
    <h2 class=" font-black text-3xl">Постов несуществует</h2>
    <x-ui.button-link
    title='Создать Пост'
    link='/data/post/create'/></div>
  @else
  <div class="ml-auto py-5">
    <x-ui.button-link
    title='Создать Пост'
    link='/data/post/create'/></div>
<div class="grid grid-cols-2 w-full gap-5 xl:grid-cols-3">
    @foreach ($posts as $post)
    <x-postPreview
        :title='$post->title'
        :description='$post->content'
        :image='$post->image'
        :published='$post->is_published'
        :postId='$post->id'
        :category="$post->category ? $post->category->title : ''"/>
    @endforeach

</div>
  @endif

        </div>


@endsection