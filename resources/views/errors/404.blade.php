@extends('Layouts.mainLayout')

@section('content')



<section class="bg-white dark:bg-gray-900 h-[100vh] flex items-center justify-center">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">404</h1>
            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Что то пошло не по плану...</p>
            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Страница не существует или еще не существовало.</p>
            <a href="{{ route('main') }}" class=" bg-blue-700 flex items-center justify-center text-white  hover:bg-blue-500  focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Вернуться на главную страницу</a>
        </div>   
    </div>
</section>

@endsection