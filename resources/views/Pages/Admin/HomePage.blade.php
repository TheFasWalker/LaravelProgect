@extends('Layouts.AdminLayout')
@section('content')
<div class="antialiased bg-gray-50 dark:bg-gray-900">
<x-admin.general.header/>

<x-admin.general.sidebar/>

    <main class="p-4 md:ml-64 h-auto pt-20">
      <h1 class="mx-auto text-center text-5xl font-bold pb-10">Общая информация</h1>
      <div class=" w-fit h-full flex  gap-3 justify-around mx-auto">
        <?php
        $postData=[
          [
            'name'=>'Всего постов',
            'count'=>'600'
          ],
          [
            'name'=>'Опубликовано',
            'count'=>'25'
          ],
          [
            'name'=>'Неопубликовано',
            'count'=>'100'
          ]
        ]
        ?>
        <x-admin.homePage.data-card
        title='Посты'
        :data='$postData'
        />
        <x-admin.homePage.data-card
        title='Тэги'
        :data='$postData'
        />
        <x-admin.homePage.data-card
        title='Категории'
        :data='$postData'
        />



      </div>
    </main>

  </div>
  @endsection