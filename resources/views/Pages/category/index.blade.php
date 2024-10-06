@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">Доступные категриии</h1>
  @if(!count($categories))
  <div class=" w-[500px] pt-7 flex flex-col gap-10 text-center">
    <h2 class=" font-black text-3xl">Категорий не существует</h2>
    <x-ui.button-link
    title='Создать Категорию'
    :link="route('categories.create')"/></div>
  @else
  <div class="ml-auto py-5">
    <x-ui.button-link
    title='Создать Категорию'
    :link="route('categories.create')"/></div>
<div class="grid grid-cols-2 w-full gap-5 xl:grid-cols-3">
    @foreach ($categories as $category)

    @endforeach

</div>
  @endif

        </div>


@endsection