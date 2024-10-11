@extends('Layouts.AdminLayout')
@section('content')
<div class="antialiased bg-gray-50 dark:bg-gray-900">
<x-admin.general.header/>

<x-admin.general.sidebar/>

    <main class="p-4 md:ml-64 h-auto pt-20">
      <h1 class="mx-auto text-center text-5xl font-bold pb-10">Создание Категории</h1>


<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">

    <form>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название Категории</label>
                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="название Категории" required />
            </div>

        </div>
        <button type="submit" class=" mt-6  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Создать Категорию</button>
    </form>


    </section>
    @endsection