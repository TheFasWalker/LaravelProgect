@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Доступные Тэги</h1>
  @if(!count($tags))
  <div class=" w-[500px] pt-7 flex flex-col gap-10 text-center">
    <h2 class=" font-black text-3xl">Тэгов не существует</h2>
    <x-ui.button-link
    title='Создать Тэг'
    :link="route('tags.create')"/></div>
  @else
    <div class="ml-auto py-5">
        <x-ui.button-link
            title='Создать Тэг'
            :link="route('tags.create')"/>
    </div>
    <div class="grid w-full  grid-rows-[50px_1fr]  overflow-x-auto">
        <div class="grid grid-cols-[1fr_500px] w-full shadow-sm p-1">
            <span class=" flex items-center ">Название категории</span>
            <span class=" flex items-center justify-center">Действия</span>

        </div>
        @foreach ($tags as $tag)
        <div class="grid grid-cols-[1fr_500px] w-full shadow-sm p-1">
            <span>{{$tag->title}}</span>
            <div class="grid grid-cols-2 gap-2">
                <x-ui.button-link 
                title="edit"
                :link="route('tags.edit', $tag->id)"/>
                <x-ui.deleteElement
                :route="route('tags.delete', $tag->id)"/>
            </div>
        </div>
        @endforeach 

    </div>
  @endif

        </div>


@endsection