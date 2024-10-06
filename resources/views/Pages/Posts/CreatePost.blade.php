@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Создание Элемента</h1>
<form action="#">
    <x-ui.formInputField
        title='title'
        name='name'
        plaseholder='plaseholder'
        value=''
        name='asd'
        type=''
    />
    <x-ui.formInputField
        title='title'
        name='name'
        plaseholder='plaseholder'
        value=''
        name='asd'
        type=''
    />

<x-ui.button
title="buttonText"
/>

</form>
        </div>


@endsection