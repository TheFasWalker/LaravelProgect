@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Редактирвоание Тэга </h1>
  <form action="{{route('tags.update', $tag->id)}}" class="w-full block" method="POST">
    @csrf
    @method('PATCH')
    <div class="p-12">
        <x-ui.form.InputField
            title="Название категории"
            name='title'
            type='text'
            plaseholder='Название категории'
            value='{{$tag->title}}'
        />
        <div class="w-full pt-5 grid grid-cols-2 gap-3">
            <x-ui.button 
                title='Сохранить изменения'
            />
            <x-ui.button-link 
                title="Назад"
                :link="route('tags')"
            />
        </div>
        
    </div>
  </form>


        </div>


@endsection