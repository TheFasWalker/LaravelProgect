@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Создание Тэга</h1>
  <form action="{{route('tags.store')}}" class="w-full block" method="POST">
    @csrf
    <div class="p-12">
        <x-ui.form.InputField
            title="Название тэга"
            name='title'
            type='text'
            plaseholder='Название тэга'
            value=''
        />
        <div class="w-full pt-5 grid grid-cols-2 gap-3">
            <x-ui.button 
                title='Создать тэг'
            />
            <x-ui.button-link 
                title="Назад"
                link=""
            />
        </div>
        
    </div>
  </form>


        </div>


@endsection