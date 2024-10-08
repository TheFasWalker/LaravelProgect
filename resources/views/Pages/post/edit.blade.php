@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Htlfrnbhdjfybt</h1>
<form action="{{route('post.update', $post->id)}}" method="POST" class=" w-full flex flex-col gap-5">
    @csrf
    @method('PATCH')
    <div class="grid grid-cols-3 gap-3">
        <x-ui.form.InputField
            title='Заголовок статьи'
            name='title'
            plaseholder='Заголовок'
            value='{{$post->title}}'
            type='text'
        />
        <x-ui.form.InputField
        title='Ссылка на фото'
        name='image'
        plaseholder='Ссылка на фото'
        value='{{$post->image}}'
        type='text'
        />
        <x-ui.form.checkbox
            title='Статус публикации'
            name='is_published'
            :checked='$post->is_published'
        />
    </div>
    <x-ui.form.TextField
        title='Контент статьи'
        name='content'
        placeholder='Контент'
        value='{{$post->content}}'

    />
    <x-ui.form.select
    :data='$categories'
    name="category_id"
    :activeId='$post->category->id'
/>
<x-ui.form.multiselect
title="Выбранные тэги"
name="tags[]"
:data="$tags"
:activeElems='$post->tags'
/>
    <div class="grid grid-cols-2 gap-3">
        <x-ui.button
            title="Сохранить"
        />
        <x-ui.button-link
            title='Назад'
            :link="route('data')"
        />

    </div>


</form>
        </div>


@endsection