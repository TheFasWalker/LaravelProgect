@extends('Layouts.AdminLayout')
@section('content')
<div class="antialiased bg-gray-50 dark:bg-gray-900">
<x-admin.general.header/>

<x-admin.general.sidebar/>

    <main class="p-4 md:ml-64 h-auto pt-20">
      <h1 class="mx-auto text-center text-5xl font-bold pb-10">Общая информация</h1>
      <div class=" w-fit h-full flex flex-wrap-wrap gap-3 justify-around mx-auto">

        <x-admin.homePage.data-card
        title='Посты'
        :data="$elemsCount['postData']"
        />
        <x-admin.homePage.data-card
        title='Тэги'
        :data="$elemsCount['tagData']"
        />
        <x-admin.homePage.data-card
        title='Категории'
        :data="$elemsCount['categoryData']"
        />
        <x-admin.homePage.data-card
        title='Фирмы'
        :data="$elemsCount['firmsData']"
        />
        <x-admin.homePage.data-card
        title='Пользователей'
        :data="$elemsCount['usersData']"
        />



      </div>
    </main>

  </div>
  @endsection