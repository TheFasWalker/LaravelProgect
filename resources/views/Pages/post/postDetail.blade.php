@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <div class="flex flex-row justify-between w-full">
    <h1 class=" text-2xl text-bold">Детали поста {{$post->title}}</h1>
    @if($post->is_published == true)
        <span class="p-3 bg-green-600 text-white rounded-xl">Опубликован</span>
    
    @else
        <span class="p-3 bg-red-400 text-white rounded-xl">Не опубликован!</span>
    
    @endif
  </div>
   <div class="w-full flex flex-col gap-3">

    <div class="flex flex-row gap-2 w-full">
        <span class=" font-bold">Заголовок:</span>
        <span>{{$post->title}}</span>
    </div>
    <div class="flex flex-row gap-2 w-full">
        <span class=" font-bold">Содержимое поста:</span>
        <p>{{$post->content}}</p>
    </div>
    <div class="flex flex-row gap-2 w-full"><span class=" font-bold">категория:</span>
    <span >{{$post->category->title}}</span></div>
   </div>
    <div class="w-full grid grid-cols-3 gap-3">
        <x-ui.button-link
            title="Назад к постам"
            :link="route('data')"
        />
        <x-ui.button-link
        title="редактировать пост"
        :link="route('post.edit', $post->id)"
        />
        <x-ui.deleteElement
        :route="route('post.delete', $post->id)"/>
    </div>
</div>


@endsection