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
            'count'=>$elemsCount['postpublished'] + $elemsCount['postnotPublished'] 
          ],
          [
            'name'=>'Опубликовано',
            'count'=>$elemsCount['postpublished']
          ],
          [
            'name'=>'Неопубликовано',
            'count'=>$elemsCount['postnotPublished']
          ]
          ];
        // elemsCount
        $tagData=[
          [
            'name'=>'Всего Тэгов',
            'count'=>$elemsCount['tags']  
          ]
          ];
          $categoryData=[
            [
              'name'=>'Всего Категорий',
              'count'=>$elemsCount['categories']  
            ]
          ]
        ?>
        
        <x-admin.homePage.data-card
        title='Посты'
        :data='$postData'
        />
        <x-admin.homePage.data-card
        title='Тэги'
        :data='$tagData'
        />
        <x-admin.homePage.data-card
        title='Категории'
        :data='$categoryData'
        />



      </div>
    </main>

  </div>
  @endsection