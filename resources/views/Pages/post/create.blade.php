@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Создание Элемента</h1>
<form action="{{route('post.store')}}" method="POST" class=" w-full flex flex-col gap-5">
    @csrf
    <div class="grid grid-cols-3 gap-3">
        <x-ui.form.InputField
            title='Заголовок статьи'
            name='title'
            plaseholder='Заголовок'
            value=''
            type='text'
        />
        <x-ui.form.InputField
        title='Ссылка на фото'
        name='image'
        plaseholder='Ссылка на фото'
        value=''
        type='text'
        />
        <x-ui.form.checkbox
            title='Статус публикации'
            name='is_published'
            value=''
        />
    </div>
    <x-ui.form.TextField
        title='Контент статьи'
        name='content'
        placeholder='Контент'
        value=''

    />
        <x-ui.form.select
            :data='$categories'
            name="category_id"
            activeId='0'
        />
        <x-ui.form.multiselect
            title="Выберите тэги"
            name="tags"
            :data="$tags"
        />

    <div class="grid grid-cols-2 gap-3">
        <x-ui.button
            title="Создать элемент"
        />
        <x-ui.button-link
            title='Назад'
            :link="route('data')"
        />
    </div>


</form>
        </div>


@endsection