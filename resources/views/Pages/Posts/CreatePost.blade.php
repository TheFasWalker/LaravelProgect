@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Создание Элемента</h1>
<form action="#" class=" w-full flex flex-col gap-5">
    <div class="grid grid-cols-3 gap-3">
        <x-ui.form.InputField
        title='title'
        name='name'
        plaseholder='plaseholder'
        value=''
        name='asd'
        type=''
    />
    <x-ui.form.InputField
        title='title'
        name='name'
        plaseholder='plaseholder'
        value=''
        name='asd'
        type=''
    />
    </div>
    <x-ui.form.TextField
        title='Поле ввода'
        name='fieldName'
        placeholder='placeholder'

    />

   


    <x-ui.button
        title="Создать элемент"
    />

</form>
        </div>


@endsection